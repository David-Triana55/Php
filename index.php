<?php
header('Content-Type: application/json');

// Datos que queremos devolver en el JSON
$data = array(
    "status" => "success",
    "message" => "Este es un endpoint que devuelve JSON",
    "data" => array(
        "nombre" => "Juan",
        "edad" => 30,
        "ciudad" => "Madrid"
    )
);

// Convierte los datos a formato JSON
echo json_encode($data);
?>