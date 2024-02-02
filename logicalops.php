<?php
    // logical operators = combine conditional statements
    // if(condition1 && condition 2)

    // && = True if both conditions are true
    // || = True if at least one condition is true
    //  ! = True if false. False if true.

    // $temp = 15;
    // $cloudy = false;

    // if($temp >= 0 && $temp <= 30){
    //     echo "The weather is good.";
    // }
    // else {
    //     echo "The weather is bad.";
    // }

    // if($temp < 0 || $temp > 30){
    //     echo "The weather is bad.<br>";
    // }
    // else {
    //     echo "The weather is good.<br>";
    // }

    // if(!$cloudy) {
    //     echo "its sunny.";
    // } 
    // else {
    //     echo "its cloudy.";
    // }

    // ---------------------------------

    // $age = 25;
    // $citizen = true;

    // if ($age >= 18 && $citizen) {
    //     echo "you can vote!";
    // }
    // else {
    //     echo "you cannot vote.";
    // }

    // if (!$age >= 18 || !$citizen) {
    //     echo "you cannot vote.";
    // }else {
    //     echo "you can vote!";
    // }

    // ---------------------------------

    $child = false;
    $senior = true;
    $ticket = null;

    if($child || $senior) {
        $ticket = 10;
    }
    else {
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}.";
?>