<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Using nested Loops
    Date: October 2016
    Reference: http://www.php.net
    Requires: PHP Knowledge of vars and Loops &&
              HTML basic knowledge
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using nested Loops</title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <body>
      <table>

      <?php
        //Size of the table
        $v=[[3,4,5,6,7,5],[1,2,3,4,6,9],[9,1,2,3,5,5]];
        //Main Loop. Generates as mny rows as needed
        for ($i=0;$i<sizeof($v);$i++) {
            echo "<tr>";
            //Secondary Loop.Generates as many cells as needed
            //for echa of the rows
            for ($j=0;$j<sizeof($v[$i]);$j++) {
              //Each cell contains its order number
              echo "<td>".($v[$i][$j])."</td>";
            }
            echo "</tr>";
        }
      ?>


      </table>
  </body>
</html>
