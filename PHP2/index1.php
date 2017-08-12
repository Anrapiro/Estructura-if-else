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
        <?php   $n1=-152; ?>
        <h1>Positivo o negativo</h1>
        <label for="">Ingrase un numero a evaluar</label>
        <input type="number" name="" value="<?php echo $n1; ?>" disabled>
        <button class="btn btn-primary"type="button" name="button">Calcular</button>
        <br>
        <h4>

        <?php


          if ($n1<0) {
            echo "El numero ".$n1." es negativo ";
          }else {
            echo "el numero ".$n1." es positivo";
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
