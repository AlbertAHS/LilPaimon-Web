<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LilPaimon Artikel Add</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

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

if (isset($_POST['save'])) {
    $urlartikel = $_POST["inputurl"];
    $judulartikel = $_POST["inputjudul"];
    $pengantar = $_POST["inputpengantar"];

    $query    = "INSERT into artikel (judul, url, pengantar)
    VALUES ('$judulartikel', '" . $urlartikel. "', '$pengantar')";
    
    $result = mysqli_query($conn, $query);

    if($result) header("Location: artikel.php");
  }
?>

<body>
  

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="artikel.php">
          <i class="bi bi-grid"></i>
          <span>Artikel</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " href="profile.php">
          <i class="bi bi-grid"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Produk</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="cat.php">
              <i class="bi bi-circle"></i><span>Cat</span>
            </a>
          </li>
          <li>
            <a href="kuas.php">
              <i class="bi bi-circle"></i><span>Kuas</span>
            </a>
          </li>
          <li>
            <a href="kanvas.php">
              <i class="bi bi-circle"></i><span>Kanvas</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      

      <li class="nav-item">
        <a class="nav-link collapsed" href="http://localhost/KB/logout.php">
          <i class="bi bi-dash-circle"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Artikel</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href= "artikel.php">Artikel</a></li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row mb-5 pt-4">
            <p>Coba</p>
        </div>
    </div>  

  <div id="section" class="produk">
    <div class="container">
        <div class="row justify-content-center">


     <form action="" method= "post">
            <!-- Card with an image on left -->
          <div class="card mb-4">
            <div class="row g-0">
              <div class="col-md-4">
             <input type="submit" value="Upload Image" name="uploadimage">

            </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><label for="inputurl" class="form-label">URL</label>
                  <input type="text" class="form-control" id="inputurl" name="inputurl">
                  <p class="card-text"><label for="inputjudul" class="form-label">Judul Artikel</label>
                  <input type="text" class="form-control" id="inputjudul" name= "inputjudul"></p>
                  <p class="card-text"><label for="inputpengantar" class="form-label" >Pengantar</label>
                  <input type="text" class="form-control" id="inputpengantar" name= "inputpengantar" style="height: 100px;"></p>

                  <button type="submit" class="btn btn-success rounded-pill" name= "save">Save</button>
                  <a href= "artikel.php"><button type="button" class="btn btn-danger rounded-pill">Cancel</button></a>
                </div>
              </div>
            </div>
          </div>
        </form><!-- End Card with an image on left -->

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
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>