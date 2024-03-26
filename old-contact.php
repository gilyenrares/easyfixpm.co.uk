<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Top Roofers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171616224-2">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-171616224-2');
  </script>
</head>
<body>

<!-- Info Banner -->
<?php include 'sections/info-banner.sec.php';?>

<!-- Navigation -->
<?php include 'sections/navigation.sec.php';?>

<!-- Succesful alert -->
<?php if(isset($_GET['contact-submit'])){
        echo '<div class="container mt-3 alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="alert-heading">Well done!</h4>
                <p>Aww yeah, you successfully sent your inquiry. This means that we got your message and we will be in contact with you shortly.</p>
                <hr>
                <p class="mb-0">However, if you need to contact us as soon as possible, then <a href="tel:+4475 960 92240">call us</a>.</p>
              </div>';
            } ?>

<!--Contact Us-->
<div class="container my-5">
  <div class="shadow-lg p-5 bg-white border-top border-danger rounded">
    <h1 class="display-5 text-center">Contact <b>Top</b>RoofersLtd</h1>
  </div>
</div>

<!-- Title Banner -->
<div class="container my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="contact.php">
        <h2>Contact Details</h2>
      </a>
    </div>
    
  <section class="p-3">
    <p>Our team are dedicated and experienced roofers who strive to make your roofing work painless and as straight forward as possible. Using only the best quality roofing materials on the market today, we build roofs that are built to last but also look great for many years to come.</p>
    <!-- id requiered for good positioning of the viewframe -->
    <p id="get-quote">When looking for a reputable roofing company, you need to know that they are fully qualified and vetted, competent at what they do and will get the job done efficiently and professionally at an affordable price.</p>
  </section>
  </div>
</div>

<!-- Main body -->
<div class="container my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="contact.php">
        <h2>Contact Form</h2>
      </a>
    </div>
  <section class="p-3">
  <p>Please do not hesitate to get in touch with us for a no-obligation quote, or with any inquires you may have. You can contact us via <a href="mailto:info@toproofersltd.com">email</a>, or <a href="tel:+4475 960 92240">phone</a>, or by using our <a href="#contactForm">contact form</a> bellow.</p>

<div class="btn-group btn-group-lg d-flex mt-2" role="group" aria-label="Contact Buttons">
	<a type="button" class="btn btn-success border-secondary rounded text-white mr-2" href="tel:+4475 960 92240">Call us</a>
	<a type="button" class="btn btn-primary border-secondary rounded text-white" href="mailto:info@toproofersltd.com" >Email us</a>
</div> <hr>
	
<!-- contact form -->
	<form action="includes/contact.inc.php" method="post">
  		<div class="form-row">
    		<div class="form-group col-md-6">
 		    	<label for="firstName">Your Name:</label>
      			<input type="text" class="form-control" name="fn" id="firstName" placeholder="First Name" value="<?php if (isset($_GET['fn'])) {echo $_GET['fn'];} ?>" required="required">
    		</div>
    		<div class="form-group col-md-6">
      			<label for="lastName">Family Name:</label>
      			<input type="text" class="form-control" name="ln" id="lastName" placeholder="Last Name" value="<?php if (isset($_GET['ln'])) {echo $_GET['ln'];} ?>" required="required">
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="email">Email Address:</label>
    		<input type="email" class="form-control" name="email" id="email" placeholder="example@abc.com" value="<?php if (isset($_GET['email'])) {echo $_GET['email'];} ?>" required="required">
  		</div>
  		<div class="form-row">
    		<div class="form-group col-md-6">
      			<label for="phone">Telephone:</label>
      			<input type="phone" class="form-control" name="phno" id="phone" placeholder="Phone Number"value="<?php if (isset($_GET['phno'])) {echo $_GET['phno'];} ?>" required="required">
    		</div>
    		<div class="form-group col-md-4">
      			<label for="inputArea">Area:</label>
      			<select id="inputArea" name="area" class="form-control" required="required">
        		<option>Other Area</option>
        		<option>Croydon</option>
        		<option>Ealing</option>
        		<option>Fulham</option>
        		<option>Hammersmith</option>
        		<option>Hillingdon</option>
        		<option>Hounslow</option>
        		<option>Kingston</option>
        		<option>Merton</option>
        		<option>Richmond</option>
        		<option>Sutton</option>
        		<option>Wandsworth</option>
      			</select>
    		</div>
    		<div class="form-group col-md-2">
      			<label for="postcode">Postcode</label>
      			<input type="text" class="form-control" name="pscd" id="postcode" value="<?php if (isset($_GET['pscd'])) {echo $_GET['pscd'];} ?>" required="required" >
    		</div>
  		</div>
      <div class="form-group">
        <label for="description">Describe what service do you require from us</label>
        <textarea  class="form-control" name="description" id="description" rows="4" value="<?php if (isset($_GET['description'])) {echo $_GET['description'];} ?>" required="required"></textarea>
      </div>
  		<div class="form-group">
    		<div class="form-check">
      			<input class="form-check-input" name="agree" type="checkbox" id="check" required="required">
      			<label class="form-check-label" for="check">I Agree to receive a call back from Top Roofers Ltd.</label>
    		</div>
  		</div>
      <div class="btn-group btn-group-lg d-flex mt-2" role="group" aria-label="Basic example">
        <button type="submit" class="btn btn-success border-secondary mr-2 rounded text-white" name="contact-submit" >Submit Request</button>
        <a type="button" class="btn btn-warning border-secondary rounded text-white" href="https://rbg-dev.com/contact.php" target="_blank">Report Issue *</a>
      </div> 
	</form><hr>
  <p><i>* If you encounter any issue with our website or any other related problem, please notify </i><img src="images/rbg-logo.png" width="38" height="19"> RBG-DEVELOPMENT<i> our partner web development team, by using the button above (NOTE: YOU WILL BE REDIRECTED TO RBG-DEVELOPMET WEBSITE). </i></p>
  </section>
	</div>
</div>
<!-- Footer -->
<?php include "sections/footer.sec.php" ?>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>