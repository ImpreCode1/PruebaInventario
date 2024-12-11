<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activos Eliminados</title>
    <link rel="stylesheet" href="/assets/css/activoseliminados.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <style>
        /* From Uiverse.io by vinodjangid07 */
        .button {
            width: 110px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
            background-color: rgb(161, 255, 20);
            border-radius: 30px;
            color: rgb(19, 19, 19);
            font-weight: 600;
            border: none;
            position: relative;
            cursor: pointer;
            transition-duration: .2s;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.116);
            padding-left: 8px;
            transition-duration: .5s;
        }

        .svgIcon {
            height: 25px;
            transition-duration: 1.5s;
        }

        .bell path {
            fill: rgb(19, 19, 19);
        }

        .button:hover {
            background-color: rgb(192, 255, 20);
            transition-duration: .5s;
        }

        .button:active {
            transform: scale(0.97);
            transition-duration: .2s;
        }

        .button:hover .svgIcon {
            transform: rotate(250deg);
            transition-duration: 1.5s;
        }
    </style>
</head>

<body>
    <div class="menu_lateral">
        <label for="btn-nav" class="btn-nav"></label>
        <input type="checkbox" id="btn-nav">
        <nav class="navegador">
            <ul class="navigation">
                <li><a href="inicioadmin" class="Activos_Destruidos">inicio<img src="/assets/Recursos/inicio.png"
                            alt="usuario" width="20%" class="imageusuarios"></a></li>
                <li><a href="activosdestruidos" class="Inicioadmin">activos destruidos<img
                            src="/assets/Recursos/mesa.png" alt="usuario" width="20%" class="imageusuarios"></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="supercontainer">
        <div class="container mt-5">
            <h2 class="mb-4">Activos Eliminados</h2>
            <table id="tablaaa" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Identificación SAP</th>
                        <th>Código</th>
                        <th>Nombre Activo</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th>Fecha Ingreso</th>
                        <th>Fecha Salida</th>
                        <th>Nro Factura Compra</th>
                        {{-- <th>Nro Acta Destrucción</th>
                        <th>Fecha Eliminación</th> --}}
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activosDestruidos as $activo)
                        <tr>
                            <td>{{ $activo->sap }}</td>
                            <td>{{ $activo->codigo }}</td>
                            <td>{{ $activo->nombre }}</td>
                            <td>{{ $activo->descripcion }}</td>
                            <td>{{ $activo->categoria }}</td>
                            <td>{{ $activo->fechaingreso }}</td>
                            <td>{{ $activo->facturacompra }}</td>
                            <td>{{ $activo->deleted_at }}</td>
                            <td>
                                @if ($activo->ID)
                                    <form action="{{ route('elemento.reparar', $activo->ID) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="button">Recuperar</button>
                                    </form>
                                @else
                                    <p>El ID no está disponible.</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

    <!-- Incluye jQuery y DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Inicialización de DataTable -->
    <script>
        $(document).ready(function() {
            $('#tablaaa').DataTable();
        });
    </script>

</body>

</html>
