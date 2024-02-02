<?php 
    //switch = replacement to using many elseif statements 
    //          more efficient less code to write.

    // USING IF/IFELSE = INEFFICIENT
    // $grade = "LOL";
    // if($grade == "A") {
    //     echo "you did great";
    // }
    // elseif ($grade == "B") {
    //     echo "You did good";
    // }
    // elseif ($grade == "C") {
    //     echo "You did okay";
    // }
    // elseif ($grade == "D") {
    //     echo "You did poorly";
    // }
    // elseif ($grade == "F") {
    //     echo "You failed";
    // }
    // else {
    //     echo "{$grade} is not a valid grade.";
    // }

    // USING SWITCH = MORE EFFICIENT
    // $grade = "LOL";
    // switch($grade) {
    //     case "A":
    //         echo "you did great";
    //         break;
    //     case "B":
    //         echo "You did good";
    //         break;
    //     case "C":
    //         echo "You did okay";
    //         break;
    //     case "D":
    //         echo "You did poorly";
    //         break;
    //     case "F":
    //         echo "You failed";
    //         break;
    //     default:
    //         echo "{$grade} is not a valid grade.";
    //         break;
    // }

    // $date = date("l");
    $date = 'lol';



    // $date = "Thursday";
    
    switch($date){
        case "Sunday":
            echo "Its the Lords day!";
            break;
        case "Monday":
            echo "Garfield hates mondays";
            break;
        case "Tuesday":
            echo "It's taco tuesday";
            break;
        case "Wednesday":
            echo "It's hump day, whoop whoop!";
            break;
        case "Thursday":
            echo "It's Friday eve!!";
            break;
        case "Friday":
            echo "Friday is finally here!!!!";
            break;
        case "Saturday":
            echo "Saturdays are for the boys!";
            break;
       default:
            echo "{$date} is not valid";
            break;
    }

    echo "<br><br>";

    // $date = date("F jS \of Y");
    // echo $date;

?>