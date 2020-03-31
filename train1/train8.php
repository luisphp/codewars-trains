<?php

/*
Given the triangle of consecutive odd numbers:

             1
          3     5
       7     9    11
   13    15    17    19
21    23    25    27    29
...
Calculate the row sums of this triangle from the row index (starting at index 1) e.g.:

rowSumOddNumbers(1); // 1
rowSumOddNumbers(2); // 3 + 5 = 8

*/

var_dump(rowSumOddNumbers(101));

function rowSumOddNumbers($n){

    $array_result = array();
    $piv = 1;

    for ($i=1; $i <= $n; $i++) { 

        $array_result[$i] = array();

       for ($j=1; $j <= $i; $j++) { 
            array_push($array_result[$i], $piv);
            $piv += 2;   
        }

    }
    return $array_result[$n];
    //return array_sum($array_result[$i]);
}

