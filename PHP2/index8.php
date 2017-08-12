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
    <h1>Numero entre 10 y 100</h1>
    <?php
    $n=99;
    ?>
    <label for="">Digite un Valor</label>
    <input type="number" name="" value="<?php echo $n; ?>"  disabled>
    <button class="btn btn-primary"type="button" name="button">Evaluar</button>
    <h4>
      <?php
      if ($n>=10 && $n<=100) {
        echo "El numero ".$n." se encuentra dentro del rango ";
      }else{
        echo "El numero ".$n." no se encuentra dentro del rango ";
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
