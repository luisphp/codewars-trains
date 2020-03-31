<?php

/*
    Create a regular expression capable of evaluating binary strings (which consist of only 1's and 0's) and determining whether the given string represents a number divisible by 7.

    Note:

    Empty strings should be rejected.
    Your solution should reject strings with any character other than 0 and 1.
    No leading 0's will be tested unless the string exactly denotes 0.

*/

var_dump(binConv(10101));

function binConv($n){

    $final = false;

    if(is_null($n) || ctype_alpha ($n)){
        return $final;
    }else{

    $base_10 = 0;
    $doses = array();
    $arreglo = str_split($n);
    $result = array();
    $tabla_7 = array();

    for ($i=1; $i <= 10; $i++) { 
        array_push($tabla_7, $i*7);
    }

    for ($i=0; $i < count($arreglo); $i++) {     
        array_push($doses, pow(2,$i));
    }

    rsort($doses);


    for ($j=0; $j < count($arreglo); $j++) { 
        array_push($result, $doses[$j]*$arreglo[$j]);
    }

    $base_10 = array_sum($result);
    $retorno = false;

    /*if($base_10 > 100){

    }else{
        
    }*/

    $num = $base_10; 

    if( isDivisibleBy7($num )>=0 ){

        $final = true;
        return $final;
    }else{
            return $final;
        }
    }

}

function isDivisibleBy7( $num ) 
{ 
      
    // If number is negative,  
    // make it positive 
    if( $num < 0 ) 
        return isDivisibleBy7( -$num ); 
  
    // Base cases 
    if( $num == 0 || $num == 7 ) 
        return 1; 
    if( $num < 10 ) 
        return 0; 
  
    // Recur for ( num / 10 - 2 * num % 10 )  
    return isDivisibleBy7($num / 10 - 2 *  
                         ($num - $num / 10 * 10 ) ); 
} 