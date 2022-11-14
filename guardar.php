<?php
    include("conexion.php");

    $nombre=$_POST['nombre'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $mas=$_POST['mas'];

    $query="INSERT INTO lugares (imagen,nombre,mas) VALUES('$imagen','$nombre ','$mas')";
    $resultado=$conexion->query($query);

    if($resultado){
        echo 'SE INSERTO BIEN';
    }
    else{
        echo 'SE INSERTO MAL';
    }
?>