<?php 
  if(isset($_POST['submit'])) {
    $name = $POST['name'];
    $email = $POST['email'];
    $story = $POST['story'];
    $message = $POST['message'];
    
    $to = "dr.bmckenzie93@gmail.com";
    $subject = "Podcast Form Submission";
    $message = "Name: ".$name."\n"."Email: ".$email."\n"."Story: ".$story."\n". "Wrote the following: "."\n\n".$message;
    $headers = "From: ".$email;

    if(mail($to, $subject, $message, $headers)) {
      echo "<h1>Your message has been sent, thank you"." ".$name.", we will contact you shortly!</h1>";
    } 
    else {
      echo "Sorry, something went wrong. Please try again!"; 
    }
  }
?>





<?php
//
//if (isset($_POST['submit'])) {
//  $name = $POST['name'];
//  $email = $POST['email'];
//  $story = $POST['story'];
 // $message = $POST['message'];

//  // $mailTo = "immersed@offthewallgraffiti.org" 
//  $mailTo = "dr.bmckenzie93@gmail.com";
//  $headers = "From: ".$mailFrom;
//  $txt = "You have received an e-mail from ".$name.".\n\n".$message.$story;
//
//  mail($mailTo, $email, $story, $txt, $headers);
//  header("Location: index.html?mailsend");
//} 