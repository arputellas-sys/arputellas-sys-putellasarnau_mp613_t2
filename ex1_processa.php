<?php
// Funció que calcula l'àrea
function calculaArea(float $base, float $altura): float {
    return $base * $altura;
}

// Recollim dades per GET i usem l'operador ?? per evitar errors
$base = $_GET['base'] ?? 0;
$altura = $_GET['altura'] ?? 0;

$area = calculaArea((float)$base, (float)$altura);
echo "L'àrea del rectangle de base $base i altura $altura és: $area";
echo '<br><a href="ex1.php">Tornar</a>';
?>
