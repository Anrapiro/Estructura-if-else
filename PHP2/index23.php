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
        <?php   $s=34000000; $años=5?>
        <h1>Sueldo De empleado SENA</h1>
        <label for="">Sueldo de empleado</label>
        <input type="text" name="" value="<?php echo" $ ". $s; ?> al año"disabled><br>
        <label for="">Ingrese la cantidad de años en el SENA *</label>
        <br>
        <input type="text" name="" value="<?php echo $años?>" disabled>
        <button class="btn btn-primary"type="button" name="button">Calcular</button>
        <br>
        <h4>
          <?php
          $aumento=0;
          $pago=0;
          if ($años==5) {
            echo "Tendra un aumento de 5%";
            $aumento=(5/100)*$s;
            $pago=$aumento+$s;
          }elseif ($años>5 && $años<=10) {
            echo "Tendra un aumento de 10%";
            $aumento=(10/100)*$s;
            $pago=$aumento+$s;
          }elseif ($años<5 && $años>3) {
            echo "Tendra un aumento de 2,5%";
            $aumento=(2.5/100)*$s;
            $pago=$aumento+$s;
          }elseif ($años>10) {
            echo "Tendra un aumento de 15%";
            $aumento=(15/100)*$s;
            $pago=$aumento+$s;
          }else {
            echo "Tendra un aumento de 0%";

            $pago=$aumento+$s;
          }
           ?>
       </h4>
       <label for="">Al empleado se le pagara:</label>
       <input type="text" name="" value="$ <?php echo $pago?>" disabled><br>
          <a href="index.php"><button class="btn btn-success" type="button" name="button">Inicio</button></a>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
