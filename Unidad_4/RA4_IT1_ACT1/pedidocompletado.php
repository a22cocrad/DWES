    <?php 
        if (!isset($_POST['submit'])) {
            header('Location: carrito.php');
        } else {
            session_start();
            $fecha = time();
            $ticket = fopen("tickets/ticket_". date('Y-m-d_H-i-s', $fecha).'.txt', 'w');
            if ($ticket === false) {
                echo 'Error. Ticket existente o problema al abrir el archivo.';
            } else {
                $ticket_data = json_encode($_SESSION['carrito']);
                fwrite($ticket, $ticket_data);
                fclose($ticket);
            }
            $comanda_status = "_pendiente.txt";
            $comanda_path = "comandas/comanda_". date('Y-m-d_H-i-s', $fecha);
            $comanda = fopen($comanda_path . $comanda_status, 'w');
            if (!isset($_SESSION['comandas'])){
                $_SESSION['comandas'] = array();
            }
            array_push($_SESSION['comandas'], $comanda_path);
            if ($comanda === false) {
                echo 'Error. Comanda pendiente existente o problema al abrir el archivo.';
            } else {
                $pizzas_data = json_encode($_SESSION['carrito']);
                fwrite($comanda, $pizzas_data);
                fclose($comanda);
                unset($_SESSION['carrito']);
            }

            echo '<h2>Comanda recibida con exito</h2>';
            echo '<a href=pizzas.php>Volver </a>';


            // setcookie('pizzas', serialize($_SESSION['pizzas']), time() + 3600);
        }


    ?>