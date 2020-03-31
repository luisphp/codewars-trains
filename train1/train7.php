<?php
/*

Kata title= Sums of Parts - 6 ryu


Let us consider this example (array written in general format):

    ls = [0, 1, 3, 6, 10]
    
    Its following parts:
    
    ls = [0, 1, 3, 6, 10] = 20
    ls = [1, 3, 6, 10] = 20
    ls = [3, 6, 10] = 19
    ls = [6, 10] = 16
    ls = [10] = 10
    ls = [] = 0
    The corresponding sums are (put together in a list): [20, 20, 19, 16, 10, 0]
    
    The function parts_sums (or its variants in other languages) will take as parameter a list ls and return a list of the sums of its parts as defined above.

    */

    var_dump(parts_sums([744125, 935, 407, 454, 430, 90, 144, 6710213, 889, 810, 2579358]));

    function parts_sums(array $ns){

        $result = array();
        $aa = count($ns);


        for ($i=0; $i <= $aa; $i++) { 

            array_push($result,array_sum($ns));
            
            array_shift($ns);

        }

        return $result;

    }

function partsSums($ls){
    
        if(count($ls) == 0 ){

        return $result = array(0);

    }else{
            $result = array();
            $aa = count($ls);
                for ($i=0; $i <= $aa; $i++) { 
                
                    array_push($result,array_sum($ls));
                            
                    array_shift($ls);
                
                }
      
            return $result;
        }
      
    }

