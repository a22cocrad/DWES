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
    $multiplicando;
    $multiplicador;
    echo "<table text-align:center; border=5>";
    for ($multiplicador = 1; $multiplicador < 11; $multiplicador++) {
        for ($multiplicando = 01; $multiplicando < 11; $multiplicando++) {
            echo ("<td>" . $multiplicando * $multiplicador . "</td>");
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>

</html>