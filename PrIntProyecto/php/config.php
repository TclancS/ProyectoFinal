<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'proyecto_autopartes');

    try {
        $connection = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
    } catch (PDOException $e) {
        exit("Error de conexión: " . $e->getMessage());
    }
?>
