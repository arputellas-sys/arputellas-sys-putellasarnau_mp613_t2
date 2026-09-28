<?php

// Array de 2 dimensions amb els mesos i els dies
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

// Funció que busca un mes i retorna els dies
function diesDelMes(int $mes, array $mesos): int
{
    foreach ($mesos as $registre) {
        if ($registre[0] === $mes) {
            return $registre[2];
        }
    }

    return 0;
}

// Recollim el mes per GET
$mes = $_GET['mes'] ?? 0;

// Convertim el valor a enter
$mes = (int)$mes;

// Calculem els dies
$dies = diesDelMes($mes, $mesos);

if ($dies > 0) {
    echo "El mes seleccionat té $dies dies.";
} else {
    echo "El mes no és vàlid.";
}

echo '<br><a href="ex2.php">Tornar</a>';

?>