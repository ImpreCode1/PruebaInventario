<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{


    public function store(Request $request){


        $categoria = $request->only('id_codigo','nombre');
        Categoria::create($categoria);

        // return view('inicioadmin', compact('categoria'));
        return redirect()->route('inicioadmin');

    }

}

