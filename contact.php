<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['e-mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = 'marcelomariduena@protonmail.com';
    $headers = 'From: ' .$email;
    $text = 'An email from ' .$name .'.\n\n'.$message;

    mail($mailTo, $subject, $text, $headers);
    header("Location: index.php?mailsend");
}
?>