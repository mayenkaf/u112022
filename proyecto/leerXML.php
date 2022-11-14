<!DOCTYPE html>
<html lang="en">
<head>
<title>Management</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="sidenav">
  <a href="index.php">Home</a>
  <?php 
    echo "<a href='merchandise.php?t=Tshirts&&id=0'>Merchandise</a>";
  ?>
  <a href="management.php">Management</a>
</div>

<div class="content">
  <h2>Team Lewis Hamilton - Management Content</h2>
  
  <div class="formdiv">

    <?php
    /* recupera los datos del archivo XML con datos de un item */
    function readXML($archivo){
        
        $xml=simplexml_load_file($archivo) or die("Error: Cannot create object");
        
        $tipo= $xml->tipo;
        $nombre = $xml->nombre;
        $descripcion = $xml->descripcion;
        $foto = $xml->foto;
        echo "<form action='guardar.php' method='post' enctype='multipart/form-data'>
        <label for='ltipo'>Tipo</label>
        <input type='text' id='ltipo' name='tipo' value='$tipo'>
        <label for='lname'>Nombre</label>
        <input type='text' id='lname' name='nombre' value='$nombre'>
        <label for='ldesc'>Descripcion</label>
        <input type='text' id='ldesc' name='descripcion' value='$descripcion'>
        <label for='lfoto'>Foto</label>
        <input type='text' id='lfoto' name='foto' value='$foto'>
        <label>Seleccionar archivo JPG:</label>
        <input type='file' name='fileToUpload' id='fileToUpload'>
        <input type='submit' value='Submit'>
        </form>";        
    }
    $a = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    readXML("datosXML/" . $a);
    ?>

</div>
  </div>
</body>
</html>
