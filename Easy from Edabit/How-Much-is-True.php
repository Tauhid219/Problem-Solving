<?php

// Create a function which returns the number of true values there are in an array.
function countTrueValues($arr)
{
    $count = 0;
    foreach ($arr as $value) {
        if ($value === true) {
            $count++;
        }
    }
    return $count;
}
// Example usage:
$values = [true, false, true, true, false, false, true];
echo countTrueValues($values); // Output: 4







?>