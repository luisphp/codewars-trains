<?php



/*

title: Detect Pangram - 6 kyu

A pangram is a sentence that contains every single letter of the alphabet at least once. For example, the sentence "The quick brown fox jumps over the lazy dog" is a pangram, because it uses the letters A-Z at least once (case is irrelevant).

Given a string, detect whether or not it is a pangram. Return True if it is, False if not. Ignore numbers and punctuation.

*/

var_dump(solve("The quick brown fox jumps over the lazy dog 1 ?"));

function solve($string) { 
    $limpio = preg_replace("/[^A-Za-z]/", '', strtolower(str_replace(' ','',$string)));
    $palabras = array_unique(str_split($limpio));
    count($palabras) == 26?  $palabras= true: $palabras = false;
    return $palabras;
}