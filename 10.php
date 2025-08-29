 <?php
 $files = scandir('.');
 foreach ($files as $file) {
 if (is_file($file) && pathinfo($file, PATHINFO_EXTENSION) ===
 'txt')
 {
 $newName = basename($file, '.txt') . '.xtx';
 if (rename($file, $newName))
 echo "Renamed: $file-> $newName"."<br>";
 else
 echo "Failed to rename: $file"."<br>";
 }
 }
 ?>
