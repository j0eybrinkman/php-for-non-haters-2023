<?php

    $username = "Joey Brinkman";
    $phone = "402-934-7867";

    // $username = strtolower($username);

    // $username = strtoupper($username);

    // $username = trim($username);

    // $username =  str_pad($username, strlen($username) + 20, "$", STR_PAD_BOTH );
    // echo $username;

    // $phone = str_replace("-", "", $phone);
    // echo $phone;

    // $username = strrev($username);

    // $username = str_shuffle($username);

    // $equals = strcmp($username, "Joey Brinkman");
    // echo $equals;

    // $username_len = strlen($username);
    // echo $username_len;

    // $username_strpos = strpos($username, " ");
    // echo $username_strpos;

    // $firstname = substr($username, 0, 4);
    // echo $firstname;

    // $lastname = substr($username, 5);
    // echo $lastname;

    // $username = "Joseph Andrew Brinkman";
    // $fullname = explode(" ", $username);
    // foreach ($fullname as $name) {
    //     echo $name . "<br>";
    // }

    $username = array("Joseph", "Andrew", "Brinkman");
    echo implode(" ", $username);

?>