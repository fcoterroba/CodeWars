<?php

function pyramid($n) {
  $result = [];
  for ($i=1; $i <= $n ; $i++) { 
      $result[] = array_fill(0, $i, 1);
  }
  return $result;
}

// Original kata: https://www.codewars.com/kata/515f51d438015969f7000013
// My solution: https://www.codewars.com/kata/reviews/5dacc032564ff100010c3f44/groups/5dc7d03c2d55c300010eaa28
