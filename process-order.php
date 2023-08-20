<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "jayzelisaac@gmail.com"; // Your email address
  $subject = "New Order";

  $message = "Order Details:\n";
  $message .= "Delivery Time: " . $_POST["deliveryTime"] . "\n";
  $message .= "Total Price: $" . $_POST["totalPrice"] . "\n";
  // Add more fields as needed

  $headers = "From: webmaster@example.com"; // Replace with your email or website
  $headers .= "\r\nReply-To: " . $_POST["email"]; // Get customer's email from the form

  if (mail($to, $subject, $message, $headers)) {
    echo "Order sent successfully!";
  } else {
    echo "Error sending order.";
  }
}
?>
