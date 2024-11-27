<?php
function buscarPalabra($texto, $palabra) {
    $ocurrencias = substr_count(strtolower($texto), strtolower($palabra));
    return $ocurrencias > 0 ? "La palabra '$palabra' existe y aparece $ocurrencias veces." : "La palabra '$palabra' no existe.";
}

function reemplazarPalabra($texto, $palabra) {
    return str_replace($palabra, strtoupper($palabra), $texto);
}

$texto = "PHP es un lenguaje de programación muy popular.<br> PHP se usa para el desarrollo web.";
echo buscarPalabra($texto, 'PHP') . "\n" . "<br><br>";
echo reemplazarPalabra($texto, 'PHP') . "\n" . "<br>";
?>