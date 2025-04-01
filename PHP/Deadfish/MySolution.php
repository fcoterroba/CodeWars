<?php

function parse($data) {
  $result = 0;
  $array = [];
  foreach (str_split($data) as $g) {
    if ($g == 'i'){
      $result++;
    }
    else if($g == 'd'){
      $result--;
    }else if($g == 's'){
      $result = $result * $result;
    }else if($g == 'o'){
      array_push($array, $result);
    }
  }
  return $array;
}

// Original kata: https://www.codewars.com/kata/51e0007c1f9378fa810002a9
// My solution: https://www.codewars.com/kata/reviews/5b8e53645a5f104129000811/groups/67eb7487a6458b2a6d958033
