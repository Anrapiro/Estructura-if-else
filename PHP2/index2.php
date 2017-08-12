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
         $numero=15;
        ?>
        <h1>Mayor a 10</h1>
        <label for="">Ingrese el  numero a evaluar </label>
        <input type="number" name="" value="<?php echo $numero; ?>" disabled >
        <button class="btn btn-primary"type="button" name="button">Calcular</button>
        <h4>
        <?php
       if ($numero>10) {
          Echo "El numero ".$numero. " es  mayor que 10";
        }else {
          Echo "El numero ".$numero." es menor a 10" ;
        }
        ?>
        </h4>
        <br>
        <br>
        <a href="index.php"><button class="btn btn-success" type="button" name="button">Inicio</button></a>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
