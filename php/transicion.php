<?php
include("conexion.php");
$con=conectar();
$id_item=$_GET['id_item'];
$id_user=$_GET['id_user'];

$sql="INSERT INTO proceso_compra VALUES ('$id_item','$id_user')";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: checkout.php?id_item=$id_item&id=$id_user");
}

?>