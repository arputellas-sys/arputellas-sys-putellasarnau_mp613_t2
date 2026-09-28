<?php

function calculaArea(float $base, float $altura): float
{
    return $base * $altura;
}

$base = $_GET['base'] ?? 0;
$altura = $_GET['altura'] ?? 0;

$area = calculaArea((float)$base, (float)$altura);

echo '<link rel="stylesheet" href="estil.css">';
echo '<div class="container">';
echo '<h1>Resultat</h1>';
echo "<p>L'àrea del rectangle de base $base i altura $altura és: <strong>$area</strong></p>";
echo '<br><br><a href="ex1.php" class="btn">Tornar enrere</a>';
echo '</div>';

?>
