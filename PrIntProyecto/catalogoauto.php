<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="Js/script.js"></script>
</head>
<body>
<main>
    <header>
        <img src="img/logo-removebg-preview.png" height="200" id="encabezado"> <!--logo empresa-->
    </header>

<div class="sticky-menu">
            
            <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="menu-icon">&#9776;</label>
           
    <ul class="menu">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="catalogoauto.php">Catalogo</a></li>
        <li><a href="listadodb.php">Listado</a></li>
        <li><a href=".html">Boton</a></li>
        <li class="submenu">
            <label class="sub-menu-label">Menu &#9662;</label>
            <ul class="sub-menu">
                <li><a href="#">Catalogo</a></li>
                <li><a href="#">Boton</a></li>
                <li><a href="#">Boton</a></li>
                <li><a href="#">Boton</a></li>

            </ul>
        </li>

    </ul>
</div>

    <div class="container">
        <h1 class="text-center">Catalogo Autopartes</h1>
        <hr>
        <div class="row" id="items"></div>
    </div>

    <template id="template-card">
  <div class="card">
    <img src="" alt="Imagen del producto">
    <h3></h3>
    <h4></h4>
    <p class="marca"></p>
    <p class="numero-parte"></p>
    <p class="clasificacion"></p>
  </div>
</template>

<div id="items"></div>


    <script src="Js/app.js"></script>
</main>

<a href="" class="float-QR">
        <img class="img-w" src="img/QR-git.png">
        </a>
        
        <a href="" class="float-QR">
        <img class="img-w" src="img/QR-Sitio.png">
        </a>

</body>



</html>