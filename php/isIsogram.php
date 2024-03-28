<?php
function isIsogram($string) {
	$stringSplitted = str_split(strtolower($string));
    
     return count($stringSplitted) == count(array_unique($stringSplitted));
}

echo isIsogram("moOse");

// original kata: https://www.codewars.com/kata/54ba84be607a92aa900000f1
// my solution: https://www.codewars.com/kata/reviews/5b916f3ef0a3b2aa2e001441/groups/660547a24bbd2500010d4fcd
