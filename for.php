<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for.php" method="post">
        <label for="">Enter a number to count down from</label>
        <input type="text" name="counter">
        <input type="submit" value="run">
    </form>
</body>
</html>

<?php
    // for loop = repeat some code a certain # of times
    // there are three optional statements - counter - condition - increment/decrement counter
    // for ($i = 1; $i <= 5; $i++) {
    //     echo "{$i} <br>";
    // }

    // for ($i = 10; $i > 0; $i--) {
    //     echo "{$i} <br>";
    // }

    $counter = $_POST["counter"];

    // count up
    // if ($counter > 0)
    // {
    //     for ($i=0;$i<=$counter;$i++)
    //     {
    //         echo "{$i} <br>";
    //     }
    // }
    // else {
    //     for ($i=0;$i>=$counter;$i--)
    //     {
    //         echo "{$i} <br>";
    //     }
    // }

    //count down
    if ($counter > 0)
    {
        for ($i = $counter; $i >= 0;$i--)
        {
            echo "{$i} <br>";
        }
    }
    else {
        for ($i = $counter; $i <= 0; $i++)
        {
            echo "{$i} <br>";
        }
    }
    

?>
