<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/registroactivos.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <style>
        .input-group {
          margin: 20px;
        }

        .nuevo-lugar {
          display: none; /* Inicialmente oculto */
          margin-top: 10px;
        }
      </style>
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
                    <label for="imagen">Codigo Interno:</label>
                    <input pattern="[A-Za-z0-9]+" title="Solo se permiten letras y números" type="text" id="sap" name="sap"  value="{{ old('sap') }}">
                </div>
                <div class="input-group">
                    <label for="nombre">Nombre:</label>
                    <input pattern="[A-Za-z0-9]+" title="Solo se permiten letras y números" type="text" id="nombre" name="nombre" placeholder="Ejemplo Nombre"
                        value="{{ old('nombre') }}">
                    @error('nombre')
                        <br>
                        <span> saddsdssaddsa{{ $message }}</span>

                        <br>
                    @enderror
                </div>
                <div class="input-group fixed-textarea">
                    <label for="descripcion">Descripción:</label>
                    <input pattern="[A-Za-z0-9]+" title="Solo se permiten letras y números" type="text" id="descripcion" name="descripcion" placeholder="Ejemplo Descripción">{{ old('descripcion') }}</input>
                </div>
                <div class="input-group">
                    <label for="codigo">Código:</label>
                    <input pattern="[A-Za-z0-9]+" title="Solo se permiten letras y números" type="text" id="codigo" name="codigo" placeholder="Ejemplo Código"
                        value="{{ old('codigo') }}" max="10">
                </div>
                <div class="input-group">
                    <label for="categoria">Categoría:</label>
                    <select name="categoria" id="categoria" required="" value ="{{ old('categoria') }}">
                        <option value="" disabled selected>Seleccionar Categoría</option>
                        @foreach ($categoria as $category)
                            <option value="{{ $category->id_codigo }}">{{ $category->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group">
                    <label for="estado">Estado:</label>
                    <select type="text" id="estado" name="estado" placeholder="Ejemplo Estado" required>

                        <option>Buen Estado</option>
                        <option>Mal Estado</option>
                        <option>En Mantenimiento</option>
                        <option>Destruccion</option>
                        <option>Otro</option>

                    </select>

                </div>
                <div class="input-group">
                    <label for="lugar">Lugar:</label>
                    <select id="lugar" name="lugar" required>
                      <option>Seleccione el Lugar</option>
                      <option>cota</option>
                      <option>Despachados</option>
                      <option>Cat</option>
                      <option>Post Venta</option>
                      <option>Click 80</option>
                      <option>Otro</option>
                    </select>
                  </div>

                  <!-- Campo para introducir el nuevo lugar -->
                  <div class="nuevo-lugar">
                    <label for="nuevoLugar">Especificar otro lugar:</label>
                    <input type="text" id="nuevoLugar" placeholder="Escribe tu lugar">
                    <button onclick="agregarLugar()">Agregar</button>
                  </div>

                  <script>
                    // Obtener los elementos del DOM
                    const selectLugar = document.getElementById("lugar");
                    const nuevoLugarInput = document.getElementById("nuevoLugar");
                    const nuevoLugarDiv = document.querySelector(".nuevo-lugar");

                    // Detectar cuando se selecciona "Otro" en el select
                    selectLugar.addEventListener("change", function() {
                      if (selectLugar.value === "Otro") {
                        // Mostrar el campo para escribir una nueva opción
                        nuevoLugarDiv.style.display = "block";
                      } else {
                        // Ocultar el campo si no se selecciona "Otro"
                        nuevoLugarDiv.style.display = "none";
                      }
                    });

                    // Función para agregar el nuevo lugar al select
                    function agregarLugar() {
                      const nuevoLugar = nuevoLugarInput.value.trim();

                      if (nuevoLugar) {
                        // Crear la nueva opción y agregarla al select
                        const nuevaOpcion = document.createElement("option");
                        nuevaOpcion.textContent = nuevoLugar;
                        selectLugar.appendChild(nuevaOpcion);

                        // Establecer la nueva opción seleccionada
                        selectLugar.value = nuevoLugar;

                        // Limpiar el campo de texto y ocultar el campo de entrada
                        nuevoLugarInput.value = "";
                        nuevoLugarDiv.style.display = "none";
                      } else {
                        alert("Por favor, ingresa un lugar válido.");
                      }
                    }
                  </script>
                <div class="input-group">
                    <label for="fechaIngreso">Fecha de Ingreso:</label>
                    <input type="date" id="fechaingreso" required name="fechaingreso"
                        value="{{ old('fechaingreso') }}">
                </div>
                <div class="input-group">
                    <label  for="factura">Nro Factura de Compra:</label>
                    <input pattern="[A-Za-z0-9]+" title="Solo se permiten letras y números" type="text" id="facturacompra" name="facturacompra" required placeholder="Ejemplo Factura"
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
