<?php

/**
 *
 * @author Adrián Cordovero Crespo
 */

$user;
$password;

if (isset($_POST["submit"])) {
    if (isset($_POST["remindMe"])) {
        setcookie("user", $_POST["user"], time() + 3600);
        setcookie("password", $_POST["password"], time() + 3600);
    }
}

if (isset($_COOKIE["user"])) {
    $user = $_COOKIE["user"];
}

if (isset($_COOKIE["password"])) {
    $password = $_COOKIE["password"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label>Usuario:
            <input type="text" name="user" placeholder="Usuario" value="<?php echo $user ?>">
        </label> <br>
        <label>Contraseña:
            <input type="password" name="password" placeholder="Contraseña" value="<?php echo $password ?>">
        </label><br>
        <label>
            <input type="checkbox" name="remindMe"> Recordar información <br>
        </label>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>

</html>