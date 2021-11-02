<?php 
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "form";

  $con = new mysqli($host,$user,$pass,$db);
  if(!$con){
    echo "There are some problems while connecting the database";
  }

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  $query = "INSERT INTO `Black_Tech_Form`(`first_name`, `last_name`, `email`, `phone`, `address`) VALUES ('$firstname','$lastname','$email',$phone,'$address')";
  
  $insert = mysqli_query($con, $query);
  
  if(!$insert){
    echo "There are some problems while inserting data";
  } else {
      echo "Form submitted successfully.  Thanks you buddy! We will get in touch.";
  }
?>