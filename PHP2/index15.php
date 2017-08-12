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
         $numero=580;
         $numero1=205;
         $numero2=20;

        ?>
        <h1>Orden descendente</h1>
        <label for="">Ingrese 3 numeros a evaluar </label>
        1: <input type="number" name="" value="<?php echo $numero; ?>" disabled >
        2: <input type="number" name="" value="<?php echo $numero1; ?>" disabled >
        3: <input type="number" name="" value="<?php echo $numero2; ?>" disabled >
        <button class="btn btn-primary"type="button" name="button">Calcular</button>
        <h4>
          <?php
          if ($numero>$numero1 && $numero1>$numero2) {
            echo "Los numeros ingresados se encuentran en orden descendente";
            echo "<br>";
            echo $numero;
            echo "<br>";
            echo $numero1;
            echo "<br>";
            echo $numero2;

          }else{
            echo "Los numeros ingresados no se encuentran en orden descendente ";
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
