<?php
function numRomano($numero) {
    $romanos = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X'];
    return $numero >= 1 && $numero <= 10 ? $romanos[$numero - 1] : "Número fuera de rango";
}

$numero = 9; 

echo "El número $numero en romano es: " . numRomano($numero) . "\n";
?>