<?php
require "../helpers/conection.php";
header('Content-Type: application/json');

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$matricula = $_GET["matricula"];
$curp = $_GET["curp"];
$correo_electronico = $_GET["correo_electronico"];
$telefono = $_GET["telefono"];
$fecha_nacimiento = $_GET["fecha_nacimiento"];

$query = "INSERT INTO alumnos (nombre, apellido, matricula, curp, correo_electronico, telefono, fecha_nacimiento) VALUES ('$nombre','$apellido','$matricula', '$curp', '$correo_electronico', '$telefono', '$fecha_nacimiento')";
$resultado = $conexion->query($query);

if ($resultado) {
 echo json_encode(["message" => "sucess", "code" => 200]);
} else {
  echo json_encode(["message" => $conexion->error, "code" => 400]);
} 

?>