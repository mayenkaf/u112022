<?php
// Recuperar las imagenes
$foto = $_GET["foto"];
$archivo="src/$foto";

$dest = imagecreatefromjpeg($archivo);
$src = imagecreatefromjpeg('images/lw-logo.jpg');

list($width, $height, $type, $attr) = getimagesize($archivo);
list($wl,$hl,$tl,$al) = getimagesize("images/lw-logo.jpg");

// Unir las imagenes
imagecopymerge($dest, $src, $width-$wl-10, 0, 0, 0, $wl, $hl, 50);

// dibujarla
header('Content-Type: image/jpeg');
imagejpeg($dest);

imagedestroy($dest);

imagedestroy($src);

?>