<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 13-12-2016 EX2</title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <?php
        include_once("funcion.php");
         $var=["-","X","-","-","X","-","X","-","-","X","X"];
         echo "Número de X =".(numveces($var,"X"))."<br>";
         echo "Número de - =".(numveces($var,"-"));


      ?>
  </body>
</html>
