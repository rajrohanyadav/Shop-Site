<?php
	require_once('siteRoot.php');
	require_once('connection.php');
	session_start();
	if(isset($_SESSION['email'])){
		header('Location: home.php');
	}
?>
<!Doctype html>
<html lang="en">
<head>
	<title>E-Store</title>
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
	<div class="container-fluid" style="margin-top: 80px;">
    	<div class="row">
        	<div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	Phone 1
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone1.jpg" class="img-responsive">
                    	<p>HTC, 5.5" Scratch-less Screen, 1.8 GHz Octa Core Processor, 2 GB RAM, Rs. 20000/-</p>
                    </div>
                    <div class="panel-footer">
                    	<button type="button" class="btn btn-primary btn-block" data-target="#logInWindowModal" data-toggle="modal">Order Now!</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	Phone 2
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone2.jpg" class="img-responsive">
                    	<p>LENOVO, 5.5" Full HD Screen, 1.2 GHz Quad Core Processor, 1 GB RAM, Rs. 15000/-</p>
                    </div>
                    <div class="panel-footer">
                    	<button type="button" class="btn btn-primary btn-block" data-target="#logInWindowModal" data-toggle="modal">Order Now!</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	Phone 3
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone3.jpg" class="img-responsive">
                    	<p>LG, 5" Screen, 1.3 GHz Octa Core Processor, 2 GB RAM, Rs. 12000/-</p>
                    </div>
                    <div class="panel-footer">
                    	<button type="button" class="btn btn-primary btn-block" data-target="#logInWindowModal" data-toggle="modal">Order Now!</button>
                    </div>
                </div>
            </div>	
        </div>
        <div class="row">
        	<div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	Phone 4
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone4.jpg" class="img-responsive">
                    	<p>Microsoft Lumia, 5" Screen, 1.2 GHz Dual Core Processor, 1 GB RAM, Rs. 17000/-</p>
                    </div>
                    <div class="panel-footer">
                    	<button type="button" class="btn btn-primary btn-block" data-target="#logInWindowModal" data-toggle="modal">Order Now!</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	Phone 5
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone5.jpg" class="img-responsive">
                    	<p>IPhone 5S, 5" Full HD Screen, 1.8 GHz Octa Core Processor, 1 GB RAM, Rs. 27000/-</p>
                    </div>
                    <div class="panel-footer">
                    	<button type="button" class="btn btn-primary btn-block" data-target="#logInWindowModal" data-toggle="modal">Order Now!</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	Phone 6
                    </div>
                	<div class="panel-body">
                    	<img src="assets/img/phone6.jpg" class="img-responsive">
                    	<p>SAMSUNG, 1.5" Screen, Dual SIM, Bluetooth, FM Radio, Rs. 2700/-</p>
                    </div>
                    <div class="panel-footer">
                    	<button type="button" class="btn btn-primary btn-block" data-target="#logInWindowModal" data-toggle="modal">Order Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
	require_once('footer.php');
	require_once('logInModal.php');
?>
</body>
</html>