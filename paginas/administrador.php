<?php
include ('headeradmin.php');
include ('funciones.php');
session_start();
$Funciones = new funciones();
?>

<?php
if (isset($_SESSION['id_usuario'])) {
    
} else {
    header('Location: Logindeacceso.php');
}
?>

<?php
if (isset($_POST['super'])) {
    $datos = $_POST['super'];
    $Funciones->recover_usuario();
}
?>

<?php
if (isset($_POST['usuario'])) {
    $datos = $_POST['usuario'];
    $Funciones->update_usuario($datos);
}
?>

<?php
if (isset($_POST['empresa'])) {
    $datos = $_POST['empresa'];
    $Funciones->update_empresa($datos);
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="fonts.css">
        <link rel="stylesheet" href="../css/style.css"> 
          <link rel="stylesheet" href="../css/admin.css">

    </head>
    <body>  

        <?php
        if ($_SESSION['id_usuario'] == ('0')) {
            ?>
            <h2>Recuperación de Usuario General</h2> 
            <br/>

            <form method="post" action=" ">
                <input type="checkbox" checked hidden="" name="super[yes]">
                <button type="submit" >Restablecer Usuario General</button>
                <br/>

                <?php
            } else {
                ?>

                <h2>Administración de Contenido </h2> 
                <br/>
                <div class="DatosUsuarios">
                     <h3>Datos Usuario (modifcar con sumo cuidado)</h3>
                <br/>
                <?php $datos = $Funciones->get_usuario() ?>
                <form method="post" action=" ">

                    <label>Usuario:  <?php echo utf8_encode($datos); ?></label>
                    <br/><br>
                    <label>Contaseña:</label>
                    <input   class="cajatx" name="usuario[pass]" type="password"/>
                    <br><br>

                    <label>Nueva Contaseña:</label>
                    <input  class="cajatx" name="usuario[passnew1]" type="password"/>
                    <br><br>

                    <label>Confirmar Nueva Contaseña:</label>
                    <input  class="cajatx" name="usuario[passnew2]" type="password"/>
                    <br><br>

                    <button type="submit" >Actualizar</button>

                </form>
                <br/>
                </div>
               
                <div class="DatosEmpresa">
                    <h3>Datos Empresa</h3>
                <br/>
                <?php $datos = $Funciones->get_datos_empresa() ?>

                <form method="post" action=" ">
                    <label>Dirección de Correo: </label>
                    <input  class="cajatx" value="<?php echo utf8_encode($datos['correo']); ?>" name="empresa[correo]"/>
                    <br/><br>

                    <label>Dirección de Facebook: </label>
                    <input  class="cajatx" value="<?php echo utf8_encode($datos['facebook']); ?>" name="empresa[facebook]"/>
                    <br/><br>

                    <label>Dirección de Instagram: </label>
                    <input  class="cajatx" value="<?php echo utf8_encode($datos['instagram']); ?>" name="empresa[instagram]"/>
                    <br/><br>

                    <label>Dirección de Youtube: </label>
                    <input  class="cajatx" value="<?php echo utf8_encode($datos['youtube']); ?>" name="empresa[youtube]"/>
                    <br/><br>

                    <label>Horario Resumido: </label>
                    <input  class="cajatx" value="<?php echo utf8_encode($datos['horario']); ?>" name="empresa[horario]"/>
                    <br/><br>

                    <label>Teléfono: </label>
                    <input   pattern="[0-9]{10}"  placeholder="444-444-4444"class="cajatx" value="<?php echo utf8_encode($datos['telefono']); ?>" name="empresa[telefono]"/>
                    <br/><br>

                    <label>Dirección del Video Principal: </label>
                    <input   class="cajatx" value="<?php echo utf8_encode($datos['video']); ?>" name="empresa[video]"/>
                    <br/><br>

                    <button type="submit" >Actualizar</button>
                    <input   id="cancelar" type ='button' value = 'Cancelar' onClick="location.href = 'administrador.php'"/>           

                </form>                                   

                <br/>
                </div>
              
                <div class="Servicios">
                <h2>Servicios y Precios </h2> 
                <br/>
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
                                   <th></th>
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
                            <td><a href="editarpaquete.php?id_paquete=<?php echo $fila["id_paquete"]?>&id_servicio=<?php echo $fila["id_servicio"]?>" >Editar</a></td>
                        </tr>   
                        <?php
                    }
                    ?>
                </table>
                <br/>
                        </div>
             
                
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
                                   <th></th>
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
                            <td><a href="editarpaquete.php?id_paquete=<?php echo $fila["id_paquete"]?>&id_servicio=<?php echo $fila["id_servicio"]?>" >Editar</a></td>
                        </tr>   
            
                        <?php
                    }
                    ?>
                              
                
             
                </table> 
                <br/>
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
                                   <th></th>
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
                            <td><a href="editarpaquete.php?id_paquete=<?php echo $fila["id_paquete"]?>&id_servicio=<?php echo $fila["id_servicio"]?>" >Editar</a></td>
                        </tr>   
                        <?php
                    }
                    ?>
                  
                </table> 
                <br/>
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
                                   <th></th>
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
                            <td><a href="editarpaquete.php?id_paquete=<?php echo $fila["id_paquete"]?>&id_servicio=<?php echo $fila["id_servicio"]?>" >Editar</a></td>
                        </tr>   
                        <?php
                    }
                    ?>
                </table> 
                <?php
            }
            ?>
                  <div class="Horarios">
                <h3>Horarios</h3>
                <br/>
                <?php $datos = $Funciones->get_datos_empresa() ?>

                <form method="post" action=" ">
                    <table style="text-align:center" border="1">
                        <tr>
                            <th hidden="">Id</th>
                            <th>Dia</th>
                            <th>Horario</th>
                            <th>Apertura Normal</th>
                            <th>Apertura Vacaciones</th>
                            <th></th>
                        </tr>
                        <?php
                        $resul = $Funciones->get_all_horarios();
                        while ($fila = mysqli_fetch_array($resul)) {
                            ?>
                            <tr>
                                <td hidden><?php echo utf8_encode($fila['id_horario']) ?></td>
                                <td><?php echo utf8_encode($fila['dia']) ?></td>
                                <td><?php echo utf8_encode($fila['horario']) ?></td>
                                <td>
                                    <?php
                                    if ($fila['status_normal'] == '1') {
                                        echo 'Sí';
                                    } else {
                                        echo 'No';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($fila['status_vacaciones'] == '1') {
                                        echo 'Sí';
                                    } else {
                                        echo 'No';
                                    }
                                    ?>
                                </td>
                                <td><a href="editarhorario.php?id=<?php echo $fila["id_horario"] ?>" >Editar</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </form>
                <br/>
</div>
                 
    </body>
    <?php
    include ('footer.php');
    ?>
</html>
