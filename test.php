<?php

function fibonacci(int $n)
{
    if ($n < 0)
        return [];
    if ($n === 1)
        return [0];

    $seq = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $seq[] = $seq[$i - 1] + $seq[$i - 2];
    }
    return $seq;
}

$n = 10;
echo implode(", ", fibonacci($n)) . "\n";

?>