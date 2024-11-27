<?php
namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Estado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Models\delete;
class ActivoController extends Controller
{
    public function index()



    {
         // Solo cargar datos para vista 'inicioadmin'
        $activo = Activo::all();
        $categoria = Categoria::all();

        return view('inicioadmin', compact('activo', 'categoria'));
    }

    public function getActivos()
    {
        // Obtener datos para DataTable en 'inicioadmin'
        $activos = Activo::select(['sap','nombre', 'descripcion', 'codigo', 'categoria', 'estado', 'lugar', 'fechaingreso', 'facturacompra', 'fechasalida', 'fechamantenimiento', 'fechadestruccion', 'costomantenimiento', 'actadestruccion','fotourl']);

        return DataTables::of($activos)->make(true);
    }

    public function indexDestruidos()
    {
        // Cargar vista 'activosdestruidos'
        return view('activosdestruidos');
    }

    public function getActivosDestruidos()
    {
        // Obtener datos para DataTable en 'activosdestruidos'
        $activosDestruidos = Activo::onlyTrashed('deleted_at')
        ->whereNotNull('deleted_at')
        ->select(['sap','nombre','actadestruccion','descripcion', 'codigo', 'categoria', 'estado', 'lugar', 'fechaingreso', 'facturacompra', 'fechasalida', 'fechamantenimiento', 'fechadestruccion', 'costomantenimiento', 'fotourl','deleted_at'])
        ->get();
        return DataTables::of($activosDestruidos)->make(true);
    }

    public function filtercategory()
    {
        $categoria = Categoria::all();
        return view('crearactivo', compact('categoria'));
    }

    public function register(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required',
            'categoria' => 'required',
            'estado' => 'required',
        ]);

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
        $Activo->fill($request->except(['fotourl']));

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

        $activo->fill($request->except(['fotourl']));

        if ($request->estado != "seleccione estado") {
            $activo->estado = $request->estado;
        }

        $activo->save();

        return redirect()->route('inicioadmin');
    }



}
