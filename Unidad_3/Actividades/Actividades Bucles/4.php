<?php

/**
 * @author: Adrián Cordovero Crespo
 * @date: 30/09/2023
 * Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal
 *  que le corresponde. Cada celda será un enlace a una página que mostrará un fondo de
 *  pantalla con el color seleccionado. ¿Puedes hacerlo con los conocimientos que tienes?
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
    echo ("<table border=1>");
    for ($i = 0; $i < 256; $i++) {
        for ($j = 0; $j < 256; $j++) {
            for ($k = 0; $k < 256; $k++) {
                echo (`<td style="background-color: rgb({$i}, {$j}, {$k});"></td>`);
            }
        }
    }
    echo ("</table");
    ?>
    </table>
</body>

</html>