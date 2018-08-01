<?php
	require_once('connection.php');
	if(isset($_GET['id']) && is_numeric($_GET['id'])){
		$id = $_GET['id'];
		$query = "UPDATE items SET Cart = 0 WHERE Id = ".$id;
		$result = $conn->query($query);
		if($result){
			header('Location: cart.php');
			exit;
		}else{
			echo "Error while deleting records: ".$conn->error;
		}
	}else{
		echo "Please don't try this";
	}
?>