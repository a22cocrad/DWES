<!-- Adrián Cordovero Crespo -->

<?php

$mes = 2;
$anio = 2024;
$pares = [4,6,9,11];

if (in_array($mes, $pares)){
    echo "30 días";
} else if ($mes == 2 and ($anio % 4 == 0 and $anio % 100 !=0 or $anio % 400 == 0)) {
    echo "29 días";
} else if ($mes == 2) {
    echo "28 días";
} else {
    echo "31 días";
}
?>
