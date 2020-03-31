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

var_dump(cube_odd([1, 2, 3, 4]));

function cube_odd($a) {
    
    $arreglo = array();
    
    for ($i=0; $i <= count($a); $i = $i+2) { 
        
        
            array_push($arreglo, $i^3);
        

    }

    return array_sum($arreglo);


  }