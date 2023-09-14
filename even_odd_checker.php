<?php

function oddOrEven($number) {

    if ($number % 2 == 0) {
        echo $number . " is even";
    } else {
        echo $number . " is odd";
    }
}

oddOrEven(20);
