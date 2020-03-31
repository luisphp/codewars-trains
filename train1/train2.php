<?php

/*
Problema: 

The goal of this exercise is to convert a string to a new string where each character in the new string is "(" if that character appears only once in the original string, or ")" if that character appears more than once in the original string. Ignore capitalization when determining if a character is a duplicate.

Examples
"din"      =>  "((("
"recede"   =>  "()()()"
"Success"  =>  ")())())"
"(( @"     =>  "))((" 
Notes

Assertion messages may be unclear about what they display in some languages. If you read "...It Should encode XXX", the "XXX" is the expected result, not the input!

*/

//Solucion boceteada:


$arreglo = array('A','L','A','S');

echo implode($arreglo);

//$str = $_GET['a'];

$str = 'palabras de mi alma';

$arreglo = explode(" ",$str);
echo "<br>";
echo $arreglo[0];
echo "<br>";
echo "<br>";

//Contador
$contador = 0;

//La pabra dada
$word = "(( @";

echo $word;
echo "<br>";
echo "<br>";

//Cada letra de la palabra dada
$letras = array();
$letras = str_split(strtolower($word));
$arre_word = array();
$arre_word = str_split(strtolower($word));

//Arreglo a ser llenado por el codigo de parentesis segun palabra dada
$arreglo2 = array();

for ($j=0; $j < count($letras); $j++) { 

    for ($i=0; $i < count($arre_word); $i++) { 
        
        if($letras[$j] === $arre_word[$i]){

            $contador += 1;

        }

    }

    if($contador == 1){
        array_push($arreglo2,'('); 
    }else{
        array_push($arreglo2,')'); 
    }
    echo $contador;

    $contador = 0;

}

echo "<br>";
echo  implode($arreglo2);


/*
Test case:

    class MyTestCases extends TestCase
{
    public function testBasics() {
      $this->assertEquals('(((', duplicate_encode('din'));
      $this->assertEquals('()()()', duplicate_encode('recede'));
      $this->assertEquals(')())())', duplicate_encode('Success'), 'should ignore case');
      $this->assertEquals('))))))', duplicate_encode('iiiiii'), 'duplicate-only-string');
      $this->assertEquals(')))))(', duplicate_encode(' ( ( )'));
    }
}
*/

/*
    Código entregado:

    function duplicate_encode($word){
	$result = '';

//Cada letra de la palabra dada
$letras = array();
$letras = str_split(strtolower($word));
$arre_word = array();
$arre_word = str_split(strtolower($word));

//Arreglo a ser llenado por el codigo de parentesis segun palabra dada
$arreglo2 = array();

for ($j=0; $j < count($letras); $j++) { 

    for ($i=0; $i < count($arre_word); $i++) { 
        
        if($letras[$j] === $arre_word[$i]){

            $contador += 1;

        }

    }

    if($contador == 1){
        array_push($arreglo2,'('); 
    }else{
        array_push($arreglo2,')'); 
    }

    $contador = 0;

}
  
  return $result = implode($arreglo2);
}


*/
