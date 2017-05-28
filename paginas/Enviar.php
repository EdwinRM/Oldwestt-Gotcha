<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$destino ="edwinrmondragon@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

$contenido="Nombre: ".$nombre. "\nCorreo: ".$correo."\nMensaje: ".$mensaje;
mail($destino, "Contacto", $contenido);
echo '<script> alert("Correo enviado; Este atento a su correo le responderenmos lo mas pronto posible gracias.");</script>';
header('Location: Conocenos.php');
