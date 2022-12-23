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

  if (isset($_POST['add'])){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];
    $gambar = $_POST["gambar"];
    $sql = "INSERT into profile (nama, email, username, password, alamat, gambar, telp)
    VALUES ('$nama', '" . $email . "', '" . $username . "', '" . $password . "', '" . $alamat . "', '" . $gambar . "', '$telp')";
    mysqli_query($conn, $sql);
    header("Location: profile.php");
  }
  ?>