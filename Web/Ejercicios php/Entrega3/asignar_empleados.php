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

      <!-- PHP STRUCTURE FOR CONDITIONAL HTML -->
      <!-- FIRST TIME. NO DATA IN THE POST (checking a required form field) -->
      <!-- So we must show the form -->

      <?php
        if (empty($_GET)) {
          echo "No se han recibido datos del reparaciones";
          exit();
        }
      ?>

      <?php if (!isset($_POST["codigo"])) : ?>

        <?php

        $connection = new mysqli("192.168.1.55", "root", "Admin2015", "tf",3316);
        $connection->set_charset("uft8");
        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }




        ?>


        <form method="post">
        <fieldset>

          <?php
          echo "<span>Empleado:</span><select name='codigo'>";

          $query="SELECT * from empleados";

          if ($result=$connection->query($query)) {
            while($obj=$result->fetch_object()) {
              echo "<option value='".$obj->CodEmpleado."'>";
              echo $obj->Apellidos.",".$obj->Nombre;
              echo "</option>";
              $hola = $obj->CodEmpleado;
            }
          } else {
            echo "NO SE HA PODIDO RECUPERAR LOS EMPLEADOS";
          }
          echo "</select>";
          ?>
          <p><input type="submit" value="Insertar"></p>

        </fieldset>
        </form>

        <?php else: ?>

        <?php
        $id = $_GET["id"];
        $codemple = $_POST["codigo"];

        //CREATING THE CONNECTION
        $connection = new mysqli("192.168.1.55", "root", "Admin2015", "tf",3316);
        $connection->set_charset("uft8");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }
        //MAKING A SELECT QUERY$query="SELECT * from reparaciones r join intervienen i on r.idreparacion=i.idreparacion join empleados e on i.codempleado=e.codempleado where IdReparacion='".$_GET["id"]."'";


        /* Consultas de selección que devuelven un conjunto de resultados */
        $query="INSERT INTO intervienen (CodEmpleado,IdReparacion) VALUES ('$codemple','$id')";
        echo $query;
        if ($result = $connection->query($query)) {
          echo "Empleado Insertado";
        } else {
          echo "Error al Insertar Empleado";
        }
        ?>



        <?php endif ?>

  </body>
  </html>
