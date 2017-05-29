<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php
$mensaje = $_POST["mensaje"];
$correo = $_POST["correo"];
// configuramos la cabecera que llevara el correo
$asunto    = 'Prueba de SMTP local';
$cabeceras = 'From: remitente@dominio.com' . "\r\n" .
             'Reply-To: remitente@dominio.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();   
if(mail($correo, $asunto, $mensaje, $cabeceras)) {
    echo "Enviado";
} else {
    echo 'Error al enviar mensaje';
}
?>


