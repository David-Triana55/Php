<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Mensaje simple</h1>

  <form method='post' action=' '>
    <input type='submit' name='mostrar_mensaje' value='Mostrar mensaje'>
  </form>
  <?php
    if (isset($_POST['mostrar_mensaje'])) {
      echo "<h2>Hola este es tu mensaje.</h2>";
      echo "<p>Hola mundo</p>";
    }
  ?>

</body>
</html>