<?php
include("./Config/config.php");
session_start();
function mostrarTablero(array $tablero)
{
    for ($f = 0; $f < TAMANOTABLERO; $f++) {
        for ($c = 0; $c < TAMANOTABLERO; $c++) {
            echo $tablero[$f][$c];
        }
        echo "<br>";
    }
}

function mostrarVisible(array $tablero){
    for ($f = 0; $f < TAMANOTABLERO; $f++) {
        for ($c = 0; $c < TAMANOTABLERO; $c++) {
            echo "<a href='index.php?f=$f&c=$c'>" . $tablero[$f][$c] . "</a>";
        }
        echo "<br>";
    }
}

function clickCasilla($f, $c){
    if ($_SESSION['visible'][$f][$c] == 0){
        $_SESSION['visible'][$f][$c] = 1;
    } if ($_SESSION['tablero'][$f][$c] == 9){
        return 0;
    } else if (jugadaGanadora()){
        return 1;
    } else if ($_SESSION['tablero'][$f][$c] == 0){
        for ($j = max(0, $f - 1); $j <= min(TAMANOTABLERO - 1, $f + 1); $j++) {
            for ($k = max(0, $c - 1); $k <= min(TAMANOTABLERO - 1, $c + 1); $k++) {
                clickCasilla($j, $k);
            }
        }
    }
}

function jugadaGanadora(){
    $num_visible = 0;
    foreach ($_SESSION['visible'] as $columna) {
        foreach ($columna as $casilla) {
            if ($casilla == 0){
                $num_visible++;
            }
        }
    }
}

function generaMinas(){
    for ($i = 0; $i < NUMEROMINAS; $i++) {
        do {
            $fila = mt_rand(0, 9);
            $columna = mt_rand(0, 9);
        } while ($_SESSION["tablero"][$fila][$columna] == 9);
        $_SESSION["tablero"][$fila][$columna] = 9;
        for ($j = max(0, $fila - 1); $j <= min(TAMANOTABLERO - 1, $fila + 1); $j++) {
            for ($k = max(0, $columna - 1); $k <= min(TAMANOTABLERO - 1, $columna + 1); $k++) {
                if ($_SESSION["tablero"][$j][$k] != 9) {
                    $_SESSION["tablero"][$j][$k]++;
                }
            }
        }
    }
}

if (!isset($_SESSION["tablero"])) {
    $_SESSION["tablero"] = array();
    $_SESSION["visible"] = array();

    for ($f = 0; $f < TAMANOTABLERO; $f++) {
        for ($c = 0; $c < TAMANOTABLERO; $c++) {

            $_SESSION["tablero"][$f][$c] = 0;
            $_SESSION["visible"][$f][$c] = 0;
        }
    }
    generaMinas();
}

$resp = "";

echo "<a href='cerrarsesion.php'> Cerrar Sesión </a>";
if (isset($_GET['f']) && isset($_GET['c'])){
    $resp = clickCasilla($_GET['f'], $_GET['c']) ?? "";
    
}
echo "<br><br>";
mostrarVisible($_SESSION["visible"]);
echo "<br>";
mostrarTablero($_SESSION["tablero"]);
