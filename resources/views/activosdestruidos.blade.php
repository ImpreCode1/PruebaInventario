<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/activosdestruidos.css">
    <link rel="stylesheet" href="/assets/css/mantenimiento.css">



    <title>Activos Destruidos</title>
</head>
<body>
   {{-- menu lateral --}}
    <div class="menu_lateral">
        <label for="btn-nav" class="btn-nav"><i class="fas fa-bars">></i></label>
        <input type="checkbox" id="btn-nav">

        <nav>
            <ul class="navigation">
                <li><a href="/inicioadmin"> Inicio <img src="/assets/Recursos/inicio.png" alt="registro activo"
                            class="inicioadm" width="20%"> </a> </li>
            </ul>
        </nav>
    </div>
    <div>
        <nav class="navegation">

            <h1>INFORMACION COMPLETA DEL ACTIVO</h1>
        </nav>
    </div>
    {{-- fin menu lateral --}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DataTable de Activos</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Lista de Activos</h2>
        <table class="table table-bordered" id="activos-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Código</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Lugar</th>
                    <th>Fecha de Ingreso</th>
                    <th>Factura de Compra</th>
                    <th>Fecha de Salida</th>
                    <th>Fecha de Mantenimiento</th>
                    <th>Fecha de Destrucción</th>
                    <th>Costo de Mantenimiento</th>
                    <th>Foto URL</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#activos-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("activos.data") }}',
                columns: [
                    { data: 'nombre', name: 'nombre' },
                    { data: 'descripcion', name: 'descripcion' },
                    { data: 'codigo', name: 'codigo' },
                    { data: 'categoria', name: 'categoria' },
                    { data: 'estado', name: 'estado' },
                    { data: 'lugar', name: 'lugar' },
                    { data: 'fechaingreso', name: 'fechaingreso' },
                    { data: 'facturacompra', name: 'facturacompra' },
                    { data: 'fechasalida', name: 'fechasalida' },
                    { data: 'fechamantenimiento', name: 'fechamantenimiento' },
                    { data: 'fechadestruccion', name: 'fechadestruccion' },
                    { data: 'costomantenimiento', name: 'costomantenimiento' },
                    { data: 'fotourl', name: 'fotourl' }
                ]
            });
        });
    </script>
</body>
</html>

</body>
</html>
