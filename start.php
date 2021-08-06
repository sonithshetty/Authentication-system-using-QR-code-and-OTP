<!DOCTYPE html>
<html lang="en">
<head>
<title>MINI PROJECT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
    background-image: url("./img/signup page.png");
  /*background-color: #aaa;*/
  background-size: 415px 200px;
  width: 100%;
  padding: 20px; 
}
.fakeimg1 {
    background-image: url("./img/otppage.png");
    /* background-color: #aaa; */
    background-size: 700px 300px;
    width: 100%;
    padding: 20px;
    background-repeat: no-repeat; 
}
.fakeimg2{
    background-image: url("./img/qrcode page.png");
    /* background-color: #aaa; */
    background-size: 700px 300px;
    width: 100%;
    padding: 20px;
    background-repeat: no-repeat;
}
   

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
.fa {
  padding: 20px;
  font-size: auto;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 9px 5px;
  border-radius: 70%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

</style>
</head>
<body>

<div class="header">
  <h1>E-Authentication System with QR Code & OTP</h1>
  <p>A <b>responsive</b> tool to login into your account more securely</p>
</div>

<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="signup.php">Signup</a>
  <a href="login.php">Login</a>
  <a href="#" class="right">Contact Us</a>
</div>

<div class="row">
  <div class="side">
      <h2><strong>About Us:</strong></h2>
      <h3><ins>Name & Roll Nos</ins>:-</h3>
    <p>Vedant Patil - 36</p>
    <p>Darshan Senta - 44</p>
    <p>Sonit Shetty - 45</p>
    
    <h3><b><ins>Registrations</ins>:</b></h3>
    <p>To access the system, user need to first register by entering the basic registration details like name, email id, mobile number, city, address etc</p>
    
    <div class="fakeimg" style="height:200px;"></div>
    
    
    <h3><b><ins>Benefits</ins>:</b></h3>
    <p>Helps users to login into their account more securely.</p>
    <p>Stalker won’t be able to collect the password via shoulder surfing.</p>
    <p>Complex password technique with easy user interface.</p>
    
  </div>
  <div class="main">
    <h2>E-Authentication System is a two way authentication.</h2>
    <h5>OTP Verification:</h5>
    <div class="fakeimg1" style="height:300px;"></div>
    
    <p>If user select’s OTP authentication, then system will send an OTP in the form of SMS on the registered mobile number which was provided by the user at the time of registration.</p>
    <br>
    <h2></h2>
    <h5>Scan QR Code: </h5>
    <div class="fakeimg2" style="height:300px;"></div>
    
    <p>User need to scan the QR Code which is generated in backend using system's qr code scanner.</p>
  </div>
</div>

<div class="footer">
    <h4><a href="#">Privacy Policy </a><a href="#">Term & Conditions </a></h4>
 
 
    <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
 
  
 
 </div>
</div>

</body>
</html>
