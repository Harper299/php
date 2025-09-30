<?xml version="1.0"?>
<tree>
 <person type="grandfather" />
 <person type="grandmother" />
 
 <children>
 <person type="Father" />
 <person type="Mother" />
 
 <children>
 <person type="Son">
 <name>John</name>
 </person>
 <person type="Daughter">
 <name> Mary</name>
 </person>
 </children>
 </children>
</tree>

File name 2 : tree14.php
<?php
echo "Three different ways to retrieve name John <br>";

$doc = new DOMDocument();

$doc->preserveWhiteSpace = false;

$doc->load('tree14.xml');

echo $doc->firstChild->childNodes->item(2)->childNodes
->item(2)->childNodes->item(0)->childNodes->item(0)
->childNodes->item(0)->nodeValue."<br>";

echo
$doc->getElementsByTagName('name')->item(0)->nodeValue."<br>"
;

echo $doc->getElementsByTagName('person')->item(4)
->childNodes->item(0)->nodeValue."<br>";
?>

