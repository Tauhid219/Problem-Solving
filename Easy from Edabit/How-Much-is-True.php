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

// উদাহরণ:
var_dump(countTrueValues([true, false, true, true])); // 3
var_dump(countTrueValues([false, false, false]));    // 0
var_dump(countTrueValues([true, true, true, true])); // 4
var_dump(countTrueValues([]));                      // 0
