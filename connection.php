<?php

    // Development Connection 
    // $server = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "bank_system";

    // Remote Database Connection 
    $server = "remotemysql.com";
    $username = "aEiagWP8Ko";
    $password = "B5eWzScfMt";
    $dbname = "aEiagWP8Ko";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection to this database failed due to" . mysqli_connect_error());
    }
?>