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
    public function showLogin()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        //dd($request);
        $user = new ModelsUsuario();

        $user->email = $request->email;
        $user->email = $request->email;

        $user->contrasena = Hash::make($request->contrasena);
        $user->role = $request->role;

        $user->save();

        session()->success('success', 'El usuario se ha creado correctamente');

        // return redirect()->route('inicioadmin');

        Auth::login($user);

        // return redirect()->route('inicioadmin');
    }

    public function login(Request $request)
    {
        try {
            $email = $request->input('email');
            $contrasena = $request->input('contrasena');

            // Añadimos logging para debug
            // \Log::info('Intento de login para email: ' . $email);

            $usuario = ModelsUsuario::where('email', $email)->first();

            if (!$usuario) {
                // \Log::info('Usuario no encontrado');
                return redirect()
                    ->back()
                    ->withErrors(['email' => 'Usuario no encontrado.'])
                    ->withInput();
            }

            // \Log::info('Usuario encontrado, verificando contraseña');

            if (!password_verify($contrasena, $usuario->contrasena)) {
                // \Log::info('Contraseña incorrecta');
                return redirect()
                    ->back()
                    ->withErrors(['contrasena' => 'Contraseña incorrecta.'])
                    ->withInput();
            }

            // \Log::info('Contraseña correcta, intentando Auth::login');

            // Cambiamos la forma de hacer el login
            Auth::login($usuario);

            // Verificamos si el usuario está autenticado
            if (Auth::check()) {
                // \Log::info('Login exitoso, redirigiendo a inicioadmin');
                return redirect()->intended(route('inicioadmin'));
            }

            // \Log::error('Auth::check() falló después del login');
            return redirect()
                ->back()
                ->withErrors(['auth' => 'Error en la autenticación'])
                ->withInput();
        } catch (\Exception $e) {
            // \Log::error('Excepción en login: ' . $e->getMessage());
            return redirect()
                ->back()
                ->withErrors(['error' => $e->getMessage()])
                ->withInput();
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
