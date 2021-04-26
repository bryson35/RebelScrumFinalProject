<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $questionarea = $_POST['QuestionArea'];

    $mailTo = "test-hvjv13984@srv1.mail-tester.com";
    $subject = "From: ".$email;
    $txt = "You have received an e-mail from".$username.".\n\n".$questionarea;

    mail($mailTo, $subject, $txt, $subject);
    header("Location: index.php?mailsend");
}