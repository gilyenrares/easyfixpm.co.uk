<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EasyFix - Projects</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Links -->
<?php include 'assets/sections/links.sec.php';?>

</head>
<body>
  <!-- Preloader of the page -->
  <div id="preloader">
    <div class="line"></div>
  </div>
<!-- Info Banner -->
<?php include 'assets/sections/info-banner.sec.php';?>

<!-- Navigation -->
<?php include 'assets/sections/navigation.sec.php';?>

<!-- Main body -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="m-hero">
    <div class="hero-container">
      <div data-aos="fade-in">
        <!-- <div class="hero-logo">
          <img class="" src="assets/img/logo.png" alt="EasyFix Logo">
        </div> -->

        <h1 class="brand">Our projects <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span></h1>
        <h2>We are a <span class="typed"
            data-typed-items="Motivated, Experienced, Professional, Fair, Family, "></span>company</h2>
        <div class="actions">
          <a href="projects.php" class="btn btn-outline-danger">Our Projects</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

<!-- ======= Projects Section ======= -->
<?php if (isset($_GET['page'])) {
  $page = $_GET['page'];
  if ($page==1){
    include "assets/sections/projects-1to5.sec.php";
  }elseif($page==2){
    include "assets/sections/projects-6to10.sec.php";
  }elseif($page==3){
    include "assets/sections/projects-11to15.sec.php";
  }elseif($page==4){
    include "assets/sections/projects-16to20.sec.php";
  }else {
  include "assets/sections/projects-1to5.sec.php";
}
} else {
  include "assets/sections/projects-1to5.sec.php";
}?>
<!-- ======= End Projects Section ======= -->

<!-- Footer -->
<?php include "assets/sections/footer.sec.php" ?>
<!-- Back to top of the page -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>
  


  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>