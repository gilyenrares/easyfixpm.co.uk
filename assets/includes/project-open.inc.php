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
			<h2 class="brand">'.$row["projectName"].' by <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> property maintenance
			</h2>'.$row["projectDescription"].'</div>';
		}
	}
} elseif (isset($_GET['service'])) {
	$currentId = mysqli_real_escape_string($conn, $_GET['lesson']);
	$sql = "SELECT class.className, subject.subjectName,lesson.lessonId, lesson.lessonName, lesson.lessonChapter, lesson.lessonContent, lesson.lessonTimeStamp, lesson.lessonAuthor FROM(( lesson INNER JOIN class ON class.classId=lesson.lessonClass) INNER JOIN subject ON subject.subjectId=lesson.lessonSubject) WHERE lessonId='$currentId';";

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
	}
}else{
  echo'<h2 class="brand">Error by <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> property maintenance
			</h2>';
}
 ?>