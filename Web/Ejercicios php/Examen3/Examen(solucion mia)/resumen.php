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
      $reparacion = $_GET['id'];


      $query = "SELECT * FROM clientes c join facturas f on c.codcliente=f.codcliente WHERE IdReparacion=$reparacion";

        if ($result = $connection->query($query))  {
          $obj = $result->fetch_object();
          if ($result->num_rows==0) {
            echo "Reparacion sin pagar";
          } else {
          echo "<p>Datos del cliente que ha pagado la reparacion:</p>";
          echo "<p>".$obj->Nombre."</p>";
          echo "<p>".$obj->Apellidos."</p>";
          echo "<p>".$obj->Direccion."</p>";
        }
      }else {
          echo "No se han recuperar los datos cliente";
        }



      $query = "SELECT * FROM vehiculos v join reparaciones r on v.matricula=r.matricula WHERE IdReparacion=$reparacion";

        if ($result = $connection->query($query))  {
          $obj = $result->fetch_object();
          echo "<br>"."Datos del vehiuclo que se ha reparado:".$obj->Matricula.$obj->Modelo.$obj->Marca."<br>";
          echo "<p>".$obj->Matricula."</p>";
          echo "<p>".$obj->Modelo."</p>";
          echo "<p>".$obj->Marca."</p>";
          echo "<p>".$obj->FechaEntrada."</p>";
        } else {
          echo "No se han recuperar los datos de reparaciones";
        }



        $query = "SELECT Descripcion,Unidades,PrecioReferencia*Unidades as Total FROM recambios r join incluyen i on r.IdRecambio=i.IdRecambio WHERE IdReparacion=$reparacion";

          if ($result = $connection->query($query))  {

            if ($result->num_rows==0) {
              echo "Nose han utilizado recambios para esta reparacion";
            } else {
              while($obj = $result->fetch_object()) {
              echo $obj->Descripcion.": ".$obj->Unidades." -> ".$obj->Total."<br>";
            }
          }

          } else {
            echo "No se han recuperar los datos de reparaciones";
          }

          $query = "SELECT sum(PrecioReferencia*Unidades) as Total FROM recambios r join incluyen i on r.IdRecambio=i.IdRecambio WHERE IdReparacion=$reparacion";

            if ($result = $connection->query($query))  {

              if ($result->num_rows==0) {
                echo "Nose han utilizado recambios para esta reparacion";
              } else {
                while($obj = $result->fetch_object()) {
                echo "Total: ".$obj->Total."<br>";
              }
            }

            } else {
              echo "No se han recuperar los datos de reparaciones";
            }



      ?>



  </body>
