<?php

/*

Kata Title: Consonant value

Description:
Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence, which is the number of times you must multiply the digits in num until you reach a single digit.

For example:

persistence(39) === 3; // because 3 * 9 = 27, 2 * 7 = 14, 1 * 4 = 4 and 4 has only one digit
persistence(999) === 4; // because 9 * 9 * 9 = 729, 7 * 2 * 9 = 126, 1 * 2 * 6 = 12, and finally 1 * 2 = 2
persistence(4) === 0; // because 4 is already a one-digit number

*/

var_dump(persistence(4));

function persistence($n) {   
    
    $result = 0;
    $numeros = str_split($n);

        if(count($numeros) == 1){
            return $result;
        }elseif(count($numeros) == 2){
            $result = 1;
            $a=0;
            while($a == 0){
                
                $numeros = str_split((int)$numeros[0]*(int)$numeros[1]);
                
                if(count($numeros) == 1){
                    $a = 1;
                    
                }else{
                    $a = 0;
                    $result += 1;
                }
                
            }    
        }elseif(count($numeros) == 3){

            $result = 2;
            
            $a=3;
            while($a == 3){
                
                $numeros = str_split(
                    $numeros[0]*$numeros[1]*$numeros[2]
                );
                
                if(count($numeros) == 2){
                    $a = 2;
                }else{
                    $a = 3;
                    $result += 1;
                }
                
            }
            while($a == 2){
                
                $numeros = str_split(
                    $numeros[0]*$numeros[1]
                );
                
                if(count($numeros) == 1){
                    $a = 1;
                }else{
                    $a = 2;
                    $result += 1;
                }
                
            }

        }

    return $result;
}