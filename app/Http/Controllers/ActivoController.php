<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;

class ActivoController extends Controller

{
    public function index(){
        $activo = Activo::all();
        return view('inicioadmin', compact('activo'));
    }

    public function register(Request $request){

        $activo = $request->only('nombre','descripcion','codigo','categoria','estado','lugar','fechaingreso','facturacompra','fechasalida','fechamantenimiento','costomantenimiento','fotourl');
        Activo::create($activo);

        // return view('inicioadmin', compact('categoria'));
        return redirect()->route('inicioadmin');

    }

}
