<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['art-description'];

// Save data to a file
$file = fopen('art-quotes.csv', 'a');
fputcsv($file, array($name, $email, $phone, $description));
fclose($file);

// Send email notification
$to = 'your-email@example.com';
$subject = 'New Art Quote Request';
$message = "Name: $name\nEmail: $email\nPhone: $phone\nArt Description: $description";
$headers = "From: $email";
mail($to, $subject, $message, $headers);

// Redirect user to thank you page
header('Location: thank-you.html');
exit();
?>
