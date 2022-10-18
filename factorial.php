<html>
    <head>
        <title>
            Tarea: Algorítmica, Factorial
        </title>
    </head>
<body>
    <?php
        //Factorial usando do-while
        function factorial($numero){
            $fact=1;
            do{
                $fact=$fact*$numero;
                $numero=$numero-1;
            }while($numero!=1);

            return $fact;
        }
        //Factorial usando for
        function factorial_($numero){
            $fact=1;
            for($i=1;$i<=$numero;$i++){
                $fact=$fact*$i;
            }
            return $fact;
        }
        //Factoria usando recursividad
        function factorial__($numero){
            if($numero==1){
                return 1;
            }else{
                return factorial__($numero-1)*$numero;
            }
        }
        
        print "Factorial <br>";
        print "<br>* Usando Do-While <br>";
        echo '10! = ' . factorial(10);
        print "<br>* Usando For <br>";
        echo '10! = ' . factorial_(10);
        print "<br>* Usando Recursividad <br>";
        echo '10! = ' . factorial__(10);
    ?>
</body>
</html>