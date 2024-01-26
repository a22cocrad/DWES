<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Cordovero Crespo</title>
</head>

<body>
    <header>
        <h1>faMia - Adrián Cordovero Crespo</h1>
    </header>
    <nav>
        <ul>
            <li><a href="pizzas.php">Pizzas</a></li>
            <li><a href="bebidas.php">Bebidas</a></li>
            <li><a href="postres.php">Postres</a></li>
            <li><a href="carrito.php">Carrito</a></li>
        </ul>
    </nav>
    <h2>Postres</h2>
    <h3>Seleccione producto.</h3>
    <?php
    session_start();
    include "config/config.php";
    foreach (PRODUCTOS['postres'] as $tipoProducto => $producto) {
        echo "<article>";
        echo "<form action='procesacarrito.php' method='post'>";
        echo "<h4>" . $producto['nombre'] . "</h4>";
        echo "<img src='img/" . $producto['imagen'] . "'>";
        echo "<input type='hidden' name='nombre' value='" . $producto['nombre'] . "'>";
        echo "<input type='hidden' name='precio' value='" . $producto['precio'] . "'>";
        echo "<input type='number' name='cantidad' min='0'>";
        echo "<input type='submit' name='postres' value='Añadir al carrito'>";
        echo "</form>";
        echo "</article>";
    }
    ?>
</body>

</html>