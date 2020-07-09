<?php

if (isset($_POST['submit'])) {
  $name = $POST['name'];
  $email = $POST['email'];
  $story = $POST['story'];
  $message = $POST['message'];

  // $mailTo = "immersed@offthewallgraffiti.org" 
  $mailTo = "dr.bmckenzie93@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message.$story;

  mail($mailTo, $email, $story, $txt, $headers);
  header("Location: index.html?mailsend");
} 