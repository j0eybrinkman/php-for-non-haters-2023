


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="sanatize_validate.php" method="post">
        <label for="">username</label>
        <input type="text" name="username"><br>
        <label for="">age</label>
        <input type="text" name="age"><br>
        <label for="">email</label>
        <input type="text" name="email">
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>



<?php

    if(isset($_POST["login"]))
    {
        

        // $username = $_POST["username"];
        // echo "Hello joey";

        // echo "Hello {$username}";
        // Hello <script> alert("You have a VIRUS!"); </script>

        $username = filter_input(
            INPUT_POST, 
            "username",
            FILTER_SANITIZE_SPECIAL_CHARS   
        );

        if(empty($username))
        {
            echo "That username isn't valid<br>";
        }
        else {
            echo "Your username is: {$username}<br>";
        }

        $age = filter_input(
            INPUT_POST, 
            "age", 
            FILTER_SANITIZE_NUMBER_INT
        );

        if(empty($age))
        {
            echo "That age isn't valid<br>";
        }
        else {
            echo "Your age is: {$age}<br>";
        }


        $email = filter_input(
            INPUT_POST,
            "email",
            FILTER_SANITIZE_EMAIL
        );

        if(empty($email))
        {
            echo "That email wasn't valid<br>";
        }
        else {
            echo "Your email is: {$email}<br>";
        }

        // echo "Hello {$username}. <br> You are {$age} years old. <br> Your email is {$email}";
    }


?>