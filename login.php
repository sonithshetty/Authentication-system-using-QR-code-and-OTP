<?php
        session_start();
	require "./includes/common.php";
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register To Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>

<div class="header">
  <h1>Login Page</h1>
  <p>Enter your Email address and choose how you want to login your account</p>
</div>

<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="signup.php">Sign Up</a>
  <a href="#" class="right">Contact Us</a>
</div>

<div class="container-fluid decor_bg" id="content">
            <div class="row1">
                <div class="bg">
                <div class="container">
                    <div class="col-md-4 col-md-offset-3 ">
                        
                        
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN:</h4>
                                <?php 
                                    if(isset($_GET['error'])) {
                                        ?>  <span class='red'><?php echo $_GET['error'];?></span><?php
}
                                ?>
                            </div>
                            <div class="panel-body">
                                
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email ID" name="email"  required = "true">
                                    </div>
                                    
                                    <button  class="btn btn-primary-block" style="width:49%">Login Using O.T.P</button>
                                    <button  class="btn btn-primary-block" style="width:49%"><a href="QRcode.php">Login Using QR Code</a></button><br>
                                    
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
                    </div>
                

<div class="footer">
  <h4>Select one of the following for the authentication process</h4>
</div>

</body>
</html>
