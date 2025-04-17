<?php

    $servername="localhost";
    $username= "root";
    $password= "";
    $dbname = "register_hotel";
    // create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("". mysqli_connect_error());
    }
