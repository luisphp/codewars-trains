<?php



echo var_dump(rowSumOddNumbers(4));

function rowSumOddNumbers($valor){

    $array = array('0' => 0);
    $array_pivote = array();
    $pivote = 0;
    

    for ($i=1; $i <= $valor; $i++) { 

        array_push($array, $i);

        $array[$i] = array(0 => 0);

        for ($j=1; $j <= $i; $j++) { 

            /*
            if(count($array_pivote) == 0 ){
                $clave = false;
            }else{
                $clave = !in_array($j, $array_pivote);
            } 
            */

            $suma = $pivote + 1;
            
           if($suma%2 != 0 && $j % 2 != 0 ){

                array_push($array[$i], $pivote+1);
                $pivote += 1;

            }
        }
        
    }

    return array_merge($array, $array_pivote);

}

   

    //$array = array('1' => ['1'],'2' => ['3','5'],'3' => ['7','9','11'], '4'=> ['13','15','17','19'],'5'=>['21','23','25','27','29'] );

    //for ($i=1; $i <= count($array); $i++) { 
        
        //for ($x=0; $x < count($array[$i]); $x++) { 
            
            //$zuma += (int)$array[$i][$x];

       // }

    //}





