<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar empleados</title>
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
      if (empty($_GET)) {
        echo "No se han recibido datos del reparaciones";
        exit();
      }
    ?>

    <?php if (!isset($_POST["CodEmpleado"])) : ?>
      <?php
    	//CREATING THE CONNECTION
    	//include_once("conectar_DB.php");
    	var_dump(include_once "conectar_DB_casa.php");
    	if (!$connection=conectar()) {
    		exit();
    	}
    	?>

    <form method="post">
      <fieldset>
        <?php

        if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
        }

        $query="SELECT * from empleados ORDER BY Apellidos;";

        if ($result=$connection->query($query)) {

        }

        echo "<span>Empleado:</span><select name='codemp'>";

        while($obj=$result->fetch_object()) {
        echo "<option value='".$obj->CodEmpleado."'>";
          echo $obj->Apellidos.", ".$obj->Nombre."; con DNI: ".$obj->DNI;
        echo "</option>";

        }
      echo "</select>";
      ?>
      <br><a href="reparaciones.php" style="text-decoration: none;"><input type="button" name="volver" value="volver"></a><input type="submit" name="asignar" value="Asignar empleado">
    </fieldset>
  </form>

  <?php else: ?>

  <?php
  $id = $_GET["idrep"];
  $codemp = $_POST["codemp"];

  $query="INSERT INTO intervienen (CodEmpleado, IdReparacion) VALUES ('".$_POST["codemp"]."','".$id."');";
  echo $query;

  if ($result = $connection->query($query)) {
  echo "<script> alert('Empleado asignado a la reparación :)');
    window.location= 'reparaciones.php';
  </script>";
  } else {
  echo "<script> alert('Error al intentar asignar el empleado. El empleado ya ha sido asignado a esta reparación ;)');</script>";
  echo '<br><b>Error de asignación: '. $connection->error;
  }
  ?>

  <?php endif ?>

</body>
</html>
