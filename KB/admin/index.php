<?php
//mulai session
session_start();

//cek lagi apakah session telah terdaftar untuk username tersebut
if(isset($_SESSION['status'])){

//dan jika terdaftar
if($_SESSION['status'] == 'admin'){
} 
else {
    header("Location: http://localhost/pemrogamanweb/KB/login.html");
}

}
else{

//jika tidak terdaftar, kembalikan user ke login.html
header( "Location: http://localhost/pemrogamanweb/KB/login.html" );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - LilPaimon</title>
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




?>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
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
        <a class="nav-link collapsed" href="http://localhost/pemrogamanweb/KB/logout.php">
          <i class="bi bi-dash-circle"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        
          <div class="row">

          <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Produk Terjual</h5>
              <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <?php $sql = mysqli_query($conn, "SELECT * FROM log"); ?>
                    <?php $filter = mysqli_fetch_assoc($sql);?>
                    <?php while ($row = mysqli_fetch_assoc($sql)){ ?>
                    <li><a class="dropdown-item" href="bulan.php?idLog=<?php echo $row['idLog'];?> "><?php echo $row['bulan']; ?></a></li>
                    <?php } ?>
                  </ul>
                </div>

              <!-- Doughnut Chart -->
              <canvas id="produk" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#produk'), {
                    type: 'doughnut',
                    data: {
                      labels: [
                        'Cat',
                        'Kuas',
                        'Kanvas'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        <?php $sql = mysqli_query($conn, "SELECT SUM(cat) FROM `log`"); ?>
                        <?php $cat = mysqli_fetch_assoc($sql); ?>
                        <?php $sql = mysqli_query($conn, "SELECT SUM(kuas) FROM `log`"); ?>
                        <?php $kuas = mysqli_fetch_assoc($sql); ?>
                        <?php $sql = mysqli_query($conn, "SELECT SUM(kanvas) FROM `log`"); ?>
                        <?php $kanvas = mysqli_fetch_assoc($sql);?>
                        data: [<?php echo $cat['SUM(cat)']; ?>, <?php echo $kuas['SUM(kuas)']; ?>, <?php echo $kanvas['SUM(kanvas)']; ?>],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Doughnut CHart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Jumlah Profile</h5>

              <!-- Doughnut Chart -->
              <canvas id="user" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#user'), {
                    type: 'doughnut',
                    data: {
                      labels: [
                        'Admin',
                        'User'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        <?php $sql = mysqli_query($conn, "SELECT COUNT(status) FROM `profile` WHERE status = 'admin'"); ?>
                        <?php $admin = mysqli_fetch_assoc($sql); ?>
                        <?php $sql = mysqli_query($conn, "SELECT COUNT(status) FROM `profile` WHERE status = 'user'"); ?>
                        <?php $user = mysqli_fetch_assoc($sql);?>
                        data: [<?php echo $admin['COUNT(status)']; ?>, <?php echo $user['COUNT(status)']; ?>],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)'
                          
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Doughnut CHart -->

            </div>
          </div>
        </div>

            

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Log Penjualan</h5>

              <!-- Column Chart -->
              <div id="columnChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#columnChart"), {
                    series: [{
                      name: 'Cat',
                      <?php $sql = mysqli_query($conn, "SELECT cat FROM log WHERE idLog = 1")?>
                      <?php $cat = mysqli_fetch_assoc($sql) ?>
                      data: [<?php echo $cat['cat'] ?> 
                              <?php $sql = mysqli_query($conn, "SELECT cat FROM log WHERE idLog > 1") ?>
                              <?php while ($row = mysqli_fetch_assoc($sql)) {
                                echo ", " . $row['cat'];
                              } ?>
                            ]
                    }, {
                      name: 'Kuas',
                      <?php $sql = mysqli_query($conn, "SELECT kuas FROM log WHERE idLog = 1")?>
                      <?php $kuas = mysqli_fetch_assoc($sql) ?>
                      data: [<?php echo $kuas['kuas'] ?> 
                              <?php $sql = mysqli_query($conn, "SELECT kuas FROM log WHERE idLog > 1") ?>
                              <?php while ($row = mysqli_fetch_assoc($sql)) {
                                echo ", " . $row['kuas'];
                              } ?>
                            ]
                    }, {
                      name: 'Kanvas',
                      <?php $sql = mysqli_query($conn, "SELECT kanvas FROM log WHERE idLog = 1")?>
                      <?php $kanvas = mysqli_fetch_assoc($sql) ?>
                      data: [<?php echo $kanvas['kanvas'] ?> 
                              <?php $sql = mysqli_query($conn, "SELECT kanvas FROM log WHERE idLog > 1") ?>
                              <?php while ($row = mysqli_fetch_assoc($sql)) {
                                echo ", " . $row['kanvas'];
                              } ?>
                            ]
                    }],
                    chart: {
                      type: 'bar',
                      height: 350
                    },
                    plotOptions: {
                      bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                      },
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      show: true,
                      width: 2,
                      colors: ['transparent']
                    },
                    xaxis: {
                      <?php $sql = mysqli_query($conn, "SELECT bulan FROM log WHERE idLog = 1")?>
                      <?php $bulan = mysqli_fetch_assoc($sql) ?>
                      categories: [<?php echo "'" . $bulan['bulan'] . "'" ?> 
                              <?php $sql = mysqli_query($conn, "SELECT bulan FROM log WHERE idLog > 1") ?>
                              <?php while ($row = mysqli_fetch_assoc($sql)) {
                                echo ", " . "'" . $row['bulan'] . "'";
                              } ?>
                            ],
                      
                    },
                    yaxis: {
                      title: {
                        text: 'Terjual'
                      }
                    },
                    fill: {
                      opacity: 1
                    },
                    tooltip: {
                      y: {
                        formatter: function(val) {
                          return val + " Barang"
                        }
                      }
                    }
                  }).render();
                });
              </script>
              <!-- End Column Chart -->

              

            </div>
          </div>
        </div>


        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Keuntungan</h5>

              <!-- Line Chart -->
              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Cat',
                      <?php $sql = mysqli_query($conn, "SELECT untungCat FROM log WHERE idLog = 1")?>
                      <?php $cat = mysqli_fetch_assoc($sql) ?>
                      data: [<?php echo $cat['untungCat'] ?> 
                              <?php $sql = mysqli_query($conn, "SELECT untungCat FROM log WHERE idLog > 1") ?>
                              <?php while ($row = mysqli_fetch_assoc($sql)) {
                                echo ", " . $row['untungCat'];
                              } ?>
                            ]
                    }, {
                      name: 'Kuas',
                      <?php $sql = mysqli_query($conn, "SELECT untungKuas FROM log WHERE idLog = 1")?>
                      <?php $kuas = mysqli_fetch_assoc($sql) ?>
                      data: [<?php echo $kuas['untungKuas'] ?> 
                              <?php $sql = mysqli_query($conn, "SELECT untungKuas FROM log WHERE idLog > 1") ?>
                              <?php while ($row = mysqli_fetch_assoc($sql)) {
                                echo ", " . $row['untungKuas'];
                              } ?>
                            ]
                    }, {
                      name: 'Kanvas',
                      <?php $sql = mysqli_query($conn, "SELECT untungKanvas FROM log WHERE idLog = 1")?>
                      <?php $kanvas = mysqli_fetch_assoc($sql) ?>
                      data: [<?php echo $kanvas['untungKanvas'] ?> 
                              <?php $sql = mysqli_query($conn, "SELECT untungKanvas FROM log WHERE idLog > 1") ?>
                              <?php while ($row = mysqli_fetch_assoc($sql)) {
                                echo ", " . $row['untungKanvas'];
                              } ?>
                            ]
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },
                    xaxis: {
                      type: 'month',
                      <?php $sql = mysqli_query($conn, "SELECT bulan FROM log WHERE idLog = 1")?>
                      <?php $bulan = mysqli_fetch_assoc($sql) ?>
                      categories: [<?php echo "'" . $bulan['bulan'] . "'" ?> 
                              <?php $sql = mysqli_query($conn, "SELECT bulan FROM log WHERE idLog > 1") ?>
                              <?php while ($row = mysqli_fetch_assoc($sql)) {
                                echo ", " . "'" . $row['bulan'] . "'";
                              } ?>
                            ]
                    },
                    tooltip: {
                      x: {
                        format: 'mm/yy'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

              

            </div>
          </div>
        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
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