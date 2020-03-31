<?php
/*
    Kata Title:

    Description:




*/



var_dump(get_drink_by_profession("Jabonoso"));

function get_drink_by_profession(string $s): string {

    $value = '';
    $result = "";

    $input = array(1 =>"Jabroni",2 =>"School Counselor",3 => "Programmer",4 => "Bike Gang Member",5 =>"Politician",6 =>"Rapper");
    $output = array(1 =>"Patron Tequila",2 => "Anything with Alcohol",3 => "Hipster Craft Beer",4 => "Moonshine",5 => "Your tax dollars" ,6 => "Cristal",7 => "Beer");

    for ($i=1; $i <= count($input) ; $i++) { 

        if(strtolower($s) == strtolower($input[$i])){

            $value = $i;

        }
        
    }

    if($value == ''){
        $result = "Beer";
    }else{
        $result = (string)$output[$value];
    }

    
    
    return $result;

  }