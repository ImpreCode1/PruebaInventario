<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/registroactivos.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    {{-- inicio menu --}}
    <div class="menu_lateral">
        <label for="btn-nav" class="btn-nav"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="btn-nav">

        <nav>
            <ul class="navigation">
                <li><a href="inicioadmin" class="crear_activo">inicio<img src="/assets/Recursos/inicio.png"
                            alt="registro activo" class="cre_act" width="18%"> </a> </li>


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
                    <input type="file" id="fotourl" name="fotourl" accept="image/*" value="{{ old('fotourl') }}">
                </div>
                <div class="input-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ejemplo Nombre"
                        value="{{ old('nombre') }}">
                    @error('nombre')
                        <br>
                        <span> saddsdssaddsa{{ $message }}</span>

                        <br>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Ejemplo Descripción">{{ old('descripcion') }}</textarea>
                </div>
                <div class="input-group">
                    <label for="codigo">Código:</label>
                    <input type="text" id="codigo" name="codigo" placeholder="Ejemplo Código"
                        value="{{ old('codigo') }}" max="10">
                </div>
                <div class="input-group">
                    <label for="categoria">Categoría:</label>
                    <select name="categoria" id="categoria" required="" value ="{{ old('categoria') }}">
                        <option value="" disabled selected>Seleccionar categoría</option>
                        @foreach ($categoria as $category)
                            <option value="{{ $category->id_codigo }}">{{ $category->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group">
                    <label for="estado">Estado:</label>
                    <select type="text" id="estado" name="estado" placeholder="Ejemplo Estado" required>
                        {{-- <option>{{$activo->estado}}</option> --}}
                        <option>Buen estado</option>
                        <option>Mal estado</option>
                        <option>En mantenimiento</option>
                        <option>Destruccion</option>
                    </select>

                </div>
                <div class="input-group">
                    <label for="lugar">Lugar:</label>
                    <input type="text" id="lugar" name="lugar" placeholder="Ejemplo Lugar" required
                        value="{{ old('lugar') }}">
                </div>
                <div class="input-group">
                    <label for="fechaIngreso">Fecha de Ingreso:</label>
                    <input type="date" id="fechaingreso" required name="fechaingreso"
                        value="{{ old('fechaingreso') }}">
                </div>
                <div class="input-group">
                    <label for="factura">Nro Factura de Compra:</label>
                    <input type="text" id="facturacompra" name="facturacompra" required placeholder="Ejemplo Factura"
                        value="{{ old('facturacompra') }}">
                </div>
                <div class="input-group">
                    <label for="fechaSalida">Fecha de Salida:</label>
                    <input type="date" id="fechasalida" name="fechasalida" value="{{ old('fechasalida') }}">
                </div>

                <button type="submit">Registrar Artículo</button>
            </form>
        </div>

        </script>
    </body>

    </html>
    </div>
    </form>
