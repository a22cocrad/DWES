<?php

/**
 * @author: Adrián Cordovero Crespo
 * @date: 30/09/2023
 * Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario
 *  mensual correspondiente. Marcar el día actual en verde y los festivos en rojo.
 */

$month = 9;
$year = 2023;
$high = [4,6,9,11];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
<?php
if (in_array($month, $high)){
    echo("Mes introducido: " . $month);
    echo("Año introducido: " . $year);
    $numero = 1;
    for ($i=1; $i <= 5; $i++) { 
        echo("<tr>");
        for ($j=1; $j <= 7; $j++) { 
            echo("<td>". $numero ."</td>");
            $numero++;
            if ($numero > 30) {
                break;
            }
        }echo("</tr>");
    }
} else if ($month == 2 and ($year % 4 == 0 and $year % 100 !=0 or $year % 400 == 0)) {
    echo("Mes introducido: " . $month);
    echo("Año introducido: " . $year);
    $numero = 1;
    for ($i=1; $i <= 5; $i++) { 
        echo("<tr>");
        for ($j=1; $j <= 7; $j++) { 
            echo("<td>". $numero ."</td>");
            $numero++;
            if ($numero > 29) {
                break;
            }
        }echo("</tr>");
    }
} else if ($month == 2) {
    echo("Mes introducido: " . $month);
    echo("Año introducido: " . $year);
    $numero = 1;
    for ($i=1; $i <= 4; $i++) { 
        echo("<tr>");
        for ($j=1; $j <= 7; $j++) { 
            echo("<td>". $numero ."</td>");
            $numero++;
            if ($numero > 28) {
                break;
            }
        }echo("</tr>");
    }
} else {
    $numero = 1;
    echo("Mes introducido: " . $month);
    echo("Año introducido: " . $year);
    for ($i=1; $i <= 5; $i++) { 
        echo("<tr>");
        for ($j=1; $j <= 7; $j++) { 
            echo("<td>". $numero ."</td>");
            $numero++;
            if ($numero > 31) {
                break;
            }
        }echo("</tr>");
}    
}
?>
</table>
</body>
</html>