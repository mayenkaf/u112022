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
  <a href="#">Management</a>
</div>

<div class="content">
  <h2>Team Lewis Hamilton - Management Content</h2>
  
  <div class="formdiv">

    <form class= "formdiv" action="leerXML.php" method="post" enctype="multipart/form-data">
      <label for="fname">Seleccionar archivo XML con datos:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Cargar Datos" name="submit">
    </form>
    
</div>
  </div>
</body>
</html>