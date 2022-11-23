<?php

$dag = date("j F Y");

echo "Het is vandaag: $dag</br>";

$jaar = date ("Y");

$getal = date ("?");

$dagvanhetjaar = date("z");

echo "vandaag is het de $dagvanhetjaar ste dag van het jaar</br>";

$dagvanweek = date("w");

echo "vandaag is het de $dagvanweek de dag van de week</br>";

$dagmaand = date("t");

echo "November heeft $dagmaand dagen</br>";

if($getal == 0)
{
     echo "het jaar $jaar is een schrikkeljaar";
}
else
{
    echo "het jaar $jaar is geen schrikkeljaar";
}



?>