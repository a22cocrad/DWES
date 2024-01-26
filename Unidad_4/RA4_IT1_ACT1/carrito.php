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
    <h2>Carrito:</h2>
    <?php
    session_start();
    if (!isset($_SESSION['carrito']) || ($_SESSION['carrito']) == []) {
        echo '<h2>El carrito está vacio...</h2>';
    } else {
        echo '<table>';
        echo ' <tr><th>Nombre</th><th>Cantidad</th><th>Tamaño</th><th>Precio/u</th><th>Precio Total</th></tr>';
        foreach ($_SESSION['pizzas'] as $pizzas) {
            echo '<tr>';
            echo '<td>' . $pizzas['nombre'] . '</td>';
            echo '<td>' . $pizzas['cantidad'] . '</td>';
            echo '<td>' . $pizzas['tamano'] . '</td>';
            echo '<td>' . $pizzas['precio'] . '</td>';
            echo '<td>' . ($pizzas['cantidad'] * $pizzas['precio']) . '</td>';
            echo '</tr>';
        }
        foreach ($_SESSION['bebidas'] as $bebida) {
            echo '<tr>';
            echo '<td>' . $bebida['nombre'] . '</td>';
            echo '<td>' . $bebida['cantidad'] . '</td>';
            echo '<td> Sin tamaño </td>';
            echo '<td>' . $bebida['precio'] . '</td>';
            echo '<td>' . ($bebida['cantidad'] * $bebida['precio']) . '</td>';
            echo '</tr>';
        }
        foreach ($_SESSION['postres'] as $postres) {
            echo '<tr>';
            echo '<td>' . $postres['nombre'] . '</td>';
            echo '<td>' . $postres['cantidad'] . '</td>';
            echo '<td> Sin tamaño </td>';
            echo '<td>' . $postres['precio'] . '</td>';
            echo '<td>' . ($postres['cantidad'] * $postres['precio']) . '</td>';
            echo '</tr>';
        }
        echo '<form action="pedidocompletado.php" method="post">';
        echo '<input type="submit" name="submit" value="Tramitar pedido"></form>';
    }

    ?>




</body>

</html>
<?php
