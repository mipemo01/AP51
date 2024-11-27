<?php
function edadHumana($edadPerro) {
    return 31 + 16 * log($edadPerro);
}

function sobrePeso(&$datos) {
    $sobrepeso = 0;
    foreach ($datos as $perro) {
        $edadHumana = edadHumana($perro['edad']);
        $limite = $edadHumana >= 60 ? 7 : ($edadHumana < 40 ? 3 : 6);
        if ($perro['peso'] > $limite) {
            $sobrepeso++;
        }
    }
    return $sobrepeso;
}

$datos = [
    ['edad' => 3, 'peso' => 8],
    ['edad' => 2, 'peso' => 4],
    ['edad' => 5, 'peso' => 7],
];

echo "Perros con sobrepeso: " . sobrePeso($datos) . "\n";
?>