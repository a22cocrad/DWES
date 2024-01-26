<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="#" method="POST">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $usuario_correcto = "adrian";
    $contrasena_correcta = "cordovero";

    if ($username === $usuario_correcto && $password === $contrasena_correcta) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: vercomandas.php");
    } else {
        echo "Inicio de sesión fallido. Por favor, verifique sus credenciales.";
    }
}
?>
