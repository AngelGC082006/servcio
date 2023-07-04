<?php
require "../helpers/conection.php";
header('Content-Type: application/json');
$query_get_alumnos = "SELECT * FROM alumnos";
$resultado = $conexion->query($query_get_alumnos);

$alumnos = array();  // Array para almacenar los datos

while ($row = $resultado->fetch_assoc()) {
    $alumnos[] = $row;  // Agregar cada registro al array
}

// Convertir el array a JSON
$json = json_encode($alumnos);

// Imprimir el JSON como respuesta
echo $json;

?>