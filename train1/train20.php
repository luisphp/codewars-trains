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

var_dump(nextHigher(1));

function nextHigher($n) {
    $z = $n+1;
    $a = 0;
    while ($a == 0) {
        array_sum(str_split(base_convert($z, 10,2))) == array_sum(str_split(base_convert($n, 10,2))) ? $a = 1 : $z += 1;        
    }
    return $z;
}