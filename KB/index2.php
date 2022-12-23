<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "LilPaimon";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection Failed: ". mysqli_connect_error);
    }else{
        $sql = "INSERT INTO cat(id, nama, harga, gambar, deskripsi)VALUE(4, 'cat3', '20000', 'cat3.jfif', 'fdsjfkds')";
        $result = mysqli_query($conn, $sql);  
    }
    mysqli_close($conn);


?>