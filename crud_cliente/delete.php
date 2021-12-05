<?php

include("conexion.php");
$con=conectar();

$CURP=$_GET['id'];
$sql="DELETE FROM cliente WHERE CURP='$CURP'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
