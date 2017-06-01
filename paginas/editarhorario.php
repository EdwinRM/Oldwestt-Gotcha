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
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resul = $Funciones->get_horario_by_id($id);
}
?>

<?php
if (isset($_POST['horario'])) {
    $datos = $_POST['horario'];
    $Funciones->update_horarios_by_id($datos);
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
            <h2>Editar Horario </h2> 
             
            <form method="post" action=" ">

                <input  hidden="" value="<?php echo utf8_encode($resul['id_horario']) ?>" name="horario[id_horario]"/>

                <label><?php echo utf8_encode($resul['dia']) ?></label>
                <br/>
                <br/>

                <label>Horario</label>
                <input  value="<?php echo utf8_encode($resul['horario']) ?>"name="horario[horario]"/>
                <br/>
                <label>Ejemplo: 12:00hrs - 19:00hrs</label>
                <br/>
                <br/>
                 
                <label>Aplica Horario Normal</label>
                <br/>
                <input type="radio" name="horario[status_normal]" <?php if ($resul['status_normal'] == 1) { echo 'checked'; }?> value="1"> Si<br>
                <input type="radio" name="horario[status_normal]" <?php if ($resul['status_normal'] == 0) { echo 'checked'; }?> value="0"> No<br>
                <br>
                <br/>
                <label>Aplica Horario Vacaciones</label> 
                <br/>
                <br/>
                <input type="radio" name="horario[status_vacaciones]" <?php if ($resul['status_vacaciones'] == 1) { echo 'checked'; }?> value="1"> Si<br>
                <input type="radio" name="horario[status_vacaciones]" <?php if ($resul['status_vacaciones'] == 0) { echo 'checked'; }?> value="0"> No<br>
                <br>
                <br/>
                <button type="submit" >Actualizar</button>
                <input    id="cancelar"  type ='button' value = 'Cancelar' onClick="location.href = 'administrador.php'"/>
            </form>
        <?php
    }
    ?>
    </body>
<?php
include ('footer.php');
?>
</html>
