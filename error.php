<?php
	require_once('siteRoot.php');
	require_once('navbar.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Error Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 60px;">
		<h3>Please enter correct email id and password.</h3>
        <p>Return to the site <a href="<?php echo $siteRoot ?>/index.php">here</a>.</p>
    </div>
    <?php
		require_once('logInModal.php');
	?>
</body>
</html>