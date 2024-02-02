<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="foods[]" value="pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="hot_wings">Hot Wings<br>
        <input type="checkbox" name="foods[]" value="hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]" value="steak">Steak<br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"]))
    {
        //example using same 'name' value for all checkboxes
        $foods = $_POST["foods"];

        foreach($foods as $food)
        {
            switch($food)
            {
                case "pizza":
                    echo "You like Pizza!<br>";
                    break;
                case "hot_wings":
                    echo "You like Hot Wings!<br>";
                    break;
                case "hamburger":
                    echo "You like Hamburger!<br>";
                    break;
                case "steak":
                    echo "You like Steak!<br>";
                    break;
            }
        }

        if (empty($foods))
        {
            echo "really??? you don't like any of these foods?";
        }

        // example for when checkboxs have different 'name' values
        // if(isset($_POST["pizza"]))
        // {
        //     echo "you like pizza!<br>";
        // }
        // if(isset($_POST["hot_wings"]))
        // {
        //     echo "you like hot_wings!<br>";
        // }
        // if(isset($_POST["hamburger"]))
        // {
        //     echo "you like hamburger!<br>";
        // }
        // if(isset($_POST["steak"]))
        // {
        //     echo "you like steak!<br>";
        // }
        // if(empty($_POST["pizza"]))
        // {
        //     echo "you don't like pizza!<br>";
        // }
        // if(empty($_POST["hot_wings"]))
        // {
        //     echo "you don't like hot_wings!<br>";
        // }
        // if(empty($_POST["hamburger"]))
        // {
        //     echo "you don't like hamburger!<br>";
        // }
        // if(empty($_POST["steak"]))
        // {
        //     echo "you don't like steak!<br>";
        // }
    }

?>