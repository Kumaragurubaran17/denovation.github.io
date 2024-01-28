<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Set your email address where you want to receive the form submissions
    $to = "denovation.in@gmail.com";

    // Subject of the email
    $subject = "New Form Submission";

    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message: $message\n";

    // Send the email
    mail($to, $subject, $body);

    // You can add a thank you message or redirect the user to a thank you page
    echo "Thank you for your submission!";
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.html");
    exit;
}
?>
