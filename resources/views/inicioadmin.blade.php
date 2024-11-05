<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>inicioadmin</title>

    <link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/inicioadmin.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


</head>

<body>




    {{-- menu lateral --}}
    <div class="menu_lateral">
        <label for="btn-nav" class="btn-nav"><i class="fas fa-bars">></i></label>
        <input type="checkbox" id="btn-nav">

        <nav>
            <ul class="navigation">
                <li><a href="" class="Crear__Categoria"> crear categoria <img
                            src="/assets/Recursos/crearactivo.png" alt="registro activo" class="cre_cat" width="13%">
                    </a> </li>
                <li><a href="crearactivo">registro activo <img
                            src="/assets/Recursos/registrar_activo-removebg-preview.png" alt="registro activo"
                            class="registactivo" width="20%"></a></li>
                <li><a href="" class="Registrador_Usuarios">registrar administrador <img
                            src="/assets/Recursos/usuarios-removebg-preview.png" alt="usuario"
                            width="20% "class="imageusuarios"></a></li>

            </ul>
        </nav>
    </div>
    {{-- fin menu lateral --}}
    {{-- </header> --}}

    {{-- menu superior --}}
    <div>

        <header>
            <nav class="navegacion">
                <ul class="menu">

                    <li><a href="">Filtrar por categoria</a>
                        <ul class="submenu">
                            @foreach ( $categoria as $filter )
                                <li><a>{{$filter->nombre}}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li><a href="">Filtrar por area</a>
                        <ul class="submenu">
                            <li><a href="">Unidad de Desarrollo y Crecimiento</a>
                            <li><a href="">Financiero</a>
                            <li><a href="">Recursos Humanos</a>
                            <li><a href="">Innovación y Movilidad</a>
                            <li><a href="">Ventas Inteligentes</a>
                            <li><a href="">Soluciones Especializadas</a>
                        </ul>
                    <li><a href="">Filtrar por estado</a>
                        <ul class="submenu">

                            @foreach ( $activo as $filtro )
                            <li><a>{{$filtro->estado}}</a></li>
                        @endforeach


                            </ul>
                    </li>
                    <li>

                </ul>
                </li>

            </nav>
        </header>
        <br>
        <br>




    </div>

    <!-- implementacion de modal, se motrara en el apartado de inicio/administrador  esta modal es para crear una nueva categoria-->
    <!-- Formulario -->
    <form method="POST" action="{{ route('categoria.store') }}">
        @csrf
        <section class="modal">
            <div class="btn_salir_mo">
                <a href="inicioadmin"><img src="/assets/Recursos/devolverse.png" alt="registro activo" class="inicioadm"
                        width="40%"></a>
            </div>

            <div class="container">
                <h1>impresistem</h1>
                <h2>Agrega nueva categoría</h2>
                <div class="formulario">
                    <div class="input-group">
                        <label for="codigo">Código categoría:</label>
                        <input type="text" id="id_codigo" name="id_codigo" placeholder="nuevo código" max="5"
                            required>
                    </div>
                    <div class="input-group">
                        <label for="nombre">Nombre categoría:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre categoría" required>
                    </div>
                    <button type="submit">Registrar categoría</button> <!-- Corrección en el botón -->
                </div>
            </div>
        </section>
    </form>


    <!-- final modal de crear categoria -->
    {{-- fin menu superior --}}
    <div class="ContenedorGrande">
        <table id="miTabla" class="table table-striped">
            <thead>
                <tr>
                    {{-- <th>Foto</th> --}}
                    <th>Código</th>
                    <th><strong>Nombre del Activo</strong></th>
                    <th><strong>Lugar</strong></th>
                    <th><strong>Estado</strong></th>
                    <th><strong>Más Información</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activo as $item)
                    <tr>
                        {{-- <td><img src="{{ $item->fotourl }}" alt="Imagen Activo" class="tabla-imagen" ></td> --}}
                        <td>{{ $item->codigo }}</td>
                        <td><strong>{{ $item->nombre }}</strong></td>
                        <td><strong>{{ $item->lugar }}</strong></td>
                        <td>{{ $item->estado }}</td>
                        <td>
                           <button class="botoninfactivo"> <a href="informacionactiv">
                                <div tabindex="0" class="plusButton">
                                    <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                        <g mask="url(#mask0_21_345)">
                                            <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                        </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <section class="registroadminmod">
        <div class="btn_salir_mod">
            <a href="inicioadmin"><img src="/assets/Recursos/devolverse.png" alt="registro activo" class="inicioadm"
                    width="40%"> </a>
        </div>

        <div class="contai">

            <h1>impresistem</h1>
            <h2>Registro de Usuario</h2>
            <form method="POST" action="{{ route('usuarios.us') }}"">
                @csrf
                <div class="input-group">
                    <label for="usuario">Nombre de usuario:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="nombre" required>
                </div>
                <div class="input-group">
                    <label for="correo">Correo:</label>
                    <input type="email" id="email" name="email" placeholder="correo" required>
                </div>
                <div class="input-group">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                </div>
                <div class="input-group">
                    <label for="cargo">Cargo:</label>
                    <select id="role" name="role" required>
                        <option disabled>Seleccione rol</option>
                        <option value="administrador">Admin</option>
                        <option value="superadmin">Superadmin</option>
                    </select>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>


    <!-- final de modal de registro de administrador -->

    <script src="/assets/js/inicioadm.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#miTabla').DataTable();
        });
    </script>
</body>

</html>
