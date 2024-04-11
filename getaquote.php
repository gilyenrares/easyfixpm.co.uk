<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EasyFix - Get a Quote</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

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

        <h1 class="brand">Get a free <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> quote</h1>
        <h2>Want your work done <span class="typed"
            data-typed-items="today, tomorrow, next week, other date, "></span></h2>
        <div class="actions">
          <a href="tel:+44 7397 879010" class="btn btn-info py-md-4 py-3 px-md-5 px-4">
            <i class="bi bi-telephone-outbound"></i>  CALL NOW  <i class="bi bi-telephone-outbound"></i></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->


 <div class="container py-5 text-center">
  <div class="row d-flex align-items-center justify-content-md-center">
    <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
       <h2 class="brand">We are <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span>property maintenance</h2>
       <p>If you’d like a free, no obligation quotation then please complete the form below and we will get back to you as soon as we can (usually within 24 hours). We endeavour to give you a competitive quote over the phone, however, depending on the size of the job, we may need to visit the job location first.</p>
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
      			<label class="form-check-label" for="check">I Agree to receive a call back from <h3 class="brand"><span class="bg-light px-2"><b>Easy</b><i>Fix</i></span></h3></label>
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


<section
	class="divider img"
	style="background: url(assets/img/banners/workers-banner.jpg)"
>
	<div class="overlay"></div>
	<div class="container-xl">
		<div class="row">
			<div class="col-lg-10 col-xl-10">
				<div class="row">
					<div
						class="col-md-8 d-flex align-items-center "
						data-aos="fade-up"
						data-aos-delay="100"
						data-aos-duration="1000"
					>
						<div>
							<span class="subheading"
								>You May Contact Us For Construction &amp; Renovation Work</span
							>
							<h1 class="mb-md-0 mb-4">We Are A Great</br> Construction Company</h1>
						</div>
					</div>
					<div
						class="col-md-4 d-flex align-items-center"
						data-aos="fade-up"
						data-aos-delay="100"
						data-aos-duration="1000"
					>
						<p class="mb-0">
							<a
								href="tel:+44 7397 879010"
								class="btn btn-info py-md-4 py-3 px-md-5 px-4"
								><i class="bi bi-telephone-outbound"></i>  CALL FOR MORE  <i class="bi bi-telephone-outbound"></i></i></a
							>
						</p>
					</div>
				</div>
			</div>
		</div>
</div>
</section>






<!-- ======= Hero Section ======= -->
  <section id="hero" class="s-hero">
    <div class="hero-container">
      <div data-aos="fade-in">
        <!-- <div class="hero-logo">
          <img class="" src="assets/img/logo.png" alt="EasyFix Logo">
        </div> -->

        <h1 class="brand"><span class="bg-light px-2"><b>Easy</b><i>Fix</i></span></h1>
        <h2 class="m-0">We operate in<span class="typed"
            data-typed-items="South, West, North,  "></span> London</h2>
        <p class="text-danger"><i class="bi bi-arrow-down-circle"></i> 
        For more details contact us 
        <i class="bi bi-arrow-down-circle"></i></p>
        <div class="actions pb-2">
          <a href="contact.php" class="btn btn-outline-danger">Contact</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->



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