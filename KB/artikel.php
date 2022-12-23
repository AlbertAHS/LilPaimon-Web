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

$sql = "SELECT * FROM artikel";
$result = mysqli_query($conn, $sql);
?>

<body>
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between ">

      <h1 class="logo"><a href="index.html" class="logo"><img src="assets/img/LogoWebsite.png" alt="" class="img-fluid"></a><a href="index.html">LilPaimon</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><div class="icon">
            <i class="bi bi-telephone-fill">+62</i>
          </div>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#"><button type="button" class="btn btn-danger rounded-pill">Sign In</button></a></li>
              <li><a href="#">View Order</a></li>
              <li><a href="#">List</a></li>
            </ul>
          </li>
          <li><div class="icon">
            <i class="bi bi-cart-fill">Cart</i>
          </div></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <div class="container">
        <div class="row mb-5 pt-4">
            <p>Coba</p>
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
              <?php echo '<a href="'.$row['url'].'">'?> <?php echo '<img src="assets/img/'.$row['gambar'].'"class="img-fluid rounded-start" >' ?> <?php echo '</a>' ?>
            
            </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?php echo '<a href="'.$row['url'].'">'?><?=$row["judul"]; ?><?php echo '</a>' ?></h5>
                  <p class="card-text"><?=$row["pengantar"]; ?></p>
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