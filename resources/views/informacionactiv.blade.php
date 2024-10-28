<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/infoactivo.css">
</head>


{{-- menu lateral --}}
<div class="menu_lateral">
    <label for="btn-nav" class="btn-nav"><i class="fas fa-bars">></i></label>
    <input type="checkbox" id="btn-nav">

    <nav>
        <ul class="navigation">
            <li><a href="inicioadmin"  > Inicio  <img src="/assets/Recursos/inicio.png" alt="registro activo" class="inicioadm" width="20%"> </a> </li>


        </ul>

    </nav>

</div>
<div>
    <nav class="navegation">

        <h1>INFORMACION COMPLETA DEL ACTIVO</h1>
                </nav>
</div>
{{-- fin menu lateral --}}
{{-- </header> --}}




{{-- informacion del enser  --}}
<div class="card">
    <img src="/assets/Recursos/logoimpre.png" alt="Imagen del activo" class="card-image" width="50%" height="50%">
    <div class="card-content">
        <p><strong>Nombre:</strong> <span id="nombre">Ejemplo Nombre</span></p>
        <p><strong>Descripción:</strong> <span id="descripcion">Ejemplo Descripción</span></p>
        <p><strong>Código:</strong> <span id="codigo">Ejemplo Código</span></p>
        <p><strong>Categoría:</strong> <span id="categoria">Ejemplo Categoría</span></p>
        <p><strong>Estado:</strong> <span id="estado">Ejemplo Estado</span></p>
        <p><strong>Lugar:</strong> <span id="lugar">Ejemplo Lugar</span></p>
        <p><strong>Fecha de Ingreso:</strong> <span id="fechalingreso">Ejemplo Fecha Ingreso</span></p>
        <p><strong>Factura de Compra:</strong> <span id="facturacompra">Ejemplo Factura</span></p>
        <p><strong>Fecha de Salida:</strong> <span id="fechasalida">Ejemplo Fecha Salida</span></p>
        <p><strong>Fecha de Mantenimiento:</strong> <span id="fechamantenimiento">Ejemplo Fecha Mantenimiento</span></p>
        <p><strong>Costo de Mantenimiento:</strong> <span id="costomantenimiento">Ejemplo Costo</span></p>
    </div>
    <a href="informacionactiv"><button class="info-btn">informacion de mantenimientos</button></a>  <a href="informacionactiv"><button class="info-btn">Editar</button></a><a href="informacionactiv"><button class="info-btn">eliminar</button></a>
</div>
{{-- fin fragmento de codigo de informacion del enser --}}

</body>

</html>
