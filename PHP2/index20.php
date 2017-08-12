  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saludo</title>
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body >
    <br>
    <div class="container ">
      <h1>Perimetros de un triangulo</h1>
      <button class="btn btn-primary"type="button" name="button" data-toggle="modal" data-target="#myModal">Triangulo</button>
      <button class="btn btn-success"type="button" name="button" data-toggle="modal" data-target="#rectangulo">Rectangulo</button>
        <button class="btn btn-danger"type="button" name="button" data-toggle="modal" data-target="#trapecio">Trapecio</button>
        <br>
        <br>
           <a href="index.php"><button class="btn btn-success" type="button" name="button">Inicio</button></a>
  </div>


    <!--abrir mensaje emerjente:  data-toggle="modal" data-target="#myModal" -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <!-- /.modal-dialog -->
      <form class="modal-dialog" action=""  autocomplete="on">
        <div class="modal-content">

          <h1 class="">Triangulo</h1>
          <?php
          $l1=6;
          $l2=6;
          $l3=3;
           ?>
          <div class="modal-body">
          <label class="" for="">ingrese lado 1: </label>
          <input class=""type="text" name="" value="<?php echo $l1;?>" disabled><br>
          <label class="text-center" for="">ingrese lado 2: </label>
          <input class=""type="text" name="" value="<?php echo $l2;?>" disabled><br>
          <label class="text-center" for="">ingrese lado 3: </label>
          <input class=""type="text" name="" value="<?php echo $l3;?>" disabled>
          <button type="button" name="button">Calcular</button>
          <h4>
            <?php
            if ($l1==$l2 && $l1==$l3) {
              $p=$l1*3;
            echo "El perimetro del triangulo es ".$p;
          }elseif ($l1==$l2 ) {
            $p=($l1*2)+$l3;
          echo "El perimetro del triangulo es ".$p;
        }else {
          $p=($l1+$l2)+$l3;
        echo "El perimetro del triangulo es ".$p;

        }
             ?>
          </h4>

           <!--/modal-footer-->
          </div>
          <!--/modal-body-->
        </div>
        <!--/modal-content-->
      </form>
    </div>
    <!-- /.modal -->
    <!-- Modal -->
    <div class="modal fade" id="rectangulo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <!-- /.modal-dialog -->
      <form class="modal-dialog" action=""  autocomplete="on">
        <div class="modal-content">

          <h1 class="">Rectangulo</h1>
          <?php
          $a1=3;
          $b1=6;
          $a2=3;
          $b2=6;
           ?>
          <div class="modal-body">
          <label class="" for="">ingrese altura 1: </label>
          <input class=""type="text" name="" value="<?php echo $a1;?>" disabled><br>
          <label class="text-center" for="">ingrese  base 1: </label>
          <input class=""type="text" name="" value="<?php echo $b1;?>" disabled><br>
          <label class="text-center" for="">ingrese altura 2: </label>
          <input class=""type="text" name="" value="<?php echo $a2;?>" disabled><br>
          <label class="text-center" for="">ingrese  base 2: </label>
          <input class=""type="text" name="" value="<?php echo $b2;?>" disabled>
          <button type="button" name="button">Calcular</button>
          <h4>
            <?php
            if ($a1==$a2 && $b2==$b1) {
              if ($a1<$b2) {
                $p=($a1*2)+($b1*2);
                  echo "El perimetro del rectangulo es ".$p;
              }
        }else {
        echo "la base y altura ingresados son incorrectos";
        }
             ?>
          </h4>
           <!--/modal-footer-->
          </div>
          <!--/modal-body-->
        </div>
        <!--/modal-content-->
      </form>
    </div>
    <!-- /.modal -->
    <!-- Modal -->
    <div class="modal fade" id="trapecio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <!-- /.modal-dialog -->
      <form class="modal-dialog" action=""  autocomplete="on">
        <div class="modal-content">

          <h1 class="">Trapecio</h1>
          <?php
          $a1=4;
          $b1=3;
          $a2=5;
          $b2=6;
           ?>
          <div class="modal-body">
          <label class="" for="">ingrese altura 1: </label>
          <input class=""type="text" name="" value="<?php echo $a1;?>" disabled><br>
          <label class="text-center" for="">ingrese  base 1: </label>
          <input class=""type="text" name="" value="<?php echo $b1;?>" disabled><br>
          <label class="text-center" for="">ingrese altura 2: </label>
          <input class=""type="text" name="" value="<?php echo $a2;?>" disabled><br>
          <label class="text-center" for="">ingrese  base 2: </label>
          <input class=""type="text" name="" value="<?php echo $b2;?>" disabled>
          <button type="button" name="button">Calcular</button>
          <h4>
            <?php
            if ( $b2>$b1) {
                $p=$a1+$a2+$b2+$b1;
                  echo "El perimetro del Trapecio es ".$p;
        }elseif ($a1==$a2 && $b2==$b1) {
          echo "Las medidas no son correctas ";
        }
             ?>
          </h4>
           <!--/modal-footer-->
          </div>
          <!--/modal-body-->
        </div>
        <!--/modal-content-->
      </form>
    </div>
    <!-- /.modal -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

  </html>
