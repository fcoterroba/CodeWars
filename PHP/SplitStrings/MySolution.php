<?php
function solution($str) {
  $result = $str === "" ? [] : str_split($str, 2);    
  if (strlen(end($result)) == 1){
    $result[key($result)] .= "_"; 
  }
  return $result;
}

// Original kata: https://www.codewars.com/kata/515de9ae9dcfc28eb6000001
// My solution: https://www.codewars.com/kata/reviews/57cb045535ef62f92d0000f1/groups/67a1e9342f61c78fe59c2f8a
