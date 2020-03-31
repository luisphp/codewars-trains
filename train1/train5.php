<?php

/*
Given a string, capitalize the letters that occupy even indexes and odd indexes separately, and return as shown below. Index 0 will be considered even.

For example, capitalize("abcdef") = ['AbCdEf', 'aBcDeF']. See test cases for more examples.

The input will be a lowercase string with no spaces.

Good luck!

*/

var_dump(capitalizer("esparta"));

function capitalizer($word){

    $array_one = array();
    $array_one_result = array();
    $array_two_result = array();
    $array_one = str_split($word);

    for ($i=0; $i < count($array_one); $i++) { 
        $i %2 != 0 ? array_push($array_one_result, strtoupper((string)$array_one[$i])) : array_push($array_one_result, (string)$array_one[$i]);
        $i %2 == 0 ? array_push($array_two_result, strtoupper((string)$array_one[$i])) : array_push($array_two_result, (string)$array_one[$i]);
    }
    return $final_array = array(implode($array_two_result), implode($array_one_result));
}


