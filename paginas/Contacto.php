<?php
include ('header.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="fonts.css">        
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/contacto.css">
        <title>Old West Gotcha Cadereyta</title>
    </head>
    <body>  
                
               <section id="CUERPO">
                   <p style="color: white;" class="texto-conacto">Estamos ubicados en: <br>Pilancon, 76500 Cadereyta de Montes, Qro, México <br>✆ 442 361 7779 </p>                               
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7465.258129442286!2d-99.80500332054042!3d20.68466479909863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDQwJzU4LjAiTiA5OcKwNDcnNTguNyJX!5e0!3m2!1ses-419!2s!4v1494712493248" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                     
            <form action="Enviar.php" method="post">          
               <p style="text-align: center; font-size:16px;">Mandanos un correo con los datos de tu evento</p>   
               <input id="tx" type="text" placeholder="Tu nombre" required name="nombre" >
               <input id="tx" type="text" placeholder="Tu Correo Electronico" required name="correo">           
               <textarea id="tx" placeholder="Describe tu evento nosotros te responderemos lo mas rapido posible" required name="mensaje"></textarea>
          <input  id="send" type="submit" value="Enviar">
           </form>
        </section>    
    </body>   
</html>


<?php
include ('footer.php');

