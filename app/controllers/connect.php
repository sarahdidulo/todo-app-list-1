<?php

$host = "db4free.net";
$username = "sarahdidulo";
$password = "newpass2019";
$dbname = "todoapplist";

$conn = mysqli_connect($host, $username, $password, $dbname);

if($conn){
	echo "connected successfully";
} else if (!$conn){
	die( "Connection failed. " . mysqli_error($conn));
}


?>