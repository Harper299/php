<?php
$items = scandir('.');
$files = [];
foreach ($items as $item) {
if (is_file($item)) {
$files[$item] = filemtime($item);
}}
arsort($files);
echo "Files sorted by last modification time:<br><br>";
foreach ($files as $file => $mtime) {
echo $file . " - " . date("Y-m-d H:i:s", $mtime) . "<br>";
}
?>
