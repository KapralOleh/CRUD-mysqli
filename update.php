<?php 
function printResult ($result_set) {
	echo "<table>";
	echo "<tr><th>ID</th><th>Name</th><th>Date</th><th>HTML</th></tr>";
	while (($row = $result_set->fetch_assoc()) != false) {
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td id='name'>".$row['name']."</td>";
		echo "<td id='html'>".$row['html']."</td>";
		echo "</tr>";
	}
	echo "</table>";
}	
	$mysql = new mysqli ("localhost", "root", "vodoley14", "users");
	$mysql -> query ("SET NAMES 'utf8");
	$id = $_GET['id'];
	$result_set = $mysql -> query ("SELECT * FROM `users_table` WHERE `id` = ".$id."");
	if (isset($_POST['update'])) {
		$nameUp = $_POST['nameToUpdate'];
		$htmlUp = htmlspecialchars($_POST['htmlToUpdate']);
		$mysql -> query ("UPDATE `users_table` SET `name` =  '".$nameUp."', `html` =  '".$htmlUp."',`update` = '".time ()."' WHERE `id` = ".$id."");
		header('Location: index.php');
	}
	printResult ($result_set);
	$mysql -> close ();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Update</title>
 	<style>
	 	table {
	    border-collapse: collapse;
		}
		td {
			border: 1px solid black;
		}
		#delete {
			background: rgba(255, 0, 0, 0.8);
			color: #fff;
		}
		#update {
			background: olive;
			color: #fff;
		}
 	</style>
 </head>
 <body>
 <h2>Edit row</h2>
 	<form id="updateForm" action="" method="POST">
 		<input id="nameText" type="text" name="nameToUpdate" placeholder="Your name"><br>
 		<textarea name="htmlToUpdate" id="htmlText" cols="19" rows="5" placeholder="Your update text"></textarea><br>
 		<input name="update" type="submit" value="Update">
 	</form>
 	<script>
 	  nameText.value = document.getElementById("name").innerHTML;
 	  htmlText.value = document.getElementById("html").innerHTML;
 	</script>
 </body>
 </html>