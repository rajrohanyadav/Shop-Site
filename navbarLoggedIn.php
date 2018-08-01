<!-- Navigation bar for the webpages in which the user has logged in like cart, settings, home -->
<?php
	require_once('connection.php');
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#loggedInNavbarToggle">
        	<span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
            <div class="navbar-brand">
                <a href="<?php echo $siteRoot; ?>/home.php">E-Store</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="loggedInNavbarToggle">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $siteRoot; ?>/cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Hi! <?php 
					$email = $_SESSION['email'];
					$query = "SELECT Name FROM persons WHERE Email='$email'";
					$result = $conn->query($query);
					$row = mysqli_fetch_array($result);
					$username = $row['Name'];
					echo $username;
				 ?> </a></li>
                 <li><a href="<?php echo $siteRoot; ?>/settings.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Settings</a></li>
                <li><a href="logOut.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>