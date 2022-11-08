<?php

    $PARAM_host='localhost';
    $PARAM_bdd = 'tarea7';
    $PARAM_user = 'root';
    $PARAM_pw = 'u112022php';

    try{
        $conexion = new PDO("mysql:host=$PARAM_host;dbname=$PARAM_bdd", $PARAM_user, $PARAM_pw);
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $resultado = $conexion->query("SELECT * FROM edadnda order by edad");
        $resultado->setFetchMode(PDO::FETCH_OBJ);
        echo "<p>CLASIFICACION POR EDAD</p>";
        echo "<table><tr><th>Nombre</th><th>Apellido</th><th>Direccion</th><th>Edad</th><th>Telefono</th></tr>";
        while($tuple = $resultado->fetch()){
            echo "<tr>";
            echo "<td>" . $tuple->nombre . "</td>";
            echo "<td>" . $tuple->apellido . "</td>";
            echo "<td>" . $tuple->direccion . "</td>";
            echo "<td>" . $tuple->edad . "</td>";
            echo "<td>" . $tuple->telefono . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $resultado->closeCursor();
        echo "<a href='index.html'>Volver al inicio</a>";
        
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        
    }
    

?>