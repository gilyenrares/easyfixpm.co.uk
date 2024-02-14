<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-main border border-dark">
  <div class="container">
  <a class="navbar-brand bg-white card border border-dark" href="index.php"><img src="images/logo.png" width="90" height="60" class="d-inline-block align-center badge" alt=""></a>
  <button class="navbar-toggler navbar-custom" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">Main Menu
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarMain"> 
  <?php
    $text=$_SERVER['PHP_SELF'];
    $rest = substr("$text", 1);
    switch ($rest) {
    case 'index.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
           <li class="nav-item inactive dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Roofing    Services</a>
            <div class="dropdown-menu bg-main" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="commercial-roofing.php">Commercial Roofing</a>
              <a class="dropdown-item" href="chimneys.php">Chimneys</a>
              <a class="dropdown-item" href="flat-roofing.php">Flat Roofing</a>
              <a class="dropdown-item" href="roofline.php">Roofline</a>
              <a class="dropdown-item" href="new-roofs.php">New Roofs</a>
              <a class="dropdown-item" href="repairs.php">Repairs</a>
           </div>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    case 'references.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="references.php">References</a>
            </li>
            <li class="nav-item inactive dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Roofing    Services</a>
            <div class="dropdown-menu bg-main" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="commercial-roofing.php">Commercial Roofing</a>
              <a class="dropdown-item" href="chimneys.php">Chimneys</a>
              <a class="dropdown-item" href="flat-roofing.php">Flat Roofing</a>
              <a class="dropdown-item" href="roofline.php">Roofline</a>
              <a class="dropdown-item" href="new-roofs.php">New Roofs</a>
              <a class="dropdown-item" href="repairs.php">Repairs</a>
            </div>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    case 'commercial-roofing.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#navbarServices">Roofing Services</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    case 'chimneys.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#navbarServices">Roofing Services</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    case 'flat-roofing.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#navbarServices">Roofing Services</a>
            </li>            
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    case 'roofline.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#navbarServices">Roofing Services</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    case 'new-roofs.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#navbarServices">Roofing Services</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    case 'repairs.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#navbarServices">Roofing Services</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    case 'serviced-area.php':
     echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
           <li class="nav-item inactive dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Roofing    Services</a>
            <div class="dropdown-menu bg-main" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="commercial-roofing.php">Commercial Roofing</a>
              <a class="dropdown-item" href="chimneys.php">Chimneys</a>
              <a class="dropdown-item" href="flat-roofing.php">Flat Roofing</a>
              <a class="dropdown-item" href="roofline.php">Roofline</a>
              <a class="dropdown-item" href="new-roofs.php">New Roofs</a>
              <a class="dropdown-item" href="repairs.php">Repairs</a>
           </div>
            </li>
            <li class="nav-item active">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    case 'about.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
           <li class="nav-item inactive dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Roofing    Services</a>
            <div class="dropdown-menu bg-main" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="commercial-roofing.php">Commercial Roofing</a>
              <a class="dropdown-item" href="chimneys.php">Chimneys</a>
              <a class="dropdown-item" href="flat-roofing.php">Flat Roofing</a>
              <a class="dropdown-item" href="roofline.php">Roofline</a>
              <a class="dropdown-item" href="new-roofs.php">New Roofs</a>
              <a class="dropdown-item" href="repairs.php">Repairs</a>
           </div>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    case 'contact.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
           <li class="nav-item inactive dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Roofing    Services</a>
            <div class="dropdown-menu bg-main" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="commercial-roofing.php">Commercial Roofing</a>
              <a class="dropdown-item" href="chimneys.php">Chimneys</a>
              <a class="dropdown-item" href="flat-roofing.php">Flat Roofing</a>
              <a class="dropdown-item" href="roofline.php">Roofline</a>
              <a class="dropdown-item" href="new-roofs.php">New Roofs</a>
              <a class="dropdown-item" href="repairs.php">Repairs</a>
           </div>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
    break;
    default:
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="references.php">References</a>
            </li>
            <li class="nav-item inactive dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Roofing    Services</a>
            <div class="dropdown-menu bg-main" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="commercial-roofing.php">Commercial Roofing</a>
              <a class="dropdown-item" href="chimneys.php">Chimneys</a>
              <a class="dropdown-item" href="flat-roofing.php">Flat Roofing</a>
              <a class="dropdown-item" href="roofline.php">Roofline</a>
              <a class="dropdown-item" href="new-roofs.php">New Roofs</a>
              <a class="dropdown-item" href="repairs.php">Repairs</a>
           </div>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="serviced-area.php">Serviced Area</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>';
break;
} 
?>
  </div>
  </div>
</nav>