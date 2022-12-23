<?php 

//mulai session
session_start();

//cek lagi apakah session telah terdaftar untuk username tersebut
if(isset($_SESSION['status'])){

//dan jika terdaftar
if($_SESSION['status'] == 'admin'){
} 
else {
    header("Location: land.php");
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

if (isset($_GET['idArtikel'])){
    $id = $_GET['idArtikel'];
}

  if (isset($_POST['save'])){
    $query = "UPDATE artikel SET 
    url = '$_POST[inputurl]',
    judul = '$_POST[inputjudul]',
    pengantar = '$_POST[inputpengantar]'
    WHERE idArtikel = '$_GET[idArtikel]'
    ";
    mysqli_query($conn, $query);
    header('Location: artikel.php');
  }
  ?>