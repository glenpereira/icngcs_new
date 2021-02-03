<?php

// Define some constants
define( "RECIPIENT_NAME", "John Doe" );
define( "RECIPIENT_EMAIL", "dummyemail@totallyrealemail.com" );


// Read the form values
$success = false;

$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";


// If all values exist, send the email
if ( $senderEmail) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " .$senderEmail . "";
  $msgBody = " Email: ". $senderEmail. " wants to signup for the newsletters";
  $success = mail( $recipient, $headers, $msgBody );

  echo "<script>alert('You have successfully signed up for the newsletter');</script>";
  echo "<script>document.location.href='index.html'</script>";
}

else{
  echo "<script>alert('Sorry, could not sign you up. Try contacting us.');</script>";
  echo "<script>document.location.href='contact.html'</script>";
}

?>