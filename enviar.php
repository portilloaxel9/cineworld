<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$para = "grupo03@localhost";
$encabezados = "From: $nombre <$email>\r\n";
$encabezados .= "Reply-To: " . $email . "\r\n";
$encabezados .= "Content-Type: text/plain; charset=utf-8\r\n";

$contenido = "Nombre: " . $nombre . "\n";
$contenido .= "Email: " . $email . "\n";
$contenido .= "Asunto: " . $asunto . "\n";
$contenido .= "Mensaje: " . $mensaje . "\n";

mail($para, $asunto, $contenido, $encabezados);

echo "Mensaje enviado correctamente";
?>