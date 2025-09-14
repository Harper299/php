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
// initialize new DOMDocument
$doc = new DOMDocument();
// disable whitespace-only text nodes
$doc->preserveWhiteSpace = false;
// read XML file
$doc->load('tree14.xml');
// output: 'John'
echo $doc->firstChild->childNodes->item(2)->childNodes
->item(2)->childNodes->item(0)->childNodes->item(0)
->childNodes->item(0)->nodeValue."<br>";
// output: 'John'
echo
$doc->getElementsByTagName('name')->item(0)->nodeValue."<br>"
;
// output: 'John'
echo $doc->getElementsByTagName('person')->item(4)
->childNodes->item(0)->nodeValue."<br>";
?>

