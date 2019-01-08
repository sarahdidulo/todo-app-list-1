<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<h1>To Do List</h1>
	<form>
	<input id = "input_task" type="text" name="input_data">
	<button id = "add_task">Add</button>
	</form>



	<!-- jquery -->
	<script
  	src="https://code.jquery.com/jquery-3.3.1.min.js"
  	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>
	
	<script>
	$('#add_task').click( function (){
		const newTask = $('#input_task').val();

		$.ajax({
			method: 'POST',
			url: 'app/controllers/add_task.php',
			data: {name : newTask},
		}).done(
			console.log("added task")
		);
	});

	</script>

	<h2>Task List</h2>
	<ul id = "list">

		<?php

			require_once "app/controllers/connect.php";
			$sql = "SELECT * FROM tasks";

			$result = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_assoc($result)){
				echo "<li id = " . $row["id"] . ">" . $row["name"] . "on id " . $row["id"] . " <button id = " . $row["id"] . "> delete</button> </li>";
			}

			mysqli_close();
			
		?>
		
	</ul>

	<script>
		
		$('').click( function(){

		$list_id = $row["id"];

		$sql = "DELETE name FROM tasks WHERE id = $list_id";

		})

	</script>





	
</body>
</html>