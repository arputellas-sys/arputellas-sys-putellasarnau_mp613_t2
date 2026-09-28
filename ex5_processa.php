<?php

// Recollim els números per POST
$entrada = isset($_POST['numeros']) ? $_POST['numeros'] : '';

// Separem els números per comes
$numeros = explode(',', $entrada);

// Convertim cada valor a enter
$numeros = array_map('intval', $numeros);

// Funció anònima dins d'array_filter
$multiplesDe3 = array_filter($numeros, function ($numero) {
    return $numero % 3 === 0;
});

// Mostrem el resultat
echo "<h1>Múltiples de 3</h1>";

echo "Array original: ";
echo implode(', ', $numeros);

echo "<br><br>";

echo "Múltiples de 3: ";
echo implode(', ', $multiplesDe3);

echo "<br><br>";

echo '<a href="ex5.php">Tornar</a>';

?>