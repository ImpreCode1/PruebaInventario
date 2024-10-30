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
                            <li><a href="">categoria 1</a>
                            <li><a href="">Categoria 2</a>
                            <li><a href="">Categoria 3</a>
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
                            <li><a href="">buen estado</a>
                            <li><a href="">mal estado</a>
                            <li><a href="">mantenimiento</a>
                        </ul>
                    </li>
                    <li>

                        <div class="group">
                            <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                                <g>
                                    <path
                                        d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                    </path>
                                </g>
                            </svg>
                            <input placeholder="         buscar por codigo" type="search" class="input">
                        </dIv>
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
        @csrf <!-- Incluir el token CSRF -->
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
                        <input type="text" id="id_codigo" name="id_codigo" placeholder="nuevo código" max="5" required>
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
                    <th>Foto</th>
                    <th>Código</th>
                    <th>Nombre del Activo</th>
                    <th>Lugar</th>
                    <th>Estado</th>
                    <th>Mas información</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="/assets/Recursos/logoimpre.png" alt="Foto del activo"></td>
                    <td>M20-0001</td>
                    <td>Mesa</td>
                    <td>Impresistem</td>
                    <td>En mantenimiento</td>
                    <td> <a href="informacionactiv"><button>Mas informacion</button></td></a>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- <table id="Tablass">
    <tr>
        <th>Foto</th>
        <th>Código</th>
        <th>Nombre del Activo</th>
        <th>Lugar</th>
        <th>Estado</th>
        <th>Mas información</th>
    </tr>
    <tr>
        <td><img src="/assets/Recursos/logoimpre.png" alt="Foto del activo"></td>
        <td>M20-0001</td>
        <td>Mesa</td>
        <td>Impresistem</td>
        <td>En mantenimiento</td>
    <td> <a href="informacionactiv"><button>Mas informacion</button></td></a>

    </tr>
    </div> --}}


    <!-- inicio modal registro de un nuevo usuasrio -->

    <!-- inicio modal de registro de administrador -->

    <section class="registroadminmod">
        <div class="btn_salir_mod">
            <a href="inicioadmin"><img src="/assets/Recursos/devolverse.png" alt="registro activo" class="inicioadm"
                    width="40%"> </a>
        </div>

        <div class="contai">

            <h1>impresistem</h1>
            <h2>Registro de Usuario</h2>
            <form class="formulario">
                <div class="input-group">
                    <label for="usuario">Nombre de usuario:</label>
                    <input type="text" id="usuario" name="usuario" placeholder="nombre" required>
                </div>
                <div class="input-group">
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" placeholder="correo" required>
                </div>
                <div class="input-group">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                </div>
                <div class="input-group">
                    <label for="cargo">Cargo:</label>
                    <select id="cargo" name="cargo" required>
                        <option value="Admin">Admin</option>
                        <option value="Superadmin">Superadmin</option>

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
