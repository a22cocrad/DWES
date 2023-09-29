<?php
// Adrián Cordovero Crespo

$day = date("d");
$month = date("m");
$year = date("Y");

$day_compare = 17;
$month_compare = 10;
$year_compare = 2003;

$edad = $year - $year_compare;
if ($month > $month_compare) {
    $edad = $edad - 1;
} else if ($day < $day_compare) {
        $edad--;
    }
echo $edad;

?>