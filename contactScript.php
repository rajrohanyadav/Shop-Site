<?php
	require_once('connection.php');
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$query = "INSERT INTO contact (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message')";
		if($conn->query($query)){
			echo "Your message has been saved and we will get back to you shortly. Go back to the website <a href='index.php'>here</a>";
		}else{
			echo "Error in registering your message".$conn->error;
		}
	}
?>