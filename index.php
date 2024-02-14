<!DOCTYPE html>
<html lang="en">
<head>
	<title>Top Roofers Ltd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="h7IFHI52_xaIoHS9kTdC3nWRa5O1_bignZHJTulnVtw" />
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

<div class="container my-5">
  <div class="shadow-lg p-5 bg-white border-top border-danger rounded">
    <h1 class="display-5 text-center">Welcome to <b>Top</b>RoofersLtd</h1>
    <div class="row mt-5" role="group" aria-label="Contact Buttons">
      <a type="button" class="btn btn-success btn-lg btn-block" href="tel:+4475 960 92240">Call 075 960 92240</a>
      <a type="button" class="btn btn-primary btn-lg btn-block" href="mailto:info@toproofersltd.com" >Email info@toproofersltd.com</a>
    </div>
  </div>
</div>

<!-- Carousel with images -->
<div class="container">
  <div id="carousel" class="carousel slide carousel-fade border border-dark shadow-lg mt-5 rounded" data-ride="carousel">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="references.php">
        <h2>References</h2>
      </a>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="3000">
        <img src="images/w-1.jpg" class="d-block w-100 mr-auto ml-auto" alt="...">
      </div>
      <div class="carousel-item" data-interval="3000">
        <img src="images/w-2.jpg" class="d-block w-100 mr-auto ml-auto" alt="...">
      </div>
      <div class="carousel-item" data-interval="3000">
        <img src="images/w-3.jpg" class="d-block w-100 mr-auto ml-auto" alt="...">
      </div>
      <div class="carousel-item" data-interval="3000">
        <img src="images/w-4.jpg" class="d-block w-100 mr-auto ml-auto" alt="...">
      </div>
      <div class="carousel-item" data-interval="3000">
        <img src="images/w-5.jpg" class="d-block w-100 mr-auto ml-auto" alt="...">
      </div>
      <div class="carousel-item" data-interval="3000">
        <img src="images/w-6.jpg" class="d-block w-100 mr-auto ml-auto" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon p-3 bg-main" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon p-3 bg-main" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--About us-->
<div class="container my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="about.php">
        <h2>About Us</h2>
      </a>
    </div>
  <section class="p-3">
    <p>Our team are dedicated and experienced roofers who strive to make your roofing work painless and as straight forward as possible. Using only the best quality roofing materials on the market today, we build roofs that are built to last but also look great for many years to come.</p>
    <p>When looking for a reputable roofing company, you need to know that they are fully qualified and vetted, competent at what they do and will get the job done efficiently and professionally at an affordable price.</p>
  </section>
  </div>
</div>

<!--Roofing Services-->
<div class="container my-5" id="rs">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="#rs">
        <h2>Roofing Services</h2>
      </a>
    </div>
    <div class="row p-3 justify-content-md-center">
      <div class="col-xl-4 col-lg-4 col-md-6 p-2">
        <div class="card" >
          <img src="images/10.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Commercial Roofing</h5>
              <p class="card-text">Commercial roofing is one of the services that we provide to different businesses, covering a wide range of shapes and sizes for most types of warehouses...</p>
              <a href="commercial-roofing.php" class="btn btn-outline-info">Find Out More</a>
            </div>
          </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 p-2">
        <div class="card">
          <img src="images/chimney.jpg" class="card-img-top" alt="Picture of chimney">
            <div class="card-body">
              <h5 class="card-title">Chimneys</h5>
              <p class="card-text">We offer a variety of services dealing in regards with chimney work such as: building or rebuilding of chimneys, lead work, tiles, mortar and re-pointing...</p>
              <a href="chimneys.php" class="btn btn-outline-info">Find Out More</a>
            </div>
          </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 p-2">
        <div class="card" >
          <img src="images/grp-flat-roof.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Flat Roofing</h5>
              <p class="card-text">We offer a wide range of flat roofing services. From torch on felt, GRP fiberglass to EPDM rubber roofing according to customer requirements…</p>
              <a href="flat-roofing.php" class="btn btn-outline-info">Find Out More</a>
            </div>
          </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 p-2">
        <div class="card" >
          <img src="images/guttering.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Roofline Services</h5>
              <p class="card-text"> We can provide guttering to fit any type of property covering a wide range of types and shapes. We also offer a gutter maintenance service… </p>
              <a href="roofline.php" class="btn btn-outline-info">Find Out More</a>
            </div>
          </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 p-2">
        <div class="card" >
          <img src="images/tile-roof.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">New Roofs</h5>
              <p class="card-text">If you are looking for a brand new roof then look no further as we can definitively help with that. For more information about new roofs head to…</p>
              <a href="new-roofs.php" class="btn btn-outline-info">Find Out More</a>
            </div>
          </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 p-2">
        <div class="card" >
          <img src="images/roof-repairs.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Roof Repairs</h5>
              <p class="card-text">Roofing repairs take various forms. If you are simply looking for tile replacement, mortar re-pointing or cracks patched up for a cost-effective service…</p>
              <a href="repairs.php" class="btn btn-outline-info">Find Out More</a>
            </div>
          </div>
      </div>
    </div>
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