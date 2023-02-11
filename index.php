<?php

$arr = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];

function quick_sort($arr)
{
    if (count($arr) < 2) {
        return $arr;
    }

    $pivot = $arr[0];
    $left_arr = $right_arr = [];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] <= $pivot) {
            $left_arr[] = $arr[$i];
        } else {
            $right_arr[] = $arr[$i];
        }
    }

    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);

    return array_merge($left_arr, [$pivot], $right_arr);
}

var_dump(quick_sort($arr));