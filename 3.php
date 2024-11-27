<?php
function dameNumero() {
    return rand(1, 49);
}

$numeros = [];
while (count($numeros) < 6) {
    $num = dameNumero();
    if (!in_array($num, $numeros)) {
        $numeros[] = $num;
    }
}

echo "Tu combinación de lotería es: " . implode(" - ", $numeros) . "\n";
?>