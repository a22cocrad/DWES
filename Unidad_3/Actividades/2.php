<!-- Adrián Cordovero Crespo -->

<?php

$month = 2;
$year = 2024;
$high = [4,6,9,11];

if (in_array($month, $high)){
    echo "30 días";
} else if ($month == 2 and ($year % 4 == 0 and $year % 100 !=0 or $year % 400 == 0)) {
    echo "29 días";
} else if ($month == 2) {
    echo "28 días";
} else {
    echo "31 días";
}
?>
