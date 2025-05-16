<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de datos</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/estilomodif.css">
    <script src="../Js/script.js"></script>
    <script src="../Js/script2.js"></script>
    
</head>
<body class="editar-body">
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
        <main class="editar-main">
            <?php
                include("conexion.php");
                $id = $_REQUEST['id'];
                $consulta = "SELECT * FROM autopartes WHERE id = '$id'";
                $resultado = $conexion->query($consulta);
                $row = $resultado->fetch_assoc();
            ?>
            <h1 class="editar-titulo">Actualización de datos</h1>
            <form class="editar-form" action="actualizar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="editar-campo">
                    <label>Producto</label>
                    <input type="text" name="Producto" value="<?php echo $row['Producto']; ?>" required>
                </div>
                <div class="editar-campo">
                    <label>Marca</label>
                    <input type="text" name="Marca" value="<?php echo $row['Marca']; ?>" required>
                </div>
                <div class="editar-campo">
                    <label>No. Parte</label>
                    <input type="text" name="NoParte" value="<?php echo $row['NoParte']; ?>" required>
                </div>
                <div class="editar-campo">
                    <label>Aplicación</label>
                    <input type="text" name="Aplicacion" value="<?php echo $row['Aplicacion']; ?>" required>
                </div>
                <div class="editar-campo">
                    <label>Precio</label>
                    <input type="text" name="Precio" value="<?php echo $row['Precio']; ?>" required>
                </div>
                <div class="editar-campo">
                    <label>Foto actual</label>
                    <img class="editar-imagen" src="data:image/jpeg;base64,<?php echo base64_encode($row['Foto']); ?>">
                </div>
                <div class="editar-campo">
                    <label for="Foto">Actualizar Foto</label>
                    <input type="file" name="Foto" id="Foto" accept="image/*" hidden>
                    <label for="Foto" class="btn-elegir-foto">Elegir foto</label>
                    <span id="nombre-archivo">Ningún archivo seleccionado</span>
                </div>
                <div class="editar-botones">
                    <input class="btn-actualizar" type="submit" value="Actualizar">
                    <a class="btn-cancelar" href="../listadodb.php">Cancelar</a>
                </div>
            </form>
        </main>
    </main>
</body>
</html>
