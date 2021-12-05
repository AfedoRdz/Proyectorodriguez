<?php

include("conexion.php");
$con=conectar();

$CURP=$_GET['id'];
$sql="DELETE FROM cuenta WHERE CURP='$CURP'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cuenta.php");
    }
?>
