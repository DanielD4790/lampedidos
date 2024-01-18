<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Consultar logos desde la base de datos
$query = "SELECT id_logo, nombre_logo FROM logos";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    // Mostrar los logos en un formulario o cualquier otro formato deseado
    echo '<h2>Logos Disponibles</h2>';
    echo '<form action="procesar_pedido.php" method="post">';

    while ($fila = $resultado->fetch_assoc()) {
        $idLogo = $fila['id_logo'];
        $nombreLogo = $fila['nombre_logo'];

        echo '<label>';
        echo '<input type="radio" name="logo" value="' . $idLogo . '"> ' . $nombreLogo;
        echo '</label>';
    }

    echo '<input type="submit" value="Seleccionar Logo">';
    echo '</form>';
} else {
    echo 'No hay logos disponibles';
}

// Cierra la conexión
$conexion->close();
?>
