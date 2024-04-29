<?php
if (isset($_POST['feedback-submit'])) {
  session_start();
  require 'dbh.inc.php';
  if ($_POST['worked']=='true') {
    $wasWorked = 1;
  }else{
    $wasWorked = 0;
  }
  $rr = $_POST['reliabilityRating'];
  $tkr = $_POST['timekeepingRating'];
  $wr = $_POST['workmanshipRating'];
  $tr = $_POST['tidinessRating'];
  $cr = $_POST['courtesyRating'];
  $or = $_POST['overallRating'];
  $jd = $_POST['jobdesc'];
  $feedback = $_POST['feedback'];
  $name = $_POST['name'];
  $title = $_POST['title'];
  $pscd = $_POST['pscd'];
  if(isset($_POST['isAnon'])) {
    $isAnon = 1;
  }else{
    $isAnon = 0;
  }

  // echo'<h5>worked = '.$wasWorked.'</h5>';
  // echo'<h5>reliabilityRating = '.$rr.'</h5>';
  // echo'<h5>timekeepingRating = '.$tkr.'</h5>';
  // echo'<h5>workmanshipRating = '.$wr.'</h5>';
  // echo'<h5>tidinessRating = '.$tr.'</h5>';
  // echo'<h5>courtesyRating = '.$cr.'</h5>';
  // echo'<h5>overallRating = '.$or.'</h5>';
  // echo'<h5>job description = '.$jd.'</h5>';
  // echo'<h5>Feedback = '.$feedback.'</h5>';
  // echo'<h5>name = '.$name.'</h5>';
  // echo'<h5>title = '.$title.'</h5>';
  // echo'<h5>postcode = '.$pscd.'</h5>';
  // echo'<h5>isAnon = '.$isAnon.'</h5>';
  // exit();


//Method that checks empty fields and returns the user to contact with the valid info autofilled
  if (empty($title) || empty($name) || empty($pscd) || empty($jd) || empty($feedback)) {
    header("Location: ../../feedback.php?error=emptyfields&title=".$title."&name=".$name."&postcode=".$pscd."&jobdesc=".$jd."&feedback=".$feedback);
    exit();
  }

  //Method that checks if the  Title entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z\s]*$/",$title)) {
    header("Location: ../../feedback.php?error=invalidTitle&name=".$name."&postcode=".$pscd."&jobdesc=".$jd."&feedback=".$feedback);
    exit();
  }

  //Method that checks if the Full Name entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z.\s]*$/",$name)) {
    header("Location: ../../feedback.php?error=invalidFullName&&title=".$title."&postcode=".$pscd."&jobdesc=".$jd."&feedback=".$feedback);
    exit();
  }

  //Method that checks if the Service Title entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s]*$/",$pscd)) {
    header("Location: ../../feedback.php?error=invalidPostcode&title=".$title."&name=".$name."&jobdesc=".$jd."&feedback=".$feedback);
    exit();
  }

  //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9.?,!\s]*$/",$jd)) {
    header("Location: ../../feedback.php?error=invalidDescription&title=".$title."&name=".$name."&postcode=".$pscd."&feedback=".$feedback);
    exit();
  }
  elseif (!preg_match("/^[a-zA-Z0-9.?',!\s]*$/",$feedback)) {
    header("Location: ../../feedback.php?error=invalidFeedback&title=".$title."&name=".$name."&postcode=".$pscd."&jobdesc=".$jd."&feedback=".$feedback);
    exit();
  }
  else {
    //SQL variable that runs an SQL statement to insert data into the database
    $sql = "INSERT INTO feedbacks (feedbackIsAnon, feedbackWorked, feedbackRR, feedbackTKR, feedbackWR, feedbackTR, feedbackCR, feedbackOR, feedbackJD, feedbackText, feedbackCTitle, feedbackCName, feedbackCpscd) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);

    //Method that check if the sql statement can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../../feedback.php?error=connectionError&title=".$title."&name=".$name."&postcode=".$pscd."&jobdesc=".$jd."&feedback=".$feedback);
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt,"iiiiiiiisssss",$isAnon, $wasWorked, $rr, $tkr, $wr, $tr, $cr, $or, $jd, $feedback, $title, $name, $pscd);
      mysqli_stmt_execute($stmt);
      header("Location: ../../feedback.php?feedback-submit=success");
      exit();
    }  
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../../feedback.php");
  exit();
}