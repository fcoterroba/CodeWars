<?php

function persistence(int $num): int {
    if ($num >= 10) {
        $count = 0;
        while ($num >= 10) {
            $product = 1;
            while ($num > 0) {
                $product *= $num % 10;
                $num = (int)($num / 10);
            }
            $num = $product;
            $count++;
        }
        return $count;
    }
    return 0;
}

// Original kata: https://www.codewars.com/kata/55bf01e5a717a0d57e0000ec
// My solution: https://www.codewars.com/kata/reviews/582bdd4742fdd8d4be000010/groups/68355b28a6f89e7b6b23e8c4