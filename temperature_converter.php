<?php

$celsiusTemp = 36;
$fahrenheitTemp = 96.8;

function celsiousToFahrenheight($temp) {
    $result = $temp * (9 / 5) + 32;
    return $result;
}

function FahrenheightToCelsious($temp) {
    $result = ($temp - 32) * 5 / 9;
    return $result;
}

echo celsiousToFahrenheight($celsiusTemp);
echo "\n";
echo FahrenheightToCelsious($fahrenheitTemp);
