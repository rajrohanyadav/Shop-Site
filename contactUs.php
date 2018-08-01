<?php
	require_once('siteRoot.php');
?>
<!doctype html>
<html lang="en">
<head>
    <title>Contact Us | E-Store</title>
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
        	<div class="col-md-9">
            	<h2>LIVE SUPPORT</h2>
                <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat quis dui ac aliquet. Cras sollicitudin pharetra odio, id tincidunt turpis elementum viverra. Morbi id pharetra turpis. Mauris non massa porttitor, aliquam tellus ultricies, convallis lorem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Proin vulputate cursus enim, ac vestibulum dui mollis quis. Curabitur a pretium augue, id cursus nulla. Maecenas ultrices elementum scelerisque. Curabitur turpis neque, dignissim vitae condimentum quis, euismod ut urna. In tempor dictum odio lacinia accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            </div>
            <div class="col-md-3" style="padding-top: 60px;">
            	<div class="container-fluid">
            		<img src="Assets/img/callSupport.jpg" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-8" style="padding: 10px 10px 10px 20px;">
            	<h2>CONTACT US</h2>
                <form action="contactScript.php" method="post" role="form">
                	<div class="form-group">
                		<label>Name:</label><br>
                    	<input name="name" required="required" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                		<label>Email:</label><br>
                    	<input name="email" required="required" type="email" class="form-control">
                    </div>
                    <div class="form-group">
                		<label>Message:</label><br>
                   		<textarea name="message" required="required" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                    	<button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4" style="padding-top: 60px; padding-left: 20px;">
            	<h2>Company Information:</h2>
                <address>
                	500 Lorem Ipsum Dolor Sit,<br>
                    22-56-2-9 Sit Amet, Lorem,<br>
                    USA<br>
                    Phone: (00)222 666 444<br>
                    Fax: (000)000 00 00 0<br>
                    Email: info@mycompany.com<br>
                    Follow on: Facebook, Twitter<br>
                </address>
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