<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $nombreCliente = $_POST['nombre_cliente'];
    $correoElectronico = $_POST['correo_electronico'];
    $numeroContacto = $_POST['numero_contacto'];
    $fechaEntrega = $_POST['fecha_entrega'];
    
    // Insertar datos en la base de datos
    $query = "INSERT INTO clientes (nombre_cliente, correo_electronico, numero_contacto, fecha_entrega) 
              VALUES ('$nombreCliente', '$correoElectronico', '$numeroContacto', '$fechaEntrega')";

    if ($conexion->query($query) === TRUE) {
        header("Location: form_pedido.php");
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
