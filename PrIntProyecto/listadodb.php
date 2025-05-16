<?php
session_start(); 
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilolista.css">
    <script src="Js/script.js"></script>
    
    <title>Listado</title>
</head>
<body class="listado-body">
    <main>
     <header>
        <img src="img/parts-plus-glow2.png" height="200" id="encabezado"> <!--logo empresa-->
    </header>
               <div class="sticky-menu">
            
                <input type="checkbox" id="menu-toggle">
                    <label for="menu-toggle" class="menu-icon">&#9776;</label>
                        
                    <ul class="menu">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
                        <li><a href="mapas.htm">Mapa De Sitio</a></li>
                        <li><a href="catalogoauto.php">Catalogo</a></li>
                        <li><a href="login.html">Ingresar (Empleados)</a></li>
                    </ul>
            </div>
    <center>
        <table class="listado-tabla" border=0>
            <thead class="listado-thead">
                <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>No. Parte</th>
                    <th>Aplicacion</th>
                    <th>Precio</th>
                    <th>Foto</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <!--Aqui inicia la lectura de los datos-->
            <tbody class="listado-tbody">
                <?php
                include("php/conexion.php");
                $consulta = "SELECT * FROM autopartes";
                $resultado = $conexion->query($consulta);

                while($row=$resultado->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id'];  ?></td>
                    <td><?php echo $row['Producto'];  ?></td>
                    <td><?php echo $row['Marca'];  ?></td>
                    <td><?php echo $row['NoParte'];  ?></td>
                    <td><?php echo $row['Aplicacion'];  ?></td>
                    <td><?php echo $row['Precio'];  ?></td>

                    <td><img height="50px" src="data:image/jpeg;base64,<?php echo base64_encode($row['Foto']); ?>"></td>

                    
                    <td><a class="icono-link" href="php/modificar.php?id=<?php echo $row['id'];?>"><img height="35px" src="img/cam-sinf.png"></a></td>
                    <td><a class="icono-link" href="php/eliminar.php?id=<?php echo $row['id'];?>"><img height="35px" src="img/borr-sinf.png"></a></td>

                </tr>
            </tbody>
            <?php
                }
            ?>
        </table><br><br>
        <a href="php/agregar.php" class="btn-agregar">Agregar</a>
        <a href="register.html" class="btn-agregar">Crear cuenta nueva</a>


    </center>
</body><br><br>
            </main>
</html>