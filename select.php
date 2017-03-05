<?php
$host = "localhost";
$user = "test";
$password = "123456";
$db = "test";

if (!$conn = mysql_connect ($host, $user, $password)){
                echo "<h2>MySQL Error!</h2>";
        exit;
}

mysql_select_db ($db);

$query = "SELECT * FROM `record`";
$res = mysql_query($query);
while($row = mysql_fetch_array($res))
{
echo "ID: ".$row['id']."<br>\n";
echo "Name: ".$row['record_name']."<br>\n";
echo "Record: ".$row['record_value']."<br><hr>\n";
}

?>
