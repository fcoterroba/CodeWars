<?php
function createPhoneNumber($numbersArray) {
  return "($numbersArray[0]$numbersArray[1]$numbersArray[2]) $numbersArray[3]$numbersArray[4]$numbersArray[5]-$numbersArray[6]$numbersArray[7]$numbersArray[8]$numbersArray[9]";
}

// Original kata: https://www.codewars.com/kata/525f50e3b73515a6db000b83
// My solution: https://www.codewars.com/kata/reviews/5dc7af8d2d55c300012ecfdf/groups/5dd5592f0466110001a7e375
