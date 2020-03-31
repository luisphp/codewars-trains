<?php
/*
You work in the best consumer electronics corporation, and your boss wants to find out which three products generate the most revenue. Given 3 lists of the same length like these:

Case 1:
products: ["Computer", "Cell Phones", "Vacuum Cleaner"]
amounts: [3, 24, 8]
prices: [199, 299, 399]

case 2:
products: ["Computer", "Cell Phones", "Vacuum Cleaner"]
amounts: [3, 3, 3]
prices: [100, 100, 100]


return the three product names with the highest revenue (amount * price).

Note: if multiple products have the same revenue, order them according to their original positions in the input list.

*/

var_dump(MostRevenue(["Computer", "Cell Phones", "Vacuum Cleaner"],[3, 3, 5],[100, 100, 100]));

function MostRevenue($productos, $monto, $precio){


    $products = $productos;
    $amount = $monto;
    $price = $precio;
    $revenues = array();
    $result = array();
    $suma = 0;

    for ($i=0; $i < count($amount); $i++) { 
        
        array_push($revenues, $amount[$i]*$price[$i]);

        $result = array_push_assoc($result, $products[$i], $revenues[$i]);

        $suma = $suma + $revenues[$i];


    }

    if((($suma /count($revenues))== $revenues[0])){
        return $result;
    }else{
        arsort($result);

        return $result;
    }

}

function array_push_assoc($array, $key, $value){
    $array[$key] = $value;
    return $array;
    }