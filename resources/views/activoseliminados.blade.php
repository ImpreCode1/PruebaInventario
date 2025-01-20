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




        body {
    font-family: Arial, sans-serif;
    display: flex;
    overflow:scroll;

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
    position: relative;
    right: 35px;
}

.sidebar ul li a:hover {
    background-color: #575757; /* Cambia el fondo solo al pasar el ratón */
}

.content {
    flex: 1; /* Ocupa el espacio restante */
    padding: 20px;
    background-color: #f4f4f4;
    overflow: auto;
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

.devol{
    position: relative; /* Para que el SVG se posicione relativo a este contenedor */
    padding-left: 30px; /* Espacio para que el texto no se superponga al SVG */
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
</div>
</body>

</html>
