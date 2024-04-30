<?php 
require 'dbh.inc.php';
if (!isset($_SESSION['feedbacks'])){
  $sql = "SELECT feedbacks.feedbackId, feedbacks.feedbackLive, projects.projectImage, feedbacks.feedbackIsAnon, feedbacks.feedbackWorked, feedbacks.feedbackRR, feedbacks.feedbackTKR, feedbacks.feedbackWR, feedbacks.feedbackTR, feedbacks.feedbackCR, feedbacks.feedbackOR, feedbacks.feedbackJD, feedbacks.feedbackText, feedbacks.feedbackCTitle, feedbacks.feedbackCName, feedbacks.feedbackCpscd FROM (feedbacks INNER JOIN projects ON projects.projectId=feedbacks.feedbackProject)WHERE feedbacks.feedbackLive=1 ORDER BY `feedbacks`.`feedbackId` DESC;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  $i=0;
  if ($resultCheck > 0) {
    while (($row = mysqli_fetch_assoc($result)) && ($i<=4)) {
      $feedbacks[$i] = $row;
      $i++;
    }
    $_SESSION['feedbacks'] = $feedbacks;
  }
}
?>