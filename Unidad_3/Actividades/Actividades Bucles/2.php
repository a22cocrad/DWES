<?php
/**
* @author: Adrián Cordovero Crespo
* @date: 29/09/2023
* Sumar los 3 primeros números pares.
*/
$suma = 0;
for ($i=2; $i <= 6; $i=$i+2) {
    $suma = $suma + $i;
}
echo $suma;

?>