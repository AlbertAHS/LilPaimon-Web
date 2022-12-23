<?php
//mulai session
session_start();

//cek lagi apakah session telah terdaftar untuk username tersebut
if(isset($_SESSION['status'])){

//dan jika terdaftar
if($_SESSION['status'] == 'admin'){
    header("Location: untukadmin.php");
} 
else {
    header("Location: land.php");
}

}
else{

//jika tidak terdaftar, kembalikan user ke login.html
header( "Location: login.html" );
}
?>