<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location: index.php');
	}
	require_once("connection.php");
	
	$old_pass = $_POST['password_old'];
	$old_pass = $conn->real_escape_string($old_pass);
	$old_pass = strip_tags($old_pass);
	$old_pass = MD5($old_pass);
	
	$new_pass = $_POST['password'];
	$new_pass = $conn->real_escape_string($new_pass);
	$new_pass = strip_tags($new_pass);
	$new_pass = MD5($new_pass);
	
	$new_pass1 = $_POST['password1'];
	$new_pass1 = $conn->real_escape_string($new_pass1);
	$new_pass1 = strip_tags($new_pass1);
	$new_pass1 = MD5($new_pass1);
	
	$query = "SELECT `Email`, `Password` FROM persons WHERE `Email` = '{$_SESSION['email']}'";
	$result = $conn->query($query);
	$row = mysqli_fetch_array($result);
	$orig_pass = $row['Password'];
	if($new_pass != $new_pass1){
		header('Location: settings.php?error="The two passwords don\'t match"');
	}else{
		if($old_pass == $orig_pass){
			$query = "UPDATE persons SET `Password` = '{$new_pass}' WHERE `Email` = '{$_SESSION['email']}'";
			$conn->query($query);
			header('Location: settings.php?error="Password Updated"');
		}else{
			header('Location: settings.php?error="Wrong Password"');
		}
	}
?>