<?php

$to_email="florin.asavei@autonom.com";
$subject = "Send Email via PHP";
$body = "Salut, acesta este un test trimis prin PHP Script";
$headers = "From: asaveiflo@gmail.com";

if(mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to " . $to_email."...";
}
else {
    echo "Email sending failed...";
}

?>