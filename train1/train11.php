<?php

/*

    Train title:  Array.diff - 6 kyu

    Description: 
    
        Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.

        It should remove all values from list a, which are present in list b.

        arrayDiff([1,2],[1]) == [2]
        If a value is present in b, all of its occurrences must be removed from the other:

        arrayDiff([1,2,2,2,3],[2]) == [1,3]

*/

var_dump(arrayDiff([1,2],[1]));

function arrayDiff($a, $b) {

    if(count($b) == 0 || count($a) == 0){

        return $a;

    }else{

        $result = array();

        $piv = count($a);

        for ($i=0; $i < $piv; $i++) { 

            $op = in_array($a[$i],$b);

            if( $op == false){

                array_push($result, $a[$i]);
            }
            
        }

        return $result;

    }

  }
