<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="password.php" method="post">
    <header class="text-white p-1 text-center" style="background-color:tomato;">
<h5>Assignment</h5>
</header>

<!-- form container -->
<div class="d-flex justify-content-center align-items-center" style="height:80vh;">
    <!-- <h1>Test</h1> -->
            <div class="border px-4 pt-4 position-relative text-center w-25 ">
               
                <div  class="position:relative">
                <h2>Welcome Back !</h2></div> 
                
               <div><h5>Hi NIYONSHUTI</h5>
            </div>
                
                
                <div class="d-flex justify-content-center">
                <div class="row mt-1">
               <div class="col">
                   <div class="position-relative">
                   <i class="fa fa-envelope text-info mt-2 ml-4 ps-3" 
                   style=" font-size:20px; position: absolute; top: 1px; left: 3px;">
                   </i>



                   <input type="email" name="email" id="" placeholder="Email"
                    class="form-control ps-5" style="border-radius:30px; width: 360px;">

            
                        <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>
               
            </div>
               <!-- font awesome -->
                </div>
                <div class="row mt-2">
               <div class="col">
                   <div class="position-relative">
                   <i class="fa fa-key text-info mt-2 ml-4 ps-3" style=" font-size:20px; position: absolute;left: 5px; top: 1px;"></i>
                  
                   <input type="password" name="psw" id="" placeholder=" Password" class="form-control ps-5 " style="padding-left: 1px;">
                   <i class="fa fa-eye-slash text-info " style=" font-size:20px; position: absolute; left: 257px;margin-top:-25px;"></i>
                   

            
                        <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>
               
            </div>
               
                <div class="position-relative">
                <button type="submit" name="login" class="btn btn-info my-2 form-control" 
                style="border-radius:30px;">Sign in</button>
                </div>
              
                
                <div class="position-relative">
                <h6> 
                <a href="index.php" style="text-decoration:none">Forget Password ? </a>
                </h6>
                </div>
            </div>
</div>

<?php include "footer.php"?>
</div>
</form>
</body>
</html>