<?php

include("conexion.php");
$con=conectar();

$ID=$_GET['id'];


$sql="DELETE FROM formulario  WHERE ID='$ID'";
$query=mysqli_query($con,$sql);

    if($query){
        echo "<script> alert ('Se elimino correctamente el usuario.'); window.location='buscar.php' </script>";
    }else {
        echo "<script> alert ('No se elimino el usuario.'); window.location='buscar.php' </script>";
    }
?>
