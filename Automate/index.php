<?php

/*
 *  1. Given 2 sorted array of unique integers, find the common numbers in these 2 arrays. Use the most efficient approach.
    Example Input : [ 2, 3, 4, 5, 7, 8, 10, 12 ] , [ 1, 2, 3, 6, 12 ]
    Example Output : [2, 3, 12]
 *
 */

$arr1 = [ 2, 3, 4, 5, 7, 8, 10, 12];
$arr2 = [ 1, 2, 3, 6, 12];

$parent = $arr1;
$second = $arr2;
if(sizeof($arr2) >= sizeof($arr1)){
   $second = $arr1;
   $parent = $arr2;
}

$res = [];
foreach ($parent as $value){
    if(in_array($value,$second)){
        array_push($res, $value);
    }
}

print_r(array_values($res));
