<?php

    $str = $_GET['a'];
    $letter = $_GET['b'];
    $pivote = 0;

    echo $str;
    echo "<br>";
    echo $letter;
    echo "<br>";
    echo strlen($str);
    echo "<br>";

    //Defino el arreglo
    $arreglo = array();
    $arreglo = str_split($str);
    echo "<br>";
    echo "<br>";

        for ($i=0; $i < strlen($str); $i++) { 

            if($arreglo[$i] == $letter){
                $pivote += 1; 
            }

            echo $arreglo[$i];
            echo "<br>";
        }

    echo "<br>";
    echo "<br>";
    echo "<h2>Tenemos este numero de coincidencias: ".$pivote."</h2>";
    

    function strCount ($str, $letter) {

        $resultado = '';
        
        if(strlen($letter) < 0){
          
          $resultado = 0;
        
        }else{

            $datos = str_split($str);

            echo $datos;

        }

        return $resultado;
      }
