<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_codigo' => 'required|unique:categorias,id_codigo',
            'nombre' => 'required|string|max:255',
        ], [
            'id_codigo.unique' => 'El código de categoría ya existe. Por favor, introduce uno diferente.',
            'nombre.required' => 'El nombre de la categoría es obligatorio.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $categoria = $request->only('id_codigo', 'nombre');
        Categoria::create($categoria);

        return response()->json(['success' => true]);
    }
}
