<?php

function solution($number)
{
    $sum = 0;
    for ($i = 3; $i < $number; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $sum += $i;
        }
    }
    return $sum;
}

// Original kata: https://www.codewars.com/kata/514b92a657cdc65150000006
// My solution: https://www.codewars.com/kata/reviews/578840b8ea6a1ce290000002/groups/57af6c72e298a7d17b00021c
