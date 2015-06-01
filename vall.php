<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "ashish123";
$dbname = "calls";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT *
FROM final_cdr
ORDER BY final_cdr.index DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table>";
    while($row = mysqli_fetch_assoc($result)) {
               echo "<tr><td>" .$row['index'] . "</td><td>" ."</td><td>" .$row['caller_id_number'] . "</td><td>" . $row['destination_number'] ."</td><td>" . $row['answer_call_stamp'] ."</td><td>" . $row['end_call_stamp'] ."</td><td>" . $row['billsec_seconds'] . "</td></tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 

</body>
</html>