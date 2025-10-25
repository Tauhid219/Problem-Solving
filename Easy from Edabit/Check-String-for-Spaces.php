<?php

// Create a function that returns true if a string contains any spaces.

function containsSpace($str)
{
    if (strpos($str, ' ') !== false) {
        return true;
    } else {
        return false;
    }
}

// উদাহরণ:
var_dump(containsSpace("HelloWorld"));  // false
var_dump(containsSpace("Hello World")); // true







?>