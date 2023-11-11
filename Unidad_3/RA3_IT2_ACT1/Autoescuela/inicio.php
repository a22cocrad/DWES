<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./config/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoescuela Cordovero</title>
</head>

<body>
    <h1>AUTOESCUELA CORDOVERO</h1>
    <form action="test.php" method="post">
        <?php
        include("./config/tests_cnf.php");
        foreach ($aTests as $key => $value) {
            echo '<div class="init">';
            echo '<h3>ID TEST: ' . $value['idTest'] . '</h3>';
            echo '<h4>' . $value['Permiso'] . '</h4>';
            echo '<h4>' . $value['Categoria'] . '</h4>';
            echo '<button name="' . $value["idTest"] . '">➤</button>';
            echo '</div>';
        }
        ?>
    </form>
</body>

</html>