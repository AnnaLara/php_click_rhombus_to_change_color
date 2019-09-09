<?php
require_once('../getcolor.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Prueba</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
    <div id="container">
      <div id="rombo" style="background-color: rgb<?= $row['color_id'] ?>">
        <div id="text">Pulsa aquí para cambiar el color</div>
      </div>
    </div>

    </div>
  </body>
</html>
