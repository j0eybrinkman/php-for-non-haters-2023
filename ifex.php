<?php
    $hours= 0;
    $rate = 15;
    $weekly_pay;

    // $valid = true;
    // if ($hours < 0) {
    //     echo "invalid value, hours must be greater than zero.";
    //     $valid = false;
    // } else if ($hours <= 40) {
    //     $weekly_pay = $hours * $rate;
    // } else {
    //     $weekly_pay = $rate * 40 + (($hours-40) * ($rate * 1.5));
    // }

    // if ($valid) {
    //     echo "<br><br>
    //     you made \${$weekly_pay} this week!
    //     ";
    // }
    
    if ($hours <= 0) {
        $weekly_pay = 0;
    } else if ($hours <= 40) {
        $weekly_pay = $hours * $rate;
    } else {
        $weekly_pay = $rate * 40 + (($hours-40) * ($rate * 1.5));
    }

    echo "<br><br>
    you made \${$weekly_pay} this week!
    ";

?>