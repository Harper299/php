<?php 
echo "<b> DELAY PROGRAM EXECUTION <br><br></b>"; 
// Displays current time 
echo "CURRENT TIME : ".date('h:i:s A') . "<br>"; 
//Delay 5 seconds 
sleep(5); 
// Time after 5 seconds 
echo "TIME AFTER 5 SECONDS : ".date('h:i:s A')."<br>"; 
?>
