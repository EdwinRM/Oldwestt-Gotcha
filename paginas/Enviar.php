<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php
$mensaje = $_POST["mensaje"];
$correo = "edwinrmondragon@gmail.com"
// configuramos la cabecera que llevara el correo
$asunto    = 'Organiza tu propio evento en Old West Gotcha';
$cabeceras = 'From: '$_POST['correo'];'' . "\r\n" .
             'Reply-To: edwinrmondragon@gmail.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();   
if(mail($correo, $asunto, $mensaje, $cabeceras)) {
    echo "Enviado";
} else {
    echo 'Error al enviar mensaje';
}
?>


