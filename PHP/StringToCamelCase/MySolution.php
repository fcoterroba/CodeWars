<?php
function toCamelCase($str){
  $arrayString = explode("_", str_replace("-", "_", $str));
  $counterSolution = "";
  foreach ($arrayString as $word) {
    $counterSolution .= $counterSolution != "" ? ucfirst($word) : $word; 
  }
  return $counterSolution;
}

// Original kata: https://www.codewars.com/kata/517abf86da9663f1d2000003
// My solution: https://www.codewars.com/kata/reviews/5af529b442d45e8ca300134e/groups/67863f77c90009c787b80e76
