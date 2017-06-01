<?php
include ('header.php');
include ('funciones.php');
$Funciones = new funciones();
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
                <?php $datos = $Funciones->get_info_servicios_by_id('1'); ?>
                <h3><?php echo utf8_encode($datos['nombre']) ?></h3>
                <h5><?php echo utf8_encode($datos['descripcion']) ?></h5> 
                <table border="1">
                    <tr>
                        <th>
                            <?php echo utf8_encode($datos['columna1']) ?>
                        </th>
                        <th>
                            <?php echo utf8_encode($datos['columna2']) ?>
                        </th>
                    </tr>
                    <?php
                    $resul = $Funciones->get_all_paquetes_by_id_servicio('1');
                    while ($fila = mysqli_fetch_array($resul)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo utf8_encode($fila['columna1']) ?>
                            </td>
                            <td>
                                <?php echo utf8_encode($fila['columna2']) ?>
                            </td>     
                        </tr>   
                        <?php
                    }
                    ?>
                </table>
            </div>

            <div class="combo_equipos">
                <?php $datos = $Funciones->get_info_servicios_by_id('2'); ?>
                <h3><?php echo utf8_encode($datos['nombre']) ?></h3>
                <h5><?php echo utf8_encode($datos['descripcion']) ?></h5> 
                <table border="1">
                    <tr>
                        <th>
                            <?php echo utf8_encode($datos['columna1']) ?>
                        </th>
                        <th>
                            <?php echo utf8_encode($datos['columna2']) ?>
                        </th>
                    </tr>
                    <?php
                    $resul = $Funciones->get_all_paquetes_by_id_servicio('2');
                    while ($fila = mysqli_fetch_array($resul)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo utf8_encode($fila['columna1']) ?>
                            </td>
                            <td>
                                <?php echo utf8_encode($fila['columna2']) ?>
                            </td>     
                        </tr>   
                        <?php
                    }
                    ?>
                </table> 
            </div>                                                      

            <div class="rentadecaballos">
                <?php $datos = $Funciones->get_info_servicios_by_id('3'); ?>
                <h3><?php echo utf8_encode($datos['nombre']) ?></h3>
                <h5><?php echo utf8_encode($datos['descripcion']) ?></h5> 
                <table border="1">
                    <tr>
                        <th>
                            <?php echo utf8_encode($datos['columna1']) ?>
                        </th>
                        <th>
                            <?php echo utf8_encode($datos['columna2']) ?>
                        </th>
                    </tr>
                    <?php
                    $resul = $Funciones->get_all_paquetes_by_id_servicio('3');
                    while ($fila = mysqli_fetch_array($resul)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo utf8_encode($fila['columna1']) ?>
                            </td>
                            <td>
                                <?php echo utf8_encode($fila['columna2']) ?>
                            </td>     
                        </tr>   
                        <?php
                    }
                    ?>
                </table> 
            </div>           

            <div class="zonadecamping">
                <?php $datos = $Funciones->get_info_servicios_by_id('4'); ?>
                <h3><?php echo utf8_encode($datos['nombre']) ?></h3>
                <h5><?php echo utf8_encode($datos['descripcion']) ?></h5> 
                <table border="1">
                    <tr>
                        <th>
                            <?php echo utf8_encode($datos['columna1']) ?>
                        </th>
                        <th>
                            <?php echo utf8_encode($datos['columna2']) ?>
                        </th>
                    </tr>
                    <?php
                    $resul = $Funciones->get_all_paquetes_by_id_servicio('4');
                    while ($fila = mysqli_fetch_array($resul)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo utf8_encode($fila['columna1']) ?>
                            </td>
                            <td>
                                <?php echo utf8_encode($fila['columna2']) ?>
                            </td>     
                        </tr>   
                        <?php
                    }
                    ?>
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
