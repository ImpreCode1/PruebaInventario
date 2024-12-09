<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/activoseliminados.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">

    <title>Activos Eliminados</title>
</head>

<body>








<div class="menu_lateral">
        <label for="btn-nav" class="btn-nav"></label>
        <input type="checkbox" id="btn-nav">
        <nav class="navegador">
            <ul class="navigation">
                <li><a href="inicioadmin" class="Activos_Destruidos">inicio<img src="/assets/Recursos/inicio.png"
                            alt="usuario" width="20%" class="imageusuarios"></a></li>
                <li><a href="activosdestruidos" class="Inicioadmin">activos destruidos...<img
                            src="/assets/Recursos/mesa.png" alt="usuario" width="15%" class="imageusuarios"></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="supercontainer">

            <h1><strong class="tituloeliminar"> Activos Eliminados</strong></h1>

        <div class="contenedormayor">
            <table id="table" class="table table-striped" style="width:100%" >
                <thead>
                    <tr>
                        <th style="background-color:#007bff">identificacion SAP</th>
                        <th style="background-color:#007bff">codigo</th>
                        <th style="background-color:#007bff">Nombre Activo</th>
                        <th style="background-color:#007bff">Descripción</th>
                        <th style="background-color:#007bff">Categoria</th>
                        <th style="background-color:#007bff">Fecha Ingreso</th>
                        <th style="background-color:#007bff">Fecha salida</th>
                        <th style="background-color:#007bff">Nro Factura Compra</th>
                         <th style="background-color:#007bff">Nro acta destrucción</th>
                        <th style="background-color:#007bff">Fecha destrucción</th>

                        {{-- <th style="background-color:#007bff">Fecha eliminación del activo</th> --}}
                    </tr>
                </thead>
                <tbody>
                    {{-- Aquí se insertarán las filas dinámicamente mediante DataTables --}}
                </tbody>
            </table>
        </div>
    </div>

    <!-- Incluye jQuery y DataTables -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

    <!-- Inicializa DataTable -->
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('activosdestruidos.data') }}',
                columns: [
                    { data: 'sap', name: 'sap' },
                    { data: 'codigo', name: 'codigo' },
                    { data: 'nombre', name: 'nombre' },
                    { data: 'descripcion', name: 'descripcion' },
                    { data: 'categoria', name: 'categoria' },
                    { data: 'fechaingreso', name: 'fechaingreso' },
                    { data: 'fechasalida', name: 'fechasalida' },
                    { data: 'facturacompra', name: 'facturacompra' },
                    // { data: 'fechadestruccion', name: 'fechadestruccion' },
                    { data: 'actadestruccion', name: 'actadestruccion' },

                    { data: 'deleted_at', name: 'deleted_at' }
                ]
            });
        });
    </script>
</body>

</html>
