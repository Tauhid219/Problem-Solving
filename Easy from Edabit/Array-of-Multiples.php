<?php

// Create a function that takes two numbers as arguments (num, length) and returns an array of multiples of num until the array length reaches length. 

function arrayOfMultiples($num, $length)
{
    $result = [];
    for ($i = 1; $i <= $length; $i++) {
        $result[] = $num * $i;
    }
    return $result;
}
// উদাহরণ:
var_dump(arrayOfMultiples(7, 5)); // [7, 14, 21, 28, 35]
var_dump(arrayOfMultiples(12, 10)); // [12, 24, 36, 48, 60, 72, 84, 96, 108, 120]
var_dump(arrayOfMultiples(17, 6)); // [17, 34, 51, 68, 85, 102]
var_dump(arrayOfMultiples(5, 4)); // [5, 10, 15, 20]
var_dump(arrayOfMultiples(10, 5)); // [10, 20, 30, 40, 50]
