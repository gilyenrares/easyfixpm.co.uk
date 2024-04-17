<?php
if (isset($_POST['callback-submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phno = $_POST['phno'];
  $description = $_POST['description'];

//Method that checks empty fields and returns the user to contact with the valid info autofilled
  if (empty($name) || empty($email) || empty($phno) || empty($description)) {
    header("Location: ../../contact.php?error=emptyfields&name=".$name."&email=".$email."&phno=".$phno."&description=".$description);
    exit();
  }

  //Method that checks if the First Name entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z\s]*$/",$name)) {
    header("Location: ../../contact.php?error=invalidName&email=".$email."&phno=".$phno."&description=".$description);
    exit();
  }

  //Method that checks if the Email entered is valid and returns the user to contact with the valid info autofilled
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../../contact.php?error=invalidEmail&name=".$name."&phno=".$phno."&description=".$description);
    exit();
  }

    //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[0-9]*$/",$phno)) {
    header("Location: ../../contact.php?error=invalidPhoneNumber&name=".$name."&email=".$email."&description=".$description);
    exit();
  }
  else {
      //Sending an copy of the enquery to the contact-us email contact@easyfixpm.co.uk
      $to = "test@easyfixpm.co.uk";
      $subject = 'Callback request from: '.$name;
      $message = "Email automatically generated by EasyFix on behalf of: \r\n";
      $message .= $name."\r\n";
      $message .= $phno."\r\n";
      $message .= "\r\n Option Selected: \r\n";
      $message .= $description."\r\n";
      $message .= "Contact details: \r\n";
      $message .= "Email:  ".$email." \r\n";
      $message .= "Telephone:  ".$phno."\r\n";
      $message .= "Client has accepted to be contacted back via phone call.";
       imap_mail(
        $to,
        $subject,
        $message,
        $additional_headers = null,
        $cc = null,
        $bcc = null,
        $return_path = null
      );
      header("Location: ../../contact.php?contact-submit=success");
      exit();
    }
}
else {
  header("Location: ../../contact.php");
  exit();
}
