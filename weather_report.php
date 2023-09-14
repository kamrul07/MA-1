<?php

$temp = 10;

function weatherReport($temp) {
    if ($temp >= 30) {
        echo "It is very hot there";
    } else if ($temp < 30 && $temp >= 20) {
        echo "The weather is cool";
    } else {
        echo "It is freezing here";
    }
}

weatherReport($temp);
