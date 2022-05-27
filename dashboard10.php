<?php
 session_start();
 require "connection.php";
 $email = $_SESSION['email'];
// user id
$data = mysqli_query($conn,"SELECT * FROM `users` WHERE `email` = '$email'");
$user = mysqli_fetch_object($data);
// store id in vars
$id = $user->id;
$img = mysqli_query($conn,"SELECT * FROM `profile` WHERE `user_id` = '$id'");
$profile = mysqli_fetch_object($img);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        li{
            list-style-type:none;
        }
      li a{
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-between py-1 p-5" style="background-color:tomato;">
        <h5 style="color:black;font-weight:bold;"> Assignment</h5>
        <div class=" rounded bg-success text-end" style="margin-left:1350px">
        <h4 style="color:white;font-family:perpetua; padding:6px;">
        <i class="fa fa-user-o text-end" aria-hidden="true"></i>
       <!-- <?php print ucfirst($fname); ?>  -->
          </h4>
        </div>
        <div class="dropdown open">
            <a class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                   <i class="fa fa-navicon text-info" aria-hidden="true" style="font-size:30px;"></i>
                    </button>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="logout.php" style="">
                <i class="fa fa-sign-out text-info" aria-hidden="true" style="font-size:20px;"></i>
                Logout
                </a>
            </div>
        </div>
    </div>
<!-- form container -->
<div class="py-2" style="height:80vh; background-color:white;">
    <!-- <h1>Test</h1> -->
    <div class="row py-2">
        <div class="col-md-7 col-sm-12">
                <div class="border  position-relative bg-white ">
                 <img src="img2.jpg" style="height:170px; width:770px;">
                </div>
                <div class="position-absolute d-flex" style="padding-left: 4vh; top: 259px;"> 
                    <img class="rounded-circle z-depth-2" style="width: 145px;" src="pc1.jpg" alt="profile-pc">
                    <h6 class="col-sm-8 col-md-12 text-white position-relative " style="top:40px; font-size: 18px; padding-left: 3vh;">Solange uwingabire</h6>
                </div>
                <div class="border bg-white py-2 px-2  ">
                <h5 style="padding:7px;">Headlines
                <a href="http://">
                 <i class="fa fa-pencil text-info  pe-1" aria-hidden="true"></i> </h5> 
                </a>
                <hr>
                <h6 style="padding:7px;">Software development workers</h6>
                <h2 class="bg-primary text-white" style="font-size:14px; height:40px; padding:3px;">
                <i class="fas fa-key text-info pe-2 px-2" aria-hidden="true" style="font-size:23px;"></i>
                    Change Password
                </h2>
                </div>
                <table>
                    <tr>
                        <td style="padding:20px;">Current Password</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <div class="position-relative">
                    <td>
                        <input type="password" name="current_password" id="" class="form-control">
                        <i class="fas fa-key text-info" aria-hidden="true" style="position:absolute;margin-top:540px;ute; top:4px;left:190px;"></i>
                        </td>
                    </div>
                    </tr>
                    <tr>
                        <div class="position:relative;">
                        <td style="padding:20px;">New Password</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>
                            <input type="password" name="new_password" id="" class="form-control">
                            <i class="fas fa-key text-info" aria-hidden="true" style="position:absolute;margin-top:588px; top:10px;left:190px; margin-end:10px;"></i>
                        </td>
                        </div>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="checkbox" name="" id="">
                            Remind me to change password for each three months
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td> <button type="submit" class="btn btn-primary my-3 mx-5">Set New Password</button></td>
                    </tr>
                   
                </table>
        </div>
        <div class="col-md-5 col-sm-12 px-3 h-25 my-5">
                <ul class="list-group">
                <li class="list-group-item shadow" style="border-bottom:2px;border-color:blue;border-left:none;border-right:none;">                         
                            <h5 class="text-primary d-flex justify-content-center" style="font-weight:bold;">ACCOUNT SETINGS</h5> 
                    </li>
                    <li class="list-group-item" style="border-top:2px;border-color:blue;border-left:none;border-right:none; font-weight:bold;">
                        <a href="http://">
                            <i class="fa fa-pencil text-info pe-1" aria-hidden="true" style="font-size:23px;"></i>
                             Edit Profile
                        </a>
                    </li>
                    <li class="list-group-item" style="border-top:2px;border-color:blue;border-left:none;border-right:none; font-weight:bold;">
                        <a href="http://">
                            <i class="fas fa-key text-info pe-1" aria-hidden="true" style="font-size:23px;"></i>
                             Change Password
                        </a>
                    </li>
                    <li class="list-group-item" style="border-top:2px;border-color:blue;border-left:none;border-right:none; font-weight:bold;">
                        <a href="http://">
                            <i class="fa fa-bolt text-info pe-1" aria-hidden="true" style="font-size:23px;"></i>
                             Sign in Activities
                        </a>
                    </li>
                    <li class="list-group-item" style="border-top:2px;border-color:blue;border-left:none;border-right:none; font-weight:bold;">
                        <a href="http://">
                            <i class="fa fa-clock-o text-info pe-1" aria-hidden="true" style="font-size:23px;"></i>
                             Session timeout
                        </a>
                    </li>
                    <li class="list-group-item" style="border-top:2px;border-color:blue;border-left:none;border-right:none; font-weight:bold;">
                        <a href="http://">
                            <i class="fa fa-heartbeat text-info pe-1" aria-hidden="true" style="font-size:23px;"></i>
                             Memorialisation
                        </a>
                    </li>
                    <li class="list-group-item" style="border-top:2px;border-color:blue;border-left:none;border-right:none; font-weight:bold;">
                        <a href="http://">
                            <i class="fa fa-tag text-info pe-1" aria-hidden="true" style="font-size:23px;"></i>
                            Jobs feed content
                        </a>
                    </li>
                    <li class="list-group-item " style="border-top:2px;border-color:blue;border-left:none;border-right:none; font-weight:bold;">
                        <a href="http://">
                            <i class="fa fa-envelope text-info pe-1" aria-hidden="true" style="font-size:23px;"></i>
                            Email & sms notification
                        </a>
                    </li>
                    <li class="list-group-item" style="border-top:2px;border-color:blue;border-left:none;border-right:none; font-weight:bold;">
                        <a href="http://">
                            <i class="fa fa-square text-info pe-1" aria-hidden="true" style="font-size:23px;"></i>
                             Push notification
                        </a>
                    </li>
                    <li class="list-group-item" style="border-top:2px;border-color:blue;border-left:none;border-right:none; font-weight:bold;">
                        <a href="delete_account.php">
                           <i class="fa fa-user-times text-info pe-1" aria-hidden="true" style="font-size:23px;"></i>
                             Delete my account
                        </a>
                    </li>
</ul>          
        </div>
    </div>
    </div>
</div>
<div class="d-flex justify-content-between bg-primary py-3 text-white p-5">
<!-- <h6></h6> -->
<!-- <h6></h6> -->
<h6>
<!-- <i class="fa fa-facebook" aria-hidden="true" style="font-size:20px;"></i> -->
<!-- <i class="fa fa-twitter" aria-hidden="true" style="font-size:20px;"></i> -->
<!-- <i class="fa fa-instagram" aria-hidden="true" style="font-size:20px;"></i> -->
</h6>        
</div>
</div>
</body>
</html>