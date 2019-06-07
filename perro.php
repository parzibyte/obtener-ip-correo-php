<?php
# Para obtener la fecha correcta hay que poner la zona horaria
date_default_timezone_set("America/Mexico_City");
$fechaYHora = date("Y-m-d H:i:s");
# Si no hay REMOTE_ADDR entonces ponemos "Desconocida"
$ip = empty($_SERVER["REMOTE_ADDR"]) ? "Desconocida" : $_SERVER["REMOTE_ADDR"];
# Formatear mensaje
$mensaje = sprintf("La IP %s accedió en %s%s", $ip, $fechaYHora, PHP_EOL);
# Y adjuntarlo o escribirlo en accesos.log
file_put_contents("accesos.log", $mensaje, FILE_APPEND);
# Ya registramos la ip, ahora seguimos con el flujo normal ;)
# Indicar que vamos a servir una imagen jpeg
header('Content-Type: image/jpeg');
header("Content-Transfer-Encoding: Binary");
# Leer la imagen del perro
readfile("perro.jpg");
?>