<?php 
require 'dbh.inc.php';

$sql = "SELECT * FROM reviews ORDER BY reviewId DESC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="card my-3">
            <div class="card-header">
              <h4 class="text-primary">'.$row["reviewST"].'</h4>
            </div>
            <div class="card-body">
              <p>'.$row["reviewCt"].'</p>
              <p><b>'.$row["reviewFN"].'</b>
                <em class="text-secondary font-italic"> - '.$row["reviewTS"].' </em>
                <b> - Rating:</b> <b class="text-primary">'.$row["reviewRt"].' Stars</b>
              </p>
            </div>
          </div>';
  }
}
else{
  echo '<div class="w-100 text-center"><h2>No reviews yet.</h2>';
}
?>