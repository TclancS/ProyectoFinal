<?php
include("conexion.php");
$id = $_REQUEST['id'];
echo $id;
$consulta = "DELETE FROM autopartes WHERE id = '$id' ";
echo $consulta;
$resultado = $conexion->query($consulta);


if($conexion->query($consulta)=== TRUE){
    header("Location: ../listadodb.php");
}else{
    echo "Error:" .$consulta. "<br>" .$conexion->error; 
}

?>