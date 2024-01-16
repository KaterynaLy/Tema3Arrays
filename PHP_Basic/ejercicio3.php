<?php
//a
$X = 10;
$Y = 5;

echo "$X + $Y = " . ($X + $Y); //addition
echo "\n";
echo "$X - $Y = " . ($X - $Y); //subtraction
echo "\n";
echo "($X * $Y) = " . ($X * $Y); //multiplication
echo "\n";
echo "$X / $Y = " . ($X / $Y); //division
echo "\n";
echo "$X % $Y = " . ($X % $Y); //modulus
echo "\n";

$N = 10.50;
$M = 5.50;

echo "$N + $M = " . ($N + $M); //addition
echo "\n";
echo "$N - $M = " . ($N - $M); //subtraction
echo "\n";
echo "($N * $M) = " . ($N * $M); //multiplication
echo "\n";
echo "$N / $M = " . ($N / $M); //division
echo "\n";
echo "$N % $M = " . ($N % $M); //modulus
echo "\n";

//b
/*b) Crea una función  Calculadora que entre dos números por parámetro, y en un tercer parámetro te permita realizar
 la suma, la resta, la multiplicación o la división de los dos números.*/

$num1 = 10;
$num2 = 5;
function calculadora($num1, $num2, $operacion)
{
    switch ($operacion) {
        case "suma":
            $resultado = $num1 + $num2;
            break;
        case "resta":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            break;
        case "division":
            $resultado = $num1 / $num2;
            break;
        default:
            "No se puede dividir por cero, elige numero major que 0";
            break;
    }
    return $resultado;
}

echo "Suma: " . calculadora($num1, $num2, "suma") . PHP_EOL;
echo "Resta: " . calculadora($num1, $num2, "resta") . PHP_EOL;
echo "Multiplicación: " . calculadora($num1, $num2, "multiplicacion") . PHP_EOL;
echo "División: " . calculadora($num1, $num2, "division") . PHP_EOL;
?>