<?php
function calculaSalario($horas, $tarifa = 10) {
    if ($horas > 40) {
        $horasExtra = $horas - 40;
        $pagoExtra = $horasExtra * ($tarifa * 1.25);
        return (40 * $tarifa) + $pagoExtra;
    } else {
        return $horas * $tarifa;
    }
}

$empleados = [
    'Juan' => ['horas' => 40, 'tarifa' => 15],
    'Perico' => ['horas' => 20, 'tarifa' => 25],
    'Andrés' => ['horas' => 45],
];

foreach ($empleados as $nombre => $datos) {
    $horas = $datos['horas'];
    $tarifa = $datos['tarifa'] ?? 10;
    $salario = calculaSalario($horas, $tarifa);
    echo "$nombre cobrará $salario € esta semana.\n";
}
?>