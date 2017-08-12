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
    <h1>Validacion de una vocal</h1>
    <?php
    $v="v";
    ?>
    <label for="">Ingrese un caracter</label>
    <input type="text" name="" value="<?php echo $v; ?>" maxlength="1" disabled>
    <button class="btn btn-primary"type="button" name="button">Evaluar</button>
    <h4>
      <?php
      switch ($v) {
        case 'a':
          echo "la letra  ".$v."  es una vocal";
          break;
          case 'e':
            echo "la letra  ".$v."  es una vocal";
            break;
            case 'i':
              echo "la letra  ".$v."  es una vocal";
              break;
              case 'o':
                echo "la letra  ".$v."  es una vocal";
                break;
                case 'u':
                  echo "la letra  ".$v."  es una vocal";
                  break;
        default:
          echo "La letra ".$v." no es una vocal";
          break;
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
