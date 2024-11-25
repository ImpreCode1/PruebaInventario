<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Estado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ActivoController extends Controller
{
    // fin ID
    public function index()
    {
        $activo = Activo::all();
        $categoria = Categoria::all();

        return view('inicioadmin', compact('activo', 'categoria'));
    }

    public function filtercategory()
    {
        $categoria = Categoria::all();
        return view('crearactivo', compact('categoria'));
    }

    public function register(Request $request)
    {
        // Validar los datos del request aquí si es necesario

        $Activo = new Activo();

        // Manejar la subida de imagen
        if ($request->hasFile('fotourl')) {
            $archivo = $request->file('fotourl');
            $filename = time() . '_' . $archivo->getClientOriginalName();
            $archivo->move(public_path('Activos'), $filename);
            $Activo->fotourl = 'Activos/' . $filename;
        } else {
            // Asignar imagen por defecto
            $Activo->fotourl = 'uploads/ejemplo.png';
        }

        // Asignar el resto de campos
        $Activo->ID = $request->id;
        $Activo->nombre = $request->nombre;
        $Activo->descripcion = $request->descripcion;
        $Activo->codigo = $request->codigo;
        $Activo->categoria = $request->categoria;
        $Activo->estado = $request->estado;
        $Activo->lugar = $request->lugar;
        $Activo->fechaingreso = $request->fechaingreso;
        $Activo->facturacompra = $request->facturacompra;
        $Activo->fechasalida = $request->fechasalida;
        $Activo->fechamantenimiento = $request->fechamantenimiento;
        $Activo->costomantenimiento = $request->costomantenimiento;
        $Activo->actadestruccion =$request->actadestruccion;
        // Guardar el activo
        $Activo->save();
        return redirect()->route('inicioadmin');
    }

    public function verInfoActivo(Request $request, $id)
    {
        $activo = Activo::findOrFail($id);
        return view('informacionactiv', compact('activo'));
    }

    public function delete(Activo $activo)
    {
        $activo->delete();
        return redirect()->route('inicioadmin');
    }

    public function update(Request $request)
    {
        $activo = Activo::findOrFail($request->id);

        if ($request->hasFile('fotourl')) {
            if ($activo->fotourl != 'uploads/ejemplo.png') {
                Storage::delete(str_replace('uploads/', '', $activo->fotourl));
            }
            $archivo = $request->file('fotourl');
            $filename = time() . '_' . $archivo->getClientOriginalName();
            $archivo->move(public_path('uploads'), $filename);
            $activo->fotourl = 'uploads/' . $filename;
        }


        $activo->nombre = $request->nombre;
        $activo->descripcion = $request->descripcion;
        $activo->codigo = $request->codigo;
        $activo->lugar = $request->lugar;
        $activo->fechaingreso = $request->fechaingreso;
        $activo->facturacompra = $request->facturacompra;
        $activo->fechasalida = $request->fechasalida;
       $activo->actadestruccion =$request->actadestruccion;
        // $activo->estado = $request->estado;
         if ($request->estado != "seleccione estado") {
            $activo->estado = $request->estado;
         }



        $activo->save();

        return redirect()->route('inicioadmin');
    }
}
