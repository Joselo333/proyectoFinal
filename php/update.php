<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$rut=$_POST['rut'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$nacimiento=$_POST['nacimiento'];
$email=$_POST['email'];
$ID=$_POST['ID'];

$sql="UPDATE formulario SET  rut='$rut',nombre='$nombre',usuario='$usuario',direccion='$direccion',sexo='$sexo',email='$email',apellidos='$apellidos' WHERE ID='$ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: buscar.php");
    }else {
        echo "<script> alert ('Ese Rut/Usuario/Email ya esta/n registrado/s.'); window.location='actualizar.php?id=$ID' </script>";
    }
    
?>