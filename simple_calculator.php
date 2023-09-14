<?php


function calc($num1, $num2, $task) {

    if ($task == "plus") {
        echo $num1 + $num2;
    } else if ($task == "minus") {
        echo $num1 - $num2;
    } else if ($task == "subs") {
        echo $num1 * $num2;
    } else if ($task == "division") {
        echo $num1 / $num2;
    }
}

calc(20, 20, "subs");
