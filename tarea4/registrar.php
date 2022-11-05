<?php

    $archivo = fopen("resultados.txt","a");

    if(!($archivo)){
        print("No se pudo abrir el archivo");
        exit;
    }
    $cadena = $_POST["nombre"] . "|".$_POST["edad"] . "|". $_POST["correo"] . "|".$_POST["importe"];
    echo $cadena;

    fputs($archivo,$cadena);
    fputs($archivo,"\n");
    fclose($archivo);


    echo "<p>Gracias por su aporte</p>";
    echo "<a href='index.html'>Volver a Donar</a>";
?>