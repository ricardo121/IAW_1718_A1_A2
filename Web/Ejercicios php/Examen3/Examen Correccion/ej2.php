<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
        <?php
         include_once ("funciones.php");
         $var=["-","X","-","-","X","-","X","-","-","X","X"];
         echo strlen($var[0])."<br>";
         echo sizeof($var)."<br>";
         echo $var[1]."<br>";
         echo "Número de X =".(numveces($var,"X"))."<br>";
         echo "Número de - =".(numveces($var,"-"));
        ?>

    </body>
</html>
