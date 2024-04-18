  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer bg-dark">

    <section id="contact" class="contact">
      <div class="container">

        <!-- Info items -->
        <div class="row gy-4 d-flex justify-content-center">

          <div class="col-lg-4">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>Gloucestershire, United Kingdom</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3">
            <a href="mailto:info@easyfixpm.co.uk">
            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>info@easyfixpm.co.uk</p>
              </div>
            </div>
            </a>
          </div><!-- End Info Item -->

          <div class="col-lg-2">
            <a href="tel:+44 7397 879010">
            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>07397 879010</p>
              </div>
            </div>
            </a>
          </div><!-- End Info Item -->

        </div>
        <hr class="mt-4">
        <!-- <div class="container  text-center">
          <div class="row d-flex align-items-center justify-content-md-center">
            <div id="cover" class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4 text-white" >
              <h2 class="brand"><span class="bg-light px-2"><b>Easy</b><i>Fix</i></span> property maintenance</h2>
              <p>We can help you whether you’re a homeowner, developer, landlord or a business with anything from a full refurbishment to replacing a socket – and everything in between!</p>
            </div>
            <div class="col-12 col-md-2 text-white" >
              <h2 class="brand">Services</h2>
              <ul class="list-group list-group-flush">
                <li >An item</li>
                <li>A second item</li>
                <li >A third item</li>
                <li >A fourth item</li>
                <li >And a fifth one</li>
              </ul>
            </div>
            <div class="col-12 col-md-2 text-white" >
              <h2 class="brand">Services</h2>
              <ul class="list-group list-group-flush">
                <li >An item</li>
                <li>A second item</li>
                <li >A third item</li>
                <li >A fourth item</li>
                <li >And a fifth one</li>
              </ul>
            </div>
          </div>
        </div> -->


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