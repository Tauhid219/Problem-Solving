<?php
// Write a PHP function to calculate the factorial of a positive integer. The factorial of a number is the product of all positive integers less than or equal to the given number (for example, 5! = 5 × 4 × 3 × 2 × 1).


// Function to calculate factorial
function factorial($n)
{
    // If the number is 0 or 1, return 1 (base case)
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        // Recursive case: n! = n * (n-1)!
        return $n * factorial($n - 1);
    }
}

// Example usage
$number = 5;
echo "Factorial of $number is " . factorial($number);
