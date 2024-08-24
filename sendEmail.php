<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $emailAddress = $_POST['emailAddress'];
    $mobileNumber = $_POST['mobileNumber'];
    $emailSubject = $_POST['emailSubject'];
    $message = $_POST['message'];

    $to = 'thevinisamarakoon123@gmail.com';
    $subject = $emailSubject;
    $body = "Name: $fullName\nEmail: $emailAddress\nMobile: $mobileNumber\n\nMessage:\n$message";
    $headers = "From: $emailAddress";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
