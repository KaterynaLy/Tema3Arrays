<?php
$X = array(10, 20, 30, 40, 50, 60);
echo "El tamaño del array original: " . PHP_EOL;
echo count($X) . PHP_EOL;

unset($X[1]); // eliminar "20"
echo "Array modificado: " . PHP_EOL;
foreach ($X as $x) {
    echo "" . $x . PHP_EOL;
}
echo "El tamaño del array modificado: ";
echo count($X) . PHP_EOL;

