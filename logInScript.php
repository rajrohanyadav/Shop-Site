<?php
	require_once('connection.php');
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$email = $conn->real_escape_string($email);
		$email = strip_tags($email);
		
		$password = $_POST['password'];
		$password = $conn->real_escape_string($password);
		$password = strip_tags($password);
		$password = MD5($password);
		
		$query = "SELECT Email, Password FROM persons WHERE Email='$email' AND Password='$password'";
		$result = $conn->query($query);
		$num = mysqli_num_rows($result);
		if($num == 0){
			header('Location: error.php');
		}else{
			$row = mysqli_fetch_array($result);
			session_start();
			$_SESSION['email'] = $row['Email'];
			header('Location: home.php');
		}
	}
?>