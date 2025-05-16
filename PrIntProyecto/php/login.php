<?php
include('config.php');
session_start();

if (isset($_POST['login'])) {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    
    $query = $connection->prepare("SELECT * FROM usuarios WHERE correo = :correo");
    $query->bindParam(":correo", $correo, PDO::PARAM_STR);
    $query->execute();

    $usuario = $query->fetch();

    if (!$usuario) {
        echo '<p class="error">Correo no encontrado</p>';
    } else {
        if (password_verify($contrasena, $usuario['contrasena'])) {
            
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['usuario'];

            
            header("Location: ../listadodb.php");
            exit(); 

        } else {
            echo '<p class="error">Contraseña incorrecta</p>';
        }
    }
}
?>
