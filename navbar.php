<!-- Navigation bar for the website to be used in index, About Us, Contact Us, Sign Up pages -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbarToggle">
        	<span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo $siteRoot; ?>/index.php">E-Store</a>
        </div>
        <div class="collapse navbar-collapse" id="mainNavbarToggle">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $siteRoot; ?>/signUp.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Sign Up</a></li>
                <li><a href="#logInWindowModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Log In</a></li>
                <li><a href="<?php echo $siteRoot; ?>/aboutUs.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> About Us</a></li>
                <li><a href="<?php echo $siteRoot; ?>/contactUs.php"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>