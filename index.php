<?php
session_start();
?>
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
    <header class="text-white p-1 text-center" style="background-color:tomato;">
<h5>Assignment</h5>
</header>

<!-- form container -->
<main class="d-flex justify-content-center text-align-center mb-4" style="heigth:30px;">
        <div class="border-solid-1 shadow p-3 pt-5 pb-3 mb-5 mt-5" style="background-color:aliceblue">
            <div class="position-relative text-center">
                 <i class="fa fa-user-circle-o fa-lg text-info position-absolute  " style=";top:-80px;font-size:50px;"> </i>
                <p class="fw-bold text-black text-center p-2" style="font-size:20px;">Ican't wait to create an account</p>
                </div>
                <hr class="border-1">
          
            <form action="insert_users.php" method="post" class="m-2">
            <div class="row g-2">
            <div class="col">
                   <div class="position-relative">
                   <i class="fa fa-user text-info " style=" margin-top:9px;font-size:20px; position: absolute; top: -5px; left: 13px;"></i>
                       <input type="text" name="fname"  placeholder="First Name" class="form-control ps-5 ">

               </div></div>
               <div class="col">
                   <div class="position-relative">
                   <i class="fa fa-user text-info " style=" margin-top:9px;font-size:20px; position: absolute; top: -5px; left: 13px;"></i>
                   <input type="text" name="lname" id="" placeholder="Last Name" class="form-control ps-5 " style="padding-left:0px;">
                   
                   </div>
               </div>
            </div>
            <div class="row mt-2">
               <div class="col">
                   <div class="position-relative">
                   <i class="fa fa-envelope text-info mt-2 ml-4 ps-3" style=" font-size:20px; position: absolute; top: 1px; left: 3px;"></i>
                   <input type="email" name="email" id="" placeholder="Email" class="form-control ps-5" style="padding-left: 1px;">

            
                        <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>
               
            </div>
            <div class="row mt-2">
               <div class="col">
                   <div class="position-relative">
                   <i class="fa fa-key text-info mt-2 ml-4 ps-3" style=" font-size:20px; position: absolute; top: 1px;"></i>
                  
                   <input type="password" name="password" id="" placeholder="Choice Password" class="form-control ps-5 " style="padding-left: 1px;">
                   <i class="fa fa-eye text-info " style=" font-size:20px; position: absolute; left: 470px;margin-top:-25px;"></i>
                   

            
                        <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>
               
            </div>
            <div class="row mt-2">
               <div class="col ">
                   <div class="position-relative">
                   <input type="submit" class="btn btn-info rounded-pill w-100 text-white" value="next" placeholder="next">

                      <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>
               
            </div>
            <div class="d-flex align-items-center py-2 px-5">
                    <div class="border w-100"></div>
                    <span class="px-3">or</span>
                    <div class="border w-100"></div>
                </div>
                 <div class="bg-danger p-2 text-white rounded">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                    <span class="ps-2">Continue with google</span>
                </div>

                <!-- have an account -->
                <div class="text-danger text-center pt-2">
                    <span>Already have an account ?</span>
                
                    <a href="username.php" style ="text-decoration:none">SIGN IN</a>
                </div>

            </form>
</main>
    
</div>
</form>
<?php include'footer.php';?>
</body>
</html>







