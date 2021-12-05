<?php

include("conexion.php");
$con=conectar();

$nombres=$_POST['nombres'];
$apellidopaterno=$_POST['apellidopaterno'];
$apellidomaterno=$_POST['apellidomaterno'];
$correo=$_POST['correo'];
$numerodetelefono=$_POST['numerodetelefono'];
$fecha=$_POST['fecha'];
$comentarios=$_POST['comentarios'];

$sql="UPDATE contacto SET apellidopaterno='$apellidopaterno',apellidomaterno='$apellidomaterno',correo='$correo',
numerodetelefono='$numerodetelefono',fecha='$fecha',comentarios='$comentarios' WHERE nombres='$nombres'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: contacto.php");
    }
?>