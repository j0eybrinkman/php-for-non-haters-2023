<?php


    //some strings stored as variables
    $firstname = "Joey";
    $lastname = "Brinkman";
    $food = "hotwings";
    $email = "fake@proton.me";
    //some integers stored as variables
    $age = 22;
    $users = 1;
    $quantity = 3;
    //some floats stored as variables
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;
    $total  = null;
    //some booleans stored as variables
    $employed = false;
    $online = true;
    $for_sale = true;




    echo "<h1 style='color:red; text-transform: uppercase; text-align: center;''>" . $firstname . "<span>" . " " . $lastname . "</span>" . "</h1>";

    echo "loves {$food}<br>";

    echo "your email is: {$email}<br>";

    echo "you are {$age} years old<br>";

    echo "there are {$users} users online<br>";

    echo "you would like to buy {$quantity} items<br>";

    echo "your gpa is {$gpa}<br>";

    echo "your pizza is \${$price}<br>";

    echo $employed;

    echo "employed status: {$employed}<br>";

    echo "User is online: {$online}<br>";

    echo "the sales tax rate is: {$tax_rate}%<br>";

    echo "You have ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo "your total: \${$total}";
?>
