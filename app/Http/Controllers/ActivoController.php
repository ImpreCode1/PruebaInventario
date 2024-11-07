<?php

namespace App\Http\Controllers;


use App\Models\Activo;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Estado;
use Illuminate\Support\Facades\DB;

class ActivoController extends Controller
{
// inicio ID
public function show(){

}
// fin ID
    public function index()
    {
        $activo = Activo::all();
        $categoria = Categoria::all();

        return view('inicioadmin', compact('activo', 'categoria'));

            {
                // Obtener el valor del filtro desde la solicitud GET
                $filter = $request->get('filter');

                // Usar Query Builder para consultar la tabla 'activos'
                $activos = DB::table('activos')
                    ->when($filter, function($query, $filter) {
                        return $query->where('estado', $filter);
                    })
                    ->paginate(10); // Paginación de 10 elementos por página

                // Pasar los resultados y el filtro a la vista
                return view('activos.index', compact('activos', 'filter'));
            }
            {

            }
        }



    public function register(Request $request)

    {
        // Validar los datos del request aquí si es necesario

        $Activo = new Activo();

        // Manejar la subida de imagen
        if ($request->hasFile('fotourl')) {
            $archivo = $request->file('fotourl');
            $filename = time() . '_' . $archivo->getClientOriginalName();
            $archivo->move(public_path('uploads'), $filename);
            $Activo->fotourl = 'uploads/' . $filename;
        } else {
            // Asignar imagen por defecto
            $Activo->fotourl = 'uploads/ejemplo.png';
        }

        // Asignar el resto de campos
        $Activo->ID=$request->id;
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

        // Guardar el activo
        $Activo->save();
        return redirect()->route('inicioadmin');
    }
}
