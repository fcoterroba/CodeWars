<?php

function divisors($integer) {
    $arrayDivisors = [];
    for ($i=2; $i < $integer; $i++) { 
        if ($integer % $i == 0) {
            array_push($arrayDivisors, $i);
        }
    }

    return empty($arrayDivisors) ? "$integer is prime" : $arrayDivisors;    
}

print_r(divisors(97));
print_r(divisors(25));

// original kata: https://www.codewars.com/kata/544aed4c4a30184e960010f4
// my solution: https://www.codewars.com/kata/reviews/5996c979e06bbf2b5a000720/groups/65fbed4fb4564a0001ef0b85