 <?php
 $text = "WELCOME TO BCA";
 $pattern = '/(\b[a-z])/i';
 $replace = '<span style="color:red">\1</span>';
 echo preg_replace($pattern,$replace,$text);
 ?>
