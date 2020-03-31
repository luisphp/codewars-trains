<?php

/*
Given a number n, return the number of positive odd numbers below n, EASY!

oddCount(7) //=> 3, i.e [1, 3, 5]
oddCount(15) //=> 7, i.e [1, 3, 5, 7, 9, 11, 13]
Expect large Inputs!
*/

var_dump(rowSumOddNumbers(15023));

function rowSumOddNumbers($n){

    $array_result = array();

    for ($i=1; $i < $n; $i++) { 

        if($i %2 != 0){
            $array_result[$i] = array();
        }

    }
    //return $array_result[$n];
    //return array_sum($array_result[$i]);
    return count($array_result);
}

