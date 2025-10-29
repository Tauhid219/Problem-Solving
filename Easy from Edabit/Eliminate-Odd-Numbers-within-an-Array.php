<?php

// Create a function that takes an array of numbers and returns only the even values.
function getEvenNumbers(array $numbers): array
{
    $evens = [];

    foreach ($numbers as $num) {
        if (is_numeric($num) && $num % 2 == 0) {
            $evens[] = (int) $num; // store even number
        }
    }

    return $evens;
}

// Example usage:
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = getEvenNumbers($data);

echo "Even numbers: " . implode(", ", $result);


?>