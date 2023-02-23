<?php
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $age = $_POST['ages'];
  $email = $_POST['useremail'];
  $number = $_POST['usernumber'];
  $feedback = $_POST['feedback'];


  $from = 'hd3969@wayne.edu';
  $subject = "Helping Hands Contact Form Submission";
  $headers = "From: $from \r\n";
  $headers .= "Reply-To: $email \r\n";


  $sent = mail("hd3969@wayne.edu", $subject, "You have a new message! \n Name: $fname $lname \n Age Range: $age \n Email: $email \n Phone Number: $number \n Message: $feedback", $from);

  if ($sent) {
    header('Location: about.html');
    echo "We will get back to you shortly.";
  }

?>