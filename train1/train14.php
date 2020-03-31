<?php
/*

    Find the sum of the odd numbers within an array, after cubing the initial integers. The function should return undefined/None/nil/NULL if any of the values aren't numbers.

    class CubeOddTest extends TestCase {
    public function testExamples() {
        $this->assertEquals(28, cube_odd([1, 2, 3, 4]));
        $this->assertEquals(0, cube_odd([-3, -2, 2, 3]));
        $this->assertEquals(NULL, cube_odd(["a", 12, 9, "z", 42]));
    }
    }

*/

var_dump(removeEveryOther([0 => 1,2 => 3,4 => 5,6 => 7,8 => 9,10 => 11,12 => 13,14 => 15,16 => 17,18 => 19,20 => 21,22 => 23,24 => 25,26 => 27,28 => 29,30 => 31,32 => 33,34 => 35,36 => 37,38 => 39,40 => 41,42 => 43,44 => 45]));

function removeEveryOther($array) {

    $var = count($array);

    for ($i=2; $i < (int)end($array); $i = $i+4) { 
        
        unset($array[$i]);

    }

    /*
    if(array_keys($array) !== range(0, count($array) - 1)){
        
        for ($i=2; $i < count($array); $i+2) { 
            array_splice($array,$i,1);
        }

    } 
         
    else{

        for ($i=1; $i < count($array); $i++) { 
       
            array_splice($array,$i,1);
    
        }

    }
    */



    return $array;
  }