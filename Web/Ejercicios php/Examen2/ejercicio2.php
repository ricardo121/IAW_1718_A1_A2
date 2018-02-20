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
  //Incluimos la fichero con la función
  include_once ("funcion.php");
  //Definimos la cadena a dividir
  $str="Hola alumno, ¿cómo estás?";
  //Llamamos a la función y lo metemos en un vector
  //Si nos devuelve false es que no estaba ese carácter
  if ($v = dividir($str,",")) {
    echo "<ul>";
    echo "<li>Primera parte:".$v[0]."</li>";
    echo "<li>Segunda parte".$v[1]."</li>";
    echo "</ul>";
  } else {
    "No se encontró ese carácter en la cadena";
  }
     ?>
  </body>
</html>
