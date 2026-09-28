<?php

$entrada = isset($_POST['numeros']) ? $_POST['numeros'] : '';

$numeros = explode(',', $entrada);

$numeros = array_map('trim', $numeros);

$numeros = array_map('intval', $numeros);

$multiplesDe3 = array_filter($numeros, function ($numero) {
    return $numero % 3 === 0;
});

echo '<link rel="stylesheet" href="estil.css">';
echo '<div class="container">';

echo "<h1>Múltiples de 3</h1>";

echo "<p>Array original:<br><strong>"
    . implode(', ', $numeros)
    . "</strong></p>";

echo "<p>Múltiples de 3:<br><strong>"
    . implode(', ', $multiplesDe3)
    . "</strong></p>";

echo '<br><a href="ex5.php" class="btn">Tornar enrere</a>';

echo '</div>';

?>
