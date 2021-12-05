<?php 
    include("conexion.php");
    $con=conectar();

$CURP=$_GET['id'];

$sql="SELECT * FROM empleado WHERE CURP='$CURP'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="CURP" value="<?php echo $row['CURP']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidopaterno" placeholder="Apellido Paterno" value="<?php echo $row['apellidopaterno']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidomaterno" placeholder="Apellido Materno" value="<?php echo $row['apellidomaterno']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['correo']  ?>">
                                <input type="text" class="form-control mb-3" name="numeroderegistro" placeholder="Numero de Registro" value="<?php echo $row['numeroderegistro']  ?>">
                                <input type="text" class="form-control mb-3" name="numerodesucursal" placeholder="Numero de Sucursal" value="<?php echo $row['numerodesucursal']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>