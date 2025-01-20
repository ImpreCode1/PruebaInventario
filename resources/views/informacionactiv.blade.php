<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información activo</title>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/infoactivo.css">
    {{-- link barcode --}}
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.3/dist/JsBarcode.all.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<style>

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
{{-- menu lateral --}}
<div class="sidebar">
    <h2>Activos Impresistem</h2>
    <ul>

        <li><a href="/inicioadmin" class="devol"> <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M1 11C.08 11-.352 9.863.336 9.253l9-8a1 1 0 0 1 1.328 0l9 8C20.352 9.863 19.92 11 19 11h-1v7a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-7zm6 6v-5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v5h3v-7a1 1 0 0 1 .512-.873L10 3.337l-6.512 5.79A1 1 0 0 1 4 10v7zm2 0v-4h2v4z" clip-rule="evenodd"/></svg>
            Regresar al Inicio </a></li>

    </ul>
</div>

<div>
    <nav class="navegation">

        <h1>INFORMACIÓN COMPLETA DEL ACTIVO</h1>
    </nav>
</div>
{{-- fin menu lateral --}}
{{-- </header> --}}
<div class="content">

<div class="card">
    <form method="POST" id="Guardar_Cambios" action="{{ route('activo.update') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div>
            <div class="image-container" style="display: flex; justify-content: center;">
                <img src="{{ asset($activo->fotourl) }}" alt="Imagen del activo" class="card-image"
                    style="width: 350px;">
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
                <p><strong>Codigo Interno SAP:</strong> <span><input pattern="[A-Za-z0-9]+"
                            title="Solo se permiten letras y números" class="diseño_input" type="text" name="sap"
                            value="{{ $activo->sap }}" /></span></p>
                <p><strong>Nombre:</strong> <span><input pattern="[A-Za-z0-9]+"
                            title="Solo se permiten letras y números" class="diseño_input" type="text" name="nombre"
                            value="{{ $activo->nombre }}" /></span></p>
                <p><strong>Código:</strong> <span><input pattern="[A-Za-z0-9]+"
                            title="Solo se permiten letras y números" class="diseño_input" type="text" name="codigo"
                            max="10" value="{{ $activo->codigo }}" id="codigo" /></span></p>
                <p><strong>Descripción:</strong> <span><input pattern="[A-Za-z0-9]+"
                            title="Solo se permiten letras y números" class="diseño_input" type="text"
                            name="descripcion" value="{{ $activo->descripcion }}" /></span></p>
                <p><strong>Categoría:</strong> <span><input class="diseño_input" disabled type="text"
                            name="categoria" value="{{ $activo->categoria }}" /></span></p>
                <div class="input-group">
                    <label for="estado">Estado:</label>
                    <select id="estado" name="estado" class="diseño_input">
                        <option value="estado">{{ $activo->estado }}</option>
                        <option value="buen estado" {{ $activo->estado == 'buen estado' ? 'selected' : '' }}>Buen Estado
                        </option>
                        <option value="mal estado" {{ $activo->estado == 'mal estado' ? 'selected' : '' }}>Mal Estado
                        </option>
                        <option value="en mantenimiento" {{ $activo->estado == 'en mantenimiento' ? 'selected' : '' }}>
                            En mantenimiento</option>
                        <option value="destruccion" {{ $activo->estado == 'destruccion' ? 'selected' : '' }}>
                            Destrucción</option>
                    </select>
                </div>
                <p><strong>Lugar:</strong> <span><select class="diseño_input" name="lugar" id=""
                            value="{{ $activo->lugar }}" id="lugar">

                            <option value="Cota">Cota</option>
                            <option value="Despachos">Despachos</option>
                            <option value="Cat">Cat</option>
                            <option value="Post Venta">Post Venta</option>
                            <option value="San Fernando">San Fernando</option>
                            <option value="Click 80">Click 80</option>
                            <option value="Otro">Otro</option>
                        </select></span></p>

                <p><strong>Fecha de Ingreso:</strong> <span><input type="date" name="fechaingreso"
                            value="{{ $activo->fechaingreso }}" /> </span></p>
                <p><strong>Nro Factura Compra:</strong> <span><input pattern="[A-Za-z0-9]+"
                            title="Solo se permiten letras y números" class="diseño_input" type="text"
                            name="facturacompra" value="{{ $activo->facturacompra }}" /></span></p>
                <p><strong>Fecha de Salida:</strong> <span><input class="diseño_input" type="date"
                            name="fechasalida" value="{{ $activo->fechasalida }}" /></span></p>
                <p><strong>Nro Acta Destrucción:</strong> <span><input pattern="[A-Za-z0-9]+"
                            title="Solo se permiten letras y números" class="diseño_input" type="text"
                            name="actadestruccion" value="{{ $activo->actadestruccion }}" /></span></p>
                <p style="display: none;"><strong>Id:</strong> <span><input class="diseño_input" type="number"
                            name="id" value="{{ $activo->ID }}" /></span></p>
                <p><strong>Código de Barras:</strong></p>
                <div id="barcode-container">
                    <svg id="barcode"></svg>
                    <p id="lugar-text"></p>
                </div>
            </div>
            <div class="descargar_pdf">
                <button onclick="downloadPDF()" class="btn btn-primary"><img src="/assets/Recursos/imprimir.png"
                        alt="imprimir" width="30px" style="cursor: pointer;"></button>
            </div>
            <br>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const codigo = document.querySelector('input[name="codigo"]').value;
                    const lugar = document.querySelector('select[name="lugar"]').value;

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
                    const {
                        jsPDF
                    } = window.jspdf;
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
            <button type="submit" id="guardarCambiosBtn" class="info-btn" style="cursor: pointer">Guardar
                Cambios</button>
    </form>


    {{-- destruccion btn --}}



    <a href="{{ route('ver.mantenimiento', $activo->ID) }}" class="info-btn">
        Información de mantenimientos
    </a>

    <form id="eliminarActivoForm" method="POST" action="{{ route('activo.delete', $activo->ID) }}"
        class="btn-eliminar"> @csrf @method('DELETE') <button type="submit" class="info-btn" id="eliminarActivoBtn"
            style="cursor:pointer">Eliminar</button> </form>
</div>
{{-- inicio alerta guardar cambios --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const guardarCambiosButton = document.getElementById('guardarCambiosBtn');

        guardarCambiosButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevenir el envío del formulario inmediato

            // Seleccionar el formulario
            const form = document.getElementById('Guardar_Cambios');

            // Mostrar SweetAlert para confirmar
            Swal.fire({
                title: "¿Quieres guardar los cambios?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Guardar",
                denyButtonText: `no guardar`
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Guardado!", "", "success").then(() => {
                        form
                            .submit(); // Enviar el formulario después de la confirmación
                    });
                } else if (result.isDenied) {
                    Swal.fire("No se guardarón los cambios", "", "info");
                }
            });
        });
    });
</script>
{{-- fin alerta guardar cambios --}}
{{-- script eliminar activo --}}
<script src="/assets/js/informacion.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const eliminarActivoButton = document.getElementById('eliminarActivoBtn');
        eliminarActivoButton.addEventListener('click', function(event) {
            event.preventDefault();
            const form = document.getElementById('eliminarActivoForm');
            Swal.fire({
                title: "¿Estas seguro?",
                text: "¿Estas seguro de eliminar este activo?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si,Eliminar!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Eliminado!",
                        text: "Eliminado correctamente.",
                        icon: "success"
                    }).then(() => {
                        form.submit();
                    });
                }
            });
        });
    });
</script>

</div>
</body>

</html>
