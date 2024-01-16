<?php

function Bitten()
{
    $random = rand(0, 1);
    return ($random == 1);
}
if (Bitten()) {
    echo "Charlie te mordió el dedo!\n";
} else {
    echo "Charlie no te mordió el dedo\n";
}

?>