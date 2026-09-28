<?php

// Funció per convertir Celsius a Fahrenheit
function celsiusAFahrenheit(float $celsius): float
{
    return ($celsius * 9 / 5) + 32;
}

// Funció per convertir Fahrenheit a Celsius
function fahrenheitACelsius(float $fahrenheit): float
{
    return ($fahrenheit - 32) * 5 / 9;
}

// Recollim les dades per GET
$temperatura = $_GET['temperatura'] ?? 0;
$escala = $_GET['escala'] ?? '';

// Convertim la temperatura a float
$temperatura = (float)$temperatura;

if ($escala === 'C') {

    $resultat = celsiusAFahrenheit($temperatura);

    echo "$temperatura °C són $resultat °F";

} elseif ($escala === 'F') {

    $resultat = fahrenheitACelsius($temperatura);

    echo "$temperatura °F són $resultat °C";

} else {

    echo "L'escala no és vàlida.";
}

echo '<br><a href="ex3.php">Tornar</a>';

?>