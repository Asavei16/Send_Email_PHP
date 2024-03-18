<?php

$to_email="user@gmail.com";
$subject = "Send Email via PHP";
$body = "Salut, acesta este un test trimis prin PHP Script";
$headers = "From: user1@gmail.com";

if(mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to " . $to_email."...";
}
else {
    echo "Email sending failed...";
}

?>