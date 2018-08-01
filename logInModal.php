<!-- Login modal for the login link in the nav bar and the login link in the footer section -->
<div class="modal fade" id="logInWindowModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Log In</h3>
            </div>
            <div class="modal-body">
                <h5>Don't have an account? <a href="signUp.php">Register</a></h5>
                <form role="form" action="logInScript.php" method="post">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="E-mail" required="true">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password" required="true">
                    </div>
            </div>
            <div class="modal-footer">
                <button name="submit" type="submit" class="btn btn-primary btn-block">Log In</button>
                </form>
                <h5><a href="#">Forgot Password*</a></h5>
            </div>
        </div>
    </div>
</div>