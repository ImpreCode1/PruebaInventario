<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/registroactivos.css">
</head>

<body>
    {{-- inicio menu --}}
    <div class="menu_lateral">
        <label for="btn-nav" class="btn-nav"><i class="fas fa-bars">></i></label>
        <input type="checkbox" id="btn-nav">

        <nav>
            <ul class="navigation">
                <li><a href="inicioadmin" class="crear_activo" >inicio<img src="/assets/Recursos/inicio.png" alt="registro activo" class="cre_act" width="18%"> </a> </li>


            </ul>
        </nav>
    </div>
    <!-- fin menu -->


    <!-- containergrande -->
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="styles.css">
            <title>Formulario de Registro</title>
        </head>
        <body>
            <div class="containe">
                <h1>Registro de Artículo</h1>
                <form method="POST" action="{{ route('activo.register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <label for="imagen">Subir Imagen:</label>
                        <input type="file" id="fotourl" name="fotourl" accept="image/*" >
                    </div>
                    <div class="input-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ejemplo Nombre" >
                    </div>
                    <div class="input-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea id="descripcion" name="descripcion" placeholder="Ejemplo Descripción" ></textarea>
                    </div>
                    <div class="input-group">
                        <label for="codigo">Código:</label>
                        <input type="text" id="codigo" name="codigo" placeholder="Ejemplo Código" >
                    </div>
                    <div class="input-group">
                        <label for="categoria">Categoría:</label>
                        <select type="submit" id="categoria" name="categoria">
                            <option>M10</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="estado">Estado:</label>
                        <select type="text" id="estado" name="estado" placeholder="Ejemplo Estado" >
                            <option>seleccione estado</option>
                            <option>Buen estado</option>
                            <option>Mal estado</option>
                            <option>En mantenimiento</option>
                        </select>

                    </div>
                    <div class="input-group">
                        <label for="lugar">Lugar:</label>
                        <input type="text" id="lugar" name="lugar" placeholder="Ejemplo Lugar" >
                    </div>
                    <div class="input-group">
                        <label for="fechaIngreso">Fecha de Ingreso:</label>
                        <input type="date" id="fechaingreso" name="fechaingreso" >
                    </div>
                    <div class="input-group">
                        <label for="factura">Factura de Compra:</label>
                        <input type="text" id="facturacompra" name="facturacompra" placeholder="Ejemplo Factura" >
                    </div>
                    <div class="input-group">
                        <label for="fechaSalida">Fecha de Salida:</label>
                        <input type="date" id="fechasalida" name="fechasalida" required>
                    </div>
                    <div class="input-group">
                        <label for="fechaMantenimiento">Fecha de Mantenimiento:</label>
                        <input type="date" id="fechamantenimiento" name="fechamantenimiento" >
                    </div>
                    <div class="input-group">
                        <label for="costoMantenimiento">Costo de Mantenimiento:</label>
                        <input type="number" id="costomantenimiento" name="costomantenimiento" placeholder="Ejemplo Costo" >
                    </div>
                    <button type="submit">Registrar Artículo</button>
                </form>
            </div>
        </body>
        </html>
    </div>
</form>
