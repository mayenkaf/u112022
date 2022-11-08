<?php
header('Content-Type:image/jpeg');

$altura = $_POST["altura"];
$anchura = $_POST["anchura"];

$icf = $_POST["colorFondo"];
$ict = $_POST["colorCaracter"];

$im = imagecreate($altura,$anchura);

//RGB
$colores = array(
    "Rojo" => [255,0,0],
    "Verde" => [0,255,0],
    "Negro" => [0,0,0],
    "Blanco" => [255,255,255]
);

$fondo = imagecolorallocate($im, $colores[$icf][0],$colores[$icf][1],$colores[$icf][2]);

$text_color = imagecolorallocate($im,$colores[$ict][0],$colores[$ict][1],$colores[$ict][2]);

$texto_insertar = $_POST["textoInsertar"];

imagestring($im,1,5,5,$texto_insertar,$text_color);

imagejpeg($im);

imagedestroy($im);
?>