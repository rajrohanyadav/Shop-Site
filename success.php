<?php
	error_reporting(0);
	require_once('siteRoot.php');
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location: index.php');
	}
?>
<?php
	$id = $_POST['itemsid'];
	$to = $_SESSION['email'];
	$subject = "Test Mail";
	$message = "Your order has been confirmed. Your items will be delievered to you shortly!";
	mail($to, $subject, $message, "");
	
	$to_owner = "rajrohanyadav@gmail.com";
	$subject_owner = "New Order";
	$message_owner = "New Order made by ".$to.".<br>The Ids of the ordered items are ";
	$message_owner = $message_owner.$_POST['itemsid'];
	mail($to_owner, $subject_owner, $message_owner, "");
?>
<!Doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Success | E-Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
	require_once('navbarLoggedIn.php');
?>

	<div class="container-fluid" style="margin-top: 80px;">
    	<div class="row">
            <div class="col-md-4 col-md-offset-4">
            	<center>
                    <p>Thankyou for ordering from E-Store. The order shall be delivered to you shortly.</p>
                    <hr class="dl-horizontal">
                    <p>Continue Shopping <a href="home.php" style="color: rgba(131,134,46,0.83); font-weight:500;">here</a></p>
                </center>
            </div>
    	</div>
    </div>
</body>
</html>