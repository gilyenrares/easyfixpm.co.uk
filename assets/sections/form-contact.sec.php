<!-- Contact form -->
<div class="row justify-content-center mt-4">
	<div class="col-lg-9">
		<form action="assets/includes/contact.inc.php" method="post" class="php-email-form">
			<div class="row">
				<div class="col-md-6 form-group">
					<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="<?php if (isset($_GET['name'])) {echo $_GET['name'];} ?>" required="required" />
				</div>
				<div class="col-md-6 form-group mt-3 mt-md-0">
					<input type="phone" class="form-control" name="phno" id="phone" placeholder="Telephone" value="<?php if (isset($_GET['phno'])) {echo $_GET['phno'];} ?>" required="required" />
				</div>
			</div>
			<div class="form-group mt-3">
				<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php if (isset($_GET['email'])) {echo $_GET['email'];} ?>" required="required" />
			</div>
			<div class="form-group mt-3">
				<textarea class="form-control" name="description" id="description" placeholder="Message" rows="6" value="<?php if (isset($_GET['description'])) {echo $_GET['description'];} ?>" required="required"></textarea>
			</div>
			<div class="my-3">
				<div class="loading">Loading</div>
				<div class="error-message"></div>
				<div class="sent-message">Your message has been sent. Thank you!</div>
			</div>
			<div class="text-center"><button type="submit" name="contact-submit">Send Message</button></div>
		</form>
	</div>
</div>
<!-- End contact -->