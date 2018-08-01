<?php
	require_once('siteRoot.php');
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location: index.php');
	}
	error_reporting(0);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Settings | E-Store</title>
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
            	<h3>Change Password:</h3>
                <form role="form" method="POST" action="settingsScript.php">
                	<div class="form-group">
                    	<input name="password_old" type="password" class="form-control" required="required" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                    	<input name="password" type="password" class="form-control" required="required" placeholder="New Password">
                    </div>
                    <div class="form-group">
                    	<input name="password1" type="password" class="form-control" required="required" placeholder="Retype Password">
                    </div>
                    <div class="form-group">
                    	<button name="submit" type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                    <?php
						echo "<b>".$_GET['error']."</b>";
					?>
                </form>
            </div>
        </div>
    </div>        
</body>
</html>