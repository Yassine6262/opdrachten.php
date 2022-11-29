<?php

$tijd = date("|H:i:s");
$uur = date("H");
$temperatatuur = 19;
$luchtvochtigheid = 75;

echo "$tijd<br>";

if ($uur > 17.00  || $temperatatuur <20 && $luchtvochtigheid < 85) {
    echo "de airco is uit.";
}
else {
    echo "de airco is aan,";
}

?>