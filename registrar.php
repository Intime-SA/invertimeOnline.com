<?php

$name = $_POST['nombre'];
$cuit = $_POST['cuit'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$destinatario = "invertimesa@gmail.com";
$asunto = "contacto desde nuestra web";

$carta = "De: $nombre  \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n"; 
$carta .= "Mensaje: $mensaje";



mail($destinatario, $asunto, $carta);




?>