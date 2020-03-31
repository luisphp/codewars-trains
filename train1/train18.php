<?php

/*

The two oldest ages function/method needs to be completed. It should take an array of numbers as its argument and return the two highest numbers within the array. The returned value should be an array in the format [second oldest age, oldest age].

The order of the numbers passed in could be any order. The array will always include at least 2 items.

For example:

two_oldest_ages( 4, {1, 2, 10, 8} ) // should return {8, 10}

*/

var_dump(twoOldestAges([1,5,87,45,8,8]));

function twoOldestAges($ages) {

    $result = array();

    rsort($ages);

    for ($i=0; $i < 2; $i++) { 
        array_push($result, $ages[$i]);
    }

    $array_final = array($result[1],$result[0]);

    return $array_final;
}