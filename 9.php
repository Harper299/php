<?php
$file1 ='sample1.txt';
$file2 = 'sample2.txt';
$content1 = file_get_contents($file1);
$content1.="DAVID RAJA";
echo "<br><b>$file1 content:</b>".$content1."<br>";
$rev = strrev($content1);
file_put_contents($file2, $rev);
$content2 = file_get_contents($file2);
echo "<b><br>After reversing its content and storing into new file
$file2:</b>";
echo "<b><br>Content of $file2: </b>".$content2;
?>
