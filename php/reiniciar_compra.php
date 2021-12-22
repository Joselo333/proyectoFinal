<?php
include("conexion.php");
$con=conectar();
$id = $_GET['id'];

$sql = "SELECT * FROM proceso_compra ";
$query=mysqli_query($con,$sql);

$filas=mysqli_num_rows($query);

$sql1="SELECT nombre_item, descripcion_item, SUM(precio_item) as total FROM items a,proceso_compra b WHERE a.id_item = b.id_item and b.id_user = '$id'";
$query1=mysqli_query($con,$sql1);

$total=0;
while($row=mysqli_fetch_array($query1)){
    $total+=$row['total'];
}


if($filas > 0){
    $sql2="INSERT INTO compras VALUES('','$id','$total')";
    $query2= mysqli_query($con,$sql2);
    if($query2){
        
        $sql1="DELETE FROM proceso_compra WHERE id_user='$id'";
        $query1=mysqli_query($con,$sql1);
        echo "<script> alert ('Compra realizada.'); window.location='checkout.php?id=$id' </script>";  
    }
}


?>