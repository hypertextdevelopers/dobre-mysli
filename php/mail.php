<?php

    $name = $_POST['name'];
    $last_name = $_POST['last_name'];    
    $email = $_POST['email'];    
    $message = $_POST['text_area'];
    $topic = "Kontakt";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= 'Od: '.$email."\r\n";
    $headers .= 'Imię: '.$name."\r\n";
    $headers .= 'Nazwisko: '.$last_name."\r\n";

    $mess = 'Od: '.$email."\r\n";
    $mess .= 'Imię: '.$name."\r\n";
    $mess .= 'Nazwisko: '.$last_name."\r\n";
    $mess .= $message;

    mail('example@gmail.com', $topic, $mess, $headers);

?>