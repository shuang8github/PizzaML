<?php
// Create a new DOMDocument instance
$dom = new DOMDocument;

// Load the XML
$dom->loadXML('
<fruits>
 <apples>
   <apple>braeburn</apple>
   <apple>granny smith</apple>
 </apples>
 <pears>
   <pear>conference</pear>
 </pears>
</fruits>
');

// Print XPath for each element
// foreach ($dom->getElementsByTagName('*') as $node) {
foreach ($dom->xpath("/fruits") as $node) {
  echo $node->DOMNode::getNodePath() . "\n";
}
?>
