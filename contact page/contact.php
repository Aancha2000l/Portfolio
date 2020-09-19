<?php
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$visitor_email = $_POST['email'];
$phonenumber =$_POST['mobile'];
$message =$_POST['message'];

$email_from = 'aanchal.goyal200@gmail.com';

$email_subject = "New response";

$email_body = "User Name: $first_name + $last_name.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";

$to = "aanchal.goyal200@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "From: $email_from \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
?>
