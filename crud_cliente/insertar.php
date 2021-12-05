<?php
include("conexion.php");
$con=conectar();

$CURP=$_POST['CURP'];
$nombres=$_POST['nombres'];
$apellidopaterno=$_POST['apellidopaterno'];
$apellidomaterno=$_POST['apellidomaterno'];
$correo=$_POST['correo'];
$numerodecuenta=$_POST['numerodecuenta'];
$numerodetelefono=$_POST['numerodetelefono'];


$sql="INSERT INTO cliente VALUES('$CURP','$nombres','$apellidopaterno','$apellidomaterno','$correo','$numerodecuenta','$numerodetelefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>