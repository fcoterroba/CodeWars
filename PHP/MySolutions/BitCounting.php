<?php
function countBits($n){
  return substr_count(decbin($n), "1");
}

// Original kata: https://www.codewars.com/kata/526571aae218b8ee490006f4
// My solution: https://www.codewars.com/kata/reviews/57bfc0b9939079b2b4000008/groups/57c49971bfeef1ad95000cfe
