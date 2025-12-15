<?php
$doc = new DOMDocument();

$html = "<html><body><p>Hello World</p><br><p>remov me</p></body></html>";

// Load the HTML into DOM
@$doc->loadHTML($html);

// Add a new paragraph
$newP = $doc->createElement('p', 'This is a new paragraph');
$doc->getElementsByTagName('body')->item(0)->appendChild($newP);

// Remove the second <p> (index 1)
// $secondP = $doc->getElementsByTagName('p')->item(1);
// $secondP->parentNode->removeChild($secondP);

// Get all <p> elements and display
$paragraphs = $doc->getElementsByTagName('p');

foreach ($paragraphs as $p) {
    echo $p->nodeValue . "<br>";
}
?>
