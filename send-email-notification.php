<?php

$email_address = "ahmadaseef05@gmail.com";

$value1 = test_input('aseef');
$value2 = test_input('semak');
$value3 = test_input('dooh nah');

// Email message
$email_msg = "Temperature: " . $value1 . "\nHumidity: " . $value2 . "\nPressure: " . $value3;

// Use wordwrap() if lines are longer than 70 characters
$email_msg = wordwrap($email_msg, 70);

// send email with mail(receiver email address, email subject, email message)
mail($email_address, "[NEW] ESP BME280 Readings", $email_msg);

echo "Email sent";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}