<?php
$fname2 = $_POST['fname1'];
$lname2 = $_POST['lname1'];
$email2 = $_POST['email1'];
$subject2 = $_POST['subject1'];
$message2 = $_POST['message1'];


$to   = "him@johnnixon.in";
$from = "him@johnnixon.in";

$subject = "Website User";

$headers = "From: " . $email2 . "\r\n";
$headers .= "Cc: " . $email2 . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<h1>".$fname2." ".$lname2."</h1>";
$message .= "<h2>".$subject2."</h2>";
$message .= $message2;
$message .= "</body></html>";


$retval = mail($to, $subject, $message, $headers);

if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

?>
