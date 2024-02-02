<?php
    include("database.php");

    // $username = "";
    // $password = "";
    // $hash = password_hash($password, PASSWORD_DEFAULT);


    // $sql = "insert into users (user, password) values ('felicity', '99')";
    // $insert_sql = "insert into users (user, password) values ('$username', '$hash')";
    // $get_sql = "select * from users";


    // start of 'how to insert and query php database' example
    // if($_SERVER["REQUEST_METHOD"] == "POST")
    // {      
    //     if(isset($_POST['insert']))
    //     {
    //         try 
    //         {
    //             mysqli_query($conn, $insert_sql);
    //             echo "user is now registered.";
    //         }
    //         catch(mysqli_sql_exception $e)
    //         {
    //             echo "Could not register user because:<br>" . $e->getMessage();
    //         }
    //     }
    //     else if(isset($_POST['get']))
    //     {
    //         try 
    //         {
    //             $result = mysqli_query($conn, $get_sql);
    //             if(mysqli_num_rows($result) > 0)
    //             {
    //                 while($row = mysqli_fetch_assoc($result))
    //                 {
    //                     echo $row["id"] . "<br>";
    //                     echo $row["user"] . "<br>";
    //                     echo $row["password"] . "<br>";
    //                     echo $row["register_date"] . "<br>";
    //                 }
    //             }
    //             else 
    //             {
    //                 echo "No user found";
    //             }
    //         }
    //         catch(mysqli_sql_exception $e)
    //         {
    //             echo $output . $e->getMessage();
    //         }
    //     }
    // }
    // end of 'how to insert and query php database' example

    // start of 'registration form' example
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username) && empty($password))
        {
            echo "please enter a username and password";
        }
        else if(empty($username))
        {
            echo "please enter a username";
        }
        else if(empty($password))
        {
            echo "please enter a password";
        }
        else
        {
            try
            {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "insert into users (user, password) values ('$username', '$hash')";
                mysqli_query($conn, $sql);
                echo "you are now registered";
            }
            catch(mysqli_sql_exception $e)
            {
                echo "Could not register user because:<br>" . $e->getMessage();
            }
        }
    }


    mysqli_close($conn);
?>

<!-- // start of html for 'how to insert and query php database' example -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="submit" name="insert" value="insert">
        <input type="submit" name="get" value="get">
    </form>
</body>
</html> -->
<!-- // end of html for 'how to insert and query php database' example -->

<!-- // start of html for 'registration form' example -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            <h2>Welcome to Fakebook!</h2>
        </legend>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method ="post">
        <label for="">username:</label><br>
        <input type="text" name="username"><br><br>
        <label for="">password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="register" value="register">
        </form>
    </fieldset>
    
</body>
</html>


