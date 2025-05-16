<?php
include('config.php');
session_start();

if (isset($_POST['register'])) {
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena_hash = password_hash($contrasena, PASSWORD_BCRYPT);

    
    $query = $connection->prepare("SELECT * FROM usuarios WHERE correo = :correo");
    $query->bindParam(":correo", $correo, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">El correo ya está registrado</p>';
    } else {
        
        $query = $connection->prepare("INSERT INTO usuarios (usuario, contrasena, correo) VALUES (:usuario, :contrasena_hash, :correo)");
        $query->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $query->bindParam(":contrasena_hash", $contrasena_hash, PDO::PARAM_STR);
        $query->bindParam(":correo", $correo, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            echo '<p class="success">¡Registro exitoso!</p>';
        } else {
            echo '<p class="error">Error al registrar</p>';
        }
    }
}
?>
