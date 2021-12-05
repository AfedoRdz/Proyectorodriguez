<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM `cliente`";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Cliente</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="CURP" placeholder="CURP">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidopaterno" placeholder="Apellido Paterno">
                                    <input type="text" class="form-control mb-3" name="apellidomaterno" placeholder="Apellido Materno">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="numerodecuenta" placeholder="Numero de Cuenta">
                                    <input type="text" class="form-control mb-3" name="numerodetelefono" placeholder="Numero de Telefono">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/Proyecto_Rodriguez_Banco/"rel="stylesheet" class="btn btn-primary">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>CURP</th>
                                        <th>Nombres</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Correo</th>
                                        <th>Numero de Cuenta</th>
                                        <th>Numero de Telefono</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['CURP']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidopaterno']?></th>
                                                <th><?php  echo $row['apellidomaterno']?></th>
                                                <th><?php  echo $row['correo']?></th> 
                                                <th><?php  echo $row['numerodecuenta']?></th> 
                                                <th><?php  echo $row['numerodetelefono']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['CURP'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['CURP'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>