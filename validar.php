<?php
include('conexion.php');
$con=conectar();
$email=$_GET['email'];
$contraseña=$_GET['contraseña'];
session_start();
$_SESSION['email']=$email;



$consulta="SELECT*FROM formulario where email='$email' and contraseña='$contraseña'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("Location: index.html");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <?php
}
