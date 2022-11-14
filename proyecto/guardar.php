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
    <?php
    /* Cargar la imagen, comprobar su tipo y hacer una copia */
    $target_dir = "src/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "<p>File is an image - " . $check["mime"] . ".</p>";
        $uploadOk = 1;
      } else {
        echo "<p>File is not an image.</p>";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "<p>Sorry, file already exists.</p>";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "<p>Sorry, your file is too large.</p>";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "<p>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "<p>Sorry, your file was not uploaded.</p>";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<p>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.</p>";
      } else {
        echo "<p>Sorry, there was an error uploading your file.<p>";
      }
    }
    
    /* Guardar en la tabla el ítem que provino desde el archivo XML */
    $PARAM_host='localhost';
    $PARAM_bdd = 'proyecto';
    $PARAM_user = 'root';
    $PARAM_pw = 'u112022php';

    try{
        $conexion = new PDO("mysql:host=$PARAM_host;dbname=$PARAM_bdd", $PARAM_user, $PARAM_pw);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $tipo = $_POST["tipo"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $foto = $_POST["foto"];

        $sql = "INSERT INTO Productos (tipo, nombre, descripcion,foto) VALUES ('$tipo', '$nombre', '$descripcion','$foto')";
        
        $conexion->exec($sql);
        echo "<p>Registro añadido a la base de datos correctamente.</p>";
      } catch(PDOException $e) {
        echo "<p>Connection failed: " . $e->getMessage() ."</p>";
    }

  ?>
    </div>
  </div>
</body>
</html>
