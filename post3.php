<?php
$raw_cdr = $_POST['cdr'];
$writefile = fopen('/tmp/d.txt',"w");
fwrite($writefile, $raw_cdr);
fclose($writefile);
?>