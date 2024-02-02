<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="getandpost.php" method="get">
        <label for="">quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</head>
<body>
    
</body>
</html>
</body>
</html>
<?php
    // $_GET, $_POST = special variables used to collect data from an HTML form. Data is sent to the file in the action attribute of <form>. <form action ="some_file.php" method="get">

    // $_GET = Data is appended to the url
    //         NOT SECURE
    //         char limit
    //         Bookmark is possible w/ values
    //         GET requests can be cached
    //         Better for a search page

    // $_POST = Data is packaged inside the body of the HTTP request
    //          MORE SECURE
    //          No data limit
    //          Cannot bookmark
    //          GET requests are not cached
    //          Better for submitting credentials


    // $username = $_POST["username"];
    // $password = $_POST["password"];
    // $br = str_repeat("<br>", 2);
    // echo $br;
    // echo $username;
    // echo $br;
    // echo $password;
    // echo $br;
    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>";

    // -------------------------------------

    $item = "pizza";
    $price = 5.99;
    $quantity = $_GET["quantity"];

    echo "<br>you have ordered {$quantity} x {$item}s. <br><br>";
    $total = $quantity * $price;
    echo "your total is \${$total}";

?>