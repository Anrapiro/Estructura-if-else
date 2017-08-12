
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
             $numero=202;

            ?>
            <h1>Par o impar</h1>
            <label for="">Ingrese el  numero a evaluar </label>
            <input type="number" name="" value="<?php echo $numero; ?>" disabled >
            <button class="btn btn-primary"type="button" name="button">Calcular</button>
            <h4>
              <?php if ($numero%2==0) {Echo "El numero ".$numero. " es par"; }
                    else {
                      echo "El numero ".$numero." es impar";
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
