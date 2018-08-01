<?php
	session_start();
	require_once('connection.php');
	if(isset($_GET['add'])) {
		$id = $_GET['id'];
		echo $id;
		$value = 1;
		$query = "UPDATE items SET Cart='$value' WHERE Id = ".$id;
		echo $query;
		if($conn->query($query)) {
			header('Location: home.php');
		}
	}
?>