<?php
function contarCaracteres($texto) {
    return strlen(str_replace([' ', "\n"], '', $texto)); // Quita espacios y saltos de línea
}

$texto = "PHP es genial. Aprender PHP es divertido. ¿No lo crees?";
echo "Número de caracteres: " . contarCaracteres($texto) . "\n";
?>