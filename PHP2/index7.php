<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Saludo</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
  <div class="container">
    <?php
    $caracter="z";
    ?>
    <h1>Caracteres correctos A.D.S.I</h1>
    <label for="">Ingrese un caracter</label>
    <input type="text" name="" value="<?php echo $caracter; ?>" maxlength="1" disabled>
    <button class="btn btn-primary"type="button" name="button">Ingresar</button>
    <h4>
      <?php

        if ($caracter=="A" or $caracter=="B" or $caracter=="S" or $caracter=="I") {
        echo "El caracter ".$caracter." es correcto";
      }else {
        echo "El caracter ".$caracter. " es incorrecto";
      }
       ?>
    </h4>
    <br>
       <a href="index.php"><button class="btn btn-success" type="button" name="button">Inicio</button></a>
  </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
