<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "astanga";

    $connect = mysqli_connect($server, $username, $password);

    if($connect){
        $dbconn = mysqli_select_db($connect, $dbname);
    }
    else{
        die("Database connection failed!");
    }
?>