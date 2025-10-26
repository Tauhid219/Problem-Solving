<?php

// Write a PHP function that prints the Fibonacci series (e.g., 0, 1, 1, 2, 3, 5, 8, …).
function fibonacciSeries($n)
{
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}
// উদাহরণ:
print_r(fibonacciSeries(10)) . "\n"; // Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 2 [4] => 3 [5] => 5 [6] => 8 [7] => 13 [8] => 21 [9] => 34 )

function fibonacci(int $n): array
{
    if ($n <= 0)
        return [];
    if ($n === 1)
        return [0];

    $seq = [0, 1];                 // first two terms
    for ($i = 2; $i < $n; $i++) {
        $seq[] = $seq[$i - 1] + $seq[$i - 2];
    }
    return $seq;
}

// Example: print first 10 Fibonacci numbers
$n = 10;
echo implode(", ", fibonacci($n)) . "\n";



?>