<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $conn = mysqli_connect('localhost','root','','php_assignment');
// if($conn){

//     echo "aFGUIJOKSD";
// }else{
//     echo "wap";
// }
?>