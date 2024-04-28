<div class="row justify-content-center m-0 pt-3 bg-main rounded-top">
	<h2 class="brand text-white">
		<span class="px-2"><b>Easy</b><i>Fix</i></span> Feedback
	</h2>
</div>
<form class="form-main p-3 rounded-bottom needs-validation" action="assets/includes/feedback.inc.php" method="post" novalidate>
	<h3 class="pt-3">Was any work carried out?</h3>
	<div class="btn-group d-flex" role="group" aria-label="Work done toggle button group">
		<input type="radio" class="btn-check" name="worked" id="radioYes" autocomplete="off" checked data-bs-toggle="collapse" data-bs-target="#ro1" aria-expanded="true" aria-controls="ro1" />
		<label class="btn btn-outline-success label-main" for="radioYes">Yes</label>

		<input type="radio" class="btn-check" name="worked" id="radioNo" autocomplete="off" data-bs-toggle="collapse" data-bs-target="#ro2" aria-expanded="false" aria-controls="ro2" />
		<label class="btn btn-outline-danger label-main" for="radioNo">No</label>
	</div>

	<div class="accordion" id="rating-acc">
		<div class="accordion-item">
			<div id="ro1" class="accordion-collapse collapse show" data-bs-parent="#rating-acc">
				<div class="accordion-body accordion-feedback row m-0 justify-content-center">
					<h3>How would you rate your experience?</h3>
          <!-- Radio section -->
					<section class="col-md-6 col-lg-4 py-3">
						<h5>Reliability</h5>
						<div id="stars">
							<div class="rating-group">
								<label aria-label="1 star" class="rating-label" for="reliabilityRating-1"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="reliabilityRating" id="reliabilityRating-1" value="1" type="radio" />
								<label aria-label="2 stars" class="rating-label" for="reliabilityRating-2"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="reliabilityRating" id="reliabilityRating-2" value="2" type="radio" />
								<label aria-label="3 stars" class="rating-label" for="reliabilityRating-3"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="reliabilityRating" id="reliabilityRating-3" value="3" type="radio" />
								<label aria-label="4 stars" class="rating-label" for="reliabilityRating-4"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="reliabilityRating" id="reliabilityRating-4" value="4" type="radio" />
								<label aria-label="5 stars" class="rating-label" for="reliabilityRating-5"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="reliabilityRating" id="reliabilityRating-5" value="5" type="radio"  checked />
							</div>
						</div>
					</section>
          <!-- Radio section -->
					<section class="col-md-6 col-lg-4 py-3">
						<h5>Timekeeping</h5>
						<div id="stars">
							<div class="rating-group">
								<label aria-label="1 star" class="rating-label" for="timekeepingRating-1"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="timekeepingRating" id="timekeepingRating-1" value="1" type="radio" />
								<label aria-label="2 stars" class="rating-label" for="timekeepingRating-2"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="timekeepingRating" id="timekeepingRating-2" value="2" type="radio" />
								<label aria-label="3 stars" class="rating-label" for="timekeepingRating-3"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="timekeepingRating" id="timekeepingRating-3" value="3" type="radio" />
								<label aria-label="4 stars" class="rating-label" for="timekeepingRating-4"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="timekeepingRating" id="timekeepingRating-4" value="4" type="radio" />
								<label aria-label="5 stars" class="rating-label" for="timekeepingRating-5"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="timekeepingRating" id="timekeepingRating-5" value="5" type="radio"  checked />
							</div>
						</div>
					</section>
          <!-- Radio section -->
					<section class="col-md-6 col-lg-4 py-3">
						<h5>Workmanship</h5>
						<div id="stars">
							<div class="rating-group">
								<label aria-label="1 star" class="rating-label" for="workmanshipRating-1"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="workmanshipRating" id="workmanshipRating-1" value="1" type="radio" />
								<label aria-label="2 stars" class="rating-label" for="workmanshipRating-2"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="workmanshipRating" id="workmanshipRating-2" value="2" type="radio" />
								<label aria-label="3 stars" class="rating-label" for="workmanshipRating-3"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="workmanshipRating" id="workmanshipRating-3" value="3" type="radio" />
								<label aria-label="4 stars" class="rating-label" for="workmanshipRating-4"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="workmanshipRating" id="workmanshipRating-4" value="4" type="radio" />
								<label aria-label="5 stars" class="rating-label" for="workmanshipRating-5"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="workmanshipRating" id="workmanshipRating-5" value="5" type="radio" checked  />
							</div>
						</div>
					</section>
          <!-- Radio section -->
					<section class="col-md-6 col-lg-4 py-3">
						<h5>Tidiness</h5>
						<div id="stars">
							<div class="rating-group">
								<label aria-label="1 star" class="rating-label" for="tidinessRating-1"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="tidinessRating" id="tidinessRating-1" value="1" type="radio" />
								<label aria-label="2 stars" class="rating-label" for="tidinessRating-2"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="tidinessRating" id="tidinessRating-2" value="2" type="radio" />
								<label aria-label="3 stars" class="rating-label" for="tidinessRating-3"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="tidinessRating" id="tidinessRating-3" value="3" type="radio" />
								<label aria-label="4 stars" class="rating-label" for="tidinessRating-4"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="tidinessRating" id="tidinessRating-4" value="4" type="radio" />
								<label aria-label="5 stars" class="rating-label" for="tidinessRating-5"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="tidinessRating" id="tidinessRating-5" value="5" type="radio" checked  />
							</div>
						</div>
					</section>
          <!-- Radio section -->
					<section class="col-md-6 col-lg-4 py-3">
						<h5>Courtesy</h5>
						<div id="stars">
							<div class="rating-group">
								<label aria-label="1 star" class="rating-label" for="courtesyRating-1"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="courtesyRating" id="courtesyRating-1" value="1" type="radio" />
								<label aria-label="2 stars" class="rating-label" for="courtesyRating-2"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="courtesyRating" id="courtesyRating-2" value="2" type="radio" />
								<label aria-label="3 stars" class="rating-label" for="courtesyRating-3"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="courtesyRating" id="courtesyRating-3" value="3" type="radio" />
								<label aria-label="4 stars" class="rating-label" for="courtesyRating-4"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="courtesyRating" id="courtesyRating-4" value="4" type="radio" />
								<label aria-label="5 stars" class="rating-label" for="courtesyRating-5"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="courtesyRating" id="courtesyRating-5" value="5" type="radio" checked  />
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<div id="ro2" class="accordion-collapse collapse" data-bs-parent="#rating-acc">
				<div class="accordion-body accordion-feedback row m-0 justify-content-center">
          <h3>How would you rate your experience</h3>
          <!-- Radio section -->
					<section class="col-6 py-3">
						<h5>Overall Rating</h5>
						<div id="stars">
							<div class="rating-group">
								<label aria-label="1 star" class="rating-label" for="overallRating-1"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="overallRating" id="overallRating-1" value="1" type="radio" />
								<label aria-label="2 stars" class="rating-label" for="overallRating-2"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="overallRating" id="overallRating-2" value="2" type="radio" />
								<label aria-label="3 stars" class="rating-label" for="overallRating-3"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="overallRating" id="overallRating-3" value="3" type="radio"/>
								<label aria-label="4 stars" class="rating-label" for="overallRating-4"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="overallRating" id="overallRating-4" value="4" type="radio" />
								<label aria-label="5 stars" class="rating-label" for="overallRating-5"><i class="rating-icon rating-icon-star bi bi-star-fill"></i></label>
								<input class="rating-input" name="overallRating" id="overallRating-5" value="5" type="radio"  checked />
							</div>
						</div>
					</section>
        </div>
			</div>
		</div>
	</div>

  <h3 class="pt-3">Brief of job requested</h3>
  <div class="mb-3">
    <textarea  class="form-control" name="description" placeholder="Short job description" rows="2" value="<?php if (isset($_GET['description'])) {echo $_GET['description'];} ?>" required="required"></textarea>
    <div class="valid-feedback">Looks good!</div>
    <div class="invalid-feedback">A small job description is required.</div>
  </div>
  <h3 class="pt-3">Your feedback</h3>
  <div class="mb-3">
    <textarea  class="form-control" name="feedback" placeholder="Write your feedback here" rows="6" value="<?php if (isset($_GET['description'])) {echo $_GET['description'];} ?>" required="required"></textarea>
    <div class="valid-feedback">Looks good!</div>
    <div class="invalid-feedback">Please add a few words to your feedback.</div>
  </div>

  <h3 class="pt-3">Your details</h3>
  <div class="row">
    <div class="col-md-3 mb-3">
      <label for="title">Title</label>
        <input type="text" class="form-control" name="ti" id="title" placeholder="Title" value="<?php if (isset($_GET['ti'])) {echo $_GET['ti'];} ?>" required="required">
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">Your title is required.</div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="name">Your Name:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php if (isset($_GET['name'])) {echo $_GET['name'];} ?>" required="required">
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">Your name is required.</div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="postcode">Postcode</label>
      <input type="text" class="form-control" name="pscd" id="postcode" value="<?php if (isset($_GET['pscd'])) {echo $_GET['pscd'];} ?>" required="required" >
      <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">Your postcode is required.</div>
    </div>
  </div>
  <div class="row">
    <div class="form-check col-12 mb-3">
      <input class="form-check-input mx-2" name="isAnon" type="checkbox" id="check">
      <label class="form-check-label d-flex flex-wrap" for="check">Check if you want to remain anonymous on <p class="brand m-0"><span class="px-2"><b>Easy</b><i>Fix</i></span> </p> <i>*We'll use First part of your postcode instead.</i></label>
    </div>
  </div>

	<button type="submit" class="btn btn-success border-secondary mb-4 rounded text-white" name="feedback-submit">Submit Feedback</button>
</form>