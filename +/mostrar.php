<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar imagenes</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Imagen</th>
            </tr>

        </thead>
        <tbody>

            <?php

            include("conexion.php");

            $query="SELECT * FROM lugares";
            $resultado= $conexion->query($query);
            while($row = $resultado->fetch_assoc()){

           
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"></td>
                <td>

                </td>

             
            </tr>

            <?php
            
            }
            

            ?>
        
        </tbody>

    </table>
    
</body>
</html>