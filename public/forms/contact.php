<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'lightblazeofficial@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }
  

  $to = $receiving_email_address;
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];

  $message = $from_name . " " .  " wrote the following:" . "\n\n" . $_POST['message'];
  $message2 = "Here is a copy of your message " . $from_name . "\n\n" . $_POST['message'];

  $headers = "From:" . $from_email;
  $headers2 = "From:" . $to;

  mail($to,$subject,$message,$headers);
  mail($from_email,$subject,$message2,$headers2); // sends a copy of the message 

  die('OK');

?>
