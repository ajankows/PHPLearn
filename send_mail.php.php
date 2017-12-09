<?php
    $recepient = "kastore@wp.pl";
    $subject = "CodingAlpha";
    $message = $_POST['message'];
    $email = $_POST['email'];
    mail($recepient, $subject, $message, $email);
        echo '<p>Your mail is sent. You will be redirected in 3 seconds.</p>';