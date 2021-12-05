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


$sql="INSERT INTO contacto VALUES('$nombres','$apellidopaterno','$apellidomaterno','$correo','$numerodetelefono','$fecha','$comentarios')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: contacto.php");
    
}else {
}
?>