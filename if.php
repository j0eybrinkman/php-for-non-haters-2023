
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>can you drink yet?</legend>
        <form action="if.php" method="post">
            <label for="">what is your age?:</label><br>
            <input type="number" name="age"><br>
            <input type="submit" value="submit"><br>
        </form>
    </fieldset>
    <!-- <fieldset>
        <legend>are you an adult?</legend>
        <form action="if.php" method="post">
            <label for="">are you an adult?</label><br>
            <select name="select" id="">
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
            <input type="submit" value="submit"><br>
        </form>
    </fieldset> -->
</body>
</html>


<?php
    //if statement = if some condition is true, do something
    //               if some condition is false, don't do it

    $age = $_POST["age"];

    if ($age >= 60) {
        echo "your older than the spirits you sip! yes you can drink!!!";
    } elseif ($age < 0) {  
        echo "that wasn't a valid age";
    } elseif ($age == 0) {
        echo "you were just born!";
    } elseif ($age >= 21) {
        echo "you can drink alcohol";
    } else {
        $years_until_21 = 21 - $age;
        echo "you cannot drink for {$years_until_21} more years.";
    }

    // $adult = $_POST["select"];

    // if($adult) {
    //     echo 'you are an adult';
    // } else {
    //     echo 'you are not an adult';
    // }
?>
