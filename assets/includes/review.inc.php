<?php
if (isset($_POST['review-submit'])) {
  session_start();
  require 'dbh.inc.php';
  $fullName = $_POST['rfn'];
  $serviceTitle = $_POST['rst'];
  $rating = $_POST['rating'];
  $otc = $_POST['otc'];
  $description = $_POST['rdescription'];


//Method that checks empty fields and returns the user to contact with the valid info autofilled
  if (empty($fullName) || empty($serviceTitle) || empty($rating) || empty($description) || empty($otc)) {
    header("Location: ../references.php?error=emptyfields&fn=".$fullName."&st=".$serviceTitle."&description=".$description);
    exit();
  }

  //Method that checks if the Full Name entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z.\s]*$/",$fullName)) {
    header("Location: ../references.php?error=invalidfullName&st=".$serviceTitle."&description=".$description);
    exit();
  }

  //Method that checks if the Service Title entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z\s]*$/",$serviceTitle)) {
    header("Location: ../references.php?error=invalidserviceTitle&fn=".$fullName."&description=".$description);
    exit();
  }

  //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[0-9.\s]*$/",$rating)) {
    header("Location: ../references.php?error=invalidRating&fn=".$fullName."&st=".$serviceTitle."&description=".$description);
    exit();
  }

      //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9.?,!\s]*$/",$description)) {
    header("Location: ../references.php?error=invalidDescription&fn=".$fullName."&st=".$serviceTitle);
    exit();
  }
  //Method that checks if the code entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[0-9\s]*$/",$otc)) {
    header("Location: ../references.php?error=invalidOtc&fn=".$fullName."&st=".$serviceTitle."&description=".$description);
    exit();
  }
  else {
    //SQL variable that runs an SQL statement to check the catName
    $sql = "SELECT * FROM generator WHERE generatorAC=? ;";
    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       header("Location: ../references.php?error=connectionError&fn=".$fullName."&st=".$serviceTitle."&description=".$description);
      exit();
    }
     else {
      mysqli_stmt_bind_param($stmt,"s",$otc);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        //SQL variable that runs an SQL statement to insert data into the database
        $sql = "INSERT INTO reviews (reviewFN, reviewST, reviewCt, reviewRt, reviewAC) VALUES(?, ?, ?, ?, ?);";

        //Prepare statement initialization
        $stmt = mysqli_stmt_init($conn);

        //Method that check if the sql statement can run inside the database without error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../references.php?error=connectionError&fn=".$fullName."&st=".$serviceTitle."&description=".$description);
          exit();
        }
        else {
          mysqli_stmt_bind_param($stmt,"sssss", $fullName, $serviceTitle, $description, $rating, $otc);
          mysqli_stmt_execute($stmt);
          header("Location: ../references.php?review-submit=success");
          exit();
        }  
      }
      else {
        header("Location: ../references.php?error=wrongOtc&fn=".$fullName."&st=".$serviceTitle."&description=".$description);
        exit();
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../references.php");
  exit();
}