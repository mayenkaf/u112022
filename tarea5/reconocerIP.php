<html>
    <head>
        <title>
            Tarea: Cadenas de caracteres - IP
        </title>
    </head>
<body>
    <?php
        //Genera una IPv4
        function generarIPv4(){
            return rand(1,255) . "." . rand(0,255) . "." . rand(0,255) . "." . rand(0,255);
        }

        //Determina la clase de una IPv4
        function claseIPv4($ip){
            $datos = explode(".",$ip);
            $clase = "";
            if($datos[0]>=0 && $datos[0]<=127){
                $clase = "A";
            }elseif($datos[0]>=128 && $datos[0]<=191){
                $clase = "B";
            }elseif($datos[0]>=192 && $datos[0]<=223){
                $clase = "C";
            }elseif($datos[0]>=224 && $datos[0]<=239){
                $clase = "D";
            }elseif($datos[0]>=240 && datos[0]<=255){
                $clase = "E";
            }
            return $clase;
        }

        $ipCliente = $_SERVER['REMOTE_ADDR'];
        echo "<br>";
        echo "IP cliente recuperada: " . $ipCliente;

        echo "<br><br>";
        //Comprobar funcionamiento de reconocimiento con una IP ficticia
        $ipFicticia = generarIPv4();
        $claseIP = claseIPv4($ipFicticia);
        echo "La clase de la IP cliente ficticia $ipFicticia es: $claseIP";
        echo "<br>";
        
    ?>
</body>
</html>
