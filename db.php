<?php

    $username="root";
    $password="";
    $database="clarity";
    $con=mysqli_connect("localhost",$username,$password,$database);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } 
    mysqli_set_charset($con, "utf8");

?>