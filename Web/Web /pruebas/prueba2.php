<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Creating a CHESS using PHP Loops
    Date: October
    Reference: http://php.net/manual/en/control-structures.while.php
    http://php.net/manual/en/control-structures.do.while.php
    http://php.net/manual/en/control-structures.for.php
    Requires: HTML & CSS
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHESS BOARD WITH PHP LOOPS</title>
    <link rel="stylesheet" type="text/css" href="style_chess.css">
  </head>
  <body>

    <table style="border:1px solid black">
    <thead>
      <tr>
        <th>Numero</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
    </thead>
          <?php
          $size=100;
          //Main Loop. Generates as many rows as needed
          for ($i=1;$i<=$size;$i++) {
              echo "<tr>";
              echo "<td>$i</td>";

              //Secondary Loop.Generates as many cells as needed
              //for echa of the rows
              if ($i%2==0) {
                echo "<td>X</td>";
              }
              else {
                echo "<td>-</td>";
              }

              if ($i%3==0) {
                echo "<td>X</td>";
              }
              else {
                echo "<td>-</td>";
              }

              if ($i%4==0) {
                echo "<td>X</td>";
              }
              else {
                echo "<td>-</td>";
              }

              if ($i%5==0) {
                echo "<td>X</td>";
              }
              else {
                echo "<td>-</td>";
              }
              
              echo "</tr>";
          }
          ?>
</table>
  </body>
</html>
