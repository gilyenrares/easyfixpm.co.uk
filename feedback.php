<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EasyFix - Feedback</title>
  <meta content="Give your feedback on the work that EasyFix property maintenance completed in your residential or commercial property." name="description">

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
        <h1 class="brand">Give us;<span class="px-2"><b>Easy</b><i>Fix</i></span> your feedback.</h1>
        <h2>Rate our <span class="typed"
            data-typed-items="reliability, timekeeping, workmanship, tidiness, courtesy, "></span>.</h2>
        <div class="actions">
          <a href="projects.php" class="btn btn-outline-danger">Our Projects</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->


 <div class="container py-5 text-center">
  <div class="row d-flex align-items-center justify-content-md-center">
    <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
       <h2 class="brand-dark">We are <span class="px-2"><b>Easy</b><i>Fix</i></span>property maintenance</h2>
       <p>If you’d like a free, no obligation quotation then please complete the following form and we will get back to you as soon as we can (usually within 24 hours). We endeavour to give you a competitive quote over the phone, however, depending on the size of the job, we may need to visit the job location first.</p>
       <p>If you’d prefer to speak with someone straight away, you can call us on <a href="tel:+44 7397 879010" class="text-danger"><i class="bi bi-telephone-outbound"></i> 07397 879010 </a> or visit our <a href="contact.php" class="text-danger"> contact <i class="bi bi-box-arrow-up-right"></i></a> page for more options.</p>
    </div>
    <div class="col-12 col-md-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
      <div class="container py-5">
  <div class="row d-flex align-items-center justify-content-md-center">

<!-- quote form -->
	<form action="assets/includes/quote.inc.php" method="post">
  		<div class="form row">
    		<div class="col-md-3  mb-3">
 		    	<label for="title">Title</label>
      			<input type="text" class="form-control" name="ti" id="title" placeholder="Title" value="<?php if (isset($_GET['ti'])) {echo $_GET['ti'];} ?>" required="required">
    		</div>
    		<div class="col-md-9 mb-3">
      			<label for="name">Your Name:</label>
      			<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php if (isset($_GET['name'])) {echo $_GET['name'];} ?>" required="required">
    		</div>
  		</div>
  		<div class="mb-3">
    		<label for="email">Email Address:</label>
    		<input type="email" class="form-control" name="email" id="email" placeholder="example@abc.com" value="<?php if (isset($_GET['email'])) {echo $_GET['email'];} ?>" required="required">
  		</div>
  		<div class="form row">
    		<div class="col-md-6  mb-3">
      			<label for="phone">Telephone:</label>
      			<input type="phone" class="form-control" name="phno" id="phone" placeholder="Phone Number"value="<?php if (isset($_GET['phno'])) {echo $_GET['phno'];} ?>" required="required">
    		</div>
    		<div class="col-md-4  mb-3">
      			<label for="inputService">Choose Service:</label>
      			<select id="inputService" name="service" class="form-select" required="required" >
        		<option>Painting & decorating</option>
        		<option>Laminated flooring</option>
        		<option>Shelving/ storage</option>
        		<option>Flat pack furniture assembling / dismantling </option>
        		<option>Hanging pictures & mirrors</option>
        		<option>Hanging blinds & curtains</option>
        		<option>Small plumbing work</option>
        		<option>Resealing baths and showers</option>
        		<option>Loft insulation</option>
        		<option>Garden clearance & maintenance</option>
        		<option>Fencing</option>
        		<option>Patio & Driveway</option>
            <option>Gutter cleaning</option>
            <option>Other</option>
      			</select>
    		</div>
    		<div class="col-md-2  mb-3">
      			<label for="postcode">Postcode</label>
      			<input type="text" class="form-control" name="pscd" id="postcode" value="<?php if (isset($_GET['pscd'])) {echo $_GET['pscd'];} ?>" required="required" >
    		</div>
  		</div>
      <div class="mb-3">
        <label for="description">Briefly describe the job</label>
        <textarea  class="form-control" name="description" id="description" rows="6" value="<?php if (isset($_GET['description'])) {echo $_GET['description'];} ?>" required="required"></textarea>
      </div>
      <div class="row d-flex align-items-center justify-content-center">
    		<div class="form-check col-md-5 col-12 mb-3 text-start">
      			<input class="form-check-input" name="agree" type="checkbox" id="check" required="required">
      			<label class="form-check-label" for="check">I Agree to receive a call back from <h3 class="brand-dark"><span class="px-2"><b>Easy</b><i>Fix</i></span></h3></label>
    		</div>
      </div>
      <div class="btn-group btn-group-lg d-flex mt-2" role="group" aria-label="Basic example">
        <button type="submit" class="btn btn-success border-secondary me-2 rounded text-white" name="quote-submit" >Request quote</button>
        <!-- <a type="button" class="btn btn-warning border-secondary rounded text-white" href="#" target="_blank">Report Issue *</a> -->
      </div> 
	</form>

  </div>
</div>
    </div>
  </div>
</div>

<!-- Operation area -->
<?php include "assets/sections/banner-area.sec.php" ?>

<!-- Footer -->
<?php include "assets/sections/footer.sec.php" ?>

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