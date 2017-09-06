<?php

/*
 * Sort array using bubble sort.
 */

function selectionsort($arr) {
    $size = count($arr);
    
    for($i =0; $i < $size; $i++){
        
        for($j= $i +1; $j < $size; $j++) {
            if($arr[$j] < $arr[$i]) {                
                swap_values($arr,$i, $j );
            }
        }
    }
    return $arr;
}

function swap_values(&$arr, $i, $j) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}

$data = [
    8, 5, 3, 9, 4, 7, 2, 6 , 1 
];

print("Before Sort \n");
print implode(', ', $data);

$sortArray = selectionsort($data);
print("\nAfter Sort \n");
print implode(', ', $sortArray);


