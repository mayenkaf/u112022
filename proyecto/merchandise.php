<!DOCTYPE html>
<html lang="en">
<head>
<title>Team Lewis Hamilton - Merchandise</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php
    /*función que devuelve una array con datos extraídos de la Base de Datos
    @param: $cuales, 0 devuelve los tipos de productos existentes, 
                    1 devuelve las imagenes e ids de los ítem de un tipo
                    2 devuelve las caracterísitcas de un item
    @param: $tipo, para recuperar los items de un tipo o recupera un item segun un id
    */
    function datosBD($cuales,$tipo){
        $PARAM_host='localhost';
        $PARAM_bdd = 'proyecto';
        $PARAM_user = 'root';
        $PARAM_pw = 'u112022php';
        $datos = array();
        try{
            $conexion = new PDO("mysql:host=$PARAM_host;dbname=$PARAM_bdd", $PARAM_user, $PARAM_pw);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if($cuales==0){
                $resultado = $conexion->query("SELECT DISTINCT tipo FROM productos");
                $resultado->setFetchMode(PDO::FETCH_OBJ);
                while($tuple = $resultado->fetch()){
                    $datos[]=$tuple->tipo;
                }
                $resultado->closeCursor();
                return $datos;
            }else if($cuales==1){
                $resultado = $conexion->query("SELECT * FROM productos WHERE tipo='$tipo'");
                $resultado->setFetchMode(PDO::FETCH_OBJ);
                while($tuple = $resultado->fetch()){
                    $dt = [$tuple->id, $tuple->foto];
                    $datos[]=$dt;
                }
                $resultado->closeCursor();
                return $datos;
            }else{
                $resultado = $conexion->query("SELECT * FROM productos WHERE id=$tipo");
                $resultado->setFetchMode(PDO::FETCH_OBJ);
                while($tuple = $resultado->fetch()){
                    $dt = [$tuple->nombre, $tuple->descripcion, $tuple->foto];
                    $datos[]=$dt;
                }
                $resultado->closeCursor();
                return $datos;
            }
            
            } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

?>
<div class="sidenav">
  <a href="index.php">Home</a>
  <a href="#">Merchandise</a>
  <a href="management.php">Management</a>
</div>

<div class="content">
    <h2>Team Lewis Hamilton - Merchandise</h2>
    <div class="submenu">
        <?php
            /*Añadir al submenu cada uno de los tipos existentes en los productos*/
            echo "Categorias";
            $tipos = datosBD(0,'');
            $total = count($tipos);
            for($i=0;$i<$total;$i++){
                $t = $tipos[$i];
                echo "<a href='merchandise.php?t=$t&&id=0'>$t</a>";
            }
        ?>
        <!--a href="productos.php?categoria=tshirt" >T shirts</a-->
        
    </div>
    <div>
        <div class="sidenav2">
            <?php
            /* Amadir al sidebar de items, cada imagen correspondiente a un tipo de productos*/
            $tipo = $_GET["t"];
            $id = $_GET["id"];
            $productos = datosBD(1,$tipo);
            $total = count($productos);
            for($i=0;$i<$total;$i++){
                $d = $productos[$i][0];
                $f = $productos[$i][1];
                echo "<a href='merchandise.php?t=$tipo&&id=$d'><img class='muestra' src='src/$f'></img></a>";
            }
            ?>
            <!--a href="#"><img class="muestra" src="src/tshirt1.jpg"></img></a-->
        </div>
        <div class="content2">
            <?php
            /*Genera la imagen de un ítem con la incrustación de la imagen de la marca*/
            $id = $_GET["id"];
            if($id==0){
                echo "<img id='product' src='mergeimages.php?foto=stillwerise.jpg'></img>";
                echo "<p>Still we rise, dont forget!<br><br><span>Lewis Hamilton</span></p>";
            }else{
                $item = datosBD(2,$id);
                $foto=$item[0][2];

                echo "<img id='product' src='mergeimages.php?foto=$foto'></img>";
                $descripcion = $item[0][1];
                echo "<p>$descripcion<br><br><span>Lewis Hamilton</span></p>";
            }
            
            ?>
        </div>
       
    </div>
</div>

</body>
</html>