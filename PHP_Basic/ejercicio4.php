<?php
function contar($hasta = 10, $paso = 1)
{
    for ($i = 1; $i <= $hasta; $i += $paso) {
        echo $i . PHP_EOL;
    }
}

echo "hasta 10:\n";
contar();

echo "\n hasta 10:\n";
contar(10, 2);

echo "\nde 3 en 3 hasta 15:\n";
contar(15, 3);
?>