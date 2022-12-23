<?php
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
?>


<!DOCTYPE html>
<html lang="en">

<?php
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

  $sql = "SELECT * FROM kuas";
  $result = mysqli_query($conn, $sql);
  ?>

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<body>

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/LogoWebsite.png" alt="" width="32">
                  <span class="d-none d-lg-block">LilPaimon</span>
                </a>
              </div><!-- End Logo -->

<table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
            <th scope="col">Deskripsi</th>
          </tr>
        </thead>
        <tbody>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { ?>

        
          <tr>
            <th scope="row"><?php echo $row['id'] ?></th>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td><?php echo $row['gambar']; ?></td>
            <td><?php echo $row['deskripsi']; ?></td>
          </tr>
          <?php 
            }
        }
        ?>
        </tbody>
      </table>

      <script>
		window.print();
	  </script>

      
</body>
      </html>

