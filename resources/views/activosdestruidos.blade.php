<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/activosdestruidos.css">
    <title class="title_dist">Activos Destruidos</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f8f9fa;
            }
            .container {
                margin-top: 50px;
            }
            .table-striped tbody tr:nth-of-type(odd) {
                background-color: #e9ecef;
            }
            .table th, .table td {
                text-align: center;
                vertical-align: middle;

            }
            .table th{
                background-color: blue;
            }
            .table td {

                background-color:white ;
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
                    <li><a href="activoseliminados" class="Inicioadmin">activos destruidos<img
                                src="/assets/Recursos/basura.png" alt="usuario" width="20%" class="imageusuarios"></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="font_table">
    <div class="container">
        <h2 class="title_dist">Activos Destruidos</h2>
        <table id="productosTable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th style="">Identificación Sap</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Codigo</th>
                    <th>Categoria</th>
                    <th>Estado</th>
                    <th>Lugar</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Salida</th>
                    <th>Fecha de Destruccion</th>
                    <th>Numero de Acta de Destrucción</th>



                </tr>
            </thead>
            <tbody>
                <td>tergfsd</td>
                <td>fgdv</td>
                <td>terfd</td>
                <td>trefds</td>
                <td>tgerfds</td>
                <td>rgefsd</td>
                <td>rgewfsd</td>
                <td>rgef</td>
                <td>refds</td>
                <td>rewfdsa</td>
                <td>rewfdas</td>

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

</div>
    </body>
    </html>

</body>
</html>
