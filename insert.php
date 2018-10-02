<?php
$host = "localhost";
$user = "test";
$password = "1237777";
$db = "test";

//check if db connection is ok
if (!$conn = mysql_connect ($host, $user, $password)){
		echo "<h2>MySQL Connection error!</h2>";
	exit;
}

mysql_select_db ($db);

$name = $_POST ['name'];
$value = $_POST ['record'];

$result = mysql_query("INSERT INTO record (record_name,record_value) VALUES ('$name', '$value')");

        if($result == 'true')
                {echo "Data was added";}
        else{echo "OOOOPSSS something went wrong";}

?>
