<?php
include('paginas/funciones.php');
$Funciones = new funciones();
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">     
        <link rel="stylesheet" href="css/style.css" type="text/css">             
        <link rel="stylesheet" href="flexslider.css" type="text/css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
          <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <title>Old West Gotcha Cadereyta</title>       
    </head>
    <script type="text/javascript" charset="utf-8">
     $(window).load(function () {
         $('.flexslider').flexslider({
             touch: true,
             pauseOnAction: false,
             pauseOnHover: false,
         });
     });
    </script>
    <body>

        <header>               
            <div id="color">  </div> 
            <div class="contenedor">                    
                <a href="Index.php" id="logo"><img src="img/logochido.png" alt=""></a>
                <h1 class="">Old West Gotcha Cadereyta</h1>
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu"for="menu-bar"></label> 
                <nav class="menu">
                    <a href="Index.php">Inicio</a>
                    <a href="Paginas/Conocenos.php">Conócenos</a>
                    <a href="Paginas/Servicios.php">Servicios</a>
                    <a href="Paginas/Contacto.php">Contacto</a>                                              
                </nav>

            </div>                
        </header>     
        <div id="color2">  </div> 
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="img/19.jpg" alt="">
                    <section class="flex-caption">
                        <p class="">¡Old West Gotcha Cadereyta!</p><br>                  
                    </section>
                </li>
                <li>
                    <img src="img/15.jpg" alt="">
                    <section class="flex-caption">                    
                         <p>¡Zona para Acampar!</p>                       
                    </section>
                </li>
                <li>
                    <img src="img/16.jpg" alt="">
                    <section class="flex-caption">
                        <p>¡Adrenalina al 100%!</p>
                    </section>
                </li>

                <li>
                    <img src="img/20.jpg" alt="">
                    <section class="flex-caption">
                        <p>¡¡Divierte con tus Amigos!!</p>
                    </section>
                </li>
            </ul>
        </div>    

        <section id="two">                         
            <ul>
                <div class="imagenes" id="imagen1">
                    <div id="color1">
                        <br><br>
                        <a href="paginas/Conocenos.php"class="icon-users"for="menu-bar"></a>
                    </div>   
                    <li class="textfotos"><p>¡Mucha Diversión y Adrenalina,  Conócenos! </p></li>    
                </div>  <br>           
                <div class="imagenes" id="imagen2">
                        <div id="color1">
                            <br><br>
                            <a href="paginas/Servicios.php"class="icon-basket"for="menu-bar"></a>
                    </div> 
                    
                    <li class="textfotos"><p>¡Nuestros Paquetes y Servicios a tu Alcanze! </p></li>
                </div><br>   
                <div class="imagenes" id="imagen3">
                        <div id="color1">
                            <br><br>
                            <a href="paginas/Contacto.php"class="icon-location"for="menu-bar"></a>
                    </div>
                     
                    <li class="textfotos"><p>¡Contáctanos y Organizamos tu Propio Evento!</p></li>
                </div>                     
            </ul>                                                  
        </section>

        <section id="tree">                   
            <div id="contenedor-video-youtube">
                <div id="video-youtube">
                    <?php  $dato=$Funciones->get_info_datos_empresa_by_campo('video');?>
                    <iframe width="560" height="315" src="<?php echo $dato;?>" frameborder="0" allowfullscreen></iframe>                     
                </div>                
            </div>
        </section> 
        <br>
       <footer>
        <div id="contenedor-footer">  
           <div id="color2"></div>       
           <div class="social"><span>                   
                    <ol>
                          <?php  $dato=$Funciones->get_info_datos_empresa_by_campo('facebook');?>
                        <li><a href="<?php echo utf8_encode($dato)?>"  target= "_blank" class="icon-facebook"></a></li>
                         <?php $dato=$Funciones->get_info_datos_empresa_by_campo('instagram');?>
                        <li><a href="<?php echo utf8_encode($dato)?>"   target= "_blank" class="icon-instagram"></a></li>
                          <?php $dato=$Funciones->get_info_datos_empresa_by_campo('youtube');?>
                        <li><a href="<?php echo utf8_encode($dato)?>"   target= "_blank" class="icon-youtube"></a></li>
                    </ol>
                </span>
            </div>
                  <?php $dato=$Funciones->get_info_datos_empresa_by_campo('horario');?>
                <p class="textofooter"> Mucha diversión y adrenalina te esperan en Old West Gotcha Cadereyta. <br> 
                    Perfecto para pasarla con tus amigos o familiares, vive una experiencia <br> al estilo viejo oeste.
                    Sensacionales juegos de gotcha y un agradable ambiente.<br> ¡Organiza tu evento con nosotros! <br><br><?php echo utf8_encode($dato)?></p>  
                <?php $dato=$Funciones->get_info_datos_empresa_by_campo('telefono');?>
                <p class="textodireccion"> Estamos ubicados en:<br>Pilancon, 76500 Cadereyta de Montes, Qro, México <br> ✆ <?php echo utf8_encode($dato)?></p>        
         </div>
           <div id="color3">
            <p>Copyright © 2017 Old West Gotcha Cadereyta/ All rights reserved.</p>
            <a href="Paginas/Logindeacceso.php">Adminstrador</a>
           </div>
      </footer>
    </body>

</html>