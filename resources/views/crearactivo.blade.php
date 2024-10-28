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
                <li><a href="" class="Crear__Categoria" > crear categoria  <img src="/assets/Recursos/crearactivo.png" alt="registro activo" class="cre_cat" width="13%"> </a> </li>
                <li><a href="crearactivo">registro activo <img src="/assets/Recursos/registrar_activo-removebg-preview.png" alt="registro activo" class="registactivo" width="20%"></a></li>
                <li><a href="" class="Registrador_Usuarios">registrar administrador <img src="/assets/Recursos/usuarios-removebg-preview.png" alt="usuario" width="20% "class  ="imageusuarios" ></a></li>

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
                <form class="formulario">
                    <div class="input-group">
                        <label for="imagen">Subir Imagen:</label>
                        <input type="file" id="imagen" name="imagen" accept="image/*" required>
                    </div>
                    <div class="input-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ejemplo Nombre" required>
                    </div>
                    <div class="input-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea id="descripcion" name="descripcion" placeholder="Ejemplo Descripción" required></textarea>
                    </div>
                    <div class="input-group">
                        <label for="codigo">Código:</label>
                        <input type="text" id="codigo" name="codigo" placeholder="Ejemplo Código" required>
                    </div>
                    <div class="input-group">
                        <label for="categoria">Categoría:</label>
                        <input type="text" id="categoria" name="categoria" placeholder="Ejemplo Categoría" required>
                    </div>
                    <div class="input-group">
                        <label for="estado">Estado:</label>
                        <input type="text" id="estado" name="estado" placeholder="Ejemplo Estado" required>
                    </div>
                    <div class="input-group">
                        <label for="lugar">Lugar:</label>
                        <input type="text" id="lugar" name="lugar" placeholder="Ejemplo Lugar" required>
                    </div>
                    <div class="input-group">
                        <label for="fechaIngreso">Fecha de Ingreso:</label>
                        <input type="date" id="fechaIngreso" name="fechaIngreso" required>
                    </div>
                    <div class="input-group">
                        <label for="factura">Factura de Compra:</label>
                        <input type="text" id="factura" name="factura" placeholder="Ejemplo Factura" required>
                    </div>
                    <div class="input-group">
                        <label for="fechaSalida">Fecha de Salida:</label>
                        <input type="date" id="fechaSalida" name="fechaSalida" required>
                    </div>
                    <div class="input-group">
                        <label for="fechaMantenimiento">Fecha de Mantenimiento:</label>
                        <input type="date" id="fechaMantenimiento" name="fechaMantenimiento" required>
                    </div>
                    <div class="input-group">
                        <label for="costoMantenimiento">Costo de Mantenimiento:</label>
                        <input type="number" id="costoMantenimiento" name="costoMantenimiento" placeholder="Ejemplo Costo" required>
                    </div>
                    <button type="submit">Registrar Artículo</button>
                </form>
            </div>
        </body>
        </html>
    </div>
</form>
