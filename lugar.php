<?php
include "conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("SELECT imagen,nombre,mas,lat,lon FROM lugares WHERE id=$id");

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/847028c37f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/dle7nls.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="estilo2.css"/>
    <title>Lugares para visitar</title>
</head>

    <body>

    
     <!-- contenedor_general -->
     <div class="contenedor">
        
        <!-- contenedor_del_logo -->
        

        <!-- contenedor_del_fondo y el logo-->
        <div class="contenedor_imagen" >
            <div class="contenedor_logo">
                <img transition-style="in:circle:hesitate" src="./imagenes/logo3.png" class="logo">
            </div>

            <div class="contenedor-flecha">
                <a  href="./inex.php" class="btn"> ←
                </a>
            </div>


        
            

<?php
    
    while($datos=$sql->fetch_object()){ 

     ?>

        
    
<div class="contenedor-imagen-lugar-info"> 
    <div class="info">
            
        <p class="text-title"><?= $datos->nombre?></p>
        <p class="text-subtitle"><?= $datos->mas?></p>

        
    </div>

  
</div>
    <div class="cards">
        <div class="card-img"transition-style="in:circle:hesitate">
            <img class="card" src="data:image/jpg;base64,<?php echo base64_encode($datos->imagen);?>">
        </div>
        
    </div>

  

  



    
<?php
    }
?> 

        
        <div class="pie">
                <div class="cont-pie">

                  
                  <i class="fa-brands fa-instagram"></i>
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-solid fa-phone"></i>

                  <br>
                  
                  <a class="texto-pie">Conocer Alta Gracia</a>
                  <br>
                  <a class="sub-texto-pie"><strong>Animate a conocer</strong></a>
                </div>
        </div>

        </div>

       
        </div>

    


    

</body>



</html>