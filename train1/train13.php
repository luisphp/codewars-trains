<?php
/*

Kata Title: Find the Difference in Age between Oldest and Youngest Family Members - 6 kyu

description:
At the annual family gathering, the family likes to find the oldest living family member’s age and the youngest family member’s age and calculate the difference between them.

You will be given an array of all the family members' ages, in any order. The ages will be given in whole numbers, so a baby of 5 months, will have an ascribed ‘age’ of 0. Return a new array (a tuple in Python) with [youngest age, oldest age, difference between the youngest and oldest age].
    
*/

var_dump(differenceInAges([82, 15, 6, 38, 35]));

function differenceInAges($ages) {

    $result = array();

    rsort($ages);

    array_push($result, $ages[count($ages)-1]);
    array_push($result, $ages[0]);
    array_push($result, $ages[0]-$ages[count($ages)-1]);

    return $result;

}