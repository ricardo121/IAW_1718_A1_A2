
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Basics 2016. Ex03</title>
  </head>
  <body>
    <?php
      //Let's get the month using date function
      $month=date("m");
      //If-then control structure
      if ($month=="8") {
        echo "It's August, so it's really hot.";
      } else {
        echo "Not August, so at least not in the peak of the heat.";
      }
    ?>
  </body>
</html>
