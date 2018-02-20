<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examn 13-12-2016</title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>

    <?php
//Definición del array
$v=["HOLA","ADIOS","HASTA LUEGO"];
//Recorremos el Array
for ($i=0;$i<sizeof($v);$i++) {
  //Sacamos la Longitud del elemento. Para cadenas usamos strlen
  echo strlen($v[$i])."->'";
  //Las cadenas puede ser tratadas como un array así que recorremos
  //el elemento que estamos tratando al revés
  for($j=strlen($v[$i])-1;$j>=0;$j--) {
     echo $v[$i][$j];
  }
  //Cerramos las comillas y ponemos una nuevo línea
  echo "'<br>";
}
?>

  </body>
</html>
