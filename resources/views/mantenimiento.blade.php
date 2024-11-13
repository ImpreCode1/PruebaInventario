<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/mantenimiento.css">

    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/inicioadmin.css">
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
                                <a href="" class="Crear__Mantenimiento"><strong>Registrar Mantenimiento</strong></a>
                            </div>
                        </ul>
        </nav>

    </div>


    <div class="ContenedorGrande">
        <table id="miTabla">
            <thead>
                <tr>
                    <th>Nombre activo</th>
                    <th>Factura</th>
                    <th>Descripción</th>
                    <th>Estado</th>

                </tr>
            </thead>
            <tbody>

                    <tr>
                        <td><strong>Nombre activo</strong></td>
                        <td><strong>Factura</strong></td>
                        <td><strong>Descripción</strong></td>
                        <td><strong>Estado</strong></td>
                        <td>


                                </div>
                            </a>
                        </td>
                    </tr>

            </tbody>
        </table>
    </div>

{{-- apartado modal --}}
<section class="modal">

    <div class="contenedor">
        <div class="contenido">

            <span> <a>
               <a href="" id="cerrar_boton" class="cerrar_boton"><img src="assets/Recursos/cerrar.png" width="50px"><span class="material-symbols-outlined">
           </span> </a>
               </div>
        <h1>impresistem</h1>
        <h2>Registrar Mantenimiento</h2>
        <div class="formulario">
            <div class="input-group">
                <label for="codigo">Factura:</label>
                <input type="file" id="url_fact" name="url_fact"
                    max="5" required>
            </div>
            <div class="input-group">
                <label for="nombre">inicio mantenimiento</label>
                <input type="date" id="Start" name="start" disabled>
            </div>
            <div class="input-group">
                <label for="nombre">descripción del mantenimiento</label>
                <input type="text" id="Descript" name="Descript">
            </div>
            <div class="input-group">
                <label for="nombre">fin mantenimiento</label>
                <input type="date" id="end" name="end"  disabled>
            </div>
            <button type="submit">Registrar categoría</button> <!-- Corrección en el botón -->
        </div>
    </div>
</section>
</form>
<script src="/assets/js/mantenimiento.js"></script>
</body>


</html>
