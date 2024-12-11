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
                    <th>Nro Acta Destrucción</th>
                    <th>Fecha Eliminación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activosDestruidos as $lol)
                <tr>
                    <td>{{ $lol->sap }}</td>
                    <td>{{ $lol->codigo }}</td>
                    <td>{{ $lol->nombre }}</td>
                    <td>{{ $lol->descripcion }}</td>
                    <td>{{ $lol->categoria }}</td>
                    <td>{{ $lol->fechaingreso }}</td>
                    <td>{{ $lol->fechasalida }}</td>
                    <td>{{ $lol->facturacompra }}</td>
                    <td>{{ $lol->actadestruccion }}</td>
                    <td>{{ $lol->deleted_at }}</td>
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
