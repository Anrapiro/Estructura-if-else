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
    <h1>Dia de la semana</h1>
    <?php
    $v="4";
    ?>
    <label for="">Ingrese un numero </label>
    <input type="number" name="" value="<?php echo $v; ?>" min="1" max="7" disabled>
    <button class="btn btn-primary"type="button" name="button">Evaluar</button>
    <h4>
      <?php
      switch ($v) {
        case 1:
          echo "El numero ".$v." corresponde al dia lunes";
          break;
          case 2:
            echo "El numero ".$v." corresponde al dia martes";
            break;
            case 3:
              echo "El numero ".$v." corresponde al dia miercoles";
              break;
              case 4:
                echo "El numero ".$v." corresponde al dia jueves";
                break;
                case 5:
                  echo "El numero ".$v." corresponde al dia viernes";
                  break;
                  case 5:
                    echo "El numero ".$v." corresponde al dia viernes";
                    break;
                    case 6:
                      echo "El numero ".$v." corresponde al dia sabado";
                      break;
                      case 7:
                        echo "El numero ".$v." corresponde al dia domingo";
                        break;

        default:
          echo "El numero ".$v." no corresponde a ningun dia de la semana";
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
