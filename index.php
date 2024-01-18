<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de cliente</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Incluir el archivo de estilos -->
</head>
<body>
    <div class="container">
        <h1>Formulario de cliente</h1>
         <hr>

        <form action="procesar_cliente.php" method="post" enctype="multipart/form-data">
            <label for="nombre_cliente">Nombre del Cliente:</label>
            <input type="text" name="nombre_cliente" required>

            <label for="correo_electronico">Correo Electrónico:</label>
            <input type="email" name="correo_electronico" required>

            <label for="numero_contacto">Número de Contacto:</label>
            <input type="text" name="numero_contacto" required>

            <label for="fecha_entrega">Fecha de Entrega:</label>
            <input type="date" name="fecha_entrega" required>

            <!-- Agregar otros campos del formulario según sea necesario -->

            <input type="submit" value="Continuar">
        
        </form>
        
        <!-- Agregar el enlace para redireccionar a form_pedido.php -->
        <p>¿Ya tienes un pedido? <a href="ver_pedidos.php">Ver Pedidos</a></p>
     <?php
   // Incluir el archivo de conexión a la base de datos
    include 'procesar_cliente.php';
     ?>
    </div>
</body>
</html>
