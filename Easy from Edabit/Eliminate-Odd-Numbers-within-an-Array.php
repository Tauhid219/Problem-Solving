<?php

// Create a function that takes an array of numbers and returns only the even values. 

function eliminateOddNumbers($arr)
{
    $evenNumbers = [];
    foreach ($arr as $num) {
        if ($num % 2 === 0) {
            $evenNumbers[] = $num;
        }
    }
    return $evenNumbers;
}
// উদাহরণ:
var_dump(eliminateOddNumbers([1, 2, 3, 4, 5, 6])); // [2, 4, 6]
var_dump(eliminateOddNumbers([13, 17, 19, 21])); // []
var_dump(eliminateOddNumbers([2, 4, 6, 8, 10])); // [2, 4, 6, 8, 10]
var_dump(eliminateOddNumbers([])); // []
var_dump(eliminateOddNumbers([0, -2, -3, -4, -5])); // [0, -2, -4]
