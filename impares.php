<html>
    <head>
        <title>
            Tarea: Algorítmica
        </title>
    </head>
<body>
    <?php
        //Impares usando for
        function printImpares($inicio,$fin){
            $fin = $fin/2;
            for($i=$inicio; $i<$fin;$i++){
                echo $i*2+1 . ' ';
            }
        }
        //Impares usando do-while
        function printImpares_($inicio,$fin){
            $fin = $fin/2;
            do{
                echo ($inicio*2+1) . ' ';
                $inicio++;
            }while($inicio<$fin);
        }
        //Impares usando while y excluyendo elementos
        function printImparesExcluir($inicio,$fin,$excluir){
            $fin=$fin/2;
            while($inicio<$fin){
                $num=$inicio*2+1;
                if($num!=$excluir[0] and $num!=$excluir[1] and $num!=$excluir[2]){
                    echo $num . ' ';
                }
                $inicio++;
            }
        }
        print "Imprimir numeros impares! <br>";
        printImpares(0,15000);
        print "<br>Imprimir numeros impares excluyendo 101, 1001 y 10001! <br>";
        printImparesExcluir(0,15000,[101,1001,10001]);
    ?>
</body>
</html>