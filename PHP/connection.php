<?php
    $localhost = "localhost";
    $user = "root";
    $password = "";
    $dbname = "futchampion";

    $link = mysqli_connect($localhost, $user, $password, $dbname);

    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>