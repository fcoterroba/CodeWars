<?php

function sum_intervals(array $intervals): int {
  if (empty($intervals)) return 0;
  
  usort($intervals, fn($a, $b) => $a[0] <=> $b[0]);

  $merged = [];
  foreach ($intervals as [$start, $end]) {
      if (empty($merged) || $start > $merged[count($merged) - 1][1]) {
          $merged[] = [$start, $end];
      } else {
          $merged[count($merged) - 1][1] = max($merged[count($merged) - 1][1], $end);
      }
  }

  $sum = 0;
  foreach ($merged as [$start, $end]) {
      $sum += $end - $start;
  }

  return $sum;
}

// Original kata: https://www.codewars.com/kata/52b7ed099cdc285c300001cd
// My solution: https://www.codewars.com/kata/reviews/59946696d433e79e10000021/groups/682c29413841966e8754bf1f
