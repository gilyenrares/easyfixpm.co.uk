<!--------- Callback form ----------->
<div class="row justify-content-center pt-3 bg-main rounded">
	<h2 class="brand text-white">
		Let <span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> call you
	</h2>
	<div class="col-12 contact bg-dark p-3 rounded-bottom">
		<form action="assets/includes/callback.inc.php" method="post" class="php-email-form">
			<div class="row">
				<div class="col-12 col-lg-6 form-group">
					<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="<?php if (isset($_GET['name'])) {echo $_GET['name'];} ?>" required="required" />
				</div>
				<div class="col-12 col-lg-6 form-group mt-md-0">
					<input type="phone" class="form-control" name="phno" id="phone" placeholder="Telephone" value="<?php if (isset($_GET['phno'])) {echo $_GET['phno'];} ?>" required="required" />
				</div>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php if (isset($_GET['email'])) {echo $_GET['email'];} ?>" required="required" />
			</div>
			<div class="form-group mt-3">
				<select name="description" class="form-select" required="required">
					<option selected>I'm interested in a free quote</option>
					<option>I'm looking for some advice</option>
					<option>I'd like to hear about one of your services</option>
					<option>Other reason</option>
				</select>
			</div>

			<div class="my-3">
				<div class="loading">Loading</div>
				<div class="error-message"></div>
				<div class="sent-message">Your message has been sent. Thank you!</div>
			</div>
			<div class="text-center mb-3"><button type="submit" name="callback-submit">Send Message</button></div>
		</form>
		<div class="credits text-start">
			<i>Please note: We will use your data for use in dealing with your enquiry. If you would like to know more about how we use your data, please visit our <a href="#">Privacy Policy</a>. By submitting this form, you are agreeing to our Privacy Policy.</i>
		</div>
	</div>
</div>
<!-- End Form -->