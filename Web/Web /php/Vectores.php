<!DOCTYPE html>
<html lang=" ">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST PHP SCRIPT. ENVIRONMENT INFO</title>
  </head>
  <body>
    <?php
$vl =["Nombre"=>"Ricardo",
     "Apellido"=>"Chimborazo",
     "Direccion"=>"Bormujos",
      "Email"=>"Ricardo@gmail.com"];
echo "<ul>";
foreach($vl as $k =>$v) {
  echo "<li><b>$k:</b>$v</li>";
}

echo "</ul>";

   ?>

   <?php
$vl =["Nombre"=>"Ricardo",
    "Apellido"=>"Chimborazo",
    "Direccion"=>"Bormujos",
     "Email"=>"Ricardo@gmail.com"];
echo "<table>";
echo "<tr>";
foreach($vl as $k =>$v) {
 echo "<th>$k</th>";

}
echo"</tr>";

echo "<tr>";
foreach($vl as $v) {
 echo "<td>$v</td>";

}
echo"</tr>";

echo "</table>";

  ?>

  <?php
  //media de numeros
  $vl =[27,89,100,75,2,6,70,50,11,9];
  $suma = 0;

  for ($i=0;$i<sizeof($vl);$i++) {
      $suma=$suma+$vl[$i];
      }
echo "La media es:".($suma /sizeof($vl))."</br>" ;

  ?>
  <?php
  //media de numeros
  $vl =[6,2,10];
  $suma = 0;

  for ($i=0;$i<sizeof($vl);$i++) {
      $suma=$suma+$vl[$i];
      }
  echo "La media es:".($suma /sizeof($vl))."</br>" ;

  ?>

  <?php
  //Minimo
  $vl =[27,89,100,75,2,6,70,50,11,9];
  $suma = 0;

  for ($i=0;$i<sizeof($vl);$i++) {
      $suma=$suma+$vl[$i];
      }
  echo "La media es:".($suma /sizeof($vl))."</br>" ;

  $max=$vl[0];
  $min=$vl[0];

  for($i=1;$i<count($vl);$i++) {
                if($vl[$i]>$max) {
                  $max=$vl[$i];
                }
              }
              echo "<p></p>"

  ?>


  </body>
</html>
