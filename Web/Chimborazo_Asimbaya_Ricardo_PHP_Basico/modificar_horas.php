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
      <?php if (!isset($_POST["dni"])) : ?>


      <?php

      $connection = new mysqli("localhost", "root", "Admin2015", "tf",3316);
      $connection->set_charset("uft8");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      $horas = $_GET['horas'];


        $query = "SELECT * FROM reparaciones r join intervienen i on r.idreparacion=i.idreparacion join empleados e on e.codempleado=i.codempleado WHERE i.horas=$horas";
        if ($result= $connection->query($query)) {
            $obj = $result->fetch_object();
            echo "Horas del empleado:".$obj->Nombre." ".$obj->Apellidos."<br>";
            echo "Reparacion:".$obj->Matricula." , ".$obj->FechaEntrada." y ".$obj->Averia."<br>";
            $cod = $obj->CodEmpleado;
            $idrep = $obj->IdReparacion;
        } else {
          echo "No se han podido recuperar los datos del vehiculo";
        }



      ?>

      <form method="post">
            <input value='<?php echo $horas; ?>' type="text" name="horas" required><br>
            <input type="hidden" name="cod" value='<?php echo $cod; ?>'>
            <input type="hidden" name="idrep" value='<?php echo $idrep; ?>'>
            <p><input type="submit" value="Modificar"></p>
        </form>

      <?php else: ?>

      <?php
      $hora = $_POST["horas"];
      $codigo = $_POST["cod"];
      $id = $_POST["idrep"];
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
      $query="update intervienen set Horas='$horas'
      WHERE codempleado='$codigo' and idreparacion='$id'";
      echo $query;
      if ($result = $connection->query($query)) {
        echo "Datos actualizados";
      } else {
        echo "Error al actualizar los datos";
      }
      ?>







      <?php endif ?>


  </body>
