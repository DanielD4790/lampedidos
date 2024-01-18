<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "id21770452_tonitokun07";
$password = "Tonitokun.007";
$database = "id21770452_lampedidos";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Establecer el conjunto de caracteres a UTF-8
$conexion->set_charset("utf8");
?>
