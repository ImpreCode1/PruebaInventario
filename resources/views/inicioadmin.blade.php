<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>inicioadmin</title>

    <link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/inicioadmin.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=cancel" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>

</head>

<body>
    {{-- menu lateral --}}
    <div class="menu_lateral">
        <label for="btn-nav" class="btn-nav"></label>
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
                            <li><a href="activosdestruidos"| class="Activos_Destruidos">activos destruidos<img
                                src="/assets/Recursos/basura.png" alt="usuario"
                                width="20% "class="imageusuarios"></a></li>

            </ul>
        </nav>
    </div>
    {{-- fin menu lateral --}}
    {{-- </header> --}}

    {{-- menu superior --}}

    <div>
        <header>
            <div class="containers">
                <nav class="navegacion">
                    <ul class="menu">
                        <li>
                            <a href="#" style="font-family: sans-serif">
                                <i class="fas fa-tag"></i>
                                Filtrar por categoria
                            </a>
                            <ul class="submenu">
                                @foreach ($categoria as $filter)
                                    <li>
                                        <a href="#" class="filtro" data-tipo="categoria"
                                            data-valor="{{ $filter->id_codigo }}">
                                            {{ $filter->nombre }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>



                            <a href="#" style="font-family: sans-serif">
                                <i class="fas fa-building"></i>
                                Filtrar por lugar
                            </a>
                            <ul class="submenu">
                                @foreach ($activo as $lugar)
                                    <li>
                                        <a href="#" class="filtro" data-tipo="lugar"
                                            data-valor="{{ $lugar->lugar }}">
                                            {{ $lugar->lugar }}
                                        </a>


                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="#" style="font-family: sans-serif">
                                <i class="fas fa-check-circle"></i>
                                Filtrar por estado
                            </a>
                            <ul class="submenu">
                                <li><a href="#" class="filtro" data-tipo="estado" data-valor="buen estado">Buen
                                        estado</a></li>
                                <li><a href="#" class="filtro" data-tipo="estado" data-valor="mal estado">Mal
                                        estado</a></li>
                                <li><a href="#" class="filtro" data-tipo="estado" data-valor="En Mantenimiento">En
                                        Mantenimiento</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" id="limpiarFiltros" style="font-family: sans-serif">
                                <i class="fas fa-times"></i>
                                Limpiar Filtros
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <br>
        <br>

    </div>


    <!-- implementacion de modal, se motrara en el apartado de inicio/administrador  esta modal es para crear una nueva categoria-->
    <!-- Formulario -->
    <form id="Crear_Categoria" method="POST" action="{{ route('categoria.store') }}"> @csrf <section class="modal">
            <div class="container">
                <div class="0"> <span><a href="" id="cerrar_boton" class="cerrar_boton"><img
                                src="assets/Recursos/cerrar.png" width="10%"><span
                                class="material-symbols-outlined"></span></a></span> </div>
                <h1>impresistem</h1>
                <h2>Agrega nueva categoría</h2>
                <div class="formulario">
                    <div class="input-group"> <label for="id_codigo">Código categoría:</label> <input type="text"
                            id="id_codigo" name="id_codigo" placeholder="nuevo código" max="5" required> </div>
                    <div class="input-group"> <label for="nombre">Nombre categoría:</label> <input type="text"
                            id="nombre" name="nombre" placeholder="Nombre categoría" required> </div> <button
                        id="create_category" type="submit">Registrar categoría</button>
                </div>
            </div>
        </section>
    </form>
    <!-- final modal de crear categoria -->
    {{-- fin menu superior --}}

    <div class="ContenedorGrande">
        <div id="filtrosActivos"></div>
        <table id="miTabla">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre del Activo</th>
                    <th>Lugar</th>
                    <th>Estado</th>
                    <th>Fecha de salida</th>
                    <th>Información</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activo as $item)
                    <tr data-categoria="{{ $item->categoria }}">
                        <td style="vertical-align: inherit;">{{ $item->categoria }}-{{ $item->codigo }}</td>
                        <td style="vertical-align: inherit;"><strong>{{ $item->nombre }}</strong></td>
                        <td style="vertical-align: inherit;"><strong>{{ $item->lugar }}</strong></td>
                        <td style="vertical-align: inherit;">{{ $item->estado }}</td>
                        <td style="vertical-align: inherit;">{{ $item->fechasalida }}</td>
                        <td>
                            <a href="{{ route('ver.activo', $item->ID) }}" class="botoninfactivo">
                                <div class="plusButton">
                                    <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                        <g mask="url(#mask0_21_345)">
                                            <path
                                                d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <section class="registroadminmod">
        <div class="contai">
            <div class="btn_salir_mo">
                <span> <a>
                        <a href="" id="cerrar_boton" class="close_user"><img src="assets/Recursos/cerrar.png"
                                width="10%"><span class="material-symbols-outlined">
                            </span> </a>
            </div>
            <h1>impresistem</h1>
            <h2>Registro de Usuario</h2>
            <form id="Crear_usuario" method="POST" action="{{ route('usuarios.us') }}">
                @csrf
                <div class="input-group">
                    <label for="nombre">Nombre de usuario:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="nombre" required>
                </div>
                <div class="input-group">
                    <label for="email">Correo:</label>
                    <input type="email" id="email" name="email" placeholder="correo" required>
                </div>
                <div class="input-group">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                </div>
                <div class="input-group">
                    <label for="role">Cargo:</label>
                    <select id="role" name="role" required>
                        <option disabled selected>Seleccione rol</option> y
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
    {{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $('#miTabla').DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json'
                },
                order: [
                    [1, 'asc']
                ],
                pageLength: 10,
                dom: '<"top"lBf>rt<"bottom"ip><"clear">',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                columnDefs: [{
                    targets: -1, // Última columna (botón de información)
                    orderable: false,
                    searchable: false
                }],
                initComplete: function() {
                    // Personalizar el diseño después de que la tabla se inicialice
                    $('.dataTables_length select').addClass('form-select form-select-sm');
                    $('.dataTables_filter input').addClass('form-control form-control-sm');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Objeto(se usa para almacenar diferentes filtros :))
            let filtrosActivos = {
                categoria: null,
                lugar: null,
                estado: null
            };

            // Función para aplicar los filtros
            function aplicarFiltros() {
                const tabla = document.getElementById('miTabla');
                const filas = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

                for (let fila of filas) {
                    let mostrarFila = true;
                    const categoria = fila.getAttribute('data-categoria');
                    const lugar = fila.querySelector('td:nth-child(3)').textContent; // lugar
                    const estado = fila.querySelector('td:nth-child(4)').textContent;

                    // Verificar cada filtro activo
                    if (filtrosActivos.categoria && categoria !== filtrosActivos.categoria) {
                        mostrarFila = false;
                    }
                    if (filtrosActivos.lugar && lugar !== filtrosActivos.lugar) {
                        mostrarFila = false;
                    }
                    if (filtrosActivos.estado && estado !== filtrosActivos.estado) {
                        mostrarFila = false;
                    }

                    // Mostrar u ocultar la fila según el resultado
                    fila.style.display = mostrarFila ? '' : 'none';
                }


                actualizarFiltrosActivos();
            }

            // peticiones a los filtros
            document.querySelectorAll('.filtro').forEach(enlace => {
                enlace.addEventListener('click', function(e) {
                    e.preventDefault();
                    const tipo = this.dataset.tipo;
                    const valor = this.dataset.valor;

                    // Toggle del filtro
                    if (filtrosActivos[tipo] === valor) {
                        filtrosActivos[tipo] = null;
                        this.classList.remove('activo');
                    } else {
                        filtrosActivos[tipo] = valor;
                        // Remover activo de otros del mismo tipo
                        document.querySelectorAll(`.filtro[data-tipo="${tipo}"]`)
                            .forEach(el => el.classList.remove('activo'));
                        this.classList.add('activo');
                    }

                    aplicarFiltros();
                });
            });

            // Limpiar todos los filtros
            document.getElementById('limpiarFiltros').addEventListener('click', function(e) {
                e.preventDefault();
                filtrosActivos = {
                    categoria: null,
                    lugar: null,
                    estado: null
                };
                document.querySelectorAll('.filtro').forEach(el => el.classList.remove('activo'));
                aplicarFiltros();
            });

            // Función para mostrar filtros activos
            function actualizarFiltrosActivos() {
                const contenedorFiltros = document.getElementById('filtrosActivos');
                if (!contenedorFiltros) return;

                let html = 'Filtros activos: ';
                for (let tipo in filtrosActivos) {
                    if (filtrosActivos[tipo]) {
                        html += `<span class="filtro-tag">${tipo}: ${filtrosActivos[tipo]}</span>`;
                    }
                }
                contenedorFiltros.innerHTML = html;
            }
        });
    </script>

</body>

</html>
