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


$sql="INSERT INTO formulario VALUES('$nombre','$apellidos','$rut','$usuario','$contraseña','$direccion','$sexo','$nacimiento','$edad','$email','$ID')";
$query= mysqli_query($con,$sql);

if($query){
    echo "<script> alert ('Su registro se ha completado satisfactoriamente.'); window.location='login.php' </script>";
}else {
    echo "<script> alert ('Usuario ya se encuentra registrado.'); window.location='registro.php' </script>";
}

