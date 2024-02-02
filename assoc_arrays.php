<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="assoc_arrays.php" method="post">
        <label for="">Enter a country</label>
        <input type="text" name="country">
        <input type="submit" value="enter">
    </form>
</body>
</html>

<?php

// associative array = An array made of key=>value pairs

// countries => capitals
// id => username
// item => price

$capitals = array(
                "USA"=>"Washington D.C.", 
                "Japan"=>"Kyoto", 
                "South Korea"=>"Seoul", 
                "India"=>"New Delhi"
            );


// echo "The capitol of the U.S.A is: " . $capitals["USA"];

// $capitals["USA"] = "Las Vegas";
$capitals["China"] = "Beijing";

// array_pop($capitals);
// array_shift($capitals);

// $keys = array_keys($capitals);
// $values = array_values($capitals);

// $capitals = array_flip($capitals);

// $capitals = array_reverse($capitals);


// foreach ($capitals as $key => $value)
// {
//     echo $key . " = " . $value . "<br>";
// }

// echo "<br>";

// foreach ($keys as $key) 
// {
//     echo $key . "<br>";
// }

// echo "<br>";

// foreach ($values as $value)
// {
//     echo "{$value} <br>";
// }

// echo count($capitals);

// ----------------------------------

// $country = $_POST["country"];

// echo "<br><br>" . "The capitol of " . $country . " is " . $capitals[$country];

$capital = $capitals[$_POST["country"]];

// if(empty($capital))
// {
//     echo "<br><br>That country is not in our database.";
// }
// else
// {
//     echo "<br><br>The capitol of " . $_POST["country"] . " is " . $capital;
// }

if(isset($capital))
{
    echo "<br><br>The capitol of " . $_POST["country"] . " is " . $capital;
}
else
{
    echo "<br><br>That country is not in our database.<br><br>";
    foreach ($capitals as $key => $value)
    {
        echo $key . " = " . $value . "<br>";
    }
}

?>



