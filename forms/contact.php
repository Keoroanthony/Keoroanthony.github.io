<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $to = "anthony.keoro@gmail.com";
  $subject = $_POST['subject'];
  
  $message = $_POST['message'];
  $a = $_POST['email'];
  
  $header = "From:. $a .  \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";
  
  $retval = mail ($to,$subject,$message,$header);

  if( $retval == true ) {
    echo "Message sent successfully...";
 }else {
    echo "Message could not be sent...";
 }
?>
