<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tarjeta = $_POST['tarjeta'];

$para = $email;
$asunto = "TICKET CINEWORLD";
$encabezados = "From: $nombre <$email>\r\n";
$encabezados .= "Reply-To: " . $email . "\r\n";
$encabezados .= "Content-Type: text/plain; charset=utf-8\r\n";

$contenido = "Hola" . $nombre . ",\n";
$contenido .= "Tu ticket de CineWorld ha sido comprado con la tarjeta" . $tarjeta . ".\n";

mail($para, $asunto, $contenido, $encabezados);
header("Location: gracias.html");
exit;
?>
