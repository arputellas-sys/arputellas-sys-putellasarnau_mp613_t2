<?php

function validarContrasenya(string $contrasenya): array
{
    $errors = [];

    if (strlen($contrasenya) < 8) {
        $errors[] = "La contrasenya ha de tenir almenys 8 caràcters.";
    }

    $teMajuscula = false;
    $teNumero = false;
    $teEspecial = false;

    for ($i = 0; $i < strlen($contrasenya); $i++) {

        $caracter = $contrasenya[$i];

        if ($caracter >= 'A' && $caracter <= 'Z') {
            $teMajuscula = true;
        }

        if ($caracter >= '0' && $caracter <= '9') {
            $teNumero = true;
        }

        if (
            !($caracter >= 'a' && $caracter <= 'z') &&
            !($caracter >= 'A' && $caracter <= 'Z') &&
            !($caracter >= '0' && $caracter <= '9')
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

$contrasenya = $_POST['contrasenya'] ?? '';

$errors = validarContrasenya($contrasenya);

echo '<link rel="stylesheet" href="estil.css">';
echo '<div class="container">';
echo '<h1>Resultat de validació</h1>';

if (count($errors) === 0) {

    echo "<p style='color:green; font-weight:bold;'>La contrasenya és correcta.</p>";

} else {

    echo "<p style='color:red; font-weight:bold;'>La contrasenya no és correcta:</p>";

    echo "<ul class='errors'>";

    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }

    echo "</ul>";
}

echo '<br><a href="ex4.php" class="btn">Tornar enrere</a>';
echo '</div>';

?>
