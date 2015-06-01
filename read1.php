<?php
include 'dump2.php';

//$xml = simplexml_load_file("/tmp/dump2.xml");
print_r($xmlstr);
echo ("<hr>");

$movies = new SimpleXMLElement($xmlstr);

echo $movies->movie[0]->plot;
echo ("<hr>");

print_r($movies);

?>

