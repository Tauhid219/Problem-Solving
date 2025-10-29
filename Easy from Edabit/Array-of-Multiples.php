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
// Example usage:
$num = 7;
$length = 5;
print_r(arrayOfMultiples($num, $length)); // Output: [7, 14, 21, 28, 35]




?>