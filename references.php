<!DOCTYPE html>
<html lang="en">
<head>
	<title>References | Top Roofers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

<!-- Roof Banner -->
<div class="ow-banner shadow-lg"></div>

<!--References-->
<div class="container my-5">
  <div class="shadow-lg p-5 bg-white border-top border-danger rounded">
    <h1 class="display-5 text-center"><b>Top</b>RoofersLtd References</h1>
  </div>
</div>


<!-- Main body -->

<div class="container my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="https://www.mybuilder.com/profile/view/top_roofers_ltd/feedback" target="_blank">
          <h2 class="display-5 text-center">Review <b>Top</b>RoofersLtd Services</h2>
      </a>
    </div>
    <section class="container p-3">
       <!-- review form -->
      <form action="includes/review.inc.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="firstName">Your Name:</label>
              <input type="text" class="form-control" name="rfn" id="firstName" placeholder="Example: John Lewis or John L." value="<?php if (isset($_GET['rfn'])) {echo $_GET['rfn'];} ?>" required="required">
          </div>
          <div class="form-group col-md-6">
              <label for="lastName">Job Requested:</label>
              <input type="text" class="form-control" name="rst" id="lastName" placeholder="Shortly describe the service you requested" value="<?php if (isset($_GET['rst'])) {echo $_GET['rst'];} ?>" required="required">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputRateing">Rate our service from 1-5 Stars:</label>
              <select id="inputRateing" name="rating" class="form-control" required="required">
              <option>5</option>
              <option>4.5</option>
              <option>4</option>
              <option>3.5</option>
              <option>3</option>
              <option>2.5</option>
              <option>2</option>
              <option>1.5</option>
              <option>1</option>
              </select>
          </div>
          <div class="form-group col-md-6">
              <label for="code">Authorisation code:</label>
              <input type="text" class="form-control" name="otc" id="code" placeholder="6 Digit Code" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="description">Your Review</label>
          <textarea  class="form-control" name="rdescription" id="description" rows="4" placeholder="How did we do.." value="<?php if (isset($_GET['rdescription'])) {echo $_GET['rdescription'];} ?>" required="required"></textarea>
        </div>
        <p><i>*Your review will be posted on the website shortly</i></p>
        <div class="btn-group btn-group-lg d-flex mt-2" role="group" aria-label="Basic example">
          <button type="submit" class="btn btn-success border-secondary mr-2 rounded text-white" name="review-submit">Submit Review</button>
          <a type="button" class="btn btn-warning border-secondary rounded text-white" href="https://rbg-dev.com/contact.php" target="_blank">Report Issue *</a>
        </div> 
      </form>
    </section>
  </div>
</div>  
<div class="container my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">    
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="https://www.mybuilder.com/profile/view/top_roofers_ltd/feedback" target="_blank">
          <h2 class="display-5 text-center">Reviews of <b>Top</b>RoofersLtd</h2>
      </a>
    </div>
    <section class="container p-3">
      <?php include'includes/review-open.inc.php' ?>
    </section>
  </div>
</div>
<div class="container my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="https://www.mybuilder.com/profile/view/top_roofers_ltd/feedback" target="_blank">
          <h2 class="display-5 text-center">Reviews of <b>Top</b>RoofersLtd on MyBuilder</h2>
      </a>
    </div>
        <section class="container pb-1">
            <!-- review -->
            <div class="card my-3">
              <div class="card-header">
                <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/6413516" target="_blank">Replace flat roof on out house </a> 
                <span class="text-secondary font-italic">Roofing (Flat)</span>
              </div>
              <div class="card-body">
                <p>Did a flat roof for me with minimum fuss and mess. Courteous and polite. Highly recommend</p>
                <p>
                    <b>paul20564</b>
                    <em class="text-secondary font-italic">- 29<sup>th</sup> May, 2020 </em>
                    <img class="icon" src="images/thumbs-up.png">
                    <i class="text-success"> Positive feedback</i>
                    <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/6413516" target="_blank">...See Original Comment</a>
                </p>
              </div>
            </div>
            <!-- review -->
            <div class="card my-3">
              <div class="card-header">
                <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/6340957" target="_blank">New ground floor flat roof for 1960s terrace house </a> 
                <span class="text-secondary font-italic">Roofing (Flat)</span>
              </div>
              <div class="card-body">
                <p>Marius and his team did an excellent job replacing a flat roof with a new GRP. 
His quote was the most detailed and he spent most time explaining the work to me and asking questions. </p>
                <p>He communicates well and kept me up to date with arrival and timings. The team worked efficiently and he didn't rush, taking the time to ensure the roof was levelled properly for drainage to avoid water collecting, when it would have been quicker to just lay the liquid GRP straight onto the roof. The roof was complete in 2 days and looks great! 
Highly recommended!</p>
                <p>
                    <b>tdgreenhalgh</b>
                    <em class="text-secondary font-italic">- 16<sup>th</sup> May, 2020 </em>
                    <img class="icon" src="images/thumbs-up.png">
                    <i class="text-success"> Positive feedback</i>
                    <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/6340957" target="_blank">...See Original Comment</a>
                </p>
              </div>
            </div>
            <!-- 1st review -->
            <div class="card my-3">
              <div class="card-header">
                <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/6033987" target="_blank">Tile roof/dormer repairs</a> 
                <span class="text-secondary font-italic">Roofing (Pitched)</span>
              </div>
              <div class="card-body">
                  <p>
                    <b>b89797</b>
                    <em class="text-secondary font-italic">- 3<sup>rd</sup> Mar, 2020 </em>
                    <b class="text-secondary">Waiting for feedback</b>
                    <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/6033987" target="_blank">...See Original Comment</a>
                </p>
              </div>
            </div>
            <!-- 2nd review -->
            <div class="card my-3">
              <div class="card-header">
                <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/6040766" target="_blank">Side passage roof repair</a> 
                <span class="text-secondary font-italic">Roofing (Pitched)</span>
              </div>
              <div class="card-body">
                  <p>Top Roofers quote was the cheaper of two I sought. The specification for the job was identical from both. The job was carried out with the utmost efficiency in a short time totally in line with the quotation and has since been tested by Storm Dennis and proved able to cope with the amount of rain excellently!</p>
                  <p>I would certainly recommend Marius and his team to anyone!</p>
                  <p>
                    <b>nick76933</b>
                    <em class="text-secondary font-italic">- 26<sup>th</sup> Feb, 2020 </em>
                    <img class="icon" src="images/thumbs-up.png">
                    <i class="text-success"> Positive feedback</i>
                    <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/6040766" target="_blank">...See Original Comment</a>
                </p>
              </div>
            </div>
            <!-- 3rd review -->
            <div class="card my-3">
              <div class="card-header">
                <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/6127594" target="_blank">Repair leaking roof </a> 
                <span class="text-secondary font-italic">Roofing (Pitched)</span>
              </div>
              <div class="card-body">
                  <p>A great experience. Marius quickly identified and repaired our leaking roof sticking to the agreed fixed price. Highly recommend.</p>
                  <p>
                    <b>rob14882</b>
                    <em class="text-secondary font-italic">- 25<sup>th</sup> Feb, 2020 </em>
                    <img class="icon" src="images/thumbs-up.png">
                    <i class="text-success"> Positive feedback</i>
                    <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/6127594" target="_blank">...See Original Comment</a>
                </p>
              </div>
            </div>
            <!-- 4th review -->
            <div class="card my-3">
              <div class="card-header">
                <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/5995858" target="_blank">PVC panelling on flat roof </a> 
                <span class="text-secondary font-italic">Roofing (Flat)</span>
              </div>
              <div class="card-body">
                  <p>The work was carried out by Marius Buda. His communications were excellent. He turned up promptly with his team at exactly the time he said he would. He completed the work quickly and efficiently. I am happy to recommend him for future work.</p>
                  <p>
                    <b>laurence_noone</b>
                    <em class="text-secondary font-italic">- 7<sup>th</sup> Feb, 2020 </em>
                    <img class="icon" src="images/thumbs-up.png">
                    <i class="text-success"> Positive feedback</i>
                    <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/5995858" target="_blank">...See Original Comment</a>
                </p>
              </div>
            </div>
            <!-- 5th review -->
            <div class="card my-3">
              <div class="card-header">
                <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/5941827" target="_blank">New tiles on roof </a> 
                <span class="text-secondary font-italic">Roofing (Pitched)</span>
              </div>
              <div class="card-body">
                  <p>Nothing was too much for Marius, very professional</p>
                  <p>
                    <b>paul28962</b>
                    <em class="text-secondary font-italic">- 30<sup>th</sup> Jan, 2020 </em>
                    <img class="icon" src="images/thumbs-up.png">
                    <i class="text-success"> Positive feedback</i>
                    <a class="text-decoration-none" href="https://www.mybuilder.com/job/view/5941827" target="_blank">...See Original Comment</a>
                </p>
              </div>
            </div>
        </section>
    </div>
</div>
<div class="container my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="s-link">
      <a class="d-block px-5 py-3 text-center border border-dark shadow-lg rounded" href="#">
          <h1 class="display-5 text-center">References of <b>Top</b>RoofersLtd</h1>
      </a>
    </div>
	<p>We've built up a long list of images from our projects over the years. Take a look at a selection of our most recent work:</p>
	</section>
	<section class="container">
		<div class="row justify-content-md-center">
    		<div class="col-xl-3 col-lg-4 col-md-6 p-2 img-link"><a href="#img1" data-toggle="modal" data-target="#img1"><img src="images/1.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img2" data-toggle="modal" data-target="#img2"><img src="images/2.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img3" data-toggle="modal" data-target="#img3"><img src="images/3.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img4" data-toggle="modal" data-target="#img4"><img src="images/4.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img5" data-toggle="modal" data-target="#img5"><img src="images/5.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img6" data-toggle="modal" data-target="#img6"><img src="images/6.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img7" data-toggle="modal" data-target="#img7"><img src="images/7.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img8" data-toggle="modal" data-target="#img8"><img src="images/8.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img9" data-toggle="modal" data-target="#img9"><img src="images/9.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img10" data-toggle="modal" data-target="#img10"><img src="images/10.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img11" data-toggle="modal" data-target="#img11"><img src="images/11.jpg" class="shadow-lg img-thumbnail d-block w-100 h-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img12" data-toggle="modal" data-target="#img12"><img src="images/12.jpg" class="shadow-lg img-thumbnail d-block w-100 h-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img13" data-toggle="modal" data-target="#img13"><img src="images/13.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img14" data-toggle="modal" data-target="#img14"><img src="images/14.jpg" class="shadow-lg img-thumbnail d-block w-100 h-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img15" data-toggle="modal" data-target="#img15"><img src="images/15.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img16" data-toggle="modal" data-target="#img16"><img src="images/16.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img17" data-toggle="modal" data-target="#img17"><img src="images/17.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img18" data-toggle="modal" data-target="#img18"><img src="images/18.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img19" data-toggle="modal" data-target="#img19"><img src="images/19.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img20" data-toggle="modal" data-target="#img20"><img src="images/20.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img21" data-toggle="modal" data-target="#img21"><img src="images/21.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img22" data-toggle="modal" data-target="#img22"><img src="images/22.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
            <div class="col-xl-3 col-lg-4 col-md-6 p-2"><a href="#img23" data-toggle="modal" data-target="#img23"><img src="images/23.jpg" class="shadow-lg img-thumbnail d-block w-100 mr-auto ml-auto" alt="..."></a></div>
    	</div>

        <!-- Extra large modals library -->
        <?php include 'includes/modals-lib.inc.php';?>
        
	</section>
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