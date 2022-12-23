<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "LilPaimon";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection Failed: ". mysqli_connect_error());
    }else{
        $sql = "UPDATE profile SET  password = '12345' WHERE username = 'admin'";
        $result = mysqli_query($conn, $sql);
    }

    mysqli_close($conn);
?>