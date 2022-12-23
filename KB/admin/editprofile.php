
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



<body>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href= "profile.php">Profile</a></li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div id="section" class="produk">
    <div class="container">
        <div class="row justify-content-center">
          <form action="ubahprofile.php?uid=<?php echo $row['uid']; ?>" method="post" class="row g-3 needs-validation" novalidate>
          <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $row["email"]; ?>">
                  <p class="card-text"><label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name= "nama" value="<?php echo $row["nama"]; ?>"></p>
                  <p class="card-text"><label for="username" class="form-label" >Username</label>
                  <input type="text" class="form-control" id="username" name= "username" value="<?php echo $row["username"]; ?>"></p>
                  <p class="card-text"><label for="password" class="form-label" >Password</label>
                  <input type="text" class="form-control" id="password" name= "password" value="<?php echo $row["password"]; ?>"></p>
                  <p class="card-text"><label for="alamat" class="form-label" >Alamat</label>
                  <input type="text" class="form-control" id="alamat" name= "username" value="<?php echo $row["username"]; ?>"></p>
                  <p class="card-text"><label for="telp" class="form-label" >No. Telp</label>
                  <input type="text" class="form-control" id="telp" name= "telp" value="<?php echo $row["telp"]; ?>"></p>

                  <button type="submit" class="btn btn-success rounded-pill" name= "save">Save</button>
                  <a href= "cat.php"><button type="button" class="btn btn-danger rounded-pill">Cancel</button></a>
                </div>
              </div>
            </form>
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