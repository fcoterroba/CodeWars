<?php

function alphabet_position(string $s): string {
  
  $numberLetters = array_combine(range('a', 'z'), range(1, 26));
  $s = strtolower($s);
  $result = [];

  foreach (str_split($s) as $letter) {
      if (isset($numberLetters[$letter])) {
          $result[] = $numberLetters[$letter];
      }
  }

  return implode(" ", $result);
}

// Original kata: https://www.codewars.com/kata/546f922b54af40e1e90001da
// My solution: https://www.codewars.com/kata/reviews/59b3c8bfd0ca2d061400014d/groups/67bd7139f73ac331ad64fc43
