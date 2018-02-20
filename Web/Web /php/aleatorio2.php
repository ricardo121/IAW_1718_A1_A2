<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCISE 08: USING rand() AND SWITCH</title>
  </head>
  <body>
      <?php
        //Random number between 1 and 5
        $number=rand(1,5);
        switch ($number) {
          case 1:
            echo "One";
            break;
          case 2:
            echo "Two";
              break;
          case 3:
            echo "Three";
            break;
          case 4:
            echo "Four";
            break;
          case 5:
            echo "Five";
            break;
        }
      ?>
  </body>
</html>
