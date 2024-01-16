<?php

$notasAlumnos = array(
    'Tomi' => array(5, 7, 5, 9, 8),
    'Angela' => array(9, 6, 7, 8, 9),
    'Alan' => array(7, 6, 9, 7, 6),
    'Ana' => array(10, 10, 9, 10, 8),
);
function mediaAlumno($notas)
{
    $totalNotas = count($notas);
    $sumaNotas = array_sum($notas);
    return $sumaNotas / $totalNotas;
}
function mediaClase($notasAlumnos)
{
    $totalAlumnos = count($notasAlumnos);
    $sumaMedias = 0;

    foreach ($notasAlumnos as $notas) {
        $sumaMedias += mediaAlumno($notas);
    }

    return $sumaMedias / $totalAlumnos;
}

foreach ($notasAlumnos as $alumno => $notas) {
    echo "Notas de $alumno: ";
    print_r($notas);
    echo "Media: " . mediaAlumno($notas) . PHP_EOL;
}

echo "Media de la clase: " . mediaClase($notasAlumnos) . PHP_EOL;
