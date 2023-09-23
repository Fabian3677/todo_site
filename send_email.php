<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  
  // Send email using a library or built-in functionality
  // Example using PHP's mail() function
  $to = "fabiangames367@gmail.com";
  $subject = "New email from form";
  $message = $_POST["message"];
}
?>
