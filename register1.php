<?php

if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "Esh49961@yahoo.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name; ".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);

  header("Location: Register.html?mailsend");
}


 ?>
