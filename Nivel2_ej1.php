<?php
$arrayInt = array(1, 2, 3, 4, 5);
$arrayFloat = array(1.01, 2.02, 3.03, 4.04, 5.05);

echo "Array Int: ";
print_r($arrayInt) . PHP_EOL;

echo "Array Float: ";
print_r($arrayFloat) . PHP_EOL;

$int = array_intersect($arrayInt, $arrayFloat);

if (empty($int)) {
    echo "No tiene interseccion" . PHP_EOL;
} else {
    print_r($int);
}

$mix = array_merge($arrayInt, $arrayFloat);
print_r($mix);