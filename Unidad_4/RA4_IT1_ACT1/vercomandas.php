<?php 
session_start();
if (!$_SESSION['loggedin']) {
    echo '<h2>Error, debe iniciar sesión</h2>';
} else {
    echo '<h2>Comandas: </h2>';
    echo '<h3>Pendientes: </h3>';
    foreach($_SESSION['comandas'] as $comanda) {
        echo $comanda . ' <form action="#" method="POST">';
        echo "<input type='hidden' name='comanda' value='" . $comanda . "'>";
        echo '<input type="submit" name="ejecutar" value="Completar Comanda">
    </form>';
        echo '<br>';
    }
}

if (isset($_POST['ejecutar'])){
    rename($_POST['comanda'], $comanda.'_COMPLETADO.txt');
}