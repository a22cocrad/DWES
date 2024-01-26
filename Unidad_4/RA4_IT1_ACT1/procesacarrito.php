<?php

session_start();
include "config/config.php";

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

if (!isset($_SESSION['pizzas'])) {
    $_SESSION['pizzas'] = array();
}

if (!isset($_SESSION['bebidas'])) {
    $_SESSION['bebidas'] = array();
}

if (!isset($_SESSION['postres'])) {
    $_SESSION['postres'] = array();
}

if (isset($_POST['pizzas'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $tamano = $_POST['tamano'];

    if ($cantidad > 0) {
        $producto = array(
            "nombre" => $nombre,
            "precio" => $precio,
            "cantidad" => $cantidad,
            "tamano" => $tamano
        );
        array_push($_SESSION['carrito'], $producto);
        array_push($_SESSION['pizzas'], $producto);
        setcookie('pizzas', serialize($_SESSION['pizzas']), time() + 3600);
        header('Location: carrito.php');
    }
}

if (isset($_POST['bebidas'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    if ($cantidad > 0) {
        $producto = array(
            "nombre" => $nombre,
            "precio" => $precio,
            "cantidad" => $cantidad,
        );
        array_push($_SESSION['carrito'], $producto);
        array_push($_SESSION['bebidas'], $producto);
        setcookie('bebidas', serialize($_SESSION['bebidas']), time() + 3600);
        header('Location: carrito.php');
    }
}

if (isset($_POST['postres'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    if ($cantidad > 0) {
        $producto = array(
            "nombre" => $nombre,
            "precio" => $precio,
            "cantidad" => $cantidad,
        );
        array_push($_SESSION['carrito'], $producto);
        array_push($_SESSION['postres'], $producto);
        setcookie('postres', serialize($_SESSION['postres']), time() + 3600);
        header('Location: carrito.php');
    }
}

if (!isset($_POST)) {
    header('Location: carrito.php');
}