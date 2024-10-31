<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Estado;

class ActivoController extends Controller

{
    public function index(){
        $activo = Activo::all();
        $categoria = Categoria::all();

        return view('inicioadmin', compact('activo', 'categoria'));


    }






    public function register(Request $request){
        // dd($request);
        $Activo = new Activo;
        $Activo->fotourl = $request->fotourl;
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
        $Activo->save();




        return redirect()->route('inicioadmin');

    }
//  filtros

}
