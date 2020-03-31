<?php

/*
    Title: Split Strings

    Description:

    Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

    Examples:

    solution('abc') // should return ['ab', 'c_']
    solution('abcdef') // should return ['ab', 'cd', 'ef']

*/

var_dump(SplitString("abc"));

function SplitString($var){

    $array = str_split($var);
    $result = array();

    if(count($array) %2 != 0){
        array_push($array, "_");
    }

    for ($i=0; $i < count($array); $i += 2) { 

        array_push($result, (string)$array[$i].(string)$array[$i+1]);
        
    }

    return $result;
}