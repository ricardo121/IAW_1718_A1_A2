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
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      $query="SELECT * from recambios";
      if ($result = $connection->query($query)) {
          printf("<p>The select query returned %d rows.</p>", $result->num_rows);
      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>IdRecambio</th>
              <th>Descripcion</th>
              <th>UnidadBase</th>
              <th>Stock</th>
              <th>PrecioReferencia</th>
          </thead>

      <?php
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
              echo "<td><a href='borrar.php?id=".$obj->IdRecambio.
                  "'>".$obj->IdRecambio."</a></td>";
                echo "<td>".$obj->Descripcion."</td>";
                echo "<td>".$obj->UnidadBase."</td>";
                echo "<td>".$obj->Stock."</td>";
                echo "<td>".$obj->PrecioReferencia."</td>";
              echo "</tr>";
          }
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    ?>

  </body>
</html>
