<?php
function valid_email($email)
{
    $result = trim($email);
    if (filter_var($result,FILTER_VALIDATE_EMAIL))
    {
        return "- Valid Email";
    }
    else
    {
        return "- Invalid Email";
    }
}
//Driver code
echo "abc@example.com ";
echo valid_email("abc@example.com")."<br>"; 
echo "abc#example.com ";
echo valid_email("abc#example.com")."<br>";
?>
