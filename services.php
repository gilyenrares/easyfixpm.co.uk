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
    <a href="#" class="col d-inline-block m-1 s-item rounded shadow-lg" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="true" aria-controls="c2"><i class="bi bi-hammer"></i></br>Carpentry</a>
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

<!-- Operation area -->
<?php include "assets/sections/banner-area.sec.php" ?>

<!-- ======= Carousel Section ======= -->
<div class="container py-5 text-center">
	<div id="dec-ref" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button
				type="button"
				data-bs-target="#dec-ref"
				data-bs-slide-to="0"
				class="active"
				aria-current="true"
				aria-label="Slide 1"
			></button>
			<button
				type="button"
				data-bs-target="#dec-ref"
				data-bs-slide-to="1"
				aria-label="Slide 2"
			></button>
			<button
				type="button"
				data-bs-target="#dec-ref"
				data-bs-slide-to="2"
				aria-label="Slide 3"
			></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/img/services/dec1.jpg" class="d-block w-100" alt="..." />
				<div class="carousel-caption d-none d-md-block">
					<h5>Wood refurbishment</h5>
					<p>Wood window repaired and repainted.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/img/services/dec2.jpg" class="d-block w-100" alt="..." />
				<div class="carousel-caption d-none d-md-block">
					<h5>Wall panels</h5>
					<p>Wood wall panelling and decorating.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/img/services/dec3.jpg" class="d-block w-100" alt="..." />
				<div class="carousel-caption d-none d-md-block">
					<h5>Interior refurbishment</h5>
					<p>Interior walls and celling repaired and painted.</p>
				</div>
			</div>
		</div>
		<button
			class="carousel-control-prev"
			type="button"
			data-bs-target="#dec-ref"
			data-bs-slide="prev"
		>
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button
			class="carousel-control-next"
			type="button"
			data-bs-target="#dec-ref"
			data-bs-slide="next"
		>
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>
<!-- ======= End Carousel Section ======= -->
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
								>If the age of property shows, choose our</span
							>
							<h1 class="mb-md-0 mb-4">Decorating</br> and Refurbishments</h1>
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