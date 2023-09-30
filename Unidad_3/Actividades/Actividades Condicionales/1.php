<?php
/**
* @author: Adrián Cordovero Crespo
* @date:  30/09/2023
* Almacena tres números en variables y escribirlos en pantalla de manera ordenada. 
*/

$num1 = 10;
$num2 = 2;
$num3 = 27;

if ($num1 > $num2 and $num1 > $num3) {
    if ($num2 > $num3) {
        echo("Números ordenados: ". $num1 . $num2 . $num3);
    }
    else {
        echo("Números ordenados: ". $num1 . $num3 . $num2);

    }
} elseif ($num2 > $num3) {
    if ($num3 > $num1) {
        echo("Números ordenados: ". $num2 . $num3 . $num1);
    }
    else {
        echo("Números ordenados: ". $num2 . $num1 . $num3);
    }
} elseif ($num3 > $num1) {
    if ($num1 > $num2) {
        echo("Números ordenados: ". $num3 . $num1 . $num2);
    }  
    else {
        echo("Números ordenados: ". $num3 . $num2 . $num1);
    }
} else {
    echo("Todos los números son iguales.");
}


?>