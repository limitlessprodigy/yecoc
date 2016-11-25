<?php
if(!isset($_POST['submit'])){
  echo "Nope! You need to submit the form before accessing the next page.";
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($email)||empty($message)){
  echo "You're missing something, try again!";
}

$to = 'cartersanders15@gmail.com';
$subject = 'Contact form - ' . $name;
$body = $name . ' has completed the contact form with the email ' . $email . '.';\n\r;
"Message: " . $message;\n\r;

mail($to,$subject,$body,$email);

echo "Thank you for contacting us!";
?>
