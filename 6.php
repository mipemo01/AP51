<?php
function imprimirFigura($caracter, $numero) {
    // Parte ascendente
    for ($i = 1; $i <= $numero; $i++) {
        echo str_repeat($caracter, 2 * $i - 1) . "<br>";
    }
    // Parte descendente
    for ($i = $numero - 1; $i >= 1; $i--) {
        echo str_repeat($caracter, 2 * $i - 1) . "<br>";
    }
}

// Llamada a la función
imprimirFigura('*', 4);
?>