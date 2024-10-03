<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Calculadora</h1>
  <form method='post'>
    <input type='text' name='numero1' placeholder='Ingrese el primer numero'>
    <input type='text' name='numero2' placeholder='Ingrese el segundo numero'>
    <select name='operacion'>
      <option value='suma'>Suma</option>
      <option value='resta'>Resta</option>
      <option value='multiplicacion'>Multiplicación</option>
      <option value='division'>División</option>
    </select>
    <input type='submit' name='mostrar_resultado' value='Mostrar resultado'>
  </form>

  <?php
    if (isset($_POST['mostrar_resultado'])) {
      $numero1 = $_POST['numero1'];
      $numero2 = $_POST['numero2'];
      $operacion = $_POST['operacion'];
      $resultado = 0;

      switch ($operacion) {
        case 'suma':
          $resultado = $numero1 + $numero2;
          break;
        case 'resta':
          $resultado = $numero1 - $numero2;
          break;
        case 'multiplicacion':
          $resultado = $numero1 * $numero2;
          break;
        case 'division':
          $resultado = $numero1 / $numero2;
          break;
      }
    }

    echo "<h2>El resultado es: " . $resultado . "</h2>";
  ?>

</body>
</html>