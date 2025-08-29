<?php
function valid_email($email)
{
    $result = trim($email);
    if (filter_var($result, FILTER_VALIDATE_EMAIL)) {
        return "Valid Email";
    } else {
        return "Invalid Email";
    }
}

// Driver code
$emails = ["abc@example.com", "abc#example.com"];

foreach ($emails as $email) {
    echo $email . "  " . valid_email($email) . "<br>";
}
?>
