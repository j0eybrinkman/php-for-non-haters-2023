<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="isset_and_empty.php" method="post">
        <label for="">Enter your username: </label>
        <input type="text" name="username">
        <br><br>
        <label for="">Enter your password: </label>
        <input type="password" name="password">
        <br>
        <input type="submit" name="login" value="login" style="margin-left: 400px; padding: 20px 10px; position: absolute; top: 10px; ">
        <br><br>
    </form>
</body>
</html>


<?php

    // isset() = Returns TRUE if a variable is declared and not null 
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    // $username = "joey";

    // echo isset($username);

    // if(empty($user))
    // {
    //     echo "<p style='color:red;padding-left: 100px;'>you must enter a username!</p>";
    // }
    // else 
    // {
    //     echo "<p style='color:blue; padding-left: 100px;'> {$user} </p>";
    // }
    // if (empty($username))
    // {
    //     echo "this var is empty";
    // }
    // else if(isset($username))
    // {
    //     echo "this var is set";
    // }
    // else
    // {
    //     echo "this var is not set";
    // }

    // $username = $_POST["username"];
    // $password = $_POST["password"];

    // if (empty($username) || empty($password))
    // {
    //     echo "Username or password cannot be empty.";
    // }
    

    
    foreach($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
    

    /*
    if(isset($_POST["login"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username))
        {
            echo "username is missing";
        }
        elseif(empty($password))
        {
            echo "password is missing";
        }
        else
        {
            echo "hello {$username}!";
        }
    } */
?>