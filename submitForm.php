<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['textarea'];

    $mailTo = "krystianselk@gmail.com";
    $headers = "From: " . $email;
    $txt = "You have received an e-mail from " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: thank-you.html");
    exit();
}
