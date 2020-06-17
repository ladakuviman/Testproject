<?php


  session_start(); 
  if(!isset($_SESSION['u_id']))
  {
      
  }
  else
    {
        include('db_config.php'); 
        $u_id = $_SESSION['u_id'];
    }
  



?>
<!DOCTYPE HTML>
<html>


<head>
<title> Matrimonial </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="assets/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

<link href="assets/css/font-awesome.css" rel="stylesheet"> 



</head>
<style>
  .regformbg {
    height: 722px;
    background-attachment: inherit;
  }
  .logo-cc {
    text-align: center;
    padding: 14px 16px;
  }
  
@media screen and (max-width: 600px)
  {
    
    .mob {
      margin-left: 0% !important;
    }
    .logo-cc img {
    width: 50% !important;
    margin-top: 10px !important;
    margin-left: 0px !important
    }
    .logo-cc {
    width: auto;
    text-align: center;
    padding: 0px 0px;
    }
    .mbo {
      margin-bottom: 10px;
    }
    .mbo1 {
      margin-top: 10px;
    }
    .mbo2 {
      margin-top: 45px;
    }
  } 
  
</style>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="container-fluid" > 
   <div class=" shado-1">
      <div class="">
          <div class="row" style="border-bottom: 4px solid #c32143;">
              <div  class="col-sm-5 logo-cc">
                <a href="index.php" style="color: black;"><img src="assets/images/SAVJI_NAVRAS.png" style="width: 57%;margin-left: -90px;"></a>
              </div>
              <div  class="col-sm-7 logo-cc" style="padding: 12px 14px;margin-top: 15px;">
              <form action="" id="UserLogin" method="post" class="">
                <div class="row ">
                    
                    <div  class="col-sm-4 mbo mbo1">
                      <input placeholder="Enter Email or Mobile" type="text" class="form-control input-sm" id="email" name="email_mobile">
                    </div>
                    <div   class="col-sm-4 mbo">
                        <input placeholder="Enter Password" type="password" class="form-control input-sm" id="password" name="password">
                    </div>
                    <div class="col-sm-2">
                        <input type="hidden" name="type" value="UserLogin">
                        <!-- <input type="submit" data-form="UserLogin" class="btn-submit btn btn-primary btn-md  formvalidate" value="Login"> -->
                        <button type="submit" data-form="UserLogin" id="submit" style="font-weight:600" class="btn  btn-success">Login</button>
                    </div>
                    <div class="col-sm-2" style="padding-left: 0px !important;padding-right: 0px !important;margin-top: 5px;">
                      <label><a href="forgot_pass.php" id="" style="color:black;font-size:14px;font-weight:200;">Forgot Password ?</a></label>
                    </div>
                </div>
                
              </form>  
              </div>
          </div>

      </div>


   </div>
















 </div>