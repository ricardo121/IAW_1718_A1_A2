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

        $query = "SELECT * FROM vehiculos WHERE Marca='".$_GET['marca']."';";

          if ($result = $connection->query($query))  {
            $obj = $result->fetch_object();
            if ($result->num_rows==0) {
              echo "NO EXISTE ESA MARCA";
              exit();
            }
            $M = $obj->Marca;
            echo "Vehiculos $M "."Atendidos".":".$result->num_rows;
            echo "<a href='vehiculos.php'>Volver</a>";
          } else {
            echo "No se han recuperar los datos cliente";
            exit();
          }

        ?>



  </body>
