<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $story = $_POST['story'];
    $message = $_POST['message'];
    
    $to = "test@streetsmartdeveloper.com";
    $subject = "Podcast Form Submission";
    $body = "Name: ".$name."\n"."Email: ".$email."\n"."Story: ".$story."\n". "Wrote the following: "."\n\n".$message;
    $headers = "From: test@streetsmartdeveloper.com";

    if(mail($to, $subject, $body, $headers)) {
      echo "<h1 style=\"text-align:center\">Your message has been sent! Thank you, "." ".$name.". We will contact you shortly.</h1>";
    } 
    else {
      echo "Sorry, something went wrong. Please try again!"; 
    }
  }