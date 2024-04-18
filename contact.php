<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EasyFix - Contact Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Links -->
<?php include 'assets/sections/links.sec.php';?>

</head>
<body>
  <!-- Preloader of the page -->
  <!-- <div id="preloader">
    <div class="line"></div>
  </div> -->
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

        <h1 class="brand">Contact <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span></h1>
        <h2>Get in touch regarding <span class="typed"
            data-typed-items="new work, current work, more information, , "></span></h2>
        <div class="actions">
          <a href="tel:+44 7397 879010" class="btn btn-info py-md-4 py-3 px-md-5 px-4">
            <i class="bi bi-telephone-outbound"></i>  CALL NOW  <i class="bi bi-telephone-outbound"></i></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="s-hero">
    <div class="hero-container">
      <!-- contact form -->
	<section id="contact" class="contact py-4">
      <div class="container">

         <!-- Info items -->
        <div class="row gy-4 d-flex justify-content-center">

          <div class="col-lg-4">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>Gloucestershire, United Kingdom</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3">
            <a href="mailto:info@easyfixpm.co.uk">
            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>info@easyfixpm.co.uk</p>
              </div>
            </div>
            </a>
          </div><!-- End Info Item -->

          <div class="col-lg-2">
            <a href="tel:+44 7397 879010">
            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>07397 879010</p>
              </div>
            </div>
            </a>
          </div><!-- End Info Item -->

        </div>
        <!-- Contact form -->
        <div class="row justify-content-center mt-4">
          <div class="col-lg-9">
            <form action="assets/includes/contact.inc.php" method="post" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                 <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="<?php if (isset($_GET['name'])) {echo $_GET['name'];} ?>" required="required">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                 <input type="phone" class="form-control" name="phno" id="phone" placeholder="Telephone"value="<?php if (isset($_GET['phno'])) {echo $_GET['phno'];} ?>" required="required">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php if (isset($_GET['email'])) {echo $_GET['email'];} ?>" required="required">
              </div>
              <div class="form-group mt-3">
                 <textarea  class="form-control" name="description" id="description" placeholder="Message" rows="6" value="<?php if (isset($_GET['description'])) {echo $_GET['description'];} ?>" required="required"></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="contact-submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </section>
    <!-- End Contact Section -->
    </div>
  </section>
  <!-- End Hero -->
  
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
  </div>
</div>



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