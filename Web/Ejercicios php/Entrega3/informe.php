<!DOCTYPE html>
<html>
<head>
	<title>Informe</title>
	<style type="text/css">
		th, td {
			text-align: center;
		}
	</style>
</head>
<body>

	<?php
	//CREATING THE CONNECTION
	//include_once("conectar_DB.php");
	var_dump(include_once "conectar_DB_casa.php");
	if (!$connection=conectar()) {
		exit();
	}
	?>
	<?php


    //$mysqli = new mysqli("192.168.1.30", "root", "Admin2015", "tf", 3316); docker exec -it lamp /bin/bash mysql
		$query = "SELECT * FROM empleados e
JOIN intervienen i ON e.CodEmpleado=i.CodEmpleado WHERE IdReparacion='".$_GET['id']."';";

	if ($result= $connection->query($query)) {
	}
		echo "<h2>Lista de empleados y sus reparaciones:</h2><ul>";
		while ($obj = $result->fetch_object()) {
		      echo "<li><b>Código del Empleado: </b>".$obj->CodEmpleado."</li>";
		      echo "<li><b>DNI: </b>".$obj->DNI."</li>";
		      echo "<li><b>Apellidos, nombre: </b>".$obj->Apellidos.", ".$obj->Nombre."</li>";
		      echo "<li><b>Dirección: </b>".$obj->Direccion."</li>";
		      echo "<li><b>Tlf.: </b>".$obj->Telefono."</li>";
		      echo "<li><b>CP: </b>".$obj->CP."</li>";
		      echo "<li><b>Fecha de Alta: </b>".$obj->FechaAlta."</li>";
		      echo "<li><b>Categoría: </b>".$obj->Categoria."</li>";
		      echo "<li><b>Id de reparación: </b>".$obj->IdReparacion."</li>";
		      echo "<li><b>Horas trabajadas: </b>".$obj->Horas."</li>";
		      echo "<hr>";
		    }
		echo "</ul>";
    ?>

	<?php

		$query2 = "SELECT * FROM reparaciones r
JOIN incluyen inc ON inc.IdReparacion=r.IdReparacion
JOIN recambios rec ON rec.IdRecambio=inc.IdRecambio WHERE r.IdReparacion='".$_GET['id']."';";

		if ($result= $connection->query($query2)) {
		}
		echo "<h2>Piezas asignadas en cada reparación:</h2><ul>";
		while ($obj = $result->fetch_object()) {
		      echo "<li><b>Id de Reparación: </b>".$obj->IdReparacion."</li>";
		      echo "<li><b>Matrícula: </b>".$obj->Matricula."</li>";
		      echo "<li><b>Fecha de Entrada: </b>".$obj->FechaEntrada."</li>";
		      echo "<li><b>Km: </b>".$obj->Km."</li>";
		      echo "<li><b>Avería: </b>".$obj->Averia."</li>";
		      echo "<li><b>Fecha de Salida: </b>".$obj->FechaSalida."</li>";
		      echo "<li><b>Reparado: </b>".$obj->Reparado."</li>";
		      echo "<li><b>Observaciones: </b>".$obj->Observaciones."</li>";
		      echo "<li><b>Id de Recambio: </b>".$obj->IdRecambio."</li>";
		      echo "<li><b>Unidades: </b>".$obj->Unidades."</li>";
		      echo "<li><b>Descripción: </b>".$obj->Descripcion."</li>";
		      echo "<li><b>Unidad Base: </b>".$obj->UnidadBase."</li>";
		      echo "<li><b>Stock: </b>".$obj->Stock."</li>";
		      echo "<li><b>Precio de Referencia: </b>".$obj->PrecioReferencia."</li>";
		      echo "<hr>";
		    }
		    echo "</ul>";
	?>
	<br><a href="reparaciones.php" style="text-decoration: none;"><input type="button" name="volver" value="volver"></a>
</body>
</html>
