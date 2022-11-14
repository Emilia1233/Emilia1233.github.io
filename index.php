<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/dle7nls.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <link rel="stylesheet" href="css/animations.css">
    <script src="https://kit.fontawesome.com/847028c37f.js" crossorigin="anonymous"></script>
    
    <title>Municipalidad</title>
</head>
<body>
    <!-- contenedor_general -->
    <div class="contenedor">
        
        <!-- contenedor_del_logo -->
        

        <!-- contenedor_del_fondo y el logo-->
        <div class="contenedor_imagen" >
            <div class="contenedor_logo">
                <img transition-style="in:circle:hesitate" src="./imagenes/ag2.png" class="logo">
            </div>

            <div class="contenedor_titulo">
                <p transition-style="in:circle:hesitate">Hola,bievenido a <br>
                  <strong>Conocer Alta Gracia</strong></p>
            </div>

            

            
               
        </div>

        
        
        

        <!-- contenedor_de_texto -->
        <div class="contenedor_texto">
          <p class="tit" transition-style="in:circle:hesitate"><b>ALTA GRACIA</b></p>
            
            <p class="text">
                
                Es un rincón del Valle de Paravachasca donde la cultura 
                es palpable en cada atractivo.<br>Es uno de los destinos turísticos mas 
                próximos a la ciudad de Córdoba. <br>
                Su impronta más destacada es el patrimonio jesuita que atesora en su
                centro histórico, donde se ubica una de las cinco estancias jesuíticas declaradas
                Patrimonio de la Humanidad por la Unesco.<br> El complejo patrimonial 
                está conformado por la Estancia Jesuítica de Alta Gracia, la casa del Virrey Liniers y la 
                residencia, donde funciona el Museo Nacional.<br>Postal se completa con el icónico lago del Tajamar y el emblemático reloj público.
                Posee un plácido y saludable clima casi todo el año que atrae a viajeros y turistas, motivo por el cual el turismo es uno de sus principales recursos económicos.
            </p>
            

            <!-- contenedor_del_mapa -->
            
            
            
            
            

        </div>

        <!-- Contenedor carrosuel -->
        <div class="contenedor_Carrousel">
          <!-- texto para los turistas -->
            <a class="texto" transition-style="in:circle:hesitate">Momentos divertidos, alegres, <br> aventura, de emociones,<br>lo vives aquí</a>
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./imagenes/1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./imagenes/2.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./imagenes/3.png" alt="Third slide">
                  </div>
               
                <div class="carousel-item">
                    <img class="d-block w-100" src="./imagenes/4.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        

        <!-- contenedor_lugares_para_visitar -->
        <div class="contenedor_lugares_visitar">
            
            <p class="lugares" transition-style="in:circle:hesitate">Lugares para visitar</p>

        

       </div>
        <div class="tarjetas">

            <?php
            include "conexion.php";
            $sql=$conexion->query('SELECT * FROM lugares');
            while($datos=$sql->fetch_object()){ ?>

            

            <div class="card" transition-style="in:circle:center">
            
                <div class="card-img">
                    <img class="fondo" src="data:image/jpg;base64,<?php echo base64_encode($datos->imagen);?>">
                </div>
                <div class="card-info">
                    <div class="card-text">
                    <input id="id" name="id"  class="element text small" type="hidden" maxlength="255" value="<?php echo $row['id'];?>"/> 
                    <p class="text-title"><?= $datos->nombre?></p>
                    
                    </div>
                    <div class="card-icon">
                    <a class="fa-solid fa-arrow-right" name='id' id='id' href="lugar.php?id=<?= $datos->id ?>"></a>
                    </div>
                </div>

            </div>
           
           
        <?php
        }
            ?>
        </div>
        
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


        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        
    
</body>




</html>