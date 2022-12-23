<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LilPaimon Profile</title>
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
session_start();
if(!isset($_SESSION['username'])){
  header( "Location: login.html" );
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

$username = ($_SESSION['username']);
$sql = "SELECT * FROM profile WHERE username='" . $username . "'";
$result = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_assoc($result);

?>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a href="land.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/LogoWebsite.png" alt="" width="32">
                  <span class="d-none d-lg-block">LilPaimon</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">


                  <form class="row g-3 needs-validation" novalidate>
                    
                    <div class="col-12">
                      <?php echo '<img src="assets/img/'.$row1['gambar'].'"class="img-fluid rounded-start" >' ?>
                    </div>
                    

                    <div class="col-12">
                      <h6>Nama : <?php echo $row1['nama']; ?></h6>
                    </div>

                    <div class="col-12">
                      <h6>Username : <?php echo $row1['username']; ?></h6>
                    </div>

                    <div class="col-12">
                      <h6>Email : <?php echo $row1['email']; ?></h6>
                    </div>

                    <div class="col-12">
                      <h6>Alamat : <?php echo $row1['alamat']; ?></h6>
                    </div>

                    <div class="col-12">
                      <h6>No Telp : <?php echo $row1['telp']; ?></h6>
                    </div>

                    <div class="col-6">
                    <a href="editprofile.php?uid=<?php echo $row1["uid"];?>"><button type="button" class="btn btn-primary w-100" >Edit</button></a>
                    </div>

                    <div class="col-6">
                    <a href="editprofile.php?uid=<?php echo $row1["uid"];?>"><button type="button" class="btn btn-primary w-100" >Delete</button></a>
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