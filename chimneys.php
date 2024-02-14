<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chimneys | Top Roofers</title>
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
<div id="display-chimey-services"></div>

<!-- Navigation -->
<div class="sticky-top">
	<?php include 'sections/navigation.sec.php';?>
	<?php include 'sections/services-navigation.sec.php';?>
</div>

<!-- Title Banner -->
<div class="container my-5">
  <div class="shadow-lg p-5 bg-white border-top border-danger rounded">
    <h1 class="display-5 text-center">Chimneys | <b>Top</b> Roofers Ltd</h1>
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
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="#display-chimey-services">
        <h2>Chimneys related services</h2>
      </a>
    </div>
  	<section class="p-3 pb-5">
    	<ul class="list-group row list-group-horizontal-md">
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Chimney Building or Rebuilding</li>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Chimney Repairs</li>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Chimney Pots and Cowls</li>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Chimney Removal</li>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Crumbling Mortar</li>
    		<li class="list-group-item col-md-4" ><img class="icon" src="images/tick-icon.png"> Brickwork Repointing</li>
    		<!-- Display links -->
    		<div id="display-chimey"></div>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Chimney Leadwork</li>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Chimney Flashing</li>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Chimney Valleys</li>
    		<li class="list-group-item col-md-4"><img class="icon" src="images/tick-icon.png"> Chimney Ridge Tiles</li>
    	</ul>
	</section>
  </div>
</div>

<div class="container my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="#display-chimey">
        <h2>Chimneys</h2>
      </a>
    </div>
  	<section class="p-3 pb-5">
    	<div class="col-xl-3 col-lg-4 col-md-8 float-left p-2 mr-3 mb-2 h-50"><a href="#chimney" data-toggle="modal" data-target="#chimney"><img src="images/chimney.jpg" class="shadow-lg img-thumbnail d-block w-100 h-100 mr-auto ml-auto" alt="..."></a></div>

    	<p>If you have noticed anything wrong with your chimney, or if you have noticed leaks appearing on the celling or near the chimney, then give our experts a call at <a href="tel:+4475 960 92240">075 960 92240</a>.</p>

		<p>Being safe rather than sorry is a wise choice when it comes to chimneys. Injuries or accidents can happen if there are falling debris from a roof, so it is crucial that any problems get sorted as soon as possible.</p>
		
		<p>Give our team a call who will quickly come and assess your chimney and put work in place to ensure that your chimney is safe and secure posing no threat to you and your family and that your chimney is working effectively.</p>
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