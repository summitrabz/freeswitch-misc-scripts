<?php

// $raw_cdr = $_POST['cdr'];

// $writefile = fopen('/tmp/dump.txt',"w");

// fwrite($writefile, $raw_cdr);

// fclose($writefile);

// $myXMLData = $raw_cdr;

$xml=simplexml_load_file("/tmp/dump.xml") or die("Error: Cannot create object");



$caller_id_name=$xml->callflow->caller_profile->caller_id_name;
 
$caller_id_number=$xml->callflow->caller_profile->caller_id_number;

$destination_number=$xml->callflow->caller_profile->callee_id_number;

$context=$xml->callflow->caller_profile->context;

$start_stamp=$xml->variables->start_epoch;

$start=date('r', $start_stamp."<br>");

$answer_stamp=$xml->variables->answer_epoch;

$answer=date('r', $answer_stamp."<br>");

$end_stamp=$xml->variables->end_epoch;

$end=date('r', $end_stamp."<br>");

$duration=$xml->variables->duration;

$billsec=$xml->variables->billsec;

$hangup_cause=$xml->variables->hangup_cause;

$uuid=$xml->callflow->caller_profile->uuid;

$d= date("Y-m-d");

$filename="$callee_id_number"."-"."$start"."-"."$d".".txt";

rename("/tmp/dump.xml","/tmp/abc.xml");

echo "file renamed successfully..!!!";

 //Insering into database will follow
// $servername = "localhost";

// $username = "root";

// $password = "ashish123";

// $dbname = "calls";

// // Creating connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Checking connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// //inserting into mysql table
// $sql = "INSERT INTO final_cdr (caller_id_name, caller_id_number, destination_number, context, start_call_stamp, answer_call_stamp, end_call_stamp, duration_seconds, billsec_seconds, uuid)
// VALUES ('$caller_id_name', '$caller_id_number', '$destination_number', '$context', '$start', '$answer', '$end', '$duration', '$billsec', '$uuid')";
// //checking whether the record is entered or not
// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
?>
