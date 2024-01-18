<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $cantidad = $_POST['cantidad']; // Convertir a entero
    $tipoSweater = $_POST['tipo_sweater'];
    $talla = $_POST['talla'];
    $logo = $_POST['logo'];
    $campoPersonalizado = $_POST['campo_personalizado'];
    $posicion = $_POST['posicion'];

    // Insertar datos en la base de datos
    $query = "INSERT INTO pedidos (cantidad, tipo_sweater, talla, logo, campo_personalizado, posicion) 
              VALUES ('$cantidad', '$tipoSweater', '$talla', '$logo', '$campoPersonalizado', '$posicion')";

    if ($conexion->query($query) === TRUE) {
        header("Location: ver_pedidos.php");
    } else {
        echo "Error al registrar el pedido: " . $conexion->error;
    }

    // Cierra la conexión
    $conexion->close();
} else {
    // Si no se envió el formulario, redirige a algún lugar
    header("Location: index.php");
    exit();
}
?>
