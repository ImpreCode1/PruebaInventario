<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/inicioadmin.css">
    <link rel="stylesheet" href="/assets/css/mantenimiento.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .Crear__Mantenimiento {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .Crear__Mantenimiento:hover {
            background-color: #45a049;
        }

        .Crear__Mantenimiento:active {
            background-color: #388e3c;
        }

        .Crear__Mantenimiento:focus {
            outline: none;
        }

        .formulario {
            background-color: hsl(0, 0%, 100%);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        .cerrar_boton {
            display: block;
            text-align: right;
            margin-bottom: 10px;
            position: relative;
            left: 15px;
        }

        .cerrar_boton img {
            width: 30px;
            height: 30px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .Crear__Mantenimiento {
            position: relative;
            top: 10px;
            left: 980px;
        }

        .ContenedorGrandee {
            position: relative;
            left: 10px;
        }
    </style>
</head>

<body>

    <div class="menu_lateral">
        <label for="btn-nav" class="btn-nav"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="btn-nav">
        <nav>
            <ul class="navigation">
                <li><a href="/inicioadmin"> Inicio <img src="/assets/Recursos/inicio.png" alt="registro activo" class="inicioadm" width="20%"> </a></li>
                <div class="btn_mantenimientoagregar"></div>
            </ul>
        </nav>
    </div>

    <div class="ContenedorGrandee">
        <button id="registrarMantenimiento" class="Crear__Mantenimiento"><strong>Registrar Mantenimiento</strong></button>

        <div class="tit">
            <h2 style="background:rgb(254, 247, 247); border-radius: 6px">Historial Mantenimiento Del Activo: {{ $activo->nombre }}</h2>
        </div>

        <table id="miTabla">
            <thead>
                <tr>
                    <th>Factura</th>
                    <th>Descripción</th>
                    <th>Fecha de mantenimiento</th>
                    <th>Acción</th>
                    <th>Fin de mantenimiento</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($activo->mantenimientos as $mantenimiento)
                    <tr>
                        <td>
                            @if ($mantenimiento->factura)
                                <img src="{{ asset($mantenimiento->factura) }}" alt="Imagen del activo" class="card-image" width="300px">
                            @else
                                <form action="{{ route('mantenimiento.updateFactura', $mantenimiento->ID) }}" method="POST" enctype="multipart/form-data" style="display: inline;">
                                    @csrf
                                    @method('PUT')
                                    <input type="file" id="factura" name="factura" class="btn btn-primary" required>
                                    <button type="submit" class="btn-terminar">Guardar</button>
                                </form>
                            @endif
                        </td>

                        <td>{{ $mantenimiento->descripcion }}</td>
                        <td>{{ $mantenimiento->fechamantenimiento }}</td>
                        <td>{{ $mantenimiento->fechafinmantenimiento ?? 'En proceso' }}</td>
                        <td>
                            @if (!$mantenimiento->fechafinmantenimiento)
                                <form id="terminarMantenimientoForm-{{ $mantenimiento->ID }}" action="{{ route('mantenimiento.terminar', $mantenimiento->ID) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button id="terminarMantenimiento-{{ $mantenimiento->ID }}" type="button" class="btn-terminar">Terminar mantenimiento</button>
                                    <span id="estadoMantenimiento-{{ $mantenimiento->ID }}">En proceso</span>
                                </form>
                            @else
                                Mantenimiento terminado
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No hay mantenimientos registrados para este activo.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <section class="modal">
        <div class="contenedor">
            <form action="{{ route('mantenimiento.store', $activo->ID) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_activo" value="{{ $activo->ID }}">
                <div class="formulario">
                    <a href="" id="cerrar_boton" class="cerrar_boton"><img src="/assets/Recursos/cerrar.png" width="50px"></a>
                    <div class="input-group">
                        <label for="codigo">Factura:</label>
                        <input type="file" id="factura" name="factura">
                    </div>
                    <div class="input-group">
                        <label for="nombre">Inicio mantenimiento</label>
                        <input type="date" id="fechamantenimiento" name="fechamantenimiento" required>
                    </div>
                    <div class="input-group">
                        <label for="nombre">Descripción del mantenimiento</label>
                        <input type="text" id="descripcion" name="descripcion">
                    </div>
                    <button type="submit">Registrar mantenimiento</button>
                </div>
            </form>
        </div>
    </section>

    <script src="/assets/js/mantenimiento.js"></script>
    <script>
        // Deshabilita el botón de registrar mantenimiento cuando aún no se ha terminado el mantenimiento actual
        document.addEventListener('DOMContentLoaded', function() {
            const registrarBtn = document.getElementById('registrarMantenimiento');
            const estadoMantenimiento = document.querySelectorAll('[id^=estadoMantenimiento]');

            function actualizarEstado() {
                let mantenimientoEnProceso = false;
                estadoMantenimiento.forEach(function(estado) {
                    if (estado.textContent.trim() === 'En proceso') {
                        mantenimientoEnProceso = true;
                    }
                });

                if (mantenimientoEnProceso) {
                    registrarBtn.disabled = true;
                    registrarBtn.classList.add('disabled');
                } else {
                    registrarBtn.disabled = false;
                    registrarBtn.classList.remove('disabled');
                }
            }

            actualizarEstado();
        });
    </script>

    <script>
        // Alerta de confirmación con SweetAlert2
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('[id^=terminarMantenimiento-]').forEach(function(button) {
                button.addEventListener('click', function() {
                    const formId = button.id.replace('terminarMantenimiento-', 'terminarMantenimientoForm-');
                    const form = document.getElementById(formId);
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-success",
                            cancelButton: "btn btn-danger"
                        },
                        buttonsStyling: false
                    });

                    swalWithBootstrapButtons.fire({
                        title: "¿Estás seguro?",
                        text: "¡No podrás revertir esto!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Sí, termínalo",

                        cancelButtonText: "No, cancélalo",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            swalWithBootstrapButtons.fire({
                                title: "Cancelado",
                                text: "Tu mantenimiento sigue en proceso.",
                                icon: "error"
                            });
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
