<?php
	require_once('siteRoot.php');
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location: index.php');
	}
?>
<!Doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home | E-Store</title>
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
        	<div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	<div class="panel-title">Phone 1</div>
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone1.jpg" class="img-responsive" alt="Item Image">
                    	<p>HTC, 5.5" Scratch-less Screen, 1.8 GHz Octa Core Processor, 2 GB RAM, Rs. 20000/-</p>
                    </div>
                    <div class="panel-footer">
                    	<a href="cartScript.php?id=1&add=add" name="add" value="add" class="btn btn-primary btn-block">
                        	<?php
								require_once('functions.php');
								echo message(1);
							?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	<div class="panel-title">Phone 2</div>
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone2.jpg" class="img-responsive" alt="Item Image">
                    	<p>LENOVO, 5.5" Full HD Screen, 1.2 GHz Quad Core Processor, 1 GB RAM, Rs. 15000/-</p>
                    </div>
                    <div class="panel-footer">
                    	<a href="cartScript.php?id=2&add=add" name="add" value="add" class="btn btn-primary btn-block">
                        	<?php
								require_once('functions.php');
								echo message(2);
							?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	<div class="panel-title">Phone 3</div>
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone3.jpg" class="img-responsive" alt="Item Image">
                    	<p>LG, 5" Screen, 1.3 GHz Octa Core Processor, 2 GB RAM, Rs. 12000/-</p>
                    </div>
                    <div class="panel-footer">
                    	<a href="cartScript.php?id=3&add=add" name="add" value="add" class="btn btn-primary btn-block">
                        	<?php
								require_once('functions.php');
								echo message(3);
							?>
                        </a>
                    </div>
                </div>
            </div>	
        </div>
        <div class="row">
        	<div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	<div class="panel-title">Phone 4</div>
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone4.jpg" class="img-responsive" alt="Item Image">
                    	<p>Microsoft Lumia, 5" Screen, 1.2 GHz Dual Core Processor, 1 GB RAM, Rs. 17000/-</p>
                    </div>
                    <div class="panel-footer">
                    	<a href="cartScript.php?id=4&add=add" name="add" value="add" class="btn btn-primary btn-block">
                        	<?php
								require_once('functions.php');
								echo message(4);
							?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	<div class="panel-title">Phone 5</div>
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone5.jpg" class="img-responsive" alt="Item Image">
                    	<p>IPhone 5S, 5" Full HD Screen, 1.8 GHz Octa Core Processor, 1 GB RAM, Rs. 27000/-</p>
                    </div>
                    <div class="panel-footer">
                    	<a href="cartScript.php?id=5&add=add" name="add" value="add" class="btn btn-primary btn-block">
                        	<?php
								require_once('functions.php');
								echo message(5);
							?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	<div class="panel-title">Phone 6</div>
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone6.jpg" class="img-responsive" alt="Item Image">
                    	<p>SAMSUNG, 1.5" Screen, Dual SIM, Bluetooth, FM Radio, Rs. 2700/-</p>
                    </div>
                    <div class="panel-footer">
                    	<a href="cartScript.php?id=6&add=add" name="add" value="add" class="btn btn-primary btn-block">
                        	<?php
								require_once('functions.php');
								echo message(6);
							?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>