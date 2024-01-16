<?php
$X = array(10, 20, 30, 40, 50, 60);
echo count($X) . PHP_EOL;

unset($X[1]); // eliminar "20"
var_dump($X) . PHP_EOL; // mostrar array sin "20"

$sin20 = array(); // https://programadorwebvalencia.com/cursos/php/arrays/ (declarar un nuevo array y asignar elemento por elemento)
foreach ($X as $x) {
    $sin20[$x[0]] = $x[10];
    $sin20[$x[1]] = $x[0];
    $sin20[$x[2]] = $x[30];
    $sin20[$x[3]] = $x[40];
    $sin20[$x[4]] = $x[50];
    $sin20[$x[5]] = $x[60];
}
echo count($sin20) . PHP_EOL;
var_dump($sin20);
