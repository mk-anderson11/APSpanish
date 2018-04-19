<?php

if(isset($_POST['submit']))
{
  $msg = 'Name: ' . $_POST['name'] . "\n"
      . 'Email: ' . $_POST['email'] . "\n"
      . 'Message: ' .$_POST['message'];

  $to = "matt.anderson11@gmail.com";
  //mail('matt.anderson11@gmail.com', 'Sample Email Subject', $msg);

  $mail = mail($to, "Sample Email Subject", $msg);
  if($mail)
  {
    echo "Thank you for using our mail form";
  }
  else {
    echo "Mail sending failed.";
  }

  //header('location: ../index.html');

} else {
  echo "error; you need to submit the form!";
  //header('location: ../index.html');
}



?>
