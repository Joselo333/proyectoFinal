<?php
include('conexion.php');
$con=conectar();
$email=$_GET['email'];
$contraseña=$_GET['contraseña'];
session_start();
$_SESSION['email']=$email;


$consulta="SELECT * FROM formulario where email='$email' and contraseña='$contraseña'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);
$row=mysqli_fetch_array($resultado);

if($filas){
  if($email == 'administrador@gmail.com'){

    header("Location: gestion.php?email=administrador@gmail.com");

  }else {
      $id = $row['ID'];
      header("Location: ../index.php?id=$id");
    }
}else{
  
  echo "<script> alert ('Las credenciales ingresadas no son validas. Por favor vuelva a intentarlo.'); window.location='login.php' </script>";
}
?>