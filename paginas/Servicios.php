<?php
include ('header.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="fonts.css">
        <link rel="stylesheet" href="../css/style.css"> 
        <link rel="stylesheet" href="../css/servicios.css"> 
    </head>
    <body>  

        <h2 class="nuestros_servicios">Servicios y Precios </h2> 
        <div class="precios">       
            <div class="paquete_individual">
                <h3>Paquetes Individuales</h3><h5>Incluye, marcadora, careta, chaleco y Co2 (ilimitado)</h5>        
                <table border="1">
                    <tr>
                        <th>Paintballs</th>
                        <th>Precios</th>   
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>$150</td>     
                    </tr>
                    <tr>
                        <td>200</td>
                        <td>$180</td>   
                    </tr>
                    <tr>
                        <td>300</td>
                        <td>$220</td>   
                    </tr>
                    <tr>
                        <td>500</td>
                        <td>$320</td>   
                    </tr>

                </table>                    
            </div>

            <div class="combo_equipos">
                <h3>Combo por equipos</h3><h5>Incluye, marcadora, careta, chaleco y Co2 (ilimitado)</h5>           
                <table border="1">
                    <tr>
                        <th>Paintballs</th>
                        <th>Precios</th>   
                    </tr>
                    <tr>
                        <td>800</td>
                        <td>$1000</td>     
                    </tr>
                    <tr>
                        <td>2000</td>
                        <td>$1500</td>   
                    </tr> 
                </table> 
            </div>                                                      

            <div class="rentadecaballos">
                <h3>Renta de caballos</h3>             
<h5>La monta de estos es dentro del establecimiento de OldWestGotcha</h5>           
                <table border="1">
                    <tr>
                        <th>Tiempo</th>
                        <th>Precios</th>   
                    </tr>
                    <tr>
                        <td>30min</td>
                        <td>$50</td>     
                    </tr>   
                </table> 
            </div>           

            <div class="zonadecamping">
                <h3>Espacio para acampar</h3> 
<h5>Contamos con casa de campaña (Hacer reservacion de esta con anticipo)</h5>           
                <table border="1">
                    <tr>
                        <th>Espacio</th>
                        <th>Precios</th>   
                    </tr>
                    <tr>
                        <td>ilimitado</td>
                        <td>$100 la noche</td>     
                    </tr>   
                </table> 
            </div>                                
        </div>
        <div class="organizatuevento">
            <input type="button" value="Organiza tu evento" onclick="window.open('Contacto.php', 'width=800,height=600');">
        </div>        
    </body>
    <?php
    include ('footer.php');
    ?>
</html>
