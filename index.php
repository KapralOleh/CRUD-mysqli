<?php 
function printResult ($result_set) {
	echo "Length: ".$result_set->num_rows."<br />";
	echo "<table>";
	echo "<tr><th>ID</th><th>Name</th><th>Date</th><th>HTML</th><th>UpdateOn</th><th>Update</th><th>DELETE</th></tr>";
	while (($row = $result_set->fetch_assoc()) != false) {
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".date("F j, Y, g:i a",$row['date'])."</td>";
		echo "<td>".$row['html']."</td>";
		echo "<td>".date("F j, Y, g:i a",$row['update'])."</td>";
		echo "<td><a href='update.php?id="."$row[id]"."'><button id='update'>UPDATE</button></a></td>";
		echo "<td><a href='delete.php?id="."$row[id]"."'><button id='delete'>DELETE</button></a></td>";

		echo "</tr>";
	}
	echo "</table>";
}

	$mysql = new mysqli ("localhost", "root", "vodoley14", "users");
	// if (!$mysql) {
	// 	echo "dont work";
	// } else {
	// 	echo "work";
	// }
	$mysql -> query ("SET NAMES 'utf8");
	$result_set = $mysql -> query ("SELECT * FROM `users_table`");
	if (isset($_POST['add'])) {
		// print_r($_POST);
		$name = $_POST['name'];
		$html = htmlspecialchars($_POST['html']);
		$mysql -> query ("INSERT INTO `users_table` (`name`,`date`,`html`,`update`) VALUES ('".$name."','".time ()."','".$html."','".time ()."')");
		header('Location: index.php');
	}
	printResult ($result_set);
	$mysql -> close ();
 ?>
<?php
	date_default_timezone_set("Europa/Lviv");
	echo "The time is " . date("h:i:sa");
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
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
		#updateForm {
			display: none;
		}
 	</style>
 	<meta charset="UTF-8">
 	<title>CRUD</title>
 </head>
 <body>
 <hr>
 	<form action="" method="POST" style="float:left">
 		<input type="text" name="name" placeholder="Your name"><br>
 		<textarea name="html" id="" cols="19" rows="5" placeholder="Your text"></textarea><br>
 		<input name="add" type="submit" value="Add">
 	</form>
 </body>
 </html>