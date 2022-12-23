
<?php

//mulai session
session_start();

//cek lagi apakah session telah terdaftar untuk username tersebut
if(isset($_SESSION['username'])){

//dan jika terdaftar
if($_SESSION['username'] == 'admin'){
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
  
  if (isset($_GET['uid'])){
    $uid = $_GET['uid'];
}
  
  $sql = "SELECT * FROM profile WHERE uid='" . $uid . "'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

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



<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="assets/img/LogoWebsite.png" alt="">
    <span class="d-none d-lg-block">LilPaimon</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item dropdown pe-3"> 

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">admin</span>
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
    <a class="nav-link " href="editprofileadmin.php">
      <i class="bi bi-grid"></i>
      <span>Change Password</span>
    </a>
  </li><!-- End Dashboard Nav -->
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="http://localhost/pemrogamanweb/KB/logout.php">
      <i class="bi bi-dash-circle"></i>
      <span>Log Out</span>
    </a>
  </li><!-- End Error 404 Page Nav -->

</ul>

</aside><!-- End Sidebar-->

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">


                  <form action="ubahprofileadmin.php?uid=<?php echo $row['uid']; ?>" method="post" class="row g-3 needs-validation" novalidate>


                    <div class="col-12">
                      <h6>email</h6>
                      <p><input type="text" name="email" value="<?php echo $row['email']; ?>"></p>
                    </div>

                    <div class="col-12">
                      <h6>nama</h6>
                      <p><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></p>
                    </div>

                    <div class="col-12">
                      <h6>username</h6>
                      <p><input type="text" name="username" value="<?php echo $row['username']; ?>"></p>
                    </div>

                    <div class="col-12">
                      <h6>password</h6>
                      <p><input type="text" name="password" value="<?php echo $row['password']; ?>"></p>
                    </div>

                    <div class="col-12">
                      <h6>gambar</h6>
                      <p><input type="text" name="gambar" value="<?php echo $row['gambar']; ?>"></p>
                    </div>

                    <div class="col-12">
                      <h6>alamat</h6>
                      <p><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></p>
                    </div>

                    <div class="col-12">
                      <h6>telp</h6>
                      <p><input type="text" name="telp" value="<?php echo $row['telp']; ?>"></p>
                    </div>


                    <div class="col-6">
                    <button type="submit" name="edit" class="btn btn-primary w-100" >Edit</button>
                    </div>

                  </form>

                </div>
              </div>

              
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  

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