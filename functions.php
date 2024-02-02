<?php

    // function = write some code once, reuse when you need it
                        // type () after function name to invoke
                        // ex. add() subtract() multiply() divide()

    // function happy_birthday($name, $age) {
    //     echo "
    //         Happy birthday to you!<br>
    //         Happy birthday to you!<br>
    //         Happy birthday dear {$name}...<br>
    //         Happy birthday to you!<br>
    //         You are {$age} years old!<br><br>
    //         ";
    // }
    // happy_birthday("joey", 23);

    // function is_even($number)
    // {
    //     if ($number % 2 == 0)
    //     {
    //         return true;
    //     } else
    //     {
    //         return false;
    //     }
    // }
    // echo is_even(7);
    
    function find_hypotenuse(int $a, int $b)
    {
        $c = sqrt(pow($a, 2) + pow($b, 2));
        return $c;
    }

    echo find_hypotenuse("pizza",4);

?>