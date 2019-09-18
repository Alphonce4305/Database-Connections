<?php

/***PROCEDURAL ***/
// perform db connection

$host_server = "localhost"; //you can use your server IP address or 127.0.0.1
$host_username = "root";
$db_name = ""; //use your live database name
$db_pass = ""; //your DB password
$db_port = "3306"; //33060 tsl/ssl
$db_socket = "";

// peroform DB connection using myqli plugin
// Here you can use any other plugins such pdo

$conn = new mysqli($host_server, $host_username, $db_pass, $db_name, $db_port ,$db_socket);

if (!$conn) {

    echo "Error: Unable to connect to MySQL." . PHP_EOL;

}elseif ($conn) {

	echo "<b>Server Connection Configurations : </b> </br>A proper connection to MySQL was made properly!" . PHP_EOL;
	echo "</br>";
	echo "Host information:" . mysqli_get_host_info($conn) . PHP_EOL;

}
mysqli_close($conn);//close connection
?>

