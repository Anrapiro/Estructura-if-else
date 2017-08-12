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
    <h1>Meses del año</h1>
    <?php
    $v="8";
    ?>
    <label for="">Ingrese un numero </label>
    <input type="number" name="" value="<?php echo $v; ?>" min="1" max="12" disabled>
    <button class="btn btn-primary"type="button" name="button">Evaluar</button>
    <h4>
      <?php
      switch ($v) {
        case 1:
          echo "El numero ".$v." corresponde al mes enero";
          break;
          case 2:
            echo "El numero ".$v." corresponde al mes febrero";
            break;
            case 3:
              echo "El numero ".$v." corresponde al mes marzo";
              break;
              case 4:
                echo "El numero ".$v." corresponde al mes abril";
                break;
                case 5:
                  echo "El numero ".$v." corresponde al mes de marzo";
                  break;
                  case 5:
                    echo "El numero ".$v." corresponde al mes de mayo";
                    break;
                    case 6:
                      echo "El numero ".$v." corresponde al mes de junio";
                      break;
                      case 7:
                        echo "El numero ".$v." corresponde al mes de julio";
                        break;
                        case 8:
                          echo "El numero ".$v." corresponde al mes de agosto";
                          break;
                          case 9:
                            echo "El numero ".$v." corresponde al mes de septiembre";
                            break;
                            case 10:
                              echo "El numero ".$v." corresponde al mes de octubre";
                              break;
                              case 11:
                                echo "El numero ".$v." corresponde al mes de noviembre ";
                                break;
                                case 12:
                                  echo "El numero ".$v." corresponde al mes de diciembre";
                                  break;

        default:
          echo "El numero ".$v." no corresponde a ningun mes del año";
          break;
      }
       ?>
       <br>
          <a href="index.php"><button class="btn btn-success" type="button" name="button">Inicio</button></a>
    </h4>
  </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
