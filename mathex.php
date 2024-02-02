<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>math exercise</title>
</head>
<body>
    <fieldset>
        <legend>calculate the circumference of a circle</legend>
        <form action="mathex.php" method="post">
            <label for="">radius (in cm): </label>
            <input type="text" name="radius"><br>
            <input type="submit" value="calculate"><br>
        </form>
    </fieldset>
</body>
</html>

<?php 

    $brx2 = str_repeat("<br>", 2);

    $pi = pi();

    $radius = $_POST["radius"];
    
    $circumference = 2 * $pi * $radius;
    $circumference = round($circumference, 2);


    $area = $pi * $radius ** 2;
    $area = round($area, 2);


    $volume = 4/3 * $pi * pow($radius, 3);
    $volume = round($volume, 2);


    echo "<br>
    Circle's radius: {$radius}cm{$brx2}
    Circle's circumference: {$circumference}cm{$brx2}
    Circle's area: {$area}cm^2{$brx2}
    Sphere's volume: {$volume}cm^3{$brx2}

    ";
    
?>