
<?php
if(isset($_get['id'])){
    mysqli_query($conn, "DELETE FROM cat WHERE id='$_get[id]'");
    header("loaction :cat.php");
}
?>