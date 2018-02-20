<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Clientes</title>
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
      $query="SELECT * from empleados";
      if ($result = $connection->query($query)) {
          printf("<p>The select query returned %d rows.</p>", $result->num_rows);
      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
              <th>CodEmpleado</th>
              <th>DNI</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Direccion</th>
              <th>Telefono</th>
              <th>CP</th>
              <th>FechaAlta</th>
              <th>Categoria</th>
          </thead>

      <?php
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
              echo "<td><a href='intervienen.php?codigo=".$obj->CodEmpleado.
                  "'>".$obj->CodEmpleado."</a></td>";
                echo "<td>".$obj->DNI."</td>";
                echo "<td>".$obj->Nombre."</td>";
                echo "<td>".$obj->Apellidos."</td>";
                echo "<td>".$obj->Direccion."</td>";
                echo "<td>".$obj->Telefono."</td>";
                echo "<td>".$obj->CP."</td>";
                echo "<td>".$obj->FechaAlta."</td>";
                echo "<td>".$obj->Categoria."</td>";
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
