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
        <div class="border-solid-1 shadow p-3 pt-5 pb-3 mb-5 mt-5" style="">
            <div class="position-relative text-center">
                 <i class="fa fa-user-circle-o fa-lg text-info position-absolute  " style=";top:-80px;font-size:50px;"> </i>
                <p class="fw-bold text-black text-center p-2" style="font-size:20px;">Congrat,solange</p>

                </div>
            <form action="cont.php" method="post" class="m-2">
            
            <div class="row mt-2 pb-5">
               <div class="col">
                   <div class="position-relative">
                   <i class="fa fa-user-circle text-info mt-2 ml-4 ps-3" style=" font-size:20px; position: absolute; top: 1px; left: 3px;"></i>
                   <input type="email" name="email" id="" placeholder="Email" class="form-control ps-5 rounded-pill" style="padding-left: 1px;">

            
                        <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>

            </div>
            <div class=" text-center ">
              <div class="pb-3">
              <span class="fw-bold text-center " style="">Help us in the journey of trust</span>
             </div>
            <div class="pb-5 ">                    
                <p>Check your above email to conferm the email ownership</p>
             </div>
            </div>
            </form>
</main>
    
</div>
</form>
<?php include'footer.php';?>
</body>
</html>