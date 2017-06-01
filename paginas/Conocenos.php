<?php
include ('header.php');
include ('funciones.php');
$Funciones= new funciones();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="fonts.css">       
        <link rel="stylesheet" href="../css/style.css">       
        <link rel="stylesheet" href="../css/conocenos.css">   
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <title>Old West Gotcha Cadereyta</title>
    </head>
    <body>
        <h2 class="quienesomos">¿Quiénes Somos?</h2>                                  
        <section class="section1">
                  <img class="imagen"  src="../img/21.jpg" alt="">
            <p class="texto_principal">  
El Paintball es una de las maneras más divertidas de hacer deporte al aire libre, ya sea en equipos formados por amigos, familiares o compañeros de trabajo. Organizar una partida de Paintball es garantizar el mejor de los retos para descargarse del stress de una dura semana de trabajo o estudio.                                  
          Solo Old West puede ofrecer emocionantes juegos de Gotcha
          con mucha divercion y adrenalina, Contamos con campo de escenario Gotcha al viejo oeste con más de 30 obstáculos
          con un escenario de 90 * 60 mts de terreno.
         <br><br>
          OLD WEST GOTCHA Un lugar lleno de diversión, en el que además de poder jugar y practicar deporte puedes organizar tus eventos ya sean cumpleaños, aniversarios, reuniones 
          familiares o simplemente convivir con los amigos, para mas detalles ponte en
          contacto con nosotros. <br><br> Estamos localizados en Cadereyta de Montes Querétaro, Pueblo Magico. 
          </p>                                                                                              
  
        </section>                
        <section class="section2">
                        
                <h3>Horarios</h3><h5>Solo abrimos fines de semana</h5>        
                <table border="1">
                    <tr>
                        <th>Dia</th>
                        <th>Hora</th>   
                    </tr>
                    <?php 
                        $resul = $Funciones->get_all_horarios_normal();
                        while ($fila = mysqli_fetch_array($resul)) {
                    ?>
                    <tr>
                        <td>
                                <?php echo  utf8_encode($fila['dia'])  ?>
                        </td>
                        <td>
                                 <?php echo utf8_encode($fila['horario'])  ?>
                        </td>     
                    </tr>   
                    <?php
                        }
                    ?>
                </table>
                    <h3>Horarios en vacaciones</h3> 
                <table border="1">
                    <tr>
                        <th>Dia</th>
                        <th>Hora</th>   
                    </tr>
                      <?php 
                        $resul = $Funciones->get_all_horarios_vacaciones();
                        while ($fila = mysqli_fetch_array($resul)) {
                    ?>
                    <tr>
                        <td>
                                <?php echo utf8_encode($fila['dia'])  ?>
                        </td>
                        <td>
                                 <?php echo  utf8_encode($fila['horario'])  ?>
                        </td>     
                    </tr>   
                    <?php
                        }
                    ?>       
                </table>
                
                <input class="organizatuevento" type ='button' value = 'Contactanos' onclick="window.open('Contacto.php', 'width=800,height=600');"/>                                                
        </section>                                
    </body>
     
</html>
              <?php
    include ('footer.php');
    ?>                                    
          