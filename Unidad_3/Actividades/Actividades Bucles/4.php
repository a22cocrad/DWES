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
    <style>
        *{
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function fromRGB($R, $G, $B)
    {
    
        $R = dechex($R);
        if (strlen($R)<2)
        $R = '0'.$R;
    
        $G = dechex($G);
        if (strlen($G)<2)
        $G = '0'.$G;
    
        $B = dechex($B);
        if (strlen($B)<2)
        $B = '0'.$B;
    
        return '#' . $R . $G . $B;
    }
    const jump = 10;
    echo ("<table border=1>");
    for ($i = 0; $i < 256; $i += jump) {
        echo ("<tr>");
        for ($j = 0; $j < 256; $j += jump) {
            for ($k = 0; $k < 256; $k += jump) {
                echo ("<td style='background-color: rgb({$i},{$j},{$k})'><a href='https://www.google.com/search?q=rgb+{$i}+{$j}+{$j}' target='_blank'> " . fromRGB($i,$j,$k) . "</a></td>");
                
            }
        }
        echo ("</tr>");
    }
    echo ("</table>");
    ?>

</body>

</html>