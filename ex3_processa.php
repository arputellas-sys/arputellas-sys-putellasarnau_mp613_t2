<?php

function celsiusAFahrenheit(float $celsius): float
{
    return ($celsius * 9 / 5) + 32;
}

function fahrenheitACelsius(float $fahrenheit): float
{
    return ($fahrenheit - 32) * 5 / 9;
}

$temperatura = $_GET['temperatura'] ?? 0;
$escala = $_GET['escala'] ?? '';

$temperatura = (float)$temperatura;

echo '<link rel="stylesheet" href="estil.css">';
echo '<div class="container">';
echo '<h1>Resultat</h1>';

if ($escala === 'C') {

    $resultat = celsiusAFahrenheit($temperatura);

    echo "<p>$temperatura °C equival a <strong>$resultat °F</strong></p>";

} elseif ($escala === 'F') {

    $resultat = fahrenheitACelsius($temperatura);

    echo "<p>$temperatura °F equival a <strong>$resultat °C</strong></p>";

} else {

    echo "<p style='color:red;'>L'escala no és vàlida.</p>";

}

echo '<br><a href="ex3.php" class="btn">Tornar enrere</a>';
echo '</div>';

?>
