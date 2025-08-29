<html> 
<body> 
<center> 
<h1><b> Multiplication table of any number in PHP </b></h1> 
<form method="POST" action="mul.php">   
Enter a number: 
<input type="text" name="number"> 
<input type="Submit" value="Get Multiplication Table"> 
</form> 
</center> 
</body> 
</html> 



<?php  
if($_POST)  
{ 
$num = $_POST["number"]; 
echo ("<p style='text-align: center;'> Multiplication Table of $num </p>"); 
for ($i = 1; $i <= 10; $i++)  
echo ("<p style='text-align: center;'>".$num." x ".$i." = ".$num * 
$i."</p>"); 
} 
?> 
