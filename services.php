<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EasyFix - Services</title>
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
        <h1 class="brand">Our <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> services</h1>
        <h2>We provide <span class="typed"
            data-typed-items=" Patio, Stairs, Fencing, Parking Spaces, Panelling, Handyman, Painting, Shelving, "></span>services</h2>
        <div class="actions">
          <a href="projects.php" class="btn btn-outline-danger">Our Projects</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->


 <div class="container py-5 text-center">
  <div class="row d-flex align-items-center justify-content-md-center">
    <a href=" " class="col d-inline-block m-1 s-item rounded shadow-lg" data-bs-toggle="collapse" data-bs-target="#c1" aria-expanded="true" aria-controls="c1"><i class="fi fi-sr-paint-roller"></i></br>Decorating</a>
    <a href="#" class="col d-inline-block m-1 s-item rounded shadow-lg" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="true" aria-controls="c2"><i class="fi fi-sr-build"></i></br>Repairs</a>
    <a href="#" class="col d-inline-block m-1 s-item rounded shadow-lg" data-bs-toggle="collapse" data-bs-target="#c3" aria-expanded="true" aria-controls="c3"><i class="fi fi-sr-tools"></i></br>Handyman</a>
    <a href="#" class="col d-inline-block m-1 s-item rounded shadow-lg" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="true" aria-controls="c4"><i class="fi fi-sr-fence"></i></br>Fencing</a>
    <a href="#" class="col d-inline-block m-1 s-item rounded shadow-lg" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="true" aria-controls="c5"><i class="fi fi-sr-floor"></i></br>Patio</a>    
    <a href="#" class="col d-inline-block m-1 s-item rounded shadow-lg" data-bs-toggle="collapse" data-bs-target="#c6" aria-expanded="true" aria-controls="c6"><i class="fi fi-sr-flower-daffodil"></i></br>Gardening</a>
  </div>
</div>

<div class="accordion " id="serv-acc">
  <div class="accordion-item ">
    <div id="c1" class="accordion-collapse collapse show" data-bs-parent="#serv-acc">
      <div class="accordion-body">
        <!-- Decorating Carousel -->
        <?php include "assets/sections/carousel-deco.sec.php" ?>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div id="c2" class="accordion-collapse collapse" data-bs-parent="#serv-acc">
      <div class="accordion-body">
        <!-- Repairs Carousel -->
			<?php include "assets/sections/carousel-rep.sec.php" ?>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <div id="c3" class="accordion-collapse collapse" data-bs-parent="#serv-acc">
      <div class="accordion-body">
        <!-- Handyman Carousel -->
        <?php include "assets/sections/carousel-hm.sec.php" ?>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <div id="c4" class="accordion-collapse collapse" data-bs-parent="#serv-acc">
      <div class="accordion-body">
        <!-- Fencing Carousel -->
        <?php include "assets/sections/carousel-f.sec.php" ?>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <div id="c5" class="accordion-collapse collapse" data-bs-parent="#serv-acc">
      <div class="accordion-body">
        <!-- Driveways & Patios Carousel -->
        <?php include "assets/sections/carousel-dp.sec.php" ?>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <div id="c6" class="accordion-collapse collapse" data-bs-parent="#serv-acc">
      <div class="accordion-body">
        <!-- Gardening Carousel -->
        <?php include "assets/sections/carousel-g.sec.php" ?>  
      </div>
    </div>
  </div>
</div>

<!-- Company banner -->
<?php include "assets/sections/banner-company.sec.php" ?>


<div class="container py-5 text-center">
  <div class="row d-flex align-items-center justify-content-md-center">
    <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
       <h2 class="brand">We are <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span>property maintenance</h2>
       <p>We can help you whether you’re a homeowner, developer, landlord or a business with anything from a full refurbishment to replacing a socket – and everything in between!</p>
    </div>
    <div id="cover" class="col-12 col-md-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    </div>
    <div  id="decorating"></div> 
  </div>
</div>



<!-- Operation area -->
<?php include "assets/sections/banner-area.sec.php" ?>

<!-- Other Services Carousel -->
<?php include "assets/sections/carousel-os.sec.php" ?>

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