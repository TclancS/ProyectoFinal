<?php
include("conexion.php");

if (!isset($_GET['id'])) {
    die("ID del registro no especificado.");
}

$id = intval($_GET['id']); 

$Producto = $_POST['Producto'] ?? '';
$Marca = $_POST['Marca'] ?? '';
$NoParte = $_POST['NoParte'] ?? '';
$Aplicacion = $_POST['Aplicacion'] ?? '';
$Precio = $_POST['Precio'] ?? '';

if (isset($_FILES['Foto']) && $_FILES['Foto']['error'] === UPLOAD_ERR_OK) {
    $Foto = file_get_contents($_FILES['Foto']['tmp_name']);

    $stmt = $conexion->prepare("UPDATE autopartes SET Producto = ?, Marca = ?, NoParte = ?, Aplicacion = ?, Precio = ?, Foto = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $Producto, $Marca, $NoParte, $Aplicacion, $Precio, $Foto, $id);
} else {
    
    $stmt = $conexion->prepare("UPDATE autopartes SET Producto = ?, Marca = ?, NoParte = ?, Aplicacion = ?, Precio = ? WHERE id = ?");
    $stmt->bind_param("sssssi", $Producto, $Marca, $NoParte, $Aplicacion, $Precio, $id);
}

if ($stmt->execute()) {
    header("Location: ../listadodb.php"); 
    exit();
} else {
    echo "Error al actualizar: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
