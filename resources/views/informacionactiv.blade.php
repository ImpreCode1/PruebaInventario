<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/infoactivo.css">
    {{-- link barcode --}}
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.3/dist/JsBarcode.all.min.js"></script>

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
    <form method="POST" action="{{ route('activo.update') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div>
            <div class="image-container" style="display: flex; justify-content: center;">
                <img src="{{ asset($activo->fotourl) }}" alt="Imagen del activo" class="card-image" style="width: 200px; height: auto;">
            </div>
            <input id="" type="file" name="fotourl" accept="image/*" />
        </div>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Código de Barras</title>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.3/dist/JsBarcode.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        .card-content {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="card-content">
        <p><strong>Nombre:</strong> <span><input class="diseño_input" type="text" name="nombre" value="{{ $activo->nombre }}" /></span></p>
        <p><strong>Código:</strong> <span><input class="diseño_input" type="text" name="codigo" value="{{ $activo->codigo }}" id="codigo" /></span></p>
        <p><strong>Descripción:</strong> <span><input class="diseño_input" type="text" name="descripcion" value="{{ $activo->descripcion }}" /></span></p>
        <p><strong>Categoría:</strong> <span><input class="diseño_input" disabled type="text" name="categoria" value="{{ $activo->categoria }}" /></span></p>
        <div class="input-group">
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" class="diseño_input">
                <option value="estado">{{$activo->estado}}</option>
                <option value="buen estado" {{ $activo->estado == 'buen estado' ? 'selected' : '' }}>Buen estado</option>
                <option value="mal estado" {{ $activo->estado == 'mal estado' ? 'selected' : '' }}>Mal estado</option>
                <option value="en mantenimiento" {{ $activo->estado == 'en mantenimiento' ? 'selected' : '' }}>En mantenimiento</option>
                <option value="destruccion" {{ $activo->estado == 'destruccion' ? 'selected' : '' }}>Destrucción</option>
            </select>
        </div>
        <p><strong>Lugar:</strong> <span><input class="diseño_input" type="text" name="lugar" value="{{ $activo->lugar }}" id="lugar" /></span></p>
        <p><strong>Fecha de Ingreso:</strong> <span><input type="date" name="fechaingreso" value="{{ $activo->fechaingreso }}" /></span></p>
        <p><strong>Nro factura compra:</strong> <span><input class="diseño_input" type="text" name="facturacompra" value="{{ $activo->facturacompra }}" /></span></p>
        <p><strong>Fecha de Salida:</strong> <span><input class="diseño_input" type="date" name="fechasalida" value="{{ $activo->fechasalida }}" /></span></p>
        <p style="display: none;"><strong>Id:</strong> <span><input class="diseño_input" type="number" name="id" value="{{ $activo->ID }}" /></span></p>
        <p><strong>Código de Barras:</strong></p>
        <div id="barcode-container">
            <svg id="barcode"></svg>
            <p id="lugar-text"></p>
        </div>
    </div>
    <div class="descargar_pdf">
    <button onclick="downloadPDF()" class="btn btn-primary" ><img src="/assets/Recursos/imprimir.png" alt="imprimir" width="30px" style="cursor: pointer;"></button>
</div>
    <br>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const codigo = document.querySelector('input[name="codigo"]').value;
            const lugar = document.querySelector('input[name="lugar"]').value;

            JsBarcode("#barcode", codigo, {
                format: "CODE128",
                lineColor: "#0aa",
                width: 2,
                height: 100,
                displayValue: true
            });

            document.getElementById('lugar-text').textContent = lugar;
        });

        function downloadPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            const barcodeContainer = document.getElementById('barcode-container');
            const barcodeSVG = barcodeContainer.querySelector('svg');
            const lugarText = document.getElementById('lugar-text').textContent;

            // Convertir SVG a imagen
            const svgData = new XMLSerializer().serializeToString(barcodeSVG);
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            const img = new Image();
            img.src = 'data:image/svg+xml;base64,' + btoa(svgData);

            img.onload = function() {
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);

                const imgData = canvas.toDataURL('image/png');

                doc.text("Código de Barras:", 10, 10);
                doc.addImage(imgData, "PNG", 10, 20, 100, 50);
                doc.text(`Lugar: ${lugarText}`, 10, 80);

                doc.save("codigo_de_barras.pdf");
            }
        }
    </script>
</body>
</html>

        <button type="submit" class="info-btn" style="cursor: pointer">Guardar Cambios</button>

    </form>



    <a href="{{ route('ver.mantenimiento', $activo->ID) }}" class="info-btn">
        Información de mantenimientos
    </a>

    <form method="POST" action="{{ route('activo.delete', $activo->ID) }}" class="btn-eliminar">
        @csrf
        @method('DELETE')
        <button type="submit" class="info-btn" style="cursor:pointer">Eliminar</button>
    </form>
</div>





{{-- fin fragmento de codigo de informacion del enser --}}
</body>

</html>
