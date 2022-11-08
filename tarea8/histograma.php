<?php
    header('Content-Type:image/jpeg');

    $PARAM_host='localhost';
    $PARAM_bdd = 'tarea8';
    $PARAM_user = 'root';
    $PARAM_pw = 'u112022php';
    $registrados=array();
    try{
        $conexion = new PDO("mysql:host=$PARAM_host;dbname=$PARAM_bdd", $PARAM_user, $PARAM_pw);
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $resultado = $conexion->query("SELECT * FROM bolsa");
        $resultado->setFetchMode(PDO::FETCH_OBJ);

        while($tuple = $resultado->fetch()){
            $datos = [$tuple->ciudad, $tuple->indicce];
            $registrados[]=$datos;
        }
        $resultado->closeCursor();
        } catch(PDOException $e) {
            //echo "Connection failed: " . $e->getMessage(); no funciona si no está comentado
    }
    
    $im = imagecreate(300, 250);
    $fondo = imagecolorallocate($im,192,192,192);
    $colores = array(
        "New York" => [0, 128, 0],
        "Paris" => [0,0,255],
        "Londres" => [255,0,255],
        "Berlin" => [0,0,0]
    );
    $total = count($registrados);
    for($i=0;$i<$total;$i++){
        $indice = $registrados[$i][1];
        $ciudad = $registrados[$i][0];
        $color = imagecolorallocate($im, $colores[$ciudad][0], $colores[$ciudad][1], $colores[$ciudad][2]);    
        imagefilledrectangle($im, $i*25+5, 250-$indice*10, ($i+1)*25, 250, $color);
        imagestringup($im,1,$i*25+5, 240-$indice*10,$ciudad . "-" . $indice, $color);
    }
   
    imagejpeg($im);
    imagedestroy($im);

?>