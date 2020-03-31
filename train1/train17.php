<?php

/*

Given a 2D array of size m * n. Your task is to find the sum of minimum value in each row.

For Example:

[
  [1, 2, 3, 4, 5],       # minimum value of row is 1
  [5, 6, 7, 8, 9],       # minimum value of row is 5
  [20, 21, 34, 56, 100]  # minimum value of row is 20
]


*/

var_dump(SumOfMinimun([[1,2,3,4,5],[5,6,7,8,9],[20,21,34,56,100]]));

function SumOfMinimun($var){

    $result = array();

    for ($i=0; $i < count($var); $i++) { 
        array_push($result,min($var[$i]));
    }

    return array_sum($result);
}