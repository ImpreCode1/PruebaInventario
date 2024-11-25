<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use App\Models\Usuario as ModelsUsuario;




class AuthController extends Controller
{

    public function register(Request $request)

    {
       //dd($request);
        $user = new ModelsUsuario();

        $user->email=$request->email;
        $user->email=$request->email;

        $user->contrasena=Hash::make($request->contrasena);
        $user->role=$request->role;

        $user->save();

      session()->success('success', 'El usuario se ha creado correctamente');

        return redirect ()->route('inicioadmin');

        Auth::login($user);


        return redirect()->route('inicioadmin');
    }




    public function login(Request $request) {
        // Obtener valores de nombre y email desde el request
        $email = $request->input('email');
        $email = $request->input('email');
        $contrasena = $request->input('contrasena');

        // Busca el usuario por su nombre y correo electrónico
        $usuario = ModelsUsuario::where('email', $email)
                                 ->where('email', $email)
                                 ->first();

        // Si el usuario no existe
        if (!$usuario) {
         return redirect()->back()
         ->withErrors(['Usuario no encontrado.'])
         ->withInput();//mantiene los datos de la entrada para que no se eliminen cuando la contraseña esta mal
        }

        // Comprobar la contraseña
        if (!Hash::check($contrasena, $usuario->contrasena)) {
            // La contraseña es incorrecta

            return redirect()->back()

            ->withErrors(['Contraseña incorrecta.'])

            ->withInput(); // Mantener los datos de entrada

                            }

        // La contraseña es correcta, iniciar sesión
        // Auth::login($usuario);
        return redirect()->route('inicioadmin');
    }




    public function logout(Request $request)
    {
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect(route('login'));
    }


}
