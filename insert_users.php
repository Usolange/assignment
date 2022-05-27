<?php
session_start();

include('connection.php');

  print  $fname = $_POST['fname'];
   print $lname = $_POST['lname'];
   print $email = $_POST['email'];
  print  $password = $_POST['password'];

    $sql = mysqli_query($conn,"INSERT INTO `users`(`fname`, `lname`, `email`, `password`) VALUES ('$fname','$lname','$email','$password')");
     if ($sql) {
        print "Data inserted";
         header("location:cont.php");
     }else {
         echo "Error occured";
     }

?>