<?php
    session_start();
    require './includes/common.php';
    // check if logged in
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>QR Code Scan Verification</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/qrcode.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
    
    
</head>
<body>

<div class="header">
  <h1>QR Code Scan Verification</h1>
  <p>Click the button and QR code will be generated for the provided link. </p>
</div>

<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="signup.php">Sign Up</a>
  <a href="#">About Us</a>
  <a href="logout_script.php" class="right">Logout</a>
</div>

<div class="container-fluid decor_bg" >
            <div class="row">
                <div class="column side" style="background-color: #bbb;"></div>
                <div class="column middle" style="background-color:#ffffff;">
                    
                <div class="container-fluid">
            	<div class="text-center"><br><br>

    	        <!-- Get a Placeholder image initially,
	        this will change according to the
	            data entered later -->
	       <img src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
		class="qr-code img-thumbnail img-responsive" />
               </div>

        	<div class="form-horizontal text-center">
	      <div class="form-group text-center">
		<label class="control-label col-sm-4"
		for="content">
		Content:
		</label>
		<div class="col-sm-5">

		<!-- Input box to enter the
			required data -->
		<input type="text" size="60"
			maxlength="60" class="form-control"
                        id="content"  value="lifestylestore.infinityfreeapp.com" disabled/>
		</div>
	      </div>
	        <div class="form-group">
		<div class="col-sm-offset-1 col-sm-10">

		<!-- Button to generate QR Code for
		the entered data -->
		<button type="button" class=
			" button" id="generate">
			Generate
		</button>
		</div>
	         </div>
	</div>
</div>
   
  
  
  
  
  
                </div>
                <div class="column side" style="background-color: #bbb;"></div>
</div>
</div>
                
<script src=
	"https://code.jquery.com/jquery-3.5.1.js">
</script>

<script>
	// Function to HTML encode the text
	// This creates a new hidden element,
	// inserts the given text into it
	// and outputs it out as HTML
	function htmlEncode(value) {
	return $('<div/>').text(value)
		.html();
	}

	$(function () {

	// Specify an onclick function
	// for the generate button
	$('#generate').click(function () {

		// Generate the link that would be
		// used to generate the QR Code
		// with the given data
		let finalURL =
'https://chart.googleapis.com/chart?cht=qr&chl=' +
		htmlEncode($('#content').val()) +
		'&chs=160x160&chld=L|0'
        
                console.log($('#content').val());

		// Replace the src of the image with
		// the QR code image
		$('.qr-code').attr('src', finalURL);
	});
	});
</script> 
    
<div class="footer">
  <h4></h4>
</div>

</body>
</html>
