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

<body>

<?php
session_start();

if(isset($_SESSION['username'])){
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

  $username = ($_SESSION['username']);
  $sql = "SELECT * FROM profile WHERE username= '$username' ";
  $result = mysqli_query($conn, $sql);
  $row1 = mysqli_fetch_assoc($result);
} 

else {

  //jika tidak terdaftar, kembalikan user ke login.html
  header( "Location: login.html" );
}


?>


<?php include 'header.php';?>


  <!-- ======= Hero Section ======= -->
  

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
    </section><!-- End Featured Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <span>Product</span>
          <h2>Product</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 align-items-stretch">
            <div class="member">
              <a href="productkanvas.php"><img src="assets/img/Kanvas.jfif" alt=""></a>
              <h4 class="title"><a href="productkanvas.php">Kanvas</a></h4>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6  align-items-stretch">
            <div class="member">
              <a href="productkuas.php"><img src="assets/img/Kuas.jfif" alt=""></a>
              <h4 class="title"><a href="productkuas.php"">Kuas Lukis</a></h4>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6  align-items-stretch">
            <div class="member">
              <a href="productcat.php""><img src="assets/img/Cat.jfif" alt=""></a>
              <h4 class="title"><a href="productcat.php"">Cat Lukis</a></h4>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

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