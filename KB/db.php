<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "LilPaimon";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $database);

    if(mysqli_connect_error()){
        echo "Failed to connect!";
    }
?>
