<?php

$bangla = 80;
$english = 91;
$physics = 95;
$avarge = ($bangla + $english + $physics) / 3;
function gradeCalculator($mark) {

    if ($mark >= 80) {
        echo "Your grade is A";
    } else if ($mark < 80 && $mark >= 70) {
        echo "Your grade is B";
    } else if ($mark < 70 && $mark >= 60) {
        echo "Your grade is C";
    } else if ($mark < 60 && $mark >= 40) {
        echo "Your grade is D";
    } else {
        echo "Your grade is F";
    }
}

gradeCalculator($avarge);
