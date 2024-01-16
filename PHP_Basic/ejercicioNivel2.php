<?php

$duracion = rand(0, 10);
function costeLlamada($duracion)
{
    $costeBase = 10;
    $costeAdicional = 5;
    if ($duracion <= 3) {
        return $costeBase;
    } else {
        $adicionales = $duracion - 3;
        $costo = $adicionales * $costeAdicional;
        return $costo + $costeBase;
    }

}

$pagar = costeLlamada($duracion);
echo "Duracion de llamada: " . $duracion . PHP_EOL;
echo "a pagar: " . $pagar . "";

?>