<?php

include("conexion.php");
$con=conectar();

$nombres=$_GET['id'];
$sql="DELETE FROM contacto WHERE nombres='$nombres'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: contacto.php");
    }
?>
