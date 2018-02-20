<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Clientes</title>
  </head>
  <body>


    <?php
        if (empty($_GET)) {
          echo "No se han recibido datos del reparaciones";
          exit();
        }
      ?>



      <?php

      $connection = new mysqli("localhost", "root", "Admin2015", "tf",3316);
      $connection->set_charset("uft8");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      $codigo = $_GET['codigo'];

//1
      $query = "SELECT * FROM reparaciones r join intervienen i on r.idreparacion=i.idreparacion join empleados e on e.codempleado=i.codempleado WHERE e.codempleado=$codigo";

        if ($result = $connection->query($query))  {
          $obj = $result->fetch_object();
          if ($result->num_rows==0) {
            echo "El empleado no ha intervenido en ninguna reparacion";
          } else {
            echo "Intervenciones de:".$obj->Nombre." ".$obj->Apellidos."<br>";
            echo "<table style='border:1px solid black'>";
            echo"<thead>";
                echo"<th>Matricula</th>";
                echo"<th>Averia</th>";
                echo"<th>Fecha Entrada</th>";
                echo"<th>Horas</th>";
            echo "</thead>";
            echo"<tr>";
            echo "<td>".$obj->Matricula."</td>";
            echo "<td>".$obj->Averia."</td>";
            echo "<td>".$obj->FechaEntrada."</td>";
            echo "<td><a href='modificar_horas.php?horas=".$obj->Horas.
                "'>".$obj->Horas."</a></td>";
            echo "</tr>";
            echo"</table>";
        }
      }else {
          echo "No se han recuperar los datos cliente";
        }



      ?>



  </body>
