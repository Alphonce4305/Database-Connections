<?php

$$servername = "localhost"; //you can use your server IP address or 127.0.0.1
$host_username = "root";
$db_name = ""; //use your live database name
$db_pass = ""; //your DB password
$db_port = "3306"; //33060 tsl/ssl
$db_socket = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name", $db_port ,$host_username, $db_pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
?>
