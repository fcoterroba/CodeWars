<?php
  
function disemvowel(string $s): string  {
  $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

  return str_replace($vowels, "", $s);
}

// Original kata: https://www.codewars.com/kata/52fba66badcd10859f00097e
// My solution: https://www.codewars.com/kata/reviews/63947bd335232800016cca64/groups/6735f3d71c250d9417d76b83
