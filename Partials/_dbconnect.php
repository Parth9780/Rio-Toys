<?php 
    $server = "localhost";
    $username = "root";
    #passworld = "";
    $database = "users";

    $conn = mysqli_connect($server, $username, $password, $database);
    if ($conn) {
        echo "success";
    }
    else{
        die("Error": mysqli_connecterror())
    }


?>