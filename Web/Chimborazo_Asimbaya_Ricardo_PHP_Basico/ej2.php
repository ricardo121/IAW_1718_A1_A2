<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ1</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>


      <?php if (!isset($_POST["numero"])) : ?>
        <form method="post">
          <span>Nombre:</span><input type="Nombre" name="Nombre" required><br>
          <span>FechaNacimiento:</span><input type="Nombre" name="FechaNacimiento" required><br>
          <span>Edad:</span><input type="Nombre" name="Edad" required><br>
          <input type="submit" value="ENVIAR">
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>



        <?php
           function crear_formulario($numero) {
              if ($numero==1) {
                return true;
              } else {
                for ($i=2;$i<$numero;$i++) {
                  if($numero%$i==0) {
                    return false;
                  }
                }
                return true;
              }
           }
           $elementos=["Nombre" => "Pepe","Edad" => 25];
           $nombre = $_POST["Nombre"];
           $Edad = $_POST["Edad"];
           $fecha = $_POST["FechaNacimiento"];
           echo "=".(crear_formulario($elementos,$nombre))."<br>";

        ?>

      <?php endif ?>

  </body>
</html>
