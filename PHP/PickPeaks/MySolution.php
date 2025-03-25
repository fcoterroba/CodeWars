<?php

function pickPeaks(array $arr): array {
    $pos = [];
    $peaks = [];

    $n = count($arr);
    if ($n < 3) return ['pos' => [], 'peaks' => []];

    $i = 1;
    while ($i < $n - 1) {
        if ($arr[$i] > $arr[$i - 1]) { 
            $peakPos = $i;
            while ($i + 1 < $n && $arr[$i] == $arr[$i + 1]) {
                $i++;
            }
            if ($i + 1 < $n && $arr[$i] > $arr[$i + 1]) {
                $pos[] = $peakPos;
                $peaks[] = $arr[$peakPos];
            }
        }
        $i++;
    }

    return compact('pos', 'peaks');
}

// My solution: https://www.codewars.com/kata/5279f6fe5ab7f447890006a7
// Original kata: https://www.codewars.com/kata/reviews/59afaa1d9ba64c969d000ab5/groups/67e26490ecb6f62ed87893b3
