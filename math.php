<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x"><br>
        <label for="">y:</label>
        <input type="text" name="y"><br>
        <label for="">z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>
</html>


<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    //absolute value function - abs();
    // $total = abs($x);

    //round function - round();
    // $total = round($x);

    //floor (always round down) function floor();
    // $total = floor($x);

    //ceiling function (always round up)
    // $total = ceil($x);

    //pow function - pow();
    // $total = pow($x, $y);

    // echo "
    // x: {$x} <br> 
    // y: {$y} <br> 
    // x^y: {$total}";

    //square root function - sqrt()
    // $total = sqrt($x);
    // echo "<br> the the square root of x is: {$total}";

    //max function - max()
    // $total = max($x, $y, $z);
    // echo "the max is: {$total}";

    //min function - min()
    // $total = min($x, $y, $z);
    // echo "the min is: {$total}";

    //pi function (print pi) - pi()
    // $total = pi();
    // echo $total;

    //random function - rand()
    // echo rand(1, 6);
?>



