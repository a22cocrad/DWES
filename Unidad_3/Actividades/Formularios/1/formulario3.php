<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Adrián Cordovero Crespo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="procesa_formulario3.php" method="post">
        <?php
        $datos = ["nombre", "apellido"];
        foreach ($datos as $key => $value) {
            echo ("<input type='text' name='$value' placeholder='$value' value=''/> <br>");
        }
        ?>
        <input type="submit" name="enviar" value="send" />
    </form>

</body>

</html>