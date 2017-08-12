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
       <h1>Convercion de Kilometros</h1>
       <hr>
       <?php $km=17; ?>
       <label for=""></label>
       <input type="text" name="" value="<?php echo $km;?>" disabled>
       <button class="btn btn-primary"type="button" name="button">Convertir</button>
       <h2> hectómetros </h2>
       <h4>
         <?php
         $hm=($km*10)/1;
         echo "En ".$km." kilómetros hay ".$hm." hectómetros";
          ?>
       </h4>
          <hr>
          <h2> decámetros  </h2>
          <h4>
            <?php
            $dm=($km*100)/1;
            echo "En ".$km." kilómetros hay ".$dm." decámetros";
             ?>
          </h4>
             <hr>
          <h2> Metros</h2>
          <h4>
            <?php
            $m=$km*1000;
            echo "En ".$km." kilómetros hay ".$m."metros";
             ?>
           </h4>
          <hr>
          <h2>Decímetros </h2>
          <h4>
            <?php
            $dm=($km*10000)/1;
            echo "En ".$km." kilómetros hay ".$dm." Decímetros";
            ?>
          </h4>

               <hr>
             <h2> Centímetros</h2>
             <h4>
               <?php
               $cm=$km*100000;
               echo "En ".$km." kilómetros hay ".$cm." Centímetros";
                ?>
             </h4>
             <hr>
           <h2> Centímetros</h2>
           <h4>
             <?php
             $mm=$km*1000000;
             echo "En ".$km." kilómetros hay ".$mm." Milímetros";
              ?>
           </h4>
           <br>
              <a href="index.php"><button class="btn btn-success" type="button" name="button">Inicio</button></a>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
