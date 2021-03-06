<?php

/*

Kata Title: Basics 08: Find next higher number with same Bits (1's)

Description:
    Your task is to Find the next higher number (int) with same '1'- Bits.

    I.e. as much '1' bits as before and output next higher than input. Input is always an int >0 up to 1<<30. No bad cases or special tricks...

    Some easy examples:

    Input: 129  => Output: 130 (10000001 => 10000010)
    Input: 127 => Output: 191 (01111111 => 10111111)
    Input: 1 => Output: 2 (01 => 10)
    Input: 323423 => Output: 323439 (1001110111101011111 => 1001110111101101111)
    First some static tests, later on many random tests too;-)!

    Hope you have fun:-)!

*/

var_dump(nextHigher(1010110));

function nextHigher($n) {
    $final = false;
    if(is_null($n) || ctype_alpha ($n)){
        return $final;
    }else{

    $base_10 = 0;
    $doses = array();
    $arreglo = str_split($n);
    $result = array();


    for ($i=0; $i < count($arreglo); $i++) {     
        array_push($doses, pow(2,$i));
    }

    rsort($doses);


    for ($j=0; $j < count($arreglo); $j++) { 
        array_push($result, $doses[$j]*$arreglo[$j]);
    }

    $base_10 = array_sum($result);
    $retorno = false;

    return $base_10;

    }

}
