<?php
if (isset($_POST['quote-submit'])) {

  $title = $_POST['ti'];
  $fullName = $_POST['name'];
  $email = $_POST['email'];
  $phno = $_POST['phno'];
  $service = $_POST['service'];
  $pscd = $_POST['pscd'];
  $description = $_POST['description'];

//Method that checks empty fields and returns the user to contact with the valid info autofilled
  if (empty($title) || empty($fullName) || empty($email) || empty($phno) || empty($service) || empty($pscd) || empty($description)) {
    header("Location: ../../getaquote.php?error=emptyfields&ti=".$title."&name=".$fullName."&email=".$email."&phno=".$phno."&service=".$service."&pscd=".$pscd."&description=".$description);
    exit();
  }

  //Method that checks if the First Name entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z\s]*$/",$title)) {
    header("Location: ../../getaquote.php?error=invalidtitle&name=".$fullName."&email=".$email."&phno=".$phno."&pscd=".$pscd."&description=".$description);
    exit();
  }

  //Method that checks if the Last Name entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z\s]*$/",$fullName)) {
    header("Location: ../../getaquote.php?error=invalidfullName&ti=".$title."&email=".$email."&phno=".$phno."&pscd=".$pscd."&description=".$description);
    exit();
  }

  //Method that checks if the Email entered is valid and returns the user to contact with the valid info autofilled
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../../getaquote.php?error=invalidEmail&ti=".$title."&name=".$fullName."&phno=".$phno."&pscd=".$pscd."&description=".$description);
    exit();
  }

    //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[0-9]*$/",$phno)) {
    header("Location: ../../getaquote.php?error=invalidPhoneNumber&ti=".$title."&name=".$fullName."&email=".$email."&pscd=".$pscd."&description=".$description);
    exit();
  }

      //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s]*$/",$pscd)) {
    header("Location: ../../getaquote.php?error=invalidPostcode&ti=".$title."&name=".$fullName."&email=".$email."&phno=".$phno."&description=".$description);
    exit();
  }

      //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9.?,!\s]*$/",$description)) {
    header("Location: ../../getaquote.php?error=invalidDescription&ti=".$title."&name=".$fullName."&email=".$email."&phno=".$phno."&pscd=".$pscd);
    exit();
  }
  else {

      // Sending an copy of the enquery to the info email info@easyfixpm.co.uk
      $to = "info@easyfixpm.co.uk";
      $subject = 'Quote request from: '.$email;
      $message = "Email generated automatically by Easy Fix on behalf of: \r\n";
      $message .= $title." ";
      $message .= $fullName." requested a quote for: \r\n";
      $message .= $service." located in : ".$pscd."\r\n";
      $message .= "\r\nJob Description: \r\n    ";
      $message .= $description."\r\n";
      $message .= "Contact details: \r\n";
      $message .= "Email:  ".$email." \r\n";
      $message .= "Telephone:  ".$phno."\r\n";
      $message .= "    Client has accepted to be contacted back via phone call.";

      imap_mail(
        $to,
        $subject,
        $message,
        $additional_headers = null,
        $cc = null,
        $bcc = null,
        $return_path = null
      );
      header("Location: ../../getaquote.php?quote-submit=success");
      exit();
    }
}
else {
  header("Location: ../../getaquote.php");
  exit();
}
