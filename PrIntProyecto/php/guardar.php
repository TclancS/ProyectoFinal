<?php
    include("conexion.php"); 

    if (isset($_FILES['Foto']) && $_FILES['Foto']['error'] == 0) {
        $Foto = file_get_contents($_FILES['Foto']['tmp_name']);
    } else {
        die("Error al subir la imagen. Asegúrate de seleccionar un archivo.");
    }

    $Producto = $_POST['Producto'];
    $Marca = $_POST['Marca'];
    $NoParte = $_POST['NoParte'];
    $Aplicacion = $_POST['Aplicacion'];
    $Precio = $_POST['Precio'];

    $stmt = $conexion->prepare("INSERT INTO autopartes (Producto, Marca, NoParte, Aplicacion, Precio, Foto) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $Producto, $Marca, $NoParte, $Aplicacion, $Precio, $Foto);

    if ($stmt->execute()) {
        header("Location: agregar.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
?>
