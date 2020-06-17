<?php


  session_start(); 
  if(!isset($_SESSION['u_id']))
  {
      header("location: index.php");
  }
  else
    {
        include('db_config.php'); 
        $u_id = $_SESSION['u_id'];
        $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT `gender` FROM `register1` WHERE `u_id` = '$u_id'"));
        $data89 = mysqli_fetch_assoc(mysqli_query($db, "SELECT `image1` FROM `add_photo` WHERE `u_id` = '$u_id'"));
        $gender = $data['gender'];
        if ($gender == 'Male') {
            $new_gender =   'Female';
        }
        else {
            $new_gender =   'Male';
        }
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

<link href="owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">


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
  .list-viw-profile-bg-white {
    background: url(https://idesktop-images/list-view-profile-bg-new.png?v1) no-repeat !important;
  }
  @media screen and (max-width: 600px)
  {
    .reg-box {
        margin-top: 93px;
    }
    .logo-cc img {
    width: 50% !important;
    margin-top: 10px !important;
    margin-left: 0px !important
    }
    .mob {
      margin-left: 0% !important;
    }
    .logo-cc {
    width: auto;
    text-align: center;
    padding: 0px 0px;
  }
  } 

  

</style>
<style>

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: left;
  display: block;
  color: black !important;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px ;
}

body {
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
    line-height: 1.42857143 !important;
    font-size: 14px !important;
}

.active {
  background-color: #ddd;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #ddd;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: none;
}
.viewBtnsend-interst {
  padding: 10px 21px !important;
  margin-bottom: 5px;
}

.figure {
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
}
.viewBtnsend-shortlist {
    display: flex !important;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .mb {
    padding: 14px 16px !important;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .w3-bar .w3-bar-item {
    
    width: 100% !important;
    
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<body>
<!-- ============================  Navigation Start =========================== -->
 <!-- <div class="container-fluid">
   <div class="cont-top shado-1">
      <div class="container">
          <div class="row">
              <div  class="col-sm-4 logo-cc">
                <a href="index.php"><img src="assets/images/demo-logo.png"></a>
              </div>
              <div  class="col-sm-8">
              <form action="http://localhost/matrimonial/users/login" method="post">
                <div class="row login-hd">
                    <div class="col-sm-2">
                      
                    </div>
                    <div style="padding-right:0px;" class="col-sm-4">
                      <input placeholder="Enter Email Address" type="text" class="form-control input-sm" name="email">
                    </div>
                    <div  style="padding-right:0px;" class="col-sm-4">
                        <input placeholder="Enter Password" type="text" class="form-control input-sm" name="password">
                    </div>
                    <div class="col-sm-2">
                        <button style="font-weight:600" class="btn btn-sm btn-success">Login</button>
                    </div>
                </div>
                
              </form>  
              </div>
          </div>

      </div>


   </div>
















 </div> -->
<div class="">
  <div class="row" style="border-bottom: 4px solid #c32143;">
    <div  class="col-sm-5 logo-cc">
      <a href="my_home.php" style="color: black;"><img src="assets/images/SAVJI_NAVRAS.png" style="width: 57%;margin-left: -90px;"></a>
    </div>
    <div  class="col-sm-7 logo-cc">
      <div class="topnav" id="myTopnav">
        <a href="my_home.php" class="">My Home</a>
        <a href="search.php">Search</a>
        <!-- <a href="pro_view">Matches</a> -->
        <div class="dropdown">
          <button class="dropbtn">Matches 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="all_matches.php">All Matches</a>
            <a href="new_matches.php">New Matches</a>
            <a href="prem_matches.php">Premium Matches</a>
            <a href="mut_matches.php">Mutual Matches</a>
            <a href="whoviewedyou.php">Members Looking For You</a>
            <a href="horoscope_match.php">Horoscope Matches</a>
            <a href="shortlistedbyyou.php">Shortlisted By You</a>
            <a href="ignored.php">Ignored Profiles</a>
            <a href="whoshortlistedyou.php">Who Shortlisted You</a>
            <a href="#">Who Viewed Your Number</a>
            <a href="interest.php">Interest Send/Receive</a>
          </div>
        </div> 
        <a href="badge.php">Get Trust Badges</a>
        <a target="_blank" href="membership_pack.php">Upgrade Now</a>
        <a href="cust_care.php">Help</a>
        <div class="dropdown">
          <button class="dropbtn mb" style="padding: 2px;">
            <?php if($data89['image1'] == '') { ?>

              <img src="assets/images/profile.jfif" width="50" height="50" style="border-radius:50%"> 

            <?php }
            else { ?>

            <img src="uploads/<?php echo($data89['image1']);?>" width="50" height="50" style="border-radius:50%"> 

            <?php } ?>
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="main.php">Edit Profile</a>
            <a href="preference.php">Edit Partner Preference</a>
            <a href="profsetting.php">Profile Setting</a>
            <a href="wed_partner.php">Wedding Partner</a>
              <a type="submit" href="logout.php">Logout</a>
          </div>
        </div> 
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
    </div>
  </div>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


// show/hide the menu when examples is clicked
// $(".dropdown").on("click", function () {
//   $(".dropdown-content").toggle();
// });

// hide the menu when an exmple is clicked
// $(document).ready(function(){
//   $(".dropdown").on("click", function(){
//       $(".dropdown-content").hide(); 
//   });
// });
</script>
