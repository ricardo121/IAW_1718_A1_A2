<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
  </head>
  <body>
      <?php

        $var=["A","B","C","D"];

          echo "<ul>";
        for($i=sizeof($var)-1;$i>=0;$i--) {
          echo "<li>$var[$i]</li>";
        }
        echo "</ul>";

      ?>

  </body>
</html>
