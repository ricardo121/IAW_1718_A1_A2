<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Passing info using POST and HTML forms
                 using the same file
    Date: November 2015
    Reference: http://www.w3schools.com/tags/tag_form.asp
               http://www.w3schools.com/tags/tag_input.asp
               http://php.net/manual/reserved.variables.post.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing info with POST and HTML FORMS using a single file.</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>


      <?php
      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "root", "Admin2015", "tf",3316);
      $connection->set_charset("uft8");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
      ?>

      <?php if (!isset($_POST["km"])) : ?>
        <form method="post">
          <fieldset>
            <span>KM:</span><input type="text" name="km" required><br>
            <p><input type="submit" value="Insertar"></p>
          </fieldset>
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>

        <?php
        $km = $_POST["km"];
        $query = "SELECT *, max(km) FROM vehiculos v join reparaciones r on v.matricula=r.matricula group by v.matricula
        having max(km) > $km";

        if ($connection->query($query)) {
          if ($result = $connection->query($query)) {
            echo "<table>";
            //FETCHING OBJECTS FROM THE RESULT SET
            //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
            while($obj = $result->fetch_object()) {
                //PRINTING EACH ROW
                echo "<tr>";
                  echo "<td>".$obj->Matricula."</td>";
                  echo "<td>".$obj->Marca."</td>";
                  echo "<td>".$obj->Modelo."</td>";
                  echo "<td>".$obj->Color."</td>";
                  echo "<td>".$obj->FechaMatriculacion."</td>";
                echo "</tr>";
            }
            echo "</table>";
          }
        } else {
          echo "ERROR";
        }
        ?>

      <?php endif ?>

  </body>
</html>
