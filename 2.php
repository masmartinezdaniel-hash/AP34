<?php

$a = 0;
$b = 1;
$contador = 0;

while ($contador < 100) {
    echo "$a <br> ";   

    $siguiente = $a + $b;
    $a = $b;
    $b = $siguiente;

    $contador++;
}