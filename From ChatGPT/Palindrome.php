<?php

// Write a function to check whether a given string is a palindrome.
function isPalindrome($str)
{
    $cleanedStr = preg_replace('/[^A-Za-z0-9]/', '', strtolower($str));
    return $cleanedStr === strrev($cleanedStr);
}
// উদাহরণ:
var_dump(isPalindrome("A man, a plan, a canal: Panama")) . "\n"; // true
var_dump(isPalindrome("Hello")) . "\n"; // false

function palindrome(string $str): bool
{
    // Remove spaces and convert to lowercase
    $cleanStr = strtolower(str_replace(' ', '', $str));

    // Reverse the string
    $reverseStr = strrev($cleanStr);

    // Compare the original and reversed versions
    return $cleanStr === $reverseStr;
}

// Example usage
$word = "Madam";
if (palindrome($word)) {
    echo "$word is a palindrome.";
} else {
    echo "$word is not a palindrome.";
}


?>