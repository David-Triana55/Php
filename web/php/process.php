<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "Gracias, $name. hemos recibido tu mensaje: $message"
  } else {
    echo "Metodo de solicitud no válido";
  }
?>