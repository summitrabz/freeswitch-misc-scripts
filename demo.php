
<?php

$myXMLData = "/tmp/dump.txt";

$xml=simplexml_load_file("/tmp/dump.txt") or die("Error: Cannot create object");

$caller_id_name=$xml->callflow->caller_profile->caller_id_name;
 echo $caller_id_name."<br>";

$caller_id_number=$xml->callflow->caller_profile->caller_id_number;
 echo $caller_id_number."<br>";
 $caller_id_number=trim($caller_id_number);

$destination_number=$xml->callflow->caller_profile->callee_id_number;
 echo $destination_number."<br>";

$context=$xml->callflow->caller_profile->context;
 echo $context."<br>";

$start_stamp=$xml->variables->start_epoch;
$epoch = trim($start_stamp); 
echo "epoch is....".$epoch."<br>";
date_default_timezone_set('Asia/Kolkata');
$newdate=date('Ymd', $epoch);

$newdate= (string)date('Ymd_H_i_s', $epoch);
echo "newdate is...".$newdate."<br>";
$start=date('r', $start_stamp."<br>");
echo $start."<br>";

$answer_stamp=$xml->variables->answer_epoch;
$answer=date('r', $answer_stamp."<br>");
echo $answer."<br>";

$end_stamp=$xml->variables->end_epoch;
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

 $d= date("Ymd");
//$filename="$callee_id_number"."_"."$start"."_"."$d".".txt";
$filename="$newdate"."$caller_id_number".".txt";
echo $filename;
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

