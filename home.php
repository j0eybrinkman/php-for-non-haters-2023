<?php
    session_start();
    include("header.html");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the Home page<br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
    <?php
        if(isset($_POST["logout"]))
        {
            session_destroy();
            header("Location: home.php");
        }
    ?>
</body>
</html>
<?php
    include("footer.html");
?>