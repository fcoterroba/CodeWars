<?php

function beeramid(int $bonus, float $price): int {
    $level = 0;
    $remaining = $bonus;

    while (true) {
        $cansNeeded = pow($level + 1, 2);
        $cost = $cansNeeded * $price;

        if ($remaining >= $cost) {
            $remaining -= $cost;
            $level++;
        } else {
            break;
        }
    }

    return $level;
}

// Original kata: https://www.codewars.com/kata/51e04f6b544cf3f6550000c1
// My solution: https://www.codewars.com/kata/reviews/6280a6882cad2c00016751ac/groups/682309dc02a889ab2f459b76
