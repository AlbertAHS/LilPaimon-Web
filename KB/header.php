<!-- ======= Header ======= -->
<?php 
session_start();
if(!isset($_SESSION['username'])){
  header( "Location: login.html" );
}
?>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="land.php" class="logo"><img src="assets/img/LogoWebsite.png" alt="" class="img-fluid"></a><a href="land.php">LilPaimon</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><div class="icon">
          <i class="bi bi-telephone-fill"><?php echo $row1['telp'];?></i>
          </div>
          
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="#">Barangku</a></li>
              <li><a href="logout.php">logout</a></li>
            </ul>
          </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->