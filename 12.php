<?xml version='1.0'?>
<students>
<student>
<regno>12011</regno>
<name>KAMAL</name>
<email>kamal_1991@gmail.com</email>
</student>
<student>
<regno>12012</regno>
<name>Joseph</name>
<email>joseph2004@yahoo.com</email>
</student>
<student>
<regno>12016</regno>
<name>Afrine</name>
<email>afrine29@gmail.com</email>
</student>
<student>
<regno>12018</regno>
<name>Angeline</name>
<email>angelv45@eyahoo.co.in</email>
</student>
<student>
<regno>12020</regno>
<name>Ruby</name>
<email>thgopi90@gmail.com</email>
</student>
</students>


HP File name2 : read_email13.php
<?php
$xml = simplexml_load_file("email13.xml");
if ($xml === false)
die("Error loading XML file.");
foreach ($xml->student as $student)
{
echo $student->email . "<br>";
}
?>
