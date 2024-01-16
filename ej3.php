<?php
$palabras = array("huevo", "hola", "html");
function palabrasConCaracter($arraypalabras, $caracter)
{
    foreach ($arraypalabras as $palabra) {
        if (strpos($palabra, $caracter) !== false) {
            return true;
        } else {
            return false;
        }
    }
}
$result = palabrasConCaracter($palabras, "f");
if ($result) {
    echo "Tiene caracter";
} else {
    echo "No tiene caracter";
}

