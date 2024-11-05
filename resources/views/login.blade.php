<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Impresistem</title>
    <link rel="stylesheet" href="/assets/css/login.css">
</head>

<body>

    <div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
            <form method="POST" action="{{ route('inicioadmin.login') }}">
                @csrf
                <div class="titulologin">
                    <h1 for="chk" aria-hidden="true">Gestión de Activos</h1>
                </div>

                <!-- Mostrar mensajes de error -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <input type="text" name="nombre" placeholder="User name" required autocomplete="nombre" value="{{ old('nombre') }}">
                <input type="email" name="email" placeholder="Email" required autocomplete="email" value="{{ old('email') }}">
                <input type="password" name="contrasena" placeholder="Password" required autocomplete="current-password">
                <button type="submit">Entrar</button>
            </form>
        </div>

        <div class="login">
            <img src="/assets/Recursos/logoimpre.png" alt="impresistem" width="60%">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
