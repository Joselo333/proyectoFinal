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
$edad=$_POST['edad'];
$email=$_POST['email'];
$ID=$_POST['ID'];


$sql="INSERT INTO formulario VALUES('$nombre','$apellidos','$rut','$usuario','$contraseña','$direccion','$sexo','$nacimiento','$edad','$email','$ID')";
$query= mysqli_query($con,$sql);

if($query){
    echo "<script> alert ('Su registro se ha completado satisfactoriamente.'); window.location='login.php' </script>";
}else {
    
}
/*if($nombre == NULL or  $apellidos == NULL or $rut == NULL or $usuario == NULL or $contraseña == NULL or $_POST['direccion'] == NULL or $_POST['sexo'] == NULL or $_POST['nacimiento'] == NULL or $_POST['sexo'] == NULL or $_POST['edad'] or $_POST['email'] == NULL)
{
    echo "<script> alert ('Su registro no se llevado a cabo por no completar todos los campos requeridos. Por favor intente nuevamente.'); window.location='login.php' </script>";
    exit();
}else {
    if($query){
        $sql="INSERT INTO formulario VALUES('$nombre','$apellidos','$rut','$usuario','$contraseña','$direccion','$sexo','$nacimiento','$edad','$email','$ID')";
        $query= mysqli_query($con,$sql);
        echo "<script> alert ('Su registro se ha completado satisfactoriamente.'); window.location='login.php' </script>";
    }
}
?>*/
