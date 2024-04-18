<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>EasyFix Property Maintenance - Home</title>
  <meta name="description" content="EasyFix it's a small property maintenance company powered by a group of skilled sole traders working in Gloucestershire area.">


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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div data-aos="fade-in">
        <h1 class="brand">Welcome to <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span></h1>
        <h2>We provide <span class="typed"
            data-typed-items="Handyman, Patio, Stairs, Fencing, Parking Spaces, Panelling, Painting, Shelving, "></span>services</h2>
        <div class="actions">
          <a href="services.php" class="btn btn-outline-danger">Our Services</a>
          <a href="getaquote.php" class="btn btn-info">Get A Free Quote</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <div class="container py-5 text-center">
  <div class="row d-flex align-items-center justify-content-md-center">
    <div id="cover" class="col-12 col-md-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    </div>
    <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
       <h2 class="brand">We are <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span>property maintenance</h2>
       <p>We can help you whether you’re a homeowner, developer, landlord or a business with anything from a full refurbishment to replacing a socket – and everything in between!</p>
    </div>
  </div>
</div>

<!-- Company banner -->
<?php include "assets/sections/banner-company.sec.php" ?>


<div class="container pb-5 my-5">
	<div class="d-flex align-items-center pt-5">
		<h2 class="brand">
			What <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> property maintenance can do for me?
		</h2>
	</div>
	<!-- ======= Service Section ======= -->
	<section id="gallery" class="gallery">
		<div class="container-fluid">
			<div class="row gy-4 justify-content-center">
				<div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
					<h2 class="gallery-item-title text-center">Driveways & Patios</h2>
					<!-- Modal -->
					<div class="modal modal-xl fade" id="dpModal" tabindex="-1" aria-labelledby="dpModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content text-bg-dark">
								<div class="modal-header">
									<h1 class="modal-title fs-5 brand" id="dpModalLabel">
										<span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> Driveways & Patios
									</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<!-- Driveways & Patios Carousel -->
									<?php include "assets/sections/carousel-dp.sec.php" ?>
								</div>
								<div class="modal-footer">
									<a href="services.php" class="btn btn-primary"> Find Out More <i class="bi bi-box-arrow-up-right"></i> </a>
									<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal -->
					<div class="gallery-item h-100">
						<img src="assets/img/banners/patio.webp" class="img-fluid" alt="" />
						<div class="gallery-links d-flex align-items-center justify-content-center">
							<a href="#" title="Driveways & Patios" data-bs-toggle="modal" data-bs-target="#dpModal"> <i class="bi bi-arrows-angle-expand"></i></a>
							<a href="services.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
						</div>
					</div>
				</div>
				<!-- End Service Item -->

				<div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<h2 class="gallery-item-title text-center">Fencing</h2>
					<!-- Modal -->
					<div class="modal modal-xl fade" id="fModal" tabindex="-1" aria-labelledby="fModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content text-bg-dark">
								<div class="modal-header">
									<h1 class="modal-title fs-5 brand" id="fModalLabel">
										<span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> Fencing
									</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<!-- Fencing Carousel -->
									<?php include "assets/sections/carousel-f.sec.php" ?>
								</div>
								<div class="modal-footer">
									<a href="services.php" class="btn btn-primary"> Find Out More <i class="bi bi-box-arrow-up-right"></i> </a>
									<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal -->
					<div class="gallery-item h-100">
						<img src="assets/img/banners/fencing.webp" class="img-fluid" alt="" />
						<div class="gallery-links d-flex align-items-center justify-content-center">
							<a href="#" title="Fencing" data-bs-toggle="modal" data-bs-target="#fModal"> <i class="bi bi-arrows-angle-expand"></i></a>
							<a href="services.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
						</div>
					</div>
				</div>
				<!-- End Service Item -->

				<div class="col-md-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
					<h2 class="gallery-item-title text-center">Decorating</h2>
					<!-- Modal -->
					<div class="modal modal-xl fade" id="decoModal" tabindex="-1" aria-labelledby="decoModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content text-bg-dark">
								<div class="modal-header">
									<h1 class="modal-title fs-5 brand" id="decoModalLabel">
										<span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> Decorating
									</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<!-- Decorating Carousel -->
									<?php include "assets/sections/carousel-deco.sec.php" ?>
								</div>
								<div class="modal-footer">
									<a href="services.php" class="btn btn-primary"> Find Out More <i class="bi bi-box-arrow-up-right"></i> </a>
									<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal -->
					<div class="gallery-item h-100">
						<img src="assets/img/banners/decorating.webp" class="img-fluid" alt="" />
						<div class="gallery-links d-flex align-items-center justify-content-center">
							<a href="#" title="Fencing" data-bs-toggle="modal" data-bs-target="#decoModal"> <i class="bi bi-arrows-angle-expand"></i></a>
							<a href="services.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
						</div>
					</div>
				</div>
				<!-- End Service Item -->
				<div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
					<h2 class="gallery-item-title text-center">Gardening</h2>
					<!-- Modal -->
					<div class="modal modal-xl fade" id="gModal" tabindex="-1" aria-labelledby="gModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content text-bg-dark">
								<div class="modal-header">
									<h1 class="modal-title fs-5 brand" id="gModalLabel">
										<span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> Gardening
									</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<!-- Gardening Carousel -->
									<?php include "assets/sections/carousel-g.sec.php" ?>
								</div>
								<div class="modal-footer">
									<a href="services.php" class="btn btn-primary"> Find Out More <i class="bi bi-box-arrow-up-right"></i> </a>
									<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal -->
					<div class="gallery-item h-100">
						<img src="assets/img/banners/gardening.webp" class="img-fluid" alt="" />
						<div class="gallery-links d-flex align-items-center justify-content-center">
							<a href="#" title="Fencing" data-bs-toggle="modal" data-bs-target="#gModal"> <i class="bi bi-arrows-angle-expand"></i></a>
							<a href="services.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
						</div>
					</div>
				</div>
				<!-- End Service Item -->
				<div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<h2 class="gallery-item-title text-center">Handyman</h2>
					<!-- Modal -->
					<div class="modal modal-xl fade" id="hmModal" tabindex="-1" aria-labelledby="hmModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content text-bg-dark">
								<div class="modal-header">
									<h1 class="modal-title fs-5 brand" id="hmModalLabel">
										<span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> Handyman
									</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<!-- Handyman Carousel -->
									<?php include "assets/sections/carousel-hm.sec.php" ?>
								</div>
								<div class="modal-footer">
									<a href="services.php" class="btn btn-primary"> Find Out More <i class="bi bi-box-arrow-up-right"></i> </a>
									<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal -->
					<div class="gallery-item h-100">
						<img src="assets/img/banners/handyman.webp" class="img-fluid" alt="" />
						<div class="gallery-links d-flex align-items-center justify-content-center">
							<a href="#" title="Fencing" data-bs-toggle="modal" data-bs-target="#hmModal"> <i class="bi bi-arrows-angle-expand"></i></a>
							<a href="services.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
						</div>
					</div>
				</div>
				<!-- End Service Item -->
				<div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
					<h2 class="gallery-item-title text-center">Repairs</h2>
					<!-- Modal -->
					<div class="modal modal-xl fade" id="repModal" tabindex="-1" aria-labelledby="repModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content text-bg-dark">
								<div class="modal-header">
									<h1 class="modal-title fs-5 brand" id="repModalLabel">
										<span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> Repairs
									</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<!-- Repairs Carousel -->
									<?php include "assets/sections/carousel-rep.sec.php" ?>
								</div>
								<div class="modal-footer">
									<a href="services.php" class="btn btn-primary"> Find Out More <i class="bi bi-box-arrow-up-right"></i> </a>
									<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal -->
					<div class="gallery-item h-100">
						<img src="assets/img/banners/repairs.webp" class="img-fluid" alt="" />
						<div class="gallery-links d-flex align-items-center justify-content-center">
							<a href="#" title="Repairs" data-bs-toggle="modal" data-bs-target="#repModal"> <i class="bi bi-arrows-angle-expand"></i></a>
							<a href="services.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
						</div>
					</div>
				</div>
				<!-- End Service Item -->
			</div>
		</div>
	</section>
	<!-- End Service Section -->
</div>

<!-- Operation area -->
<?php include "assets/sections/banner-area.sec.php" ?>

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