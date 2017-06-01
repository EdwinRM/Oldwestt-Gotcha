<?php
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Old West Gotcha Cadereyta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/fontello.css" type="text/css">
    </head>
    <body>
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
            <a href="Logindeacceso.php">Adminstrador</a>
           </div>
      </footer>
      </body>
</html>