<?php

/**
 * @author: Adrián Cordovero Crespo
 * @date: 30/09/2023
 * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $lEnviado = false;
    if (!$lEnviado) {
        
    }
    echo '<form method="post" action="procesar.php">';
    echo "<table text-align:center; border=1>";
    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
        for ($multiplicando = 1; $multiplicando <= 10; $multiplicando++) {
            $resultado = $multiplicador * $multiplicando;
            if (rand(0, 30) == 0) {
                echo '<td><input style="background-color:red" type="number" required name="' . $resultado . '"></td>' ;
            } 
            else {
                echo ("<td>" . $resultado . "</td>");
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    echo '<input type="submit" value="Submit">';
    ?>

</body>

</html>