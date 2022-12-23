
<?php


if (!isset($_POST['username']) || !isset($_POST['password'])) {
  header( "Location: login.html" );
} 

elseif (empty($_POST['username']) || empty($_POST['password'])) {
  header( "Location: login.html" );
}

else{
  require("db.php");
  if(isset($_POST["username"])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
  
    $query    = "SELECT * FROM profile WHERE username='$username' AND password='$password'";
  
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rowCheck = mysqli_num_rows($result);
  }

  if($rowCheck > 0){
    while($row = mysqli_fetch_array($result)){
      session_start();
      $_SESSION["username"] = $row['username'];
      $_SESSION["status"] = $row['status'];
      header( "Location: welcom.php" );
    }
  } else{
    header( "Location: login.html" );
  }
}


?>
