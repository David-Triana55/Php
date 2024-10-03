<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Mayor de edad</h1>
  <form method='post'>
    <input type='number' name='edad'  placeholder='Ingrese su edad'>
    <input type='submit' name='mostrar_edad' value='Mostrar resultado'>
  </form>

  <?php
    if (isset($_POST['mostrar_edad'])) {
      $edad = $_POST['edad'];
      if ($edad >= 18) {
        echo "<h2>Eres mayor de edad!</h2>";
      } else {
        echo "<h2>Lo siento, no eres mayor de edad!</h2>";
      }
    }

    
  ?>
</body>
</html>