
<?php

$myXMLData = "/tmp/dump.xml";

$xml=simplexml_load_file("/tmp/dump.xml") or die("Error: Cannot create object");
// $xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
// print_r($xml);
// echo ("<hr>");


// $raw_cdr = fopen('/tmp/dump.xml',"r");
// $test =  fread($raw_cdr,filesize("/tmp/dump.xml"));
// fclose($raw_cdr);

// print_r($test);
// echo("<hr>");
// echo  $test;

// $source = '/tmp/dump.xml';

// $xml=simplexml_load_string($test) or die("Error: Cannot create object");
// print_r($xml);

 // load as string
 // $xmlstr = file_get_contents($source);
 // $xmlcont = new SimpleXMLElement($xmlstr);
/* foreach($xmlcont as $url) 
 {
    echo "{$url->loc} - {$url->lastmod} - {$url->changefreq} - {$url->priority}\r\n";
 }

/*
$xml=simplexml_load_string($test) or die("Error: Cannot create object");
*/

// print_r($xml);

//echo ("<hr>");
//$context="end of file";
//echo $context;
// echo ("$xml->cdr[0]->core-uuid :" . $xml->cdr[0]->core-uuid."<br>");
// echo ("$xml->channel_data[0]->state :" . $xml->channel_data[0]->state."<br>");
// echo ("$xml->channel_data->direction :" . $xml->channel_data->direction."<br>");
// echo ("$xml->channel_data->direction :" . $xml->channel_data->direction."<br>");
// echo ("$xml->variables->user_name :" . $xml->variables->user_name."<br>");
$caller_id_name=$xml->callflow->caller_profile->origination->origination_caller_profile->caller_id_name;
 echo $caller_id_name."<br>";
$caller_id_number=$xml->callflow->caller_profile->origination->origination_caller_profile->caller_id_number;
 echo $caller_id_number."<br>";
$destination_number=$xml->callflow->caller_profile->origination->origination_caller_profile->callee_id_number;
 echo $destination_number."<br>";
// $context;
//echo ("it is " . $xml->callflow->caller_profile->context."<br>");
//echo ("this is " . $xml->callflow->caller_profile->origination->origination_caller_profile->context."<br>");
$context=$xml->callflow->caller_profile->origination->origination_caller_profile->context;
 echo $context."<br>";
$start_stamp=$xml->variables->start_epoch;
//echo $start_stamp."<br>";
//echo date('r', $start_stamp."<br>");
$start=date('r', $start_stamp."<br>");
echo $start."<br>";
$answer_stamp=$xml->variables->answer_epoch;
//echo $answer_stamp."<br>";
$answer=date('r', $answer_stamp."<br>");
echo $answer."<br>";
$end_stamp=$xml->variables->end_epoch;
//echo $end_stamp."<br>";
$end=date('r', $end_stamp."<br>");
echo $end."<br>";
$duration=$xml->variables->duration;
 echo $duration."<br>";
$billsec=$xml->variables->billsec;
 echo $billsec."<br>";
$hangup_cause=$xml->variables->hangup_cause;
 echo $hangup_cause."<br>";
$uuid=$xml->callflow->caller_profile->uuid;
 echo $uuid."<br>";
 //echo date('c',time())
// $account=



// echo ("$xml->cdr[0]->channel_data->state :" . $xml->cdr[0]->channel_data->state."<br>");
// echo ("$xml->cdr[0]->channel_data->state :" . $xml->cdr[0]->channel_data->state."<br>");
// echo ("$xml->cdr[0]->channel_data->state :" . $xml->cdr[0]->channel_data->state."<br>");
// echo ("$xml->cdr[0]->channel_data->state :" . $xml->cdr[0]->channel_data->state."<br>");
// echo ("$xml->cdr[0]->channel_data->state :" . $xml->cdr[0]->channel_data->state."<br>");


//Insering into database will follow
$servername = "localhost";
$username = "root";
$password = "ashish123";
$dbname = "calls";

// Creating connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//inserting into mysql table
$sql = "INSERT INTO final_cdr (caller_id_name, caller_id_number, destination_number, context, start_call_stamp, answer_call_stamp, end_call_stamp, duration_seconds, billsec_seconds, uuid)
VALUES ('$caller_id_name', '$caller_id_number', '$destination_number', '$context', '$start', '$answer', '$end', '$duration', '$billsec', '$uuid')";
//checking whether the record is entered or not
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

