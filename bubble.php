<?php

function bubble_sort(array $arr = []): array
{
    // $size = sizeof($arr);

    for ($a = 1; $a < sizeof($arr); $a++) {
        for ($b = $size - 1; $b >= $a; $b--) {
            if ($arr[$b - 1] > $arr[$b]) {

                // Intercambia los elementos organizados
                $tmp = $arr[$b - 1];
                $arr[$b - 1] = $arr[$b];
                $arr[$b] = $tmp;
            }
        }
    }

    return $arr;
}