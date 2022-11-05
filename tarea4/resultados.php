<?php

    function enviarCorreo($destinatario, $asunto, $mensaje){

        mail($destinatario, $asunto, $mensaje);
        echo $mensaje;
        echo "Correo enviado<br><br>"; 
    }

    $archivo = fopen("resultados.txt","r");

    if(!($archivo)){
        print("Error al abrir el archivo");
        exit;
    }

    $total=0;
    $aportantes=0;
    $registrados=array();

    while(!feof($archivo)){
        $linea = fgets($archivo);
        $datos = explode("|",$linea);
        $total = $total + intval($datos[3]);
        $aportantes++;
        $registrados[]=$datos;
    }

    fclose($archivo);
    $aportantes--;
    if($aportantes>0){
        $promedio = $total/$aportantes;

        $mensaje_global = "Donación Total: $total <br>Media Donación efectuda: $promedio <br>Aportantes: $aportantes<br>";
        for($i=0;$i<$aportantes;$i++){
            $quien = $registrados[$i][0];
            $donativo = $registrados[$i][3];
            $correo = $registrados[$i][2];
            $mensaje="$quien gracias por su colaboración de $ $donativo <br>";
            enviarCorreo($correo,"Recordatorio del donativo efectuado",$mensaje . $mensaje_global);
        }
    }else{
        echo "Aun no se han realizado aportes";
    }

?>