<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de pedidos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
    <h1>Formulario de pedidos</h1>
    <hr>

    <form action="procesar_pedido.php" method="post" enctype="multipart/form-data">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required>
        <label for="tipo_sweater">Tipo de Sweater:</label>
        <select name="tipo_sweater" required>
            <option value="sueter_polo">Sueter Polo</option>
            <option value="sueter_cuello_v">Sueter Cuello en V</option>
            <option value="sueter_cuello_redondo">Sueter Cuello Redondo</option>
            <option value="sueter_reflectivo_cuello_redondo">Sueter Reflectivo cuello redondo</option>
            <option value="sueter_reflectivo_tipo_polo">Sueter reflectivo tipo polo</option>
            <option value="Wfit">Wfit</option>
           
        </select>

        <label for="talla">Talla:</label>
        <select name="talla" required>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="2">2</option>
            <option value="4">4</option>
            <option value="6">6</option>
            <option value="8">8</option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="14">14</option>
            <option value="16">16</option>
            <option value="18">18</option>
            <option value="20">20</option>
            <option value="2xl">2xl</option>
            <option value="3xl">3xl</option>
            <option value="4xl">4xl</option>
            <option value="5xl">5xl</option>
        </select>

       <label for="logo">Introducir nombre de logo deseado:</label>
      <input type="text" name="logo">
        
        <!-- Nuevos campos -->
        <label for="campo_personalizado">Personalizado:</label>
        <input type="text" name="campo_personalizado">

        <label for="posicion">Posición:</label>
        <select name="posicion" required>
            <option value="--">--</option>
            <option value="Pecho izquierdo">Pecho izquierdo</option>
            <option value="Pecho derecho">Pecho derecho</option>
            <option value="Manga izquierda">Manga izquierda</option>
            <option value="Manga derecha">Manga derecha</option>
        </select>

        <input type="submit" value="Realizar Pedido">
    
   
    </form>
      <?php
   // Incluir el archivo de conexión a la base de datos
    include 'procesar_pedido.php';
     ?>
    </div>
</body>
</html>