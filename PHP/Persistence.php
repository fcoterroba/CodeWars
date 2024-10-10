<?php

function persistence(int $num): int
{
    $times = 0;

    while ($num >= 10) {
        $digits = str_split((string)$num);
        $times++;
        $num = array_product($digits);
    }

    return $times;
}

echo persistence(4);

// Original kata: https://www.codewars.com/kata/55bf01e5a717a0d57e0000ec
// My solution: https://www.codewars.com/kata/reviews/582bdd4742fdd8d4be000010/groups/67078a49d776b2d2ac8b92f3
