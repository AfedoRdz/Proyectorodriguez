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


$sql="INSERT INTO cuenta VALUES('$CURP','$nombredeusuario','$correo','$numeroderegistro','$numerodecuenta','$numerodesucursal','$numerodetelefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cuenta.php");
    
}else {
}
?>