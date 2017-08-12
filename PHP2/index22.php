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
        <?php   $n1=200000; ?>
        <h1>Valor neto</h1>
        <label for="">Ingrese valor Bruto</label>
        <input type="number" name="" value="<?php echo $n1; ?>" disabled>
        <button class="btn btn-primary"type="button" name="button">Calcular</button>
        <br>
        <h4>

        <?php
        $descuento=0;
        if ($n1>250000) {
          echo "El descuento sera del 10% ";
          $descuento=$n1*(10/100);
          $neto=$n1-$descuento;
        }else {
          echo "El descuento sera del 5% ";
          $descuento=$n1*(5/100);
          $neto=$n1-$descuento;
        }

         ?>
         <br>
         <label for="">Valor neto a pagar</label>
         <input type="text" name="" value="$ <?php echo $neto; ?> " disabled>
       </h4>
       <br>
          <a href="index.php"><button class="btn btn-success" type="button" name="button">Inicio</button></a>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
