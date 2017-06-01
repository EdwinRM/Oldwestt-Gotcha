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
if (isset($_GET['id_paquete'])) {
    $id_paquete = $_GET['id_paquete'];
    $id_servicio = $_GET['id_servicio'];
    $resul_paquete = $Funciones->get_paquete_by_id_paquete($id_paquete);
    $resul_servicio = $Funciones->get_info_servicios_by_id($id_servicio);
}
?>

<?php
if (isset($_POST['paquete'])) {
    $datos = $_POST['paquete'];
    $Funciones->update_paquete_by_id($datos);
    header('Location: administrador.php');
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
            
        } else {
            ?>
            <h2>Editar Paquete </h2> 
             
            <form method="post" action=" ">

                <input   hidden="" value="<?php echo utf8_encode($resul_paquete['id_paquete']) ?>" name="paquete[id_paquete]"/>

                <label><?php echo utf8_encode($resul_servicio['nombre']) ?></label>
                <br/>
                <br/>

                <label><?php echo utf8_encode($resul_servicio['columna1']) ?></label>
                <input  class="cajatx" value="<?php echo utf8_encode($resul_paquete['columna1']) ?>"name="paquete[columna1]"/>
                <br/>
                <br/>
                <label><?php echo utf8_encode($resul_servicio['columna2']) ?></label>
                <input  class="cajatx" value="<?php echo utf8_encode($resul_paquete['columna2']) ?>"name="paquete[columna2]"/>
                <br/>
                   <br/>            
                <button type="submit" >Actualizar</button>
                <input  class="cajatx"   id="cancelar" type ='button' value = 'Cancelar' onClick="location.href = 'administrador.php'"/>
            </form>
            <br>
        <?php
    }
    ?>
    </body>
<?php
include ('footer.php');
?>
</html>
