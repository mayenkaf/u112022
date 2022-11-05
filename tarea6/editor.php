<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Tarea: Cadenas de caracteres - Editor de texto
        </title>
    </head>
<body>
    <?php
        function mostrarDatos($file){
            $archivo = fopen($file,"r");

            if(!($archivo)){
                print("Error al abrir el archivo");
                exit;
            }

            while(!feof($archivo)){
                $linea = fgets($archivo);
                $datos = explode("|",$linea);
                $apellido = $datos[0];
                $nombre = $datos[1];
                $direccion = $datos[2];
                $cp = $datos[3];
                $ciudad = $datos[4];
                echo "<p><b>Apellidos:</b> $apellido</p>";
                echo "<p><b>Nombre:</b> $nombre</p>";
                echo "<p><b>Dirección:</b> $direccion</p>";
                echo "<p><b>CP:</b> $cp</p>";
                echo "<p><b>Ciudad:</b> $ciudad</p>";
                echo "<p>.................................</p>";
            }

            fclose($archivo);
        }
        
        mostrarDatos("calepin.txt");
    ?>
</body>
</html>