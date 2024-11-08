<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/mantenimiento.css">

    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/assets/css/inicioadmin.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


</head>
<body>
    <div class="menu_lateral">
        <label for="btn-nav" class="btn-nav"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="btn-nav">

        <nav>
            <ul class="navigation">
                <li><a href="inicioadmin"  > Inicio  <img src="/assets/Recursos/inicio.png" alt="registro activo" class="inicioadm" width="20%"> </a> </li>


            </ul>

        </nav>

    </div>
    <div>
        <div class="tablas">
        <table id="tabla" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Factura</th>
                    <th>fecha de mantenimiento</th>
                    <th>Valor mantenimiento</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>

                </tr>

            </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabla').DataTable();
        });
    </script>
</body>
</html>
