<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{


    public function index(){
        $usuarios = Usuario::all();
        return view('inicioadmin', compact('usuarios'));
    }

    public function us(Request $request){


        $usuarios = $request->only('nombre','email','role','contrasena');
        $usuarios['contrasena'] = bcrypt($usuarios['contrasena']);

        Usuario::create($usuarios);

        // return view('inicioadmin', compact('categoria'));
        return redirect()->route('inicioadmin');

    }

}
