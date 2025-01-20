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

        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    display: flex;
    overflow: auto;
}

.sidebar {
    width: 250px; /* Ancho fijo */
    background-color: #333;
    color: #fff;
    height: 100vh; /* Altura completa de la ventana */
    padding: 20px;
}

.sidebar h2 {
    color: #fff;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style-type: none;
    position: relative;
    left: 30px;
}

.sidebar ul li {
    margin: 15px 0;
}

.sidebar ul li a {
    /* Sin cambios de tamaño al pasar el ratón */
    color: #fff;
    text-decoration: none;
    padding: 10px;
    display: block;
    border-radius: 4px;
    width: 180px;
}

.sidebar ul li a:hover {
    background-color: #575757; /* Cambia el fondo solo al pasar el ratón */
}

.content {
    flex: 1; /* Ocupa el espacio restante */
    padding: 20px;
    background-color: #f4f4f4;
}
.btn__registrar_mantenimiento{
    position: relative;
    right: 250px;
    bottom: 8px;
}
.icon {
    position: absolute; /* Coloca el SVG detrás del texto */
    left:-25px; /* Ajusta la posición horizontal */
    top: 50%; /* Centra verticalmente */
    transform: translateY(-50%); /* Ajusta para centrar correctamente */
    width: 20px; /* Tamaño más pequeño */
    height: 20px; /* Tamaño más pequeño */
    opacity: 0.5; /* Opcional: hace que el SVG sea más transparente */
}
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Activos Impresistem</h2>
        <ul>

            <li><a href="/inicioadmin" class="devol"> <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M1 11C.08 11-.352 9.863.336 9.253l9-8a1 1 0 0 1 1.328 0l9 8C20.352 9.863 19.92 11 19 11h-1v7a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-7zm6 6v-5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v5h3v-7a1 1 0 0 1 .512-.873L10 3.337l-6.512 5.79A1 1 0 0 1 4 10v7zm2 0v-4h2v4z" clip-rule="evenodd"/></svg>
                Regresar al Inicio </a></li>

        </ul>
    </div>



    <div class="content">
    <div class="ContenedorGrandee">
       <div class="btn__registrar_mantenimiento">
        <button id="registrarMantenimiento" class="Crear__Mantenimiento"><strong>Registrar Mantenimiento</strong></button>
       </div>
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

</div>
</body>
</html>
