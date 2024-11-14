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
{{-- </header> --}}


<div class="card">
    {{-- informacion del enser  --}}
    <form method="POST" action="{{ route('activo.update', $activo->ID) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <img src="{{ asset($activo->fotourl) }}" alt="Imagen del activo" class="card-image" width="500px"
                height="auto">
            <input type="file" name="fotourl" accept="image/*" />
        </div>
        <div class="card-content">
            <p>
                <strong>Nombre:</strong>
                <span><input type="text" name="nombre" value="{{ $activo->nombre }}" /></span>
            </p>
            <p>
                <strong>Código:</strong>
                <span><input type="text" name="codigo" value="{{ $activo->codigo }}" /></span>
            </p>
            <p>
                <strong>Descripcion:</strong>
                <span><input type="text" name="descripcion" value="{{ $activo->descripcion }}" /></span>
            </p>
            <p>
                <strong>Categoría:</strong> <span>{{ $activo->categoria }}"</span>
            </p>
            <p>
                <strong>Estado:</strong> <span>{{ $activo->estado }}</span>

            </p>
            <p>
                <strong>Lugar:</strong>
                <span><input type="text" name="lugar" value="{{ $activo->lugar }}" /></span>
            </p>
            <p>
                <strong>Fecha de Ingreso:</strong>
                <span><input type="date" name="fechaingreso" value="{{ $activo->fechaingreso }}" /></span>
            </p>
            <p>
                <strong>Factura de Compra:</strong>
                <span><input type="text" name="facturacompra" value="{{ $activo->facturacompra }}" /></span>
            </p>
            <p>
                <strong>Fecha de Salida:</strong>
                <span><input type="date" name="fechasalida" value="{{ $activo->fechasalida }}" /></span>
            </p>



        </div>

        <button type="submit" class="info-btn">Guardar Cambios</button>
    </form>

    <a href="{{ route('ver.mantenimiento', $activo->ID) }}" class="info-btn">
        Información de mantenimientos
    </a>

    <form method="POST" action="{{ route('activo.delete', $activo->ID) }}" class="btn-eliminar">
        @csrf
        @method('DELETE')
        <button type="submit" class="info-btn">Eliminar</button>
    </form>
</div>





{{-- fin fragmento de codigo de informacion del enser --}}
</body>

</html>
