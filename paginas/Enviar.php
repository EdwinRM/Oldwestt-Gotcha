<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php
$mail = $_POST["mensaje"];

//Titulo
$titulo = $_POST["nombre"];
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Geeky Theory < edwinrmondragon@gmail.com >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("edwinrmondragon@gmail.com",$titulo,$mail,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
?>


