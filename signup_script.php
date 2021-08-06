<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query1 = "SELECT * FROM users WHERE email='$email'";
  
  
  
  
    
    $query2 = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    
    
    
     $result = mysqli_query($con, $query1);
    if(mysqli_num_rows($result) > 0){
        // email already exists
        echo "Email id already exists. Try another";
    }else{
        // perform query operation
        $result = mysqli_query($con, $query2);
        $_SESSION["email"] = $email;
        

        // redirect to login page
        ?> <script>
            window.location.href="http://localhost/project_solution_PHP/login.php";
        </script><?php
        
    }
  
?>