<?php

$mesos = [
    [1, "Gener", 31],
    [2, "Febrer", 28],
    [3, "Març", 31],
    [4, "Abril", 30],
    [5, "Maig", 31],
    [6, "Juny", 30],
    [7, "Juliol", 31],
    [8, "Agost", 31],
    [9, "Setembre", 30],
    [10, "Octubre", 31],
    [11, "Novembre", 30],
    [12, "Desembre", 31]
];

function diesDelMes(int $mes): int
{
    global $mesos;

    foreach ($mesos as $registre) {
        if ($registre[0] === $mes) {
            return $registre[2];
        }
    }

    return 0;
}

$mes = $_GET['mes'] ?? 0;
$mes = (int)$mes;

$dies = diesDelMes($mes);

echo '<link rel="stylesheet" href="estil.css">';
echo '<div class="container">';
echo '<h1>Resultat</h1>';

if ($dies > 0) {
    echo "<p>El mes seleccionat té <strong>$dies</strong> dies.</p>";
} else {
    echo "<p style='color:red;'>El mes no és vàlid.</p>";
}

echo '<br><a href="ex2.php" class="btn">Tornar enrere</a>';
echo '</div>';

?>