<?php 
require 'funciones.php';
session_start();
    $Login = new funciones();
    
    if  (isset ($_POST  ['datos'])) {
    $datos_recibidos = $_POST['datos'];
    $resul = $Login->verificar_usuario ($datos_recibidos);
    } 
    
?>
<?php
        if(isset($_SESSION['id_usuario'])){
             header('Location: Administrador.php');
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="../css/formulario.css">  
    <title></title>
</head>
<body>
                      
    <form action="Logindeacceso.php" method="POST">
               <h2>Old West Gotcha</h2>
               <input type="text" placeholder="&#128272; Usuario" name="datos[usuario]" value="">
               <input type="password" placeholder="&#128272;Contraseña"  name="datos[pass]" value="">
               <input type="submit" value="Ingresar" >
    </form>              
    
    
   
    <footer id="five"> 
    </footer>
     
    
</body>
</html>
