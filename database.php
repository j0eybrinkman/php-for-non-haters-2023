<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "*ptv[[M6U9wrg(<%Wpbt";
    $db_name = "businessdb";

    try
    {
        $conn = mysqli_connect(
            $db_server,
            $db_user,
            $db_pass,
            $db_name
        );
    }
    catch(mysqli_sql_exception $e)
    {
        echo "Could not connect!<br><br>" . $e->getMessage();
    }

    // if($conn)
    // {
    //     echo "connected!";
    // }
?>