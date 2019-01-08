<?php

require_once "./connect.php";

$new_task = $_POST['name'];

$sql = "INSERT INTO tasks(name) VALUES('$new_task')";

$result = mysqli_query($conn, $sql);

if($result === TRUE){
	echo "Item added";
} else if (!$result){
	echo "Error";
}

mysqli_close($conn);


?>