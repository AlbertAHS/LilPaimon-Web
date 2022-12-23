<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LilPaimon</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v4.9.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php
session_start();
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

$username = ($_SESSION['username']);
$sql = "SELECT * FROM profile WHERE username='" . $username . "'";
$result1 = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_assoc($result1);
?>

<body>
  

<?php include 'header.php';?>

    <div class="container">
        <div class="row mb-5 pt-4">
            
        </div>
    </div>  

  <div id="section" class="produk">
    <div class="container">
        <div class="row justify-content-center">

        <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { ?>

            <!-- Card with an image on left -->
          <div class="card mb-4">
            <div class="row g-0">
              <div class="col-md-4">
              <a href="detailproductkuas.php?id=<?php echo $row["id"];?>"><?php echo '<img src="assets/img/'.$row['gambar'].'"class="img-fluid rounded-start" >' ?> </a>
            
            </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><a href="detailproductkuas.php?id=<?php echo $row['id'];?>"><?=$row['nama']; ?></a> </h5>
                  <p class="card-text"><?=$row["harga"]; ?></p>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->

        <?php } 
        } ?>
        </div>
    </div>
  </div>
  

    <!-- <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>eNno</span></strong>. All Rights Reserved
      </div>
      <div class="credits">-->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
        <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      <!--</div> -->
    <!--</div> -->
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>