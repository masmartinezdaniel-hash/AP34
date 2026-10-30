<?php



$dias = rand(1, 22); 
$horas_dia = 6;
$euros_hora = 10;


$pago_diario = $horas_dia * $euros_hora;
$acumulado = 0;
$dia_actual = 1;

echo "Dias trabajados este mes: $dias dias <br>";


while ($dia_actual <= $dias) {
    $acumulado = $acumulado + $pago_diario;

    echo "<br> dia $dia_actual: $acumulado € <br>";

    $dia_actual++;
}

?>