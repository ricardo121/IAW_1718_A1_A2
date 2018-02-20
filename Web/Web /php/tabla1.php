<!DOCTYPE html>
<html lang=" ">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST PHP SCRIPT. ENVIRONMENT INFO</title>
  </head>
  <body>

    <table>
    <?php

$numfilas=5;
$numcolumnas=5;

  for($i=0;$i<$numfilas;$i++){
	echo "<tr>";

  for($j=0;$j<$numcolumnas;$j++){
    echo "<td>";
    echo "X";
    echo "</td>";
  }
  echo "</tr>";
}


   ?>
</table>

<table>
  <?php
$tamaño=10;




?>
</table>
  </body>
</html>
