<?php 
	$mysql = new mysqli ("localhost", "root", "vodoley14", "users");
	$mysql -> query ("SET NAMES 'utf8");
	$id = $_GET['id'];
	$mysql -> query ("DELETE FROM `users_table` WHERE `id` = ".$id."");
	$mysql -> close ();
	header('Location: index.php');
 ?>