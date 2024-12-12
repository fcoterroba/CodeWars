<?php

function maskify(string $cc): string {
	return strlen($cc) <= 4 ? $cc : str_repeat("#", (strlen($cc)-4)) . substr($cc, (strlen($cc)-4));
}

// Original kata: https://www.codewars.com/kata/5412509bd436bd33920011bc
// My solution: https://www.codewars.com/kata/reviews/672ed9269c0da96bae9feb5f/groups/675aaaa922b5eacdfd7c5bcf
