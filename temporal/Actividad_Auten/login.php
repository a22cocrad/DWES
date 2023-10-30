<?php
/**
 * @author: Adrián Cordovero Crespo
 * 
 */

if (!isset($_POST['submit'])) {
    header('location: inicio.php');
}

session_start();
include('config/config.php');
include('lib/function.php');


$user = text_input($_POST["usuario"]);
$password = text_input($_POST["password"]);


$auth = false;

foreach ($usuarios as $clave => $valor) {
    if ($user == $usuarios[$clave]["user"] && $passwrd == $usuarios[$clave]["password"]) {
        $auth = true;
    }
}
$_SESSION["auth"] = $auth;
$_SESSION["user"] = $user;
header("Location: inicio.php");

?>
