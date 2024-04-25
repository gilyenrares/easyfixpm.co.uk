<?php 
require 'dbh.inc.php';

if (isset($_GET['project'])) {
	$project = mysqli_real_escape_string($conn, $_GET['project']);
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	$sql = "SELECT * FROM projects WHERE projectName='$project' AND projectId='$id';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<!-- ======= Hero Section ======= -->
      <section id="hero" class="m-hero">
	<div class="hero-container">
		<div data-aos="fade-in">
			<h1 class="brand">'.$row["projectName"].' <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span>
			</h1>
			<h2>Project highlights <span class="typed" data-typed-items="'.$row["projectHighlights"].'"></span></h2>
			<div class="actions">
				<a href="getaquote.php" class="btn btn-outline-primary">Get Your Free Quote</a>
			</div>
		</div>
	</div>
</section>
<!-- End Hero -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="s-hero">
	<div class="hero-container py-5">'.$row["projectCarousel"].'</div>
</section>
<!-- End Hero -->
<div class="container py-5 text-center">
	<div class="row d-flex align-items-center justify-content-md-center">
		<div class="col-12 col-md-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
			<h2 class="brand">'.$row["projectName"].' by </br><span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> property maintenance
			</h2>'.$row["projectDescription"].'</div>';
		}
	}else{
  echo'<!-- ======= Hero Section ======= -->
<section id="hero" class="s-hero">
	<div class="hero-container py-5">
		<h2 class="brand">Error the <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> Page you are looking for does not exist.</h2></div>
</section>
<!-- End Hero -->
<div class="container py-5 text-center">
	<div class="row d-flex align-items-center justify-content-md-center">
		<div class="col-12 col-md-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
			<h2 class="brand">Find what <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> page are you looking for in our <a class="text-danger" href="projects.php"> Projects <i class="bi bi-box-arrow-up-right"></i></a> page.
			</h2>
		</div>';
}
} elseif (isset($_GET['service'])) {
	$service = mysqli_real_escape_string($conn, $_GET['service']);
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	$sql = "SELECT * FROM services WHERE serviceName='$service' AND serviceId='$id';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<div class="card border border-dark mb-2 shadow-lg">
					<div class="card-header text-center"><p class="font-italic text-center"> '.$row["className"].'<b> -> </b> '.$row["subjectName"].'<b> -> </b>  '.$row["lessonChapter"].'<b> -> </b> '.$row["lessonName"].'</p></div>
	  				<div class="card-body">
	    				<h4 class="card-title text-center">'.$row["lessonName"].'</h4>
	    				<p class="card-text">'.$row["lessonContent"].'</p>
	  				</div>
	  				<div class="card-footer text-muted">Added on: '.$row["lessonTimeStamp"].' by: '.$row["lessonAuthor"].'</div>
				</div>';
		}
	}else{
  echo'<!-- ======= Hero Section ======= -->
<section id="hero" class="s-hero">
	<div class="hero-container py-5">
		<h2 class="brand">Error the <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> Page you are looking for does not exist.</h2></div>
</section>
<!-- End Hero -->
<div class="container py-5 text-center">
	<div class="row d-flex align-items-center justify-content-md-center">
		<div class="col-12 col-md-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
			<h2 class="brand">Find what <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> page are you looking for in our <a class="text-danger" href="services.php"> Services <i class="bi bi-box-arrow-up-right"></i></a> page.
			</h2>
		</div>';
}
}else{
  echo'<!-- ======= Hero Section ======= -->
<section id="hero" class="s-hero">
	<div class="hero-container py-5">
		<h2 class="brand">Error the <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> Page you are looking for does not exist.</h2></div>
</section>
<!-- End Hero -->
<div class="container py-5 text-center">
	<div class="row d-flex align-items-center justify-content-md-center">
		<div class="col-12 col-md-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
			<h2 class="brand">Find what </br><span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> page are you looking for in <a class="text-danger" href="projects.php"> Projects <i class="bi bi-box-arrow-up-right"></i></a> page or <a class="text-danger" href="services.php"> Services <i class="bi bi-box-arrow-up-right"></i></a> Page.
			</h2>
		</div>';
}
 ?>