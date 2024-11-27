<?php
function diferenciaEdad($edad1, $edad2) {
    return abs($edad1 - $edad2);
}

$edadHermano1 = 95;
$edadHermano2 = 30;

echo "La diferencia de edad entre los hermanos es: " . diferenciaEdad($edadHermano1, $edadHermano2) . " años.\n";
?>