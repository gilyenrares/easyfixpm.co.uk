<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-main">
<div class="container">
  <button class="navbar-toggler ml-auto mr-3 navbar-custom" type="button" data-toggle="collapse" data-target="#navbarServices" aria-controls="navbarServices" aria-expanded="false" aria-label="Toggle navigation">Services Menu
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarServices"> 
  <?php
    $text=$_SERVER['PHP_SELF'];
                              // !!!!! Modify before update 19 to 1!!!!!!
    $rest = substr("$text", 1);
    switch ($rest) {
    case 'commercial-roofing.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="roofline.php">Roofline</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    case 'chimneys.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="roofline.php">Roofline</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    case 'flat-roofing.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="roofline.php">Roofline</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    case 'roofline.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item active">
             <a class="nav-link" href="roofline.php">Roofline</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    case 'new-roofs.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="roofline.php">Roofline</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    case 'repairs.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="roofline.php">Roofline</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
    default:
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item inactive">
              <a class="nav-link" href="commercial-roofing.php">Commercial Roofing</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="chimneys.php">Chimneys</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="flat-roofing.php">Flat Roofing</a>
            </li>
            <li class="nav-item inactive">
             <a class="nav-link" href="roofline.php">Roofline</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="new-roofs.php">New Roofs</a>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" href="repairs.php">Repairs</a>
            </li>
          </ul>';
          break;
}   
?>
  </div>
</div>
</nav>