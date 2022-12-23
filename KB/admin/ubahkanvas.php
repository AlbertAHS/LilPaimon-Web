<?php

//mulai session
session_start();

//cek lagi apakah session telah terdaftar untuk username tersebut
if(isset($_SESSION['status'])){

//dan jika terdaftar
if($_SESSION['status'] == 'admin'){
} 
else {
    header("Location: http://localhost/pemrogamanweb/KB/land.php");
}

}
else{

//jika tidak terdaftar, kembalikan user ke login.html
header( "Location: http://localhost/pemrogamanweb/KB/login.html" );
}

$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "LilPaimon";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['save'])){
    $sql = "UPDATE kanvas SET 
    nama = '$_POST[nama]',
    harga = '$_POST[harga]',
    gambar = '$_POST[gambar]',
    deskripsi = '$_POST[deskripsi]'
    WHERE id = '$_GET[id]' ";
    mysqli_query($conn, $sql);
    header("Location: kanvas.php");
  }
  ?>