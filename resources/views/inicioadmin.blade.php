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

        .Crear__Categoria {
    position: relative; /* Para que el SVG se posicione relativo a este contenedor */
    padding-left: 30px; /* Espacio para que el texto no se superponga al SVG */
}
.Regis {
    position: relative; /* Para que el SVG se posicione relativo a este contenedor */
    padding-left: 30px; /* Espacio para que el texto no se superponga al SVG */
}
.Registrador_Usuarios{
    position: relative; /* Para que el SVG se posicione relativo a este contenedor */
    padding-left: 30px; /* Espacio para que el texto no se superponga al SVG */
}
.Activos_Destruidos {
    position: relative; /* Para que el SVG se posicione relativo a este contenedor */
    padding-left: 30px; /* Espacio para que el texto no se superponga al SVG */
}
.icon {
    position: absolute; /* Coloca el SVG detrás del texto */
    left: -14px;/* Ajusta la posición horizontal */
    top: 50%; /* Centra verticalmente */
    transform: translateY(-50%); /* Ajusta para centrar correctamente */
    width: 20px; /* Tamaño más pequeño */
    height: 20px; /* Tamaño más pequeño */
    opacity: 0.5; /* Opcional: hace que el SVG sea más transparente */
}

    </style>

</head>

<body>
    {{-- menu lateral --}}
    <div class="sidebar">
        <h2>Activos Impresistem</h2>
        <ul>
            <li>
                <a href="" class="Crear__Categoria">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1m10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1M4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1m13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4s-4 1.794-4 4s1.794 4 4 4"/>
                    </svg>
                    Crear Categoria
                </a>
            </li>
    <li><a href="crearactivo" class="Regis"> <svg xmlns="http://www.w3.org/2000/svg"  class="icon" viewBox="0 0 24 24"><path fill="currentColor" d="M5 19V5v11.35v-2.125zm-2 2V3h18v10h-2V5H5v14h7v2zm14.35 1l-3.55-3.55l1.425-1.4l2.125 2.125l4.25-4.25L23 16.35zM11 13h6v-2h-6zm0-4h6V7h-6zm-4 4h2v-2H7zm0-4h2V7H7z"/></svg>Registro Activo
                </a></li>
    <li><a href="" class="Registrador_Usuarios"> <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 512 512"><path fill="currentColor" d="M213.3 384c0-87 65.2-158.7 149.3-169.2v-1.5c5.5-8 21.3-21.3 21.3-42.7s-21.3-42.7-21.3-53.3C362.7 32 319.2 0 256 0c-60.5 0-106.7 32-106.7 117.3c0 10.7-21.3 32-21.3 53.3s15.2 35.4 21.3 42.7c0 0 0 21.3 10.7 53.3c0 10.7 21.3 21.3 32 32c0 10.7 0 21.3-10.7 42.7L64 362.7C21.3 373.3 0 448 0 512h271.4c-35.5-31.3-58.1-77-58.1-128M384 256c-70.7 0-128 57.3-128 128s57.3 128 128 128s128-57.3 128-128s-57.3-128-128-128m85.3 149.3h-64v64h-42.7v-64h-64v-42.7h64v-64h42.7v64h64z"/></svg> Registrar Administrador</a></li>

    <li><a href="activoseliminados"| class="Activos_Destruidos "><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24"><g fill="currentColor"><path fill-rule="evenodd" d="M17 5V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V7h1a1 1 0 1 0 0-2zm-2-1H9v1h6zm2 3H7v11a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z" clip-rule="evenodd"/><path d="M9 9h2v8H9zm4 0h2v8h-2z"/></g></svg> Activos Eliminados </a>
    </li>
        </ul>

    <li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Cerrar Sesión') }}
        </button>

    </li>
    </div>

    <div class="content">



    {{-- fin menu lateral --}}
    {{-- </header> --}}

    {{-- menu superior --}}

    <div>
        <header>
            <div class="containers">
                <nav class="navegacion">
                    <ul class="menu">
                        <li>
                            <a href="#" class="filter-link" style="font-family: sans-serif">
                                <i class="fas fa-tag"></i>
                                Filtrar por Categoria
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
                            <a href="#" class="filter-link" style="font-family: sans-serif">
                                <i class="fas fa-building"></i>
                                Filtrar por Lugar
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
                        {{-- botones --}}

                        {{-- finbotones --}}
                        <li>
                            <a href="#" class="filter-link" style="font-family: sans-serifc ">
                                <i class="fas fa-check-circle"></i>
                                Filtrar por Estado
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
                            <a href="#" class="limpiarFiltros" id="limpiarFiltros"
                                style="font-family: sans-serif">
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
    <form id="Crear_Categoria" method="POST" action="{{ route('categoria.store') }}">
        @csrf
        <section class="modal">
            <div class="container">
                <div class="0"> <span><a href="" id="cerrar_boton" class="cerrar_boton"><img
                                src="assets/Recursos/cerrar.png" width="10%"><span
                                class="material-symbols-outlined"></span></a></span> </div>
                <h1>impresistem</h1>
                <h2>Agrega nueva categoría</h2>
                <div class="formulario">
                    <div class="input-group">
                        <label for="id_codigo">Código de Categoría <a style="color: gray">(max:5):</a></label>
                        <input type="text" id="id_codigo" name="id_codigo" maxlength="5">
                    </div>

                    <div class="input-group">
                        <label for="nombre">Nombre de Categoría:</label>
                        <input type="text" id="nombre" name="nombre">
                    </div>
                    <button id="create_category" type="submit">Registrar categoría</button>
                </div>


            </div>
        </section>
    </form>
    <!-- final modal de crear categoria -->
    {{-- fin menu superior --}}


    <div class="ContenedorGrande">
        <div id="filtrosActivos"></div>
        <button onclick="exportToExcel()">Exportar a Excel</button>
        <table id="miTabla">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre del Activo</th>
                    <th>Lugar</th>
                    <th>Estado</th>
                    <th>Fecha de Ingreso</th>
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
                        <td style="vertical-align: inherit;">{{ $item->fechaingreso }}</td>
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
    {{-- elex --}}
    <script>
        function exportToExcel() {
            // Obtener la tabla por su ID
            const table = document.getElementById("miTabla");

            // Crear un objeto de libro de Excel
            const wb = XLSX.utils.table_to_book(table, {
                sheet: "Hoja1"
            });

            // Exportar el libro a un archivo Excel
            XLSX.writeFile(wb, "datos.xlsx");
        }



        document.addEventListener("DOMContentLoaded", function() {
            const filterLinks = document.querySelectorAll('.filter-link');
            const submenuLinks = document.querySelectorAll('.submenu li a');

            // Filtrar y eliminar duplicados
            const uniquePlaces = new Set();
            submenuLinks.forEach(link => {
                const place = link.dataset.valor; // Obtiene el valor del lugar
                if (uniquePlaces.has(place)) {
                    // Si ya existe, oculta este elemento
                    link.closest('li').style.display = 'none';
                } else {
                    uniquePlaces.add(place); // Agrega al conjunto
                }
            });

            // Abrir y cerrar submenús
            filterLinks.forEach(link => {
                const submenu = link.nextElementSibling;
                if (submenu && submenu.classList.contains('submenu')) {
                    link.addEventListener("click", function(event) {
                        event.preventDefault();
                        submenu.classList.toggle('open');
                    });
                }
            });

            // Cerrar submenú al seleccionar una opción
            submenuLinks.forEach(link => {
                link.addEventListener("click", function() {
                    const submenu = link.closest('.submenu');
                    if (submenu) {
                        submenu.classList.remove('open');
                    }
                });
            });

            // Cerrar submenú al hacer clic fuera del menú
            document.addEventListener("click", function(event) {
                filterLinks.forEach(link => {
                    const submenu = link.nextElementSibling;
                    if (submenu && submenu.classList.contains('submenu') && !link.contains(event
                            .target) && !submenu.contains(event.target)) {
                        submenu.classList.remove('open');
                    }
                });
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
</div>
</body>

</html>
