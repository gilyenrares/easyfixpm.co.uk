  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer bg-dark">

    <section id="contact" class="contact">
      <div class="container">

        <!-- Info items -->
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-3">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>London, United Kingdom</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>contact@easyfixpm.co.uk</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3">
            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>07397 879010</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
        <!-- Contact form -->
        <div class="row justify-content-center mt-4">
          <div class="col-lg-9">
            <form action="assets/includes/contact.inc.php" method="post" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="<?php if (isset($_GET['name'])) {echo $_GET['name'];} ?>" required="required">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="phone" class="form-control" name="phno" id="phone" placeholder="Telephone"value="<?php if (isset($_GET['phno'])) {echo $_GET['phno'];} ?>" required="required">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php if (isset($_GET['email'])) {echo $_GET['email'];} ?>" required="required">
              </div>
              <div class="form-group mt-3">
                <textarea  class="form-control" name="description" id="description" placeholder="Message" rows="6" value="<?php if (isset($_GET['description'])) {echo $_GET['description'];} ?>" required="required"></textarea>
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

      </div>
    </section>
    <!-- End Contact Section -->

    <br>
    <div class="container">
      <div class="copyright brand">
        &copy; Copyright <strong><span class="bg-light px-2"><b>Easy</b><i>Fix</i></span></strong> . All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">RGB-DEV</a> UIcons by <a href="https://www.flaticon.com/uicons">Flaticon</a>
      </div>
    </div>
  </footer>
  <!-- ======= End Footer======= -->