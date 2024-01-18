<?php
// Añadir var_dump($_GET); para depuración
var_dump($_GET);

// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Verificar si se ha enviado un ID para eliminar
if (isset($_GET['eliminar_id'])) {
    $idEliminar = $_GET['eliminar_id'];

    // Obtener el id_cliente asociado al pedido
    $queryObtenerClienteId = "SELECT id_cliente FROM pedidos WHERE id_pedido = $idEliminar";
    $resultadoClienteId = $conexion->query($queryObtenerClienteId);

    if ($resultadoClienteId->num_rows > 0) {
        $filaClienteId = $resultadoClienteId->fetch_assoc();
        $idCliente = $filaClienteId['id_cliente'];

        // Query para eliminar el registro en la tabla de pedidos
        $queryEliminarPedido = "DELETE FROM pedidos WHERE id_pedido = $idEliminar";
        $resultadoEliminarPedido = $conexion->query($queryEliminarPedido);

        // Query para eliminar el cliente asociado al pedido
        $queryEliminarCliente = "DELETE FROM clientes WHERE id_cliente = $idCliente";
        $resultadoEliminarCliente = $conexion->query($queryEliminarCliente);

        // Verificar si ambas eliminaciones fueron exitosas
        if ($resultadoEliminarPedido && $resultadoEliminarCliente) {
            echo "Registro de pedido y cliente eliminados con éxito.";
        } else {
            echo "Error al eliminar el registro: " . $conexion->error;
        }

        // Redirigir de vuelta a ver_pedidos.php después de la eliminación
        header("Location: ver_pedidos.php");
        exit();
    } else {
        echo "Error al obtener el cliente asociado al pedido.";
    }
} else {
    // Si no se ha enviado un ID válido, redirigir a ver_pedidos.php
    header("Location: ver_pedidos.php");
    exit();
}

// Cerrar la conexión
$conexion->close();
?>
