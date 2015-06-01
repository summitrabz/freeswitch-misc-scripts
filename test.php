<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>


<?php

$servername = "localhost";
$username = "root";
$password = "ashish123";
$dbname = "calls";

$conn = mysql_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: "."connection not established");
}


$raw = mysql_query("SELECT * FROM final_cdr");
        $allresults = mysql_fetch_array($raw);
        $field = mysql_query("SELECT * FROM final_cdr");
        $num_fields = mysql_num_fields($raw);   
        $num_rows = mysql_num_rows($raw);   
        $i = 1;

            print "<table border=1>\n";
            while ($i < $num_fields)
            {
                echo "<tr>";
                echo "<b><td>" . mysql_field_name($field, $i) . "</td></b>";
                //echo ": ";
                echo '<td><font color ="red">' . $allresults[$i] . '</font></td>';
                $i++;
                echo "</tr>";
                //echo "<br>";
            }
            print "</table>";
            ?>


</body>
</html>