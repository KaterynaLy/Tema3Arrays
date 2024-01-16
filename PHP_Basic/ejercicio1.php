/*- Ejercicio 1
Define una variable de cada tipo: integer , double , string y boolean . Imprímelas por pantalla.
Después crea una constante que incluya tu nombre y muéstralo en formato título por pantalla*/

<?php
/*----1-----*/
$int = 8;
$double = 8.68;
$string = "10";
$bool = false;


echo "<br/>" . $int . "<br/>";
echo $double . "<br/>";
echo $string . "<br/>";
echo $bool ? "boolean impreso" : "boolean is true" . "<br/>";

// 2
define("MiNombre", "KATERYNA LYSENKO");
echo "<h1>" . MiNombre . "</h1>";

?>