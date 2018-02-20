
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

      <?php if (!isset($_POST["mail"])) : ?>
        <form method="post">
          <fieldset>
            <legend>Personal Info</legend>
            <span>Nombre:</span><input type="text" name="Nombre" required><br>
            <span>Apellidos:</span><input type="text" name="Apellidos" required><br>
            <span>Email:</span><input type="email" name="Email" ><br>
            <span>contraseña:</span><input type="password" name="contraseña" required><br>
            <span>Foto </span><input type="file" value="enviar"><br>

            <p><input type="submit" value="Send"></p>
          </fieldset>
        </form>

      <?php else: ?>

        <?php
            echo "<h3>Showing data coming from the form</h3>";
            var_dump($_POST);
        ?>

      <?php endif?>

  </body>
</html>
