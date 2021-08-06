<?php

require("includes/common.php");

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

// Query checks if the email and password are present in the database.
$query = "SELECT id, email FROM users WHERE email='" . $email . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "Please enter correct E-mail id ";
  header('location: login.php?error=' . $error);
  
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  ?><script>
            window.location.href="http://localhost/Project/otp.php";
        </script>
      <?php
}
?>

