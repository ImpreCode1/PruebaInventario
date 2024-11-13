<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/mantenimiento.css">

    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/inicioadmin.css">
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
    </style>
</head>

<body>

    <div class="menu_lateral">
        <label for="btn-nav" class="btn-nav"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="btn-nav">
        <nav>
            <ul class="navigation">
                <li><a href="inicioadmin"> Inicio <img src="/assets/Recursos/inicio.png" alt="registro activo"
                            class="inicioadm" width="20%"> </a> </li>
                <div class="btn_mantenimientoagregar">

                </div>
            </ul>
        </nav>

    </div>

    <div class="ContenedorGrande">
        <a href="" class="Crear__Mantenimiento"><strong>Registrar Mantenimiento</strong></a>
        <br>
        <br>
        <h2>Historial Mantenimiento Del Activo: {{ $activo->nombre }}</h2>

        <br>
        <table id="miTabla">
            <thead>
                <tr>
                    <th>Factura</th>
                    <th>Descripción</th>
                    {{-- <th>Estado</th> --}}
                    <th>Fecha de mantenimiento</th>
                    <th>Accion</th>
                    <th>Fin de mantenimiento</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($activo->mantenimientos as $mantenimiento)
                    <tr>
                        <td><img src="{{ asset($mantenimiento->factura) }}" alt="Imagen del activo" class="card-image" width="15%" height="15%"></td>
                        <td>{{ $mantenimiento->descripcion }}</td>
                        <td>{{ $mantenimiento->fechamantenimiento }}</td>
                        <td>{{ $mantenimiento->fechafinmantenimiento ?? 'En proceso' }}</td>
                        <td>
                            @if (!$mantenimiento->fechafinmantenimiento)
                                <form action="{{ route('mantenimiento.terminar', $mantenimiento->ID) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn-terminar">Terminar mantenimiento</button>
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
    </a>
    </td>
    </tr>


    </div>

    {{-- apartado modal --}}
    <section class="modal">

        <div class="contenedor">

            <form action="{{ route('mantenimiento.store', $activo->ID) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_activo" value="{{ $activo->ID }}">
                <div class="formulario">
                    <a href="" id="cerrar_boton" class="cerrar_boton"><img src="/assets/Recursos/cerrar.png"
                            width="50px"><span class="material-symbols-outlined">
                    </a>
                    <div class="input-group">
                        <label for="codigo">Factura:</label>
                        <input type="file" id="factura" name="factura" required>
                    </div>
                    <div class="input-group">
                        <label for="nombre">inicio mantenimiento</label>
                        <input type="date" id="fechamantenimiento" name="fechamantenimiento" required>
                    </div>
                    <div class="input-group">
                        <label for="nombre">descripción del mantenimiento</label>
                        <input type="text" id="descripcion" name="descripcion">
                    </div>
                    <button type="submit">Registrar mantenimiento</button>
                </div>
            </form>

        </div>
    </section>
    </form>
    <script src="/assets/js/mantenimiento.js"></script>
</body>


</html>
