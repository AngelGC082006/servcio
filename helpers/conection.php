<?php
  // Configuración de la conexión a la base de datos
  $host = 'localhost';  // Cambia esto si tu base de datos no se encuentra en el localhost
  $usuario = 'root';  // Reemplaza con tu nombre de usuario de MySQL
  $contrasena = '';  // Reemplaza con tu contraseña de MySQL
  $base_datos = 'db_servicio';  // Reemplaza con el nombre de tu base de datos

  // Crear una conexión
  $conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

  // Verificar si la conexión fue exitosa
  if ($conexion->connect_errno) {
      die("Falló la conexión a la base de datos: " . $conexion->connect_error);
  }/* else{
    echo "Conexion exitosa";
  } */
?>