<?php
/**
 * Función para limpiar datos de entrada
 * parametro: cadena procedente de un fomrulario.
 * return: cadena limpia.
 */

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Definimos las variables tipo text con valor inicial, en  este caso
$name = $email = $gender = $comment = $website = "";
//Declarar variables error para las restricciones de entrada
$nameErr = $emailErr = $websiteErr = "";

// Para género trabajaremos con un array.
$aGenero = array("Hombre", "Mujer", "Otro");
// Variable para error en género
$genderErr = "";

// Variables para los Movilidad
// Array de opciones.
$aVehiculos = array("Bicicleta", "Coche", "Patinete");

// Array con las opciones seleccionadas.
$aVehiculosSeleccionados = array();

// Opciones, con valor y literal.
// Observar el resultado del procesamiento.

$aOpciones = array(
    array("valor" => 1, "literal" => "Opción 1"),
    array("valor" => 2, "literal" => "Opción 2"),
    array("valor" => 3, "literal" => "Opción 3"),
    array("valor" => 4, "literal" => "Opción 4"),
);
$opcionSeleccionada = 1;

// Variables para la marca de coches.
$cars = array("Renault", "Mercedes", "Citroen", "Volvo", "Seat");

// Array con las opciones seleccionadas.
$carsSeleccionados = array();

$lprocesaFormulario = FALSE;
$lerror = FALSE;

// Detectamos error en la validación de los datos del formulario.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lprocesaFormulario = TRUE;
}
// Validación del nombre
if (empty($_POST["name"])) {
    $nameErr = "El nombre es obligatirio";
    $lerror = true;
} else {
    $name = test_input($_POST["name"]);
}

// Validación del email.
if (empty($_POST["email"])) {
    $nameErr = "El email es obligatorio";
    $lerror = true;
} else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Formato de correo incorrecto";
        $lerror = true;
    }
}

// Validación URL
if (empty($_POST["webstie"])) {
    $websiteErr = "La website es obligatoria";
    $lerror = true;
} else {
    $website = test_input($_POST["url"]);
    if (!filter_var($website, FILTER_VALIDATE_URL)) {
        $emailErr = "Formato de correo incorrecto";
        $lerror = true;
    }
}

// Validación Género



$comment = test_input($_POST["comment"]);


if ($lerror) {
    $lprocesaFormulario = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    if (!$lprocesaFormulario) { ?>
    <h1>Validación formulario. PHP</h1>       
    <p><span class="error">* Campos requeridos...</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nombre: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">*<?php echo $nameErr;?> </span><br><br>    

    Email: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">*<?php echo $nameErr;?> </span><br><br>    

    URL: <input type="text" name="website" value="<?php echo $website;?>">
            <span class="error">*<?php echo $nameErr;?> </span><br><br>    

    Comentario: <br/>
        <textarea name="comment" rows="5" cols="40"> <?php echo $comment; ?> </textarea> <br> <br>
    
    Género:
        <?php
            foreach ($aGenero as $clave => $valor) {
                $check = "";
                if ($gender==$valor) {
                    $check = "checked";
                } 
                echo '<input type=\"radio\" name=\"gender\" value = \"$valor\" $check>$valor';

            }
            echo '<span class=\"error\">* $genderErr </span> <br> <br>';
        ?>
    
    Transporte: <br>
            <?php
                foreach ($aVehiculos as $valor) {
                    $selected = (in_array($valor,$aVehiculosSeleccionados)) ?  'checked' :'';
                    echo '<input type=\"checkbox\" name=\"vehicle[]\" value=\"'. $valor . '\" $selected >"';
                }
            ?>
    Selecciona opción:
        <select name="combo">
            <?php
                foreach ($aOpciones as $valor) {
                    
                }
?>
    </form>
    
    
    
    <?php } ?>
    
</body>
</html>