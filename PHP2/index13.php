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
        <?php   $n1=5; $n2=4; ?>
        <h1>Numeros par o impar </h1>
        <label for="">Ingrase dos numeros a evaluar</label>
        <input type="number" name="" min="1" max="5"value="<?php echo $n1; ?>" disabled>
        <input type="number" name="" min="1" max="5"value="<?php echo $n2; ?>" disabled>
        <button class="btn btn-primary"type="button" name="button">Evaluar</button>
        <br>
        <h4>
        <?php
        if ($n1%2==0 && $n2%2==0 ) {
          echo "Los numeros ".$n1." y ".$n2." son pares";
        }else{
          if ($n1%2!=0 && $n2%2!=0) {
              echo "Los numeros ".$n1." y ".$n2." son impares";
          }
          if ($n1%2==0) {
          echo "El numero ".$n1." es par";
          }
          if ($n2%2==0) {
            echo "El numero ".$n2." es par";
          }
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
