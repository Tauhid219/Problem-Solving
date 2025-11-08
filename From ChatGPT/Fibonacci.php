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
        return []; /// যদি n এর মান ০ অথবা এর কম হয়, ফাঁকা অ্যারে রিটার্ন করো।
    if ($n === 1)
        return [0]; // যদি n এর মান ১ হয়, শুধু ০ রিটার্ন করো (ফিবোনাচ্চির প্রথম সংখ্যা)

    $seq = [0, 1];                 // প্রথম দুইটি ফিবোনাচ্চি সংখ্যা ০ এবং ১। 
    for ($i = 2; $i < $n; $i++) { // দ্বিতীয় সংখ্যা থেকে শুরু করে, n পর্যন্ত loop চলবে
        $seq[] = $seq[$i - 1] + $seq[$i - 2]; // প্রতিটি নতুন সংখ্যা হবে পূর্ববর্তী দুটি সংখ্যার যোগফল
    }
    return $seq; // সিকোয়েন্সটি রিটার্ন হবে।
}

// Example: print first 10 Fibonacci numbers
$n = 10;
echo implode(", ", fibonacci($n)) . "\n";
