<?php
	error_reporting(0);
	require_once('connection.php');
	function inputVerify($input, $conn){
		$con = $conn;
		$input = mysqli_real_escape_string($con, $input);
		$input = strip_tags($input);
	}
	if(isset($_POST['submit'])){
		$name = $_POST['username'];
		inputVerify($name, $conn);
		$email = $_POST['email'];
		inputVerify($email, $conn);
		$password = $_POST['password'];
		inputVerify($password, $conn);
		$password = MD5($password);
		$contact = $_POST['contact'];
		inputVerify($contact, $conn);
		$address = $_POST['address'];
		inputVerify($address, $conn);
		$city = $_POST['city'];
		inputVerify($city, $conn);
		
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		$regex_num = "/^[789][0-9]{9}$/";
		
		$query = "SELECT * FROM persons WHERE `Email` = '{$email}'";
		$result = $conn->query($query);
		$num = mysqli_num_rows($result);
		
		if($num != 0){
			$m = "<span style='color: red'>Email Already Exists</span>";
			header('Location: signUp.php?m1='.$m);
		}else if(!preg_match($regex_email, $email)){
			$m = "<span style='color:red;'>Not a valid Email address</span>";
			header('Location: signUp.php?m1='.$m);
		}else if(!preg_match($regex_num, $contact)){
			$m = "<span style='color:red;'>Not a valid Phone number</span>";
			header('Location: signUp.php?m2='.$m);
		}else{		
			$query = "INSERT INTO persons (`Name`,`Email`,`Password`,`Contact`,`Address`,`City`) VALUES ('{$name}', '{$email}', '{$password}', '{$contact}', '{$address}', '{$city}')";
			if($conn->query($query)){
				session_start();
				$_SESSION['email'] = $email;
				header('Location: home.php');
			}else{
				echo "Error while inserting the records: ".$conn->error;
			}
		}
	}
?>