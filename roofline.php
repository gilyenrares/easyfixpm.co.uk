<!DOCTYPE html>
<html lang="en">
<head>
	<title>Roofline | Top Roofers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>	
<!-- Info Banner -->
<?php include 'sections/info-banner.sec.php';?>
<!-- Display links -->
<div id="display-roofline-services"></div>
<!-- Navigation -->
<div class="sticky-top">
	<?php include 'sections/navigation.sec.php';?>
	<?php include 'sections/services-navigation.sec.php';?>
</div>
<!-- Title Banner -->
<div class="container my-5">
  <div class="shadow-lg p-5 bg-white border-top border-danger rounded">
    <h1 class="display-5 text-center">Roofline | <b>Top</b> Roofers Ltd</h1>
  </div>
	<div class="btn-group btn-group-lg d-flex mt-2" role="group" aria-label="Basic example">
  		<a type="button" class="btn btn-success border-secondary mr-2 rounded text-white" href="tel:+4475 960 92240">Call Us</a>
  		<a type="button" class="btn btn-success border-secondary rounded text-white" href="contact.php#get-quote">Get a Quote</a>
	</div>
</div>

<!-- Main body -->
<div class="container my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="#display-roofline-services">
        <h2>Roofline related services</h2>
      </a>
    </div>
  	<section class="p-3 pb-5">
    	<ul class="list-group row list-group-horizontal-md">
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Guttering</li>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Fascias</li>
    		<!-- Display links -->
    		<div id="display-roofline"></div>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Soffits</li>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Downpipes</li>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Bargeboards</li>
    		<li class="list-group-item col-md-4" ><img class="icon" src="images/tick-icon.png"> Cladding</li>
    	</ul>
	</section>
  </div>
</div>

<div class="container my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="#display-roofline">
        <h2>Roofline</h2>
      </a>
    </div>
  	<section class="p-3 pb-5">
    	<div class="col-xl-3 col-lg-4 col-md-8 float-left p-2 mr-3 mb-2"><a href="#guttering" data-toggle="modal" data-target="#guttering"><img src="images/guttering.jpg" class="shadow-lg img-thumbnail d-block w-100 h-100 mr-auto ml-auto" alt="..."></a></div>

    	<p>Our uPVC roofline services play a very important role in keeping your roof protected from the elements and redirects the rainwater flow from your property. Our team will ensure that your guttering system is fit correctly for the size of the property and will give you advice and guidance on what swill best suit your home.</p>

		<p>The quality uPVC that we use is cost effective yet highly durable. Once fitted you can say goodbye to yearly maintenance, no painting is required and no more flaking paintwork to deal with.</p>

		<p> uPVC is virtually maintenance free and only if your gutters get blocked after a heavy winter or with tree leaves during the autumn, when the guttering should need some cleaning.</p>
	</section>
	<a type="button" class="btn btn-primary border-secondary rounded-circle p-2 my-4 float-right" href="#"><img src="images/arrow-top-icon.png"></a>
  </div>
</div>

<!-- Extra large modals library -->
<?php include 'includes/modals-lib.inc.php';?>
<!-- Footer -->
<?php include "sections/footer.sec.php" ?>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>