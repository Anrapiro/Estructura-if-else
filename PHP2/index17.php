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
      <br><br>
     <div class="container">
       <h1>Selecciona opción del menú </h1>
       <ol>
         <li>Añadir</li>
         <li>Editar</li>
         <li>Eliminar</li>
       </ol>
       <?php $A=4; ?>
       <input type="number" name="" min="1" max="3" value="<?php echo $A ?>" disabled>
        <h4>
          <?php
          if ($A==1 or $A==2 or $A==3) {
            echo "La opción es correcta ";
          }else {
            echo "La opción es incorrecta";
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
