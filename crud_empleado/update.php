<?php

include("conexion.php");
$con=conectar();

$CURP=$_POST['CURP'];
$nombres=$_POST['nombres'];
$apellidopaterno=$_POST['apellidopaterno'];
$apellidomaterno=$_POST['apellidomaterno'];
$correo=$_POST['correo'];
$numeroderegistro=$_POST['numeroderegistro'];
$numerodesucursal=$_POST['numerodesucursal'];

$sql="UPDATE empleado SET nombres='$nombres',apellidopaterno='$apellidopaterno',apellidomaterno='$apellidomaterno',correo='$correo',
numeroderegistro='$numeroderegistro',numerodesucursal='$numerodesucursal' WHERE CURP='$CURP'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>