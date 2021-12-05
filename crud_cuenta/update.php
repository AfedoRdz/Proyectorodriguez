<?php

include("conexion.php");
$con=conectar();

$CURP=$_POST['CURP'];
$nombredeusuario=$_POST['nombredeusuario'];
$correo=$_POST['correo'];
$numeroderegistro=$_POST['numeroderegistro'];
$numerodecuenta=$_POST['numerodecuenta'];
$numerodesucursal=$_POST['numerodesucursal'];
$numerodetelefono=$_POST['numerodetelefono'];

$sql="UPDATE cuenta SET nombredeusuario='$nombredeusuario',correo='$correo',numeroderegistro='$numeroderegistro',
numerodecuenta='$numerodecuenta',numerodesucursal='$numerodesucursal',numerodetelefono='$numerodetelefono' WHERE CURP='$CURP'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cuenta.php");
    }
?>