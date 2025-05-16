<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>REGISTRO de datos</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/estilolista.css">
    <link rel="stylesheet" href="../css/estiloagregar.css">
    <script src="../Js/script.js"></script>
    <script src="../Js/script2.js"></script>

</head>
<body class="registro-body">
    <main>
        <header>
            <img src="../img/parts-plus-glow2.png" height="200" id="encabezado"> <!--logo empresa-->
        </header>

                   <div class="sticky-menu">
            
                <input type="checkbox" id="menu-toggle">
                    <label for="menu-toggle" class="menu-icon">&#9776;</label>
                        
                    <ul class="menu">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
                        <li><a href="mapas.htm">Mapa De Sitio</a></li>
                        <li><a href="catalogoauto.php">Catalogo</a></li>
                        <li><a href="listadodb.php">Listado</a></li>
                        <li><a href="login.html">Ingresar (Empleados)</a></li>
                    </ul>
            </div>

    <main class="registro-main">
        
        <h1 class="registro-titulo">Registro de datos</h1>
        <form class="registro-form" action="guardar.php" method="POST" enctype="multipart/form-data">
            <ul>
                <li>
                    <h2 class="registro-subtitulo">Detalles</h2>
                    <span class="registro-nota">*Datos requeridos</span>
                </li>

                <li><label for="Producto">Producto</label>
                    <input type="text" name="Producto" placeholder="Producto" maxlength="30" required>
                </li>
                <li><label for="Marca">Marca</label>
                    <input type="text" name="Marca" placeholder="Marca" maxlength="30" required>
                </li>
                <li><label for="NoParte">No. Parte</label>
                    <input type="text" name="NoParte" placeholder="No. Parte" maxlength="30" required>
                </li>
                <li><label for="Aplicacion">Aplicación</label>
                    <input type="text" name="Aplicacion" placeholder="Aplicación" maxlength="50" required>
                </li>
                <li><label for="Precio">Precio</label>
                    <input type="text" name="Precio" placeholder="Precio" maxlength="50" required>
                </li>
                <li>
                    <label for="Foto">Foto</label>
                    <input type="file" name="Foto" id="Foto" accept="image/*" hidden>
                    <label for="Foto" class="btn-elegir-foto">Elegir foto</label>
                    <span id="nombre-archivo">Ningún archivo seleccionado</span>
                </li>

                <li class="registro-botones">
                    <input class="btn-submit" type="submit" value="Aceptar">
                    <a class="btn-regresar" href="../listadodb.php">Regresar</a>
                </li>
            </ul>
        </form>
    </main>
</main>
</body>

</html>