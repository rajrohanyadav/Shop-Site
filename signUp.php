<?php
	require_once('siteRoot.php');
	session_start();
	if(isset($_SESSION['email'])){
		header('Location: home.php');
	}
	error_reporting(0);
?>
<!doctype html>
<html lang="en">
<head>
	<title>Sign Up | E-Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
	require_once('navbar.php');
?>
    <!-- Main Body of the page -->
    <div class="container-fluid" style="margin-top: 80px;">
    	<div class="row">
        	<center>
        		<div class="col-md-8" style="padding-bottom: 20px;">
            		<img class="img-responsive img-rounded" alt="A random image to populate the page" src="assets/img/signUpPageImage.jpg">
            	</div>
            </center>
            <div class="col-md-4">
            	<h2>SIGN UP</h2>
                <form role="form" action="signUpScript.php" method="post">
                	<div class="form-group">
                		<input type="text" class="form-control" name="username" placeholder="Name" required="true">
                    </div>
                    <div class="form-group">
                    	<input type="email" class="form-control" name="email" placeholder="Email" required="true"><?php echo $_GET['m1'];?>
                    </div>
                    <div class="form-group">
                    	<input type="password" class="form-control" name="password" placeholder="Password" required="true">
                    </div>
                    <div class="form-group">
                    	<input type="number" class="form-control" name="contact" placeholder="Contact" required="true"><?php echo $_GET['m2']; ?>
                    </div>
                    <div class="form-group">
                    	<input type="text" class="form-control" name="city" placeholder="City" required="true">
                    </div>
                    <div class="form-group">
                    	<textarea class="form-control" name="address" placeholder="Address" required></textarea>
                    </div>
                    <div class="form-group pull-right">
                    	<button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
    <!-- Main body finished -->
<?php
	require_once('footer.php');
?>
<?php
	require_once('logInModal.php');
?>
</body>
</html>