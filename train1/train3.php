<?php

$array_a = [121, 144, 19, 161, 19, 144, 19, 11];
$array_b = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];

echo isDaSame($array_a, $array_b);

function isDaSame($array_a, $array_b){

    if(is_array($array_a) && is_array($array_b) &&  !is_null($array_a) && !is_null($array_b) && count($array_a) != 0 && count($array_b) != 0){

    $contador = 0;
    $isTheSame = false;

    for ($i=0; $i < count($array_b); $i++) { 
        
        if(in_array(sqrt($array_b[$i]), $array_a)){
            $contador += 1;
        }
    }
    
    if($contador == count($array_b))
    {
        return true;
    }else
    {
        return false;
    }

    }else{
        return false;
    }

}