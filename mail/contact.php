<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

//$to = "magicmath.2017@gmail.com";
$to = "aibolikmarketing@gmail.com";
//$to = "41b0l123@gmail.com";
$subject = "New application from Skin Cares"; // Choose a custom subject (not mandatory)

$body = "У Нас новая заявка.\n\nИмя: " . $name . "\n" . "Телефон: " . $phone;

$body = wordwrap($body, 70, "\r\n");
echo $body;

$from = "no-reply@scincares.kz"; // Replace "Beetle Template" with your site name (not mandatory)
$headers = "From:" . $from . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();


if ($name != '' && $phone != '') {
    echo "\n" . $to;
    echo "\n" . $from;
    echo "\n" . $headers;

    if (mail ($to, $subject, $body, $headers)) {
        echo '<p style="color:#66A325;">Thanks! Your message has been sent.</p>';
    } else {
        echo '<p style="color:#F84B3C;">Something went wrong, go back and try again!</p>';
    }

} else {
    echo '<p style="color:#F84B3C;">You need to fill in all required fields!</p>';
}