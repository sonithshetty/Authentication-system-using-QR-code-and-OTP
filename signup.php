<?php
        session_start();
	if(isset($_SESSION["id"])){
		header("location: login.php");
	}
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signup.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>

<div class="header">
  <h1>Sign Up</h1>
  <p>It's quick and easy.</p>
</div>

<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="login.php">Login</a>
  <a href="#" class="right">Contact Us</a>
</div>

<div class="container-fluid decor_bg" id="content">
            <div class="row1">
                <div class="bg">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2><strong>SIGN UP:</strong></h2>
                        <form action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
              </div>      
            </div>
        </div>

<div class="footer">
  <h4>Fill in all the details mentioned in the form</h4>
</div>

</body>
</html>
