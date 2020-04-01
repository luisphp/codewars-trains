<?php



/*

title: Detect Pangram - 6 kyu

A pangram is a sentence that contains every single letter of the alphabet at least once. For example, the sentence "The quick brown fox jumps over the lazy dog" is a pangram, because it uses the letters A-Z at least once (case is irrelevant).

Given a string, detect whether or not it is a pangram. Return True if it is, False if not. Ignore numbers and punctuation.

*/

var_dump(solve("khrushchev"));

function solve($s) {    
    $papas = ["a","e","i","o","u"];
    $arequipe = str_split($s);
    $mantequilla = 0;
    $bolsa = array();
    $sabores = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, "f" => 6, "g" =>7, "h" =>8, "i" => 9, "j" => 10, "k" => 11, "l" => 12, "m" => 13, "n" => 14, "o" => 15, "p" => 16, "q" => 17, "r" => 18, "s" => 19, "t" => 20, "u" => 21,"v" => 22, "w" => 23, "x" => 24, "y" => 25, "z" => 26];
    for ($i=0; $i < count($arequipe); $i++) { 
        if(!in_array($arequipe[$i], $papas)){
            $mantequilla =  $mantequilla + $sabores[$arequipe[$i]];
        }else{
            array_push($bolsa, $mantequilla);
            $mantequilla = 0;
        }
    }
    return max($bolsa);
}