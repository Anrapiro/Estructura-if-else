
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
             $numero=20;
             $numero1=202;
             $numero2=58;
             if ($numero<$numero1 && $numero<$numero2) {
              $menor=$numero;
            }elseif ($numero2<$numero && $numero2<$numero1) {
              $menor=$numero2;
            }elseif ($numero1<$numero2 && $numero1<$numero) {
              $menor=$numero1;
            }
            if ($numero>$numero1 && $numero>$numero2) {
             $mayor=$numero;
           }elseif ($numero2>$numero && $numero2>$numero1) {
             $mayor=$numero2;
           }elseif ($numero1>$numero2 && $numero1>$numero) {
             $mayor=$numero1;
           }
           if ($menor>$numero1 or $menor>$numero or $menor>$numero2 && $menor<$mayor) {
            $medio=$numero1;
          }else {
            $medio=$numero2;
          }
            ?>
            <h1>Mayor a menor</h1>
            <label for="">Ingrese el  numeros a evaluar </label>
            <input type="number" name="" value="<?php echo $numero1; ?>" disabled >
            <input type="number" name="" value="<?php echo $numero; ?>" disabled >
            <input type="number" name="" value="<?php echo $numero2; ?>" disabled >
            <button class="btn btn-primary"type="button" name="button">Calcular</button>
            <h4>
              <?php
              echo $mayor;
                echo "<br>";
                echo $medio;
                echo "<br>";
              Echo $menor;

              ?>
            </h4>
            <br>
               <a href="index.php"><button class="btn btn-success" type="button" name="button">Inicio</button></a>
          </div>
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
      </body>
    </html>
