<?php
$epoch = "1432025160"; 
date_default_timezone_set('Asia/Kolkata');
$newdate= (string)date('Ymd_H_i_s', $epoch);
echo $newdate;
?>