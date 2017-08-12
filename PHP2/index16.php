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
     <h1>Suma del A y B igual a C</h1>
     <?php
      $a=5;
      $b=6;
      $c=11;
      ?>
      <label for="">Digite 3 numeros a evaluar </label>
      1: <input type="number" name="" value="5" disabled>
      2: <input type="number" name="" value="6" disabled>
      3: <input type="number" name="" value="11" disabled>
      <button class="btn btn-primary" type="button" name="button">Evaluar</button>
      <h4>
        <?php
        if ($a+$b==$c) {
          echo "La suma de ".$a." y ". $b." es igual a ".$c;
        }else {
          echo "La suma de ".$a." y ". $b." no es igual a ".$c;
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
