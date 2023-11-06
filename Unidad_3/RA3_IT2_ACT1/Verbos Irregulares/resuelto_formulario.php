<?php
session_start();

if(isset($_POST["submit"])) {

    $verbosAleatorios = $_SESSION["verbosAleatorios"];

    echo"<table border='1'>";
    for ($i = 0; $i < count($verbosAleatorios); $i++) {
        echo "<tr>";
        for ($j = 0; $j < 4; $j++) {

                echo "<td style='background-color: #FFD1B3;'>" . $verbosAleatorios[$i][$j] . "</td>";
        }

        echo "</tr>";
    }
    echo "</table> <br>";
    echo '¡Enhorabuena! <a href="./">VOLVER';
    session_destroy();
    
} else {
    echo 'Error. Primero debe rellenar los datos. <a href="./">VOLVER';
}
?>