<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver pedidos</title>
    <link rel="stylesheet" href="estilos.css">
 </head>
<body>
    <div class="container2">
    <h1>Ver pedidos</h1>
    <hr>
    <?php
    // Incluye el archivo de conexión
    include('conexion.php');

    // Consultar pedidos desde la base de datos
    $query = "SELECT clientes.*, pedidos.*
    FROM clientes
    INNER JOIN pedidos ON clientes.id_cliente = pedidos.id_pedido";

    $result = $conexion->query($query);

   // Verificar si hay registros
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>Nombre del cliente</th>
                <th>Fecha de entrega</th>
                <th>Cantidad</th>
                <th>Tipo de Sweater</th>
                <th>Talla</th>
                <th>Logo</th>
                <th>Personalizado</th>
                <th>Posición</th>
                <th>Correo electronico</th>
                <th>Numero de contacto</th>
                <th>Acciones</th>
            </tr>";

        // Mostrar resultados
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    
                    <td>{$row['id_pedido']}</td>
                    <td>{$row['nombre_cliente']}</td>
                    <td>{$row['fecha_entrega']}</td>
                    <td>{$row['cantidad']}</td>
                    <td>{$row['tipo_sweater']}</td>
                    <td>{$row['talla']}</td>
                    <td>{$row['logo']}</td>
                    <td>{$row['campo_personalizado']}</td>
                    <td>{$row['posicion']}</td>
                    <td>{$row['correo_electronico']}</td>
                    <td>{$row['numero_contacto']}</td>
                    <td>
                    <a href='eliminar_pedido.php?eliminar_id={$fila['id_pedido']}'>Eliminar</a>
                    </td>
                        
                    </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No hay pedidos registrados.</p>";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
    </div>
</body>
</html>