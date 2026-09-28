<?php

function validarContrasenya(string $contrasenya): array
{
    $errors = [];

    // Comprovar longitud mínima
    if (strlen($contrasenya) < 8) {
        $errors[] = "La contrasenya ha de tenir almenys 8 caràcters.";
    }

    $teMajuscula = false;
    $teNumero = false;
    $teEspecial = false;

    // Recorrem cada caràcter
    for ($i = 0; $i < strlen($contrasenya); $i++) {

        $caracter = $contrasenya[$i];

        // Majúscula
        if ($caracter >= 'A' && $caracter <= 'Z') {
            $teMajuscula = true;
        }

        // Número
        if ($caracter >= '0' && $caracter <= '9') {
            $teNumero = true;
        }

        // Caràcter especial
        if (
            !($caracter >= 'a' && $caracter <= 'z') && //si no ñes ni minúscula
            !($caracter >= 'A' && $caracter <= 'Z') && //majúscula
            !($caracter >= '0' && $caracter <= '9')    // o numero
        ) {
            $teEspecial = true;
        }
    }

    if (!$teMajuscula) {
        $errors[] = "La contrasenya ha de contenir almenys una lletra majúscula.";
    }

    if (!$teNumero) {
        $errors[] = "La contrasenya ha de contenir almenys un número.";
    }

    if (!$teEspecial) {
        $errors[] = "La contrasenya ha de contenir almenys un caràcter especial.";
    }

    return $errors;
}

// Recollim la contrasenya per POST
$contrasenya = $_POST['contrasenya'] ?? '';

$errors = validarContrasenya($contrasenya);

if (count($errors) === 0) {

    echo "La contrasenya és correcta.";

} else {

    echo "La contrasenya no és correcta:<br><br>";

    echo "<ul>";

    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }

    echo "</ul>";
}

echo '<a href="ex4.php">Tornar</a>';

?>