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
        <?php   $n1=3; $n2=1; ?>
        <h1>Numeros primos </h1>
        <label for="">Ingrase dos numeros a evaluar</label>
        <input type="number" name="" min="1" max="5"value="<?php echo $n1; ?>" disabled>
        <input type="number" name="" min="1" max="5"value="<?php echo $n2; ?>" disabled>
        <button class="btn btn-primary"type="button" name="button">Evaluar</button>
        <br>
        <h4>
        <?php
        if ($n1==1 or $n1==3 or $n1==5  && $n2==1 or $n2==3 or $n2==5 ) {
          echo "Ambos numeros son primos";
        }else {
          echo "Los numero no son primos";
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
