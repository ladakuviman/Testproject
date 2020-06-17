<?php include("header1.php"); 
if(isset($_GET['id']) && !empty($_GET['id'])){

  $u_id = $_GET['id'];
  $register = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
  $register1 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register1` WHERE `u_id` = '$u_id'"));
  $register2 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register2` WHERE `u_id` = '$u_id'"));
  $register3 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register3` WHERE `u_id` = '$u_id'"));
  $register4 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register4` WHERE `u_id` = '$u_id'"));
  $register5 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register5` WHERE `u_id` = '$u_id'"));
  $add_photo = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `add_photo` WHERE `u_id` = '$u_id'"));
  $basic_details = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `basic_details` WHERE `u_id` = '$u_id'"));
  $personal_details = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `personal_details` WHERE `u_id` = '$u_id'"));

  $birth_date = $register1['b_year'].'-'.$register1['b_month'].'-'.$register1['b_day'];

  $userDob = $birth_date;
   
  //Create a DateTime object using the user's date of birth.
  $dob = new DateTime($userDob);
   
  //We need to compare the user's date of birth with today's date.
  $now = new DateTime();
   
  //Calculate the time difference between the two dates.
  $difference = $now->diff($dob);
   
  //Get the difference in years, as we are looking for the user's age.
  $age = $difference->y;
   
  //Print it out.
  $age;

  $height = $register3['height'];
  $test = explode(" ",$height);
  $Cms = array_pop($test);
  $Feet1 = implode(" ", $test);
  $Feet = chop($Feet1,"-");
}
?>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .to-fmid {
    margin-top: 20px;
  }
  .reg-box {
    height: auto;
    width: 100%;
    background-color: rgb(228, 228, 228);
    margin-top: 25px;
    margin-bottom: 25px;
    padding: 0px;
  }
  .to-fmid {
    margin-top: 10px;
    font-size: 16px;
  }
  .sml-frm {
    height: 34px !important;
  }
  .wrapper {
    text-align: center;
  }

  .button {
      position: absolute;
      top: 50%;
  }
  .btn-sm, .btn-group-sm>.btn {
    padding: 10px 20px;
    font-size: 15px;
    line-height: 1.5;
    border-radius: 3px;
  }
  .row {
    margin-right: 0px !important;
    margin-left: 0px !important;
  }
  
</style>
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-right: 0px;
    padding-left: 0px;
  }
  </style>
<section style="background-color: rgb(228, 228, 228);">
  <div class="container">
        <div class="row">
            

            <div class="col-sm-12">
              <div style="color:#535353; font-size:13px;" class="reg-box">
                  <form method="post" action="main.php">
                  
                  <div class="row  to-fmid" >
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-3 no-padding" style="height:170px;">
                        <div class="width150 height150">
                              <?php if ($add_photo['image1'] == '') { ?>
                              <img src="https://imgs.hindimatrimony.com/bmimgs/add-photo-Ntxt-m-150-avatar.jpg" width="150" height="150" border="0" alt="">
                              <?php } 
                              else { ?>
                                <img src="uploads/<?=$add_photo['image1'];?>" width="150" height="150" border="0" alt="">
                              <?php }
                              ?>
                        </div>
                        <!-- <div style="text-align:center;background:#f1f1f1;line-height:25px;" class="paddt5 hdtxt">
                            <a href=""> Add / Edit  Photos</a>
                        </div> -->
                    </div>
                    <div class="col-sm-6 no-padding">
                      <div _ngcontent-shk-c22="" class="row mt-0 pl-1 pb-2">
                        <div _ngcontent-shk-c22="" class="pt-1">
                          <?php 
                            $identity_badge = mysqli_query($db,"SELECT * FROM `identity_badge` WHERE `u_id` = '$u_id' AND `status` = '1'");
                            $c = mysqli_num_rows($identity_badge);
                            if($c > 0){ ?> 
                              <img src="assets/images/identity.jfif" style="max-width: 7%;">
                            <?php }
                            else {
                            } ?>
                          
                          <?php 
                            $professional_badge = mysqli_query($db,"SELECT * FROM `professional_badge` WHERE `u_id` = '$u_id' AND `status` = '1'");
                            $c = mysqli_num_rows($professional_badge);
                            if($c > 0){ ?> 
                          <img src="assets/images/professional.jfif" style="max-width: 7%;">
                          <?php }
                            else {
                            } ?>
                        </div>
                      </div>
                      <div class="boldtxt biggertxt22" style="font-weight: bold;font-size: 22px;"><?php echo ($register['full_name'].' '.$register['surname'])?$register['full_name'].' '.$register['surname']:''?></div>
                      <div class="hdtxt paddt2" style="color:#777777;">Profile created by <?php echo isset($register['created_by'])?$register['created_by']:''?> </div>
                      <div class="paddt10 hdtxt"><?php echo isset($age)?$age:''?> Yrs,  <?php echo isset($Feet)?$Feet:''?>&nbsp;Ft&nbsp;/ <?php echo isset($Cms)?$Cms:'0'?> Cms  </div>
                      <div class="paddt15 hdtxt"><?php echo isset($register1['religion'])?$register1['religion']:''?>,  <?php echo isset($register2['caste'])?$register2['caste']:''?>  </div>
                      <div class="paddt15 hdtxt">
                      
                      <?php echo isset($register2['city'])?$register2['city']:''?>, <?php echo isset($register2['state'])?$register2['state']:''?>, <?php echo isset($register2['country'])?$register2['country']:''?>              
                      </div>
                      <div class="paddt15 hdtxt" style="line-height:23px"><?php echo isset($register4['education'])?$register4['education']:''?>, <?php echo isset($register4['occupation'])?$register4['occupation']:''?>  </div>
                                    
                      <div class="fleft paddt10">
                        <span class="fleft" id="mobiletxt" style="background:url(https://imgs.bharatmatrimony.com/bmimgs/edit-phonetxt-mobile.gif) no-repeat left top;padding-left:13px;font:bold 14px/18px Arial;">&nbsp;+91-<?php echo isset($register['mobile'])?$register['mobile']:''?>&nbsp;
                          <br>
                          <?php if ($register5['status'] == '1') { ?>
                          <!-- <font class="mediumtxt">(&nbsp;<img src="https://imgs.hindimatrimony.com/bmimgs/myhome-tickicon.gif" width="14" height="11" alt="" title="" style="vertical-align:middle;" hspace="5"> 
                          <span style="color: green;font:14px/18px Arial;color:#4baa26;">Verified </span>)
                          </font>&nbsp;&nbsp; -->
                          <?php } 
                          else {

                          }
                          ?>
                        <!-- <span style="font:normal 14px/18px Arial;text-decoration:none;"><a href="edit_mobile.php?id=<?php echo isset($u_id)?$u_id:''?>" class="usricons" style="padding:0px 0 8px 0px;">Edit Mobile No</a>
                        </span> -->
                      </span>
                      </div>              
                    </div>

                    <div class="col-sm-3 no-padding">
                                              
                      <div class="hdtxt txt-center paddr20 paddt20" style="color:#777777;">How your profile looks<br>to others</div>
                      <div><a target="_blank" href="" class="mediumhdrtxt" style="border:1px solid #cccccc;padding:7px 10px 7px 40px;display:inline-block;border-radius:5px;background:url(https://imgs.bharatmatrimony.com/bmimgs/edit-profile-preview-may15.gif) no-repeat 10px 8px;margin-top:5px;text-decoration:none;">Profile Preview</a></div>
                      
                      <div class="clear"></div>
                    </div>
                    <!-- Profile Completeness End-->

                    </div>

                    <div class="col-sm-1 no-padding">
                    </div>

                    <!-- <div class="col-sm-3 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">
                        <div class="col-sm-4 no-padding">
                          <img src="https://imgs.bharatmatrimony.com/bmimgs/syspop-imgs/add-photo-edit-avatar.png" width="40">
                        </div>
                        <div class="col-sm-8 no-padding">
                          <div class="bigtxt paddt5 lheight120" style="font-weight: bold;font-size: 22px;">Add Photos</div>
                            <div class="hdtxt lheight120">Photos are the first <br>things members look for in a profile. </div>
                        </div>

                        <div class="col-sm-12 no-padding">
                          <div style="text-align:center;background:#f1f1f1;line-height:25px;" class="paddt5 hdtxt">
                            <a href="add_photo.php?id=<?php echo isset($add_photo['photo_id'])?$add_photo['photo_id']:''?>"> Add Photos Now</a>
                        </div>
                        </div>


                    </div> -->
                  </div>

                  <hr>

                  <div class="clr4 paddt10" style="font-size:28px;line-height:37px;margin-bottom:15px;color: #c32143;">Personal Information</div>
                  <div class="row  to-fmid" >
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-12 no-padding" >
                      <div class="biggertxt2 clr7 fleft paddt20"><strong>In my own words</strong>
                        <!-- <a style="cursor:pointer;float: right;color:#ffffff;text-decoration:none;background:#3a90d2 url(https://imgs.bharatmatrimony.com/bmimgs/edit-prof-edit-icon.gif) no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;" href="register5.php?id=<?php echo isset($register5['register5_id'])?$register5['register5_id']:''?>" >Edit</a> -->
                      </div><br>
                    </div>

                    <div id="prdescinfo" class="lheight120 padd20 hdtxt" style="word-wrap:break-word;">
                    <?php echo isset($register5['about'])?$register5['about']:''?>               
                    </div>

                    
                    <!-- Profile Completeness End-->

                    </div>

                    <div class="col-sm-1 no-padding">
                    </div>

                    <!-- <div class="col-sm-3 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">
                        <div class="col-sm-12 no-padding" style="text-align: center;">
                            <div class="hdtxt lheight120">What matters to you <br>the most in a <br>happymarriage </div>
                        </div>

                        <div class="col-sm-12 no-padding">
                          <div style="text-align:center;background:#f1f1f1;line-height:25px;" class="paddt5 hdtxt">
                            <a href=""> Add Now</a>
                        </div>
                        </div>


                    </div> -->
                  </div>

                  <div class="row  to-fmid" >
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-12 no-padding" >
                       <div class="biggertxt2 clr7 fleft paddt20"><strong>Basic Details</strong><!-- <a style="cursor:pointer;float: right;color:#ffffff;text-decoration:none;background:#3a90d2 url(https://imgs.bharatmatrimony.com/bmimgs/edit-prof-edit-icon.gif) no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;" href="javascript:void();"  data-toggle="modal" data-target="#basic-modal-edit" class="EditRegister1" data-id="<?php echo isset($register1['register1_id'])?$register1['register1_id']:''; ?>">Edit</a> --></div><br>
                    </div>
                    <!-- <div id="prdescinfo" class="lheight120 padd20 hdtxt" style="word-wrap:break-word;">
                    Get better responses by verifying your name and age
                    </div>
                    <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button> -->

                    <hr>

                    <div class="row  to-fmid">
                      

                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Date of Birth&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo ($register1['b_day'])?$register1['b_day']:''?> / <?php echo ($register1['b_month'])?$register1['b_month']:''?> / <?php echo ($register1['b_year'])?$register1['b_year']:''?></label>
                      </div>
                    </div>

                    <div class="row  to-fmid">
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Gender&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo ($register1['gender'])?$register1['gender']:''?></label>
                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Religion&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo ($register1['religion'])?$register1['religion']:''?></label>
                      </div>
                    </div>

                    <div class="row  to-fmid">
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Mother Tongue&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo ($register1['mother_tongue'])?$register1['mother_tongue']:''?></label>
                      </div>
                      
                    </div>

                    <!-- Profile Completeness End-->

                    </div>

                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-12 no-padding">
                       <div class="biggertxt2 clr7 fleft paddt20"><strong>Religion / Location Information</strong><!-- <a style="cursor:pointer;float: right;color:#ffffff;text-decoration:none;background:#3a90d2 url(https://imgs.bharatmatrimony.com/bmimgs/edit-prof-edit-icon.gif) no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;" href="javascript:void();"  data-toggle="modal" data-target="#religion-modal-edit" class="EditRegister2" data-id="<?php echo isset($register2['register2_id'])?$register2['register2_id']:''; ?>" >Edit</a> --></div><br>
                       
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Caste&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register2['caste'])?$register2['caste']:''?></label>
                      </div>
                    </div>
                    <div class="row  to-fmid">
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Gotra&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register2['gotra'])?$register2['gotra']:'-'?></label>
                      </div>
                      
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Dosh&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register2['dosh'])?$register2['dosh']:'-'?></label>
                      </div>

                    </div>

                    <div class="row to-fmid">

                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Country&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register2['country'])?$register2['country']:'-'?></label>
                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">State&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register2['state'])?$register2['state']:'-'?></label>
                      </div>
                    </div>

                    <div class="row  to-fmid">
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">City&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register2['city'])?$register2['city']:'-'?></label>
                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Pin Code&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register2['pincode'])?$register2['pincode']:'-'?></label>
                      </div>

                      
                    </div>
                    <!-- Profile Completeness End-->

                    </div>

                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-12 no-padding">
                       <div class="biggertxt2 clr7 fleft paddt20"><strong>Personal Details</strong><!-- <a style="cursor:pointer;float: right;color:#ffffff;text-decoration:none;background:#3a90d2 url(https://imgs.bharatmatrimony.com/bmimgs/edit-prof-edit-icon.gif) no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;" href="javascript:void();"  data-toggle="modal" data-target="#personal-modal-edit" class="EditRegister3" data-id="<?php echo isset($register3['register3_id'])?$register3['register3_id']:''; ?>" >Edit</a> --></div><br>
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Marital Status&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register3['marital_status'])?$register3['marital_status']:'-'?></label>
                      </div>
                    </div>

                    <div class="row  to-fmid">

                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Height&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($Feet)?$Feet:''?>&nbsp;Ft&nbsp;/ <?php echo isset($Cms)?$Cms:'0'?> Cms</label>
                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Family Status&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register3['family_values'])?$register3['family_values']:'-'?></label>
                      </div>
                    </div>

                    <div class="row  to-fmid">
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Family Type&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register3['family_type'])?$register3['family_type']:'-'?></label>
                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Family Values&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register3['family_values'])?$register3['family_values']:'-'?></label>
                      </div>
                    </div>

                    <div class="row  to-fmid">

                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Any Disability&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register3['disability'])?$register3['disability']:'-'?></label>
                      </div>
                      
                    </div>
                    <!-- Profile Completeness End-->

                    </div>

                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-12 no-padding">
                       <div class="biggertxt2 clr7 fleft paddt20"><strong>Professional Information</strong><!-- <a style="cursor:pointer;float: right;color:#ffffff;text-decoration:none;background:#3a90d2 url(https://imgs.bharatmatrimony.com/bmimgs/edit-prof-edit-icon.gif) no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;" href="javascript:void();"  data-toggle="modal" data-target="#professional-modal-edit" class="EditRegister4" data-id="<?php echo isset($register4['register4_id'])?$register4['register4_id']:''; ?>">Edit</a> --></div><br>
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Education&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register4['education'])?$register4['education']:'-'?></label>
                      </div>
                    </div>

                    <div class="row  to-fmid">
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Employed in&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register4['employed'])?$register4['employed']:'-'?></label>
                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Occupation&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register4['occupation'])?$register4['occupation']:'-'?></label>
                      </div>
                    </div>

                    <div class="row  to-fmid">
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Annual Income&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($register4['income'])?$register4['income']:'-'?></label>
                      </div>
                      
                    </div>
                    <!-- Profile Completeness End-->

                    </div>

                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-12 no-padding">
                       <div class="biggertxt2 clr7 fleft paddt20"><strong>Some Other Details</strong><!-- <a style="cursor:pointer;float: right;color:#ffffff;text-decoration:none;background:#3a90d2 url(https://imgs.bharatmatrimony.com/bmimgs/edit-prof-edit-icon.gif) no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;" href="javascript:void();"  data-toggle="modal" data-target="#other-modal-edit" class="EditOther" data-id="<?php echo isset($basic_details['basic_id'])?$basic_details['basic_id']:''; ?>" >Edit</a> --></div><br>
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Father Status&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($basic_details['father_occu'])?$basic_details['father_occu']:'-'?></label>
                      </div>
                    </div>


                    <div class="row  to-fmid">

                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Mother Status&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($basic_details['mother_occu'])?$basic_details['mother_occu']:'-'?></label>
                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Eating Habit&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($basic_details['eating_habit'])?$basic_details['eating_habit']:'-'?></label>
                      </div>

                    </div>


                    <div class="row  to-fmid">

                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Drinking Habit&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($basic_details['drinking_habit'])?$basic_details['drinking_habit']:'-'?></label>
                      </div>
                      
                    </div>
                    <!-- Profile Completeness End-->

                    </div>

                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-12 no-padding">
                       <div class="biggertxt2 clr7 fleft paddt20"><strong>Life Style Details</strong><!-- <a style="cursor:pointer;float: right;color:#ffffff;text-decoration:none;background:#3a90d2 url(https://imgs.bharatmatrimony.com/bmimgs/edit-prof-edit-icon.gif) no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;" href="javascript:void();"  data-toggle="modal" data-target="#life-modal-edit" class="EditLife" data-id="<?php echo isset($personal_details['personal_id'])?$personal_details['personal_id']:''; ?>" >Edit</a> --></div><br>
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Hobbies & Interests&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($personal_details['hobbies'])?$personal_details['hobbies']:'-'?>
                            <?php if ($personal_details['hobbies_other'] == '') {
                              
                            } 
                            else { ?>,<?php echo isset($personal_details['hobbies_other'])?$personal_details['hobbies_other']:''?>
                            <?php } ?>    
                          </label>
                      </div>

                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Favourite Cuisine&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($personal_details['cuisine'])?$personal_details['cuisine']:'-'?>
                            <?php if ($personal_details['cuisine_other'] == '') {
                              
                            } 
                            else { ?>,<?php echo isset($personal_details['cuisine_other'])?$personal_details['cuisine_other']:''?>
                            <?php } ?>
                          </label>
                      </div>
                      

                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Dress Type&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($personal_details['dress_type'])?$personal_details['dress_type']:'-'?>
                            <?php if ($personal_details['dress_type_other'] == '') {
                              
                            } 
                            else { ?>,<?php echo isset($personal_details['dress_type_other'])?$personal_details['dress_type_other']:''?>
                            <?php } ?>
                          </label>
                      </div>

                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Favourite Music&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($personal_details['music'])?$personal_details['music']:'-'?>
                            <?php if ($personal_details['music_other'] == '') {
                              
                            } 
                            else { ?>,<?php echo isset($personal_details['music_other'])?$personal_details['music_other']:''?>
                            <?php } ?>
                          </label>
                      </div>

                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Sports/Fitness&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($personal_details['sports'])?$personal_details['sports']:'-'?>
                            <?php if ($personal_details['sports_other'] == '') {
                              
                            } 
                            else { ?>,<?php echo isset($personal_details['sports_other'])?$personal_details['sports_other']:''?>
                            <?php } ?>
                          </label>
                      </div>

                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 no-padding">
                          <label class="cflo" style="float: left;">Spoken languages&nbsp;:&nbsp;</label>
                          <label class="cflo" style="float: right;"><?php echo isset($personal_details['spoken_languages'])?$personal_details['spoken_languages']:'-'?>
                            <?php if ($personal_details['spoken_languages_other'] == '') {
                              
                            } 
                            else { ?>,<?php echo isset($personal_details['spoken_languages_other'])?$personal_details['spoken_languages_other']:''?>
                            <?php } ?>
                          </label>
                      </div>

                      
                    </div>

                    <!-- Profile Completeness End-->

                    </div>
                    <div class="col-sm-3 no-padding">
                        


                    </div>

                  </div>
                </form>
                </div>

              </div>
            </div>
        </div>

    </div>
</section>

<div class="modal fade bs-example-modal-lg" id="basic-modal-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- header modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Edit Basic Details</h4>
      </div>

      <!-- body modal -->
      <div class="modal-body">
        <div class="row">
          <form action="" id = "AddRegister1" method="post" enctype="multipart/form-data">
            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Date of Birth :</label>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div style="padding:0px 2px;" class="col-sm-4">
                          <select name="b_day"  style="padding-top: 3px;" id="b_day" class="form-control sml-frm  cflo input-sm">
                              <option id="b_day" value="0" selected="">DD</option>
                              <option value="01" >1</option>
                              <option value="02" >2</option>
                              <option value="03"  >3</option>
                              <option value="04"  >4</option>
                              <option value="05" >5</option>
                              <option value="06"  >6</option>
                              <option value="07" >7</option>
                              <option value="08" >8</option>
                              <option value="09" >9</option>
                              <option value="10"  >10</option>
                              <option value="11"  >11</option>
                              <option value="12" >12</option>
                              <option value="13" >13</option>
                              <option value="14" >14</option>
                              <option value="15" >15</option>
                              <option value="16"  >16</option>
                              <option value="17"  >17</option>
                              <option value="18" >18</option>
                              <option value="19"  >19</option>
                              <option value="20" >20</option>
                              <option value="21" >21</option>
                              <option value="22"  >22</option>
                              <option value="23" >23</option>
                              <option value="24"  >24</option>
                              <option value="25" >25</option>
                              <option value="26" >26</option>
                              <option value="27"  >27</option>
                              <option value="28" >28</option>
                              <option value="29"  >29</option>
                              <option value="30"  >30</option>
                              <option value="31" >31</option>
                          </select>
                        </div>
                        <div style="padding:0px 2px;" class="col-sm-4">
                            <select name="b_month"   style="padding-top: 3px;" id="b_month" class="form-control sml-frm  cflo input-sm">
                              <option value="0"  id="b_month" selected="">MM</option>
                              <option value="01">January</option>
                              <option value="02">February</option>
                              <option value="03">March</option>
                              <option value="04">April</option>
                              <option value="05">May</option>
                              <option value="06">June</option>
                              <option value="07">July</option>
                              <option value="08">August</option>
                              <option value="09">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12">December</option>
                           </select>
                        </div>
                        <div style="padding:0px 2px;" class="col-sm-4">
                            <select name="b_year"   style="padding-top: 3px;" id="b_year" class="form-control sml-frm  cflo input-sm">
                              <option value="0" id="b_year" selected="">YYYY</option>
                              <option value="1944">1944</option>
                              <option value="1945">1945</option>
                              <option value="1946">1946</option>
                              <option value="1947">1947</option>
                              <option value="1948">1948</option>
                              <option value="1949">1949</option>
                              <option value="1950">1950</option>
                              <option value="1951">1951</option>
                              <option value="1952">1952</option>
                              <option value="1953">1953</option>
                              <option value="1954">1954</option>
                              <option value="1955">1955</option>
                              <option value="1956">1956</option>
                              <option value="1957">1957</option>
                              <option value="1958">1958</option>
                              <option value="1959">1959</option>
                              <option value="1960">1960</option>
                              <option value="1961">1961</option>
                              <option value="1962">1962</option>
                              <option value="1963">1963</option>
                              <option value="1964">1964</option>
                              <option value="1965">1965</option>
                              <option value="1966">1966</option>
                              <option value="1967">1967</option>
                              <option value="1968">1968</option>
                              <option value="1969">1969</option>
                              <option value="1970">1970</option>
                              <option value="1971">1971</option>
                              <option value="1972">1972</option>
                              <option value="1973">1973</option>
                              <option value="1974">1974</option>
                              <option value="1975">1975</option>
                              <option value="1976">1976</option>
                              <option value="1977">1977</option>
                              <option value="1978">1978</option>
                              <option value="1979">1979</option>
                              <option value="1980">1980</option>
                              <option value="1981">1981</option>
                              <option value="1982">1982</option>
                              <option value="1983">1983</option>
                              <option value="1984">1984</option>
                              <option value="1985">1985</option>
                              <option value="1986">1986</option>
                              <option value="1987">1987</option>
                              <option value="1988">1988</option>
                              <option value="1989">1989</option>
                              <option value="1990">1990</option>
                              <option value="1991">1991</option>
                              <option value="1992">1992</option>
                              <option value="1993">1993</option>
                              <option value="1994">1994</option>
                              <option value="1995">1995</option>
                              <option value="1996" >1996</option>
                              <option value="1997">1997</option>
                              <option value="1998">1998</option>
                              <option value="1999">1999</option>
                              <option value="2000">2000</option>
                              <option value="2001">2001</option>
                              <option value="2002">2002</option>
                           </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Gender :</label>
                </div>
                <div class="col-sm-8">
                    <select name="gender"  id="gender" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                        <option id="gender" value="">Select</option>
                        <option value="Male" >Male</option>
                        <option value="Female" >Female</option>

                    </select>
                </div>
            </div>

            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Religion :</label>
                </div>
                <div class="col-sm-8">
                    <select name="religion"  id="religion" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                        <option id="religion" value="0">Select</option>
                        <option value="Hindu">Hindu</option>
                    </select>
                </div>
            </div>

            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Mother Tongue :</label>
                </div>
                <div class="col-sm-8">
                    <select name="mother_tongue" id="mother_tongue"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                        <option id="mother_tongue" value="">Select</option>
                        <option value="SSK Savji">SSK Savji</option>
                        <option value="Pategar">Pategar</option>
                        <option value="Khatri">Khatri</option>
                        <option value="Kannada">Kannada</option>
                        <option value="Marathi">Marathi</option>
                        <option value="Hindi">Hindi</option>
                        <option value="English">English</option>
                        <option value="Telugu">Telugu</option>
                        <option value="Tamil">Tamil</option>
                        <option value="Malayalam">Malayalam</option>
                    </select>
                </div>
            </div>
            
            
              

             <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    
                </div>
                <div class="col-sm-8">
                  <input type ="hidden" name = "type" value="AddRegister1">
                  <input type ="hidden" name = "register1_id" id="register1_id" value="">
                  <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success">Edit</button>
                </div>
            </div>

            </form>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg" id="religion-modal-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- header modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Edit Religion / Location Information</h4>
      </div>

      <!-- body modal -->
      <div class="modal-body">
        <div class="row">
          <form action="" id = "AddRegister2" method="post" enctype="multipart/form-data">

            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Caste :</label>
                </div>
                <div class="col-sm-8">
                    <select name="caste" id="caste"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                        <option id="caste" value="">Select</option>
                        <option value="Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)" >Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)</option>
                    </select>
                </div>
            </div>

            

            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Gotra :</label>
                </div>
                <div class="col-sm-8">
                  <input name="gotra" id="gotra"  type="text" placeholder="Enter Gotra" value="" class="form-control sml-frm input-sm" >
                </div>
            </div>

            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Dosh :</label>
                </div>
                <div class="col-sm-8" id="dosh_div">
                   <input value="Yes" id="dosh"  type="radio" name="dosh" > Yes &nbsp;&nbsp;
                    <input value="No" id="dosh" type="radio" name="dosh" > No &nbsp;&nbsp;
                    <input value="Dont Know" id="dosh" type="radio" name="dosh"> Don't Know
                </div>
            </div>

            <div class="row  to-fmid" id="country_div">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Country :</label>
                </div>
                <div class="col-sm-8">
                    
                    <select name="country"  style="padding-top: 3px;" class="form-control sml-frm input-sm countries"  id="SelectCountry" required="required">
                        <option id="country" value="">Select Country</option>
                        <option value="India">India</option>
                        <?php
                              $sql = $db->query("SELECT * FROM `countries`");
                              $numrow = $sql->num_rows;
                              if ($numrow > 0) {
                                  $i = 1;
                                  while ($row1 = $sql->fetch_assoc()) {
                                    //$selected2 = (isset($data['country']) && $row1['name'] == $data['country'])?'selected':'';
                                      ?>
                                      <option value="<?php echo $row1['name']; ?>"><?php echo $row1['name']; ?></option>
                                      <?php
                                  } //while loop
                              } //if loop
                              ?> 
                    </select>

                </div>
            </div>

            <div class="row  to-fmid" id="state_div">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">State :</label>
                </div>
                <div class="col-sm-8">
                    <select name="state" style="padding-top: 3px;" class="states form-control sml-frm input-sm" id="SelectStates" required="required">
                      
                        <option id="state" value="<?php echo isset($data['state'])?$data['state']:''?>"><?php echo isset($data['state'])?$data['state']:''?></option>
                    </select>
                    
                </div>
            </div>

            <div class="row  to-fmid" id="city_div">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">City :</label>
                </div>
                <div class="col-sm-8">
                    <select name="city" style="padding-top: 3px;" class="states form-control sml-frm input-sm" id="SelectCity" required="required">
                        
                        <option id="city" value="<?php echo isset($data['city'])?$data['city']:''?>"><?php echo isset($data['city'])?$data['city']:''?></option>
                    </select>
                </div>
            </div>

            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Zip Code :</label>
                </div>
                <div class="col-sm-8">
                  <input name="pincode" id="pincode" type="text" placeholder="Enter Zip Code" value="" class="form-control sml-frm input-sm" >
                </div>
            </div>

             <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    
                </div>
                <div class="col-sm-8">
                  <input type ="hidden" name = "type" value="AddRegister2">
                  <input type ="hidden" name = "register2_id" id="register2_id" value="">
                  <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success">Edit</button>
                </div>
            </div>

            </form>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="modal fade bs-example-modal-lg" id="personal-modal-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- header modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Edit Personal Details</h4>
      </div>

      <!-- body modal -->
      <div class="modal-body">
        <div class="row">
          <form action="" id = "AddRegister3" method="post" enctype="multipart/form-data">
                  
                  
                  <div class="row  to-fmid" id="marital_div">
                      
                      
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Height :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="height" id="height"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                               <option id="height" value="0">Feet/Inches</option>
                                <option value="4 - 6" >4ft 6in</option>
                                <option value="4 - 7" >4ft 7in</option>
                                <option value="4 - 8" >4ft 8in</option>
                                <option value="4 - 9" >4ft 9in</option>
                                <option value="4 - 10">4ft 10in</option>
                                <option value="4 - 11" >4ft 11in</option>
                                <option value="5" >5ft</option>
                                <option value="5 - 1" >5ft 1in</option>
                                <option value="5 - 2" >5ft 2in</option>
                                <option value="5 - 3" >5ft 3in</option>
                                <option value="5 - 4" >5ft 4in</option>
                                <option value="5 - 5" >5ft 5in</option>
                                <option value="5 - 6" >5ft 6in</option>
                                <option value="5 - 7" >5ft 7in</option>
                                <option value="5 - 8" >5ft 8in</option>
                                <option value="5 - 9" >5ft 9in</option>
                                <option value="5 - 10">5ft 10in</option>
                                <option value="5 - 11" >5ft 11in</option>
                                <option value="6">6ft</option>
                                <option value="6 - 1" >6ft 1in</option>
                                <option value="6 - 2" >6ft 2in</option>
                                <option value="6 - 3" >6ft 3in</option>
                                <option value="6 - 4" >6ft 4in</option>
                                <option value="6 - 5" >6ft 5in</option>
                                <option value="6 - 6" >6ft 6in</option>
                                <option value="6 - 7" >6ft 7in</option>
                                <option value="6 - 8" >6ft 8in</option>
                                <option value="6 - 9" >6ft 9in</option>
                                <option value="6 - 10" >6ft 10in</option>
                                <option value="6 - 11" >6ft 11in</option>
                                <option value="7">7ft</option> 
    
                          </select>
                      </div>
                  </div>

                  
                  <div class="row  to-fmid" id="family_s_div">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Family Status :</label>
                      </div>
                      <div class="col-sm-8">
                         <input value="Middle Class"   type="radio" name="family_status" <?php if($data['family_status'] == 'Middle Class') { ?> checked <?php } ?>> Middle Class &nbsp;&nbsp;
                          <input value="Upper Middle Class"  type="radio" name="family_status" <?php if($data['family_status'] == 'Upper Middle Class') { ?> checked <?php } ?>> Upper Middle Class <br>
                          <input value="Rich"  type="radio" name="family_status" <?php if($data['family_status'] == 'Rich') { ?> checked <?php } ?>> Rich &nbsp;&nbsp;
                          <input value="Affluent"  type="radio" name="family_status" <?php if($data['family_status'] == 'Affluent') { ?> checked <?php } ?>> Affluent
                      </div>
                  </div>

                  <div id="main_div">
                    <div class="row  to-fmid">
                        <div class="col-sm-4 no-padding">
                            <label class="cflo">Family Type :</label>
                        </div>
                        <div class="col-sm-8">
                           <input value="Joint"   type="radio" name="family_type" <?php if($data['family_type'] == 'Joint') { ?> checked <?php } ?>> Joint &nbsp;&nbsp;
                            <input value="Nuclear"  type="radio" name="family_type" <?php if($data['family_type'] == 'Nuclear') { ?> checked <?php } ?>> Nuclear
                        </div>
                    </div>

                    <div class="row  to-fmid">
                        <div class="col-sm-4 no-padding">
                            <label class="cflo">Family Values :</label>
                        </div>
                        <div class="col-sm-8">
                           <input value="Orthodox"   type="radio" name="family_values" <?php if($data['family_values'] == 'Orthodox') { ?> checked <?php } ?>> Orthodox &nbsp;&nbsp;
                            <input value="Traditional"  type="radio" name="family_values" <?php if($data['family_values'] == 'Traditional') { ?> checked <?php } ?>> Traditional &nbsp;&nbsp;
                            <br>
                            <input value="Moderate"  type="radio" name="family_values" <?php if($data['family_values'] == 'Moderate') { ?> checked <?php } ?>> Moderate &nbsp;&nbsp;
                            <input value="Liberal"  type="radio" name="family_values" <?php if($data['family_values'] == 'Liberal') { ?> checked <?php } ?>> Liberal
                        </div>
                    </div>

                    <div class="row  to-fmid">
                        <div class="col-sm-4 no-padding">
                            <label class="cflo">Any Disability :</label>
                        </div>
                        <div class="col-sm-8">
                           <input value="Normal"   type="radio" name="disability" <?php if($data['disability'] == 'Normal') { ?> checked <?php } ?>> Normal &nbsp;&nbsp;
                            <input value="Physically Challenged"  type="radio" name="disability" <?php if($data['disability'] == 'Physically Challenged') { ?> checked <?php } ?>> Physically Challenged 
                        </div>
                    </div>


                    <div id="disability_name" class="row  to-fmid" style="display: none;">
                        <div class="col-sm-4 no-padding">
                        </div>
                        <div class="col-sm-8">
                           <textarea rows="6" name="disability_name" cols="40" style="width: 100%;"><?php echo isset($data['disability_name'])?$data['disability_name']:''?></textarea> 
                        </div>
                    </div>
                  </div>


                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                       <input type ="hidden" name = "type" value="AddRegister3">
                       <input type ="hidden" name = "register3_id" id="register3_id" value="">
                        <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success">Edit</button>
                      </div>
                  </div>

                  </form>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg" id="professional-modal-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- header modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Edit Professional Information</h4>
      </div>

      <!-- body modal -->
      <div class="modal-body">
        <div class="row">
          <form action="" id = "AddRegister4" method="post" enctype="multipart/form-data">
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Highest Education :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="education" id="education"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option id="education" value="">Select education category</option>
              
                            <option value="BE / B.Tech.">BE / B.Tech.</option>
                            <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                            <option value="B.Arch">B.Arch</option>
                            <option value="BCA">BCA</option>
                            <option value="BE">BE</option>
                            <option value="B.Plan">B.Plan</option>
                            <option value="B.Sc IT/ Computer Science">B.Sc IT/ Computer Science</option>
                            <option value="B.Tech.">B.Tech.</option>
                            <option value="B.S.(Engineering)">B.S.(Engineering)</option>
                            <option value="Other Bachelor Degree in Engineering / Computers">Other Bachelor Degree in Engineering / Computers</option>

                            <option value="MCA / PGDCA">MCA / PGDCA</option>
                            <option value="ME / M.Tech.">ME / M.Tech.</option>
                            <option value="M.Arch.">M.Arch.</option>
                            <option value="MCA">MCA</option>
                            <option value="ME">ME</option>
                            <option value="M.Sc. IT / Computer Science">M.Sc. IT / Computer Science</option>
                            <option value="3">M.S.(Engg.)</option>
                            <option value="M.S.(Engg.)">M.Tech.</option>
                            <option value="PGDCA">PGDCA</option>
                            <option value="Other Masters Degree in Engineering / Computers">Other Masters Degree in Engineering / Computers</option>

                            <option value="Aviation Degree">Aviation Degree</option>
                            <option value="B.A.">B.A.</option>
                            <option value="B.Com.">B.Com.</option>
                            <option value="B.Ed.">B.Ed.</option>
                            <option value="BFA">BFA</option>
                            <option value="BFT">BFT</option>
                            <option value="BLIS">BLIS</option>
                            <option value="B.M.M.">B.M.M.</option>
                            <option value="B.Sc.">B.Sc.</option>
                            <option value="B.S.W">B.S.W</option>
                            <option value="B.Phil.">B.Phil.</option>
                            <option value="Other Bachelor Degree in Arts / Science / Commerce">Other Bachelor Degree in Arts / Science / Commerce</option>

                            <option value="M.A.">M.A.</option>
                            <option value="MCom">MCom</option>
                            <option value="M.Ed.">M.Ed.</option>
                            <option value="MFA">MFA</option>
                            <option value="MLIS">MLIS</option>
                            <option value="M.Sc.">M.Sc.</option>
                            <option value="MSW">MSW</option>
                            <option value="M.Phil.">M.Phil.</option>
                            <option value="Other Master Degree in Arts / Science / Commerce">Other Master Degree in Arts / Science / Commerce</option>

                            <option value="BBA">BBA</option>
                            <option value="BFM (Financial Management)">BFM (Financial Management)</option>
                            <option value="BHM (Hotel Management)">BHM (Hotel Management)</option>
                            <option value="BHA / BHM (Hospital Administration)">BHA / BHM (Hospital Administration)</option>
                            <option value="Other Bachelor Degree in Management">Other Bachelor Degree in Management</option>

                            <option value="MBA">MBA</option>
                            <option value="MFM (Financial Management)">MFM (Financial Management)</option>
                            <option value="MHM  (Hotel Management)">MHM  (Hotel Management)</option>
                            <option value="MHRM (Human Resource Management)">MHRM (Human Resource Management)</option>
                            <option value="PGDM">PGDM</option>
                            <option value="MBA / PGDM">MBA / PGDM</option>
                            <option value="MHA / MHM (Hospital Administration)">MHA / MHM (Hospital Administration)</option>
                            <option value="Other Master Degree in Management">Other Master Degree in Management</option>

                            <option value="B.A.M.S.">B.A.M.S.</option>
                            <option value="BDS">BDS</option>
                            <option value="BHMS">BHMS</option>
                            <option value="BSMS">BSMS</option>
                            <option value="BPharm">BPharm</option>
                            <option value="BPT">BPT</option>
                            <option value="BUMS">BUMS</option>
                            <option value="BVSc">BVSc</option>
                            <option value="MBBS">MBBS</option>
                            <option value="B.Sc. Nursing">B.Sc. Nursing</option>
                            <option value="Other Bachelor Degree in Medicine">Other Bachelor Degree in Medicine</option>

                            <option value="MDS">MDS</option>
                            <option value="MD / MS (Medical)">MD / MS (Medical)</option>
                            <option value="M.Pharm">M.Pharm</option>
                            <option value="MPT">MPT</option>
                            <option value="MVSc">MVSc </option>
                            <option value="Other Master Degree in Medicine">Other Master Degree in Medicine</option>

                            <option value="BGL">BGL</option>
                            <option value="B.L.">B.L.</option>
                            <option value="LL.B.">LL.B.</option>
                            <option value="BGL / B.L. / LL.B.">BGL / B.L. / LL.B.</option>
                            <option value="Other Bachelor Degree in Legal">Other Bachelor Degree in Legal</option>

                            <option value="LL.M.">LL.M.</option>
                            <option value="M.L.">M.L.</option>
                            <option value="M.L. / LL.M.">M.L. / LL.M.</option>
                            <option value="Other Master Degree in  Legal">Other Master Degree in  Legal</option>

                            <option value="CA">CA</option>
                            <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial Analyst)</option>
                            <option value="CS">CS</option>
                            <option value="ICWA">ICWA</option>
                            <option value="Other Degree in Finance">Other Degree in Finance</option>

                            <option value="IAS">IAS</option>
                            <option value="IES">IES</option>
                            <option value="IFS">IFS</option>
                            <option value="IRS">IRS</option>
                            <option value="IPS">IPS</option>
                            <option value="IAS / IPS/ IRS / IES / IFS">IAS / IPS/ IRS / IES / IFS</option>
                            <option value="Other Degree in Service">Other Degree in Service</option>

                            <option value="Ph.D.">Ph.D.</option>

                            <option value="Diploma">Diploma</option>
                            <option value="Polytechnic">Polytechnic</option>
                            <option value="Trade School">Trade School</option>
                            <option value="Others">Others</option>

                            <option value="Higher Secondary School / High School">Higher Secondary School / High School</option>
    
                          </select>
                      </div>
                  </div>

                  <div class="row  to-fmid" id="emp_id">
                    <div class="col-sm-4 no-padding">
                        <label class="cflo">Employed in :</label>
                    </div>
                    <div class="col-sm-8">
                       <input value="Government"   type="radio" name="employed" <?php if($data['employed'] == 'Government') { ?> checked <?php } ?>> Government &nbsp;&nbsp;
                        <input value="Private"  type="radio" name="employed" <?php if($data['employed'] == 'Private') { ?> checked <?php } ?>> Private &nbsp;&nbsp;
                        <br>
                        <input value="Business"  type="radio" name="employed" <?php if($data['employed'] == 'Business') { ?> checked <?php } ?>> Business &nbsp;&nbsp;
                        <input value="Defence"  type="radio" name="employed" <?php if($data['employed'] == 'Defence') { ?> checked <?php } ?>> Defence &nbsp;&nbsp;
                        <br>
                        <input value="Self Employed"  type="radio" name="employed" <?php if($data['employed'] == 'Self Employed') { ?> checked <?php } ?>> Self Employed &nbsp;&nbsp;
                        <input value="Not Working"  type="radio" name="employed" <?php if($data['employed'] == 'Not Working') { ?> checked <?php } ?>> Not Working
                    </div>
                </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Occupation :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="occupation"  id="occupation" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option id="occupation" value="">Select Occupation</option>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMINISTRATION --" class="a">
                                <option value="Manager">Manager</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Officer">Officer</option>
                                <option value="Administrative Professional">Administrative Professional</option>
                                <option value="Executive">Executive</option>
                                <option value="Clerk">Clerk</option>
                                <option value="Human Resources Professional">Human Resources Professional</option>
                                <option value="Secretary / Front Office">Secretary / Front Office</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --" class="a">
                                <option value="Agriculture & Farming Professional">Agriculture & Farming Professional</option>
                                <option value="Horticulturist">Horticulturist</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --" class="a">
                                <option value="Pilot">Pilot</option>
                                <option value="Air Hostess / Flight Attendant">Air Hostess / Flight Attendant</option>
                                <option value="Airline Professional">Airline Professional</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECTURE & DESIGN --" class="a">
                                <option value="Architect">Architect</option>
                                <option value="Interior Designer">Interior Designer</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING & FINANCE --" class="a">
                                <option value="Chartered Accountant">Chartered Accountant</option>
                                <option value="Company Secretary">Company Secretary</option>
                                <option value="Accounts / Finance Professional">Accounts / Finance Professional</option>
                                <option value="Banking Professional">Banking Professional</option>
                                <option value="Auditor">Auditor</option>
                                <option value="Financial Accountant">Financial Accountant</option>
                                <option value="Financial Analyst / Planning">Financial Analyst / Planning</option>
                                <option value="Investment Professional">Investment Professional</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY & FASHION --" class="a">
                                <option value="Fashion Designer">Fashion Designer</option>
                                <option value="Beautician">Beautician</option>
                                <option value="Hair Stylist">Hair Stylist</option>
                                <option value="Jewellery Designer">Jewellery Designer</option>
                                <option value="Designer (Others)">Designer (Others)</option>
                                <option value="Makeup Artist">Makeup Artist</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BPO & CUSTOMER SERVICE --" class="a">
                                <option value="BPO / KPO / ITES Professional">BPO / KPO / ITES Professional</option>
                                <option value="Customer Service Professional">Customer Service Professional</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --" class="a">
                                <option value="Civil Services (IAS / IPS / IRS / IES / IFS)">Civil Services (IAS / IPS / IRS / IES / IFS)</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CORPORATE PROFESSIONALS --" class="a">
                                <option value="Analyst">Analyst</option>
                                <option value="Consultant">Consultant</option>
                                <option value="Corporate Communication">Corporate Communication</option>
                                <option value="Corporate Planning">Corporate Planning</option>
                                <option value="Marketing Professional">Marketing Professional</option>
                                <option value="Operations Management">Operations Management</option>
                                <option value="Sales Professional">Sales Professional</option>
                                <option value="Senior Manager / Manager">Senior Manager / Manager</option>
                                <option value="Subject Matter Expert">Subject Matter Expert</option>
                                <option value="Business Development Professional">Business Development Professional</option>
                                <option value="Content Writer">Content Writer</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --" class="a">
                                <option value="Army">Army</option>
                                <option value="Navy">Navy</option>
                                <option value="Defence Services (Others)">Defence Services (Others)</option>
                                <option value="Air Force">Air Force</option>
                                <option value="Paramilitary">Paramilitary</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION & TRAINING --" class="a">
                                <option value="Professor / Lecturer">Professor / Lecturer</option>
                                <option value="Teaching / Academician">Teaching / Academician</option>
                                <option value="Education Professional">Education Professional</option>
                                <option value="Training Professional">Training Professional</option>
                                <option value="Research Assistant">Research Assistant</option>
                                <option value="Research Scholar">Research Scholar</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ENGINEERING --" class="a">
                                <option value="Civil Engineer">Civil Engineer</option>
                                <option value="Electronics / Telecom Engineer">Electronics / Telecom Engineer</option>
                                <option value="Mechanical / Production Engineer">Mechanical / Production Engineer</option>
                                <option value="Quality Assurance Engineer - Non IT">Quality Assurance Engineer - Non IT</option>
                                <option value="Engineer - Non IT">Engineer - Non IT</option>
                                <option value="Designer">Designer</option>
                                <option value="Product Manager - Non IT">Product Manager - Non IT</option>
                                <option value="Project Manager - Non IT">Project Manager - Non IT</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --" class="a">
                                <option value="Hotel / Hospitality Professional">Hotel / Hospitality Professional</option>
                                <option value="Restaurant / Catering Professional">Restaurant / Catering Professional</option>
                                <option value="Chef / Cook">Chef / Cook</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT & SOFTWARE --" class="a">
                                <option value="Software Professional" >Software Professional</option>
                                <option value="Hardware Professional">Hardware Professional</option>
                                <option value="Product Manager">Product Manager</option>
                                <option value="Project Manager">Project Manager</option>
                                <option value="Program Manager">Program Manager</option>
                                <option value="Animator">Animator</option>
                                <option value="Cyber / Network Security">Cyber / Network Security</option>
                                <option value="UI / UX Designer">UI / UX Designer</option>
                                <option value="Web / Graphic Designer">Web / Graphic Designer</option>
                                <option value="Software Consultant">Software Consultant</option>
                                <option value="Data Analyst">Data Analyst</option>
                                <option value="Data Scientist">Data Scientist</option>
                                <option value="Network Engineer">Network Engineer</option>
                                <option value="Quality Assurance Engineer">Quality Assurance Engineer</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --" class="a">
                                <option value="Lawyer & Legal Professional">Lawyer & Legal Professional</option>
                                <option value="Legal Assistant">Legal Assistant</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LAW ENFORCEMENT --" class="a">
                                <option value="Law Enforcement Officer">Law Enforcement Officer</option>
                                <option value="Police">Police</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL & HEALTHCARE --" class="a">
                                <option value="Doctor">Doctor</option>
                                <option value="Healthcare Professional">Healthcare Professional</option>
                                <option value="Paramedical Professional">Paramedical Professional</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="Physiotherapist">Physiotherapist</option>
                                <option value="Psychologist">Psychologist</option>
                                <option value="Veterinary Doctor">Veterinary Doctor</option>
                                <option value="Dentist">Dentist</option>
                                <option value="Surgeon">Surgeon</option>
                                <option value="Therapist">Therapist</option>
                                <option value="Medical Transcriptionist">Medical Transcriptionist</option>
                                <option value="Dietician / Nutritionist">Dietician / Nutritionist</option>
                                <option value="Lab Technician">Lab Technician</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA & ENTERTAINMENT --" class="a">
                                <option value="Journalist">Journalist</option>
                                <option value="Media Professional">Media Professional</option>
                                <option value="Entertainment Professional">Entertainment Professional</option>
                                <option value="Event Management Professional">Event Management Professional</option>
                                <option value="Advertising / PR Professional">Advertising / PR Professional</option>
                                <option value="Designer">Designer</option>
                                <option value="Actor / Model">Actor / Model</option>
                                <option value="Artist">Artist</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --" class="a">
                                <option value="Mariner / Merchant Navy">Mariner / Merchant Navy</option>
                                <option value="Sailor">Sailor</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --" class="a">
                                <option value="Scientist / Researcher">Scientist / Researcher</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- TOP MANAGEMENT --" class="a">
                                <option value="CXO / President, Director, Chairman">CXO / President, Director, Chairman</option>
                                <option value="VP / AVP / GM / DGM / AGM">VP / AVP / GM / DGM / AGM</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --" class="a">
                                <option value="Technician">Technician</option>
                                <option value="Arts & Craftsman">Arts & Craftsman</option>
                                <option value="Librarian">Librarian</option>
                                <option value="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
                                <option value="Retired">Retired</option>
                                <option value="Transportation / Logistics Professional">Transportation / Logistics Professional</option>
                                <option value="Agent / Broker / Trader">Agent / Broker / Trader</option>
                                <option value="Contractor">Contractor</option>
                                <option value="Fitness Professional">Fitness Professional</option>
                                <option value="Security Professional">Security Professional</option>
                                <option value="Social Worker /  Volunteer / NGO">Social Worker /  Volunteer / NGO</option>
                                <option value="Sportsperson">Sportsperson</option>
                                <option value="Travel Professional">Travel Professional</option>
                                <option value="Singer">Singer</option>
                                <option value="Writer">Writer</option>
                                <option value="Politician">Politician</option>
                                <option value="Associate">Associate</option>
                                <option value="Builder">Builder</option>
                                <option value="Chemist">Chemist</option>
                                <option value="CNC Operator">CNC Operator</option>
                                <option value="Distributor">Distributor</option>
                                <option value="Driver">Driver</option>
                                <option value="Freelancer">Freelancer</option>
                                <option value="Mechanic">Mechanic</option>
                                <option value="Medical Representative">Medical Representative</option>
                                <option value="Musician">Musician</option>
                                <option value="Photo / Videographer">Photo / Videographer</option>
                                <option value="Surveyor">Surveyor</option>
                                <option value="Tailor">Tailor</option>
                                <option value="Others">Others</option>
                              </optgroup>
    
                          </select>
                      </div>
                  </div>

                  
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Annual Income :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="income" id="income"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option id="income" value="">Select Income</option>
                              <option value="0 - 1 Lakh" >0 - 1 Lakh</option>
                              <option value="1 - 2 Lakhs" >1 - 2 Lakhs</option>
                              <option value="2 - 3 Lakhs" >2 - 3 Lakhs</option>
                              <option value="3 - 4 Lakhs" >3 - 4 Lakhs</option>
                              <option value="4 - 5 Lakhs" >4 - 5 Lakhs</option>
                              <option value="5 - 6 Lakhs" >5 - 6 Lakhs</option>
                              <option value="6 - 7 Lakhs" >6 - 7 Lakhs</option>
                              <option value="7 - 8 Lakhs" >7 - 8 Lakhs</option>
                              <option value="8 - 9 Lakhs" >8 - 9 Lakhs</option>
                              <option value="9 - 10 Lakhs" >9 - 10 Lakhs</option>
                              <option value="10 - 12 Lakhs">10 - 12 Lakhs</option>
                              <option value="12 - 14 Lakhs">12 - 14 Lakhs</option>
                              <option value="14 - 16 Lakhs">14 - 16 Lakhs</option>
                              <option value="16 - 18 Lakhs">16 - 18 Lakhs</option>
                              <option value="18 - 20 Lakhs">18 - 20 Lakhs</option>
                              <option value="20 - 25 Lakhs">20 - 25 Lakhs</option>
                              <option value="25 - 30 Lakhs">25 - 30 Lakhs</option>
                              <option value="30 - 35 Lakhs">30 - 35 Lakhs</option>
                              <option value="35 - 40 Lakhs">35 - 40 Lakhs</option>
                              <option value="40 - 45 Lakhs">40 - 45 Lakhs</option>
                              <option value="45 - 50 Lakhs">45 - 50 Lakhs</option>
                              <option value="50 - 60 Lakhs">50 - 60 Lakhs</option>
                              <option value="60 - 70 Lakhs">60 - 70 Lakhs</option>
                              <option value="70 - 80 Lakhs">70 - 80 Lakhs</option>
                              <option value="80 - 90 Lakhs">80 - 90 Lakhs</option>
                              <option value="90 Lakhs - 1 Crore"  >90 Lakhs - 1 Crore</option>
                              <option value="1 Crore & Above"  >1 Crore & Above</option>
    
                          </select>
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                        <input type ="hidden" name = "type" value="AddRegister4">
                        <input type ="hidden" name = "register4_id" id="register4_id" value="">
                        <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success">Edit</button>
                      </div>
                  </div>

                  </form>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg" id="other-modal-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- header modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Edit Some Other Details</h4>
      </div>

      <!-- body modal -->
      <div class="modal-body">
        <div class="row">
          <form action="" id = "AddBasicDetails" method="post" enctype="multipart/form-data">
                  
                  <div class="row  to-fmid" id="body_type">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Body Type :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="Slim"   type="radio" name="body_type" <?php if($data['body_type'] == 'Slim') { ?> checked <?php } ?>> Slim &nbsp;&nbsp;
                          <input value="Average"  type="radio" name="body_type" <?php if($data['body_type'] == 'Average') { ?> checked <?php } ?>> Average &nbsp;&nbsp;<br>
                          <input value="Athletic"  type="radio" name="body_type" <?php if($data['body_type'] == 'Athletic') { ?> checked <?php } ?>> Athletic &nbsp;&nbsp;
                          <br>
                          <input value="Heavy"  type="radio" name="body_type" <?php if($data['body_type'] == 'Heavy') { ?> checked <?php } ?>> Heavy 
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Weight :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="weight" id="weight"   style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option  id="weight" value="0">--Kgs--</option>
                              <option value="41">41 Kg</option>
                              <option value="42">42 Kg</option>
                              <option value="43">43 Kg</option>
                              <option value="44">44 Kg</option>
                              <option value="45">45 Kg</option>
                              <option value="46">46 Kg</option>
                              <option value="47">47 Kg</option>
                              <option value="48">48 Kg</option>
                              <option value="49">49 Kg</option>
                              <option value="50">50 Kg</option>
                              <option value="51">51 Kg</option>
                              <option value="52">52 Kg</option>
                              <option value="53">53 Kg</option>
                              <option value="54">54 Kg</option>
                              <option value="55">55 Kg</option>
                              <option value="56">56 Kg</option>
                              <option value="57">57 Kg</option>
                              <option value="58">58 Kg</option>
                              <option value="59">59 Kg</option>
                              <option value="60">60 Kg</option>
                              <option value="61">61 Kg</option>
                              <option value="62">62 Kg</option>
                              <option value="63">63 Kg</option>
                              <option value="64">64 Kg</option>
                              <option value="65">65 Kg</option>
                              <option value="66">66 Kg</option>
                              <option value="67">67 Kg</option>
                              <option value="68">68 Kg</option>
                              <option value="69">69 Kg</option>
                              <option value="70">70 Kg</option>
                              <option value="71">71 Kg</option>
                              <option value="72">72 Kg</option>
                              <option value="73">73 Kg</option>
                              <option value="74">74 Kg</option>
                              <option value="75">75 Kg</option>
                              <option value="76">76 Kg</option>
                              <option value="77">77 Kg</option>
                              <option value="78">78 Kg</option>
                              <option value="79">79 Kg</option>
                              <option value="80">80 Kg</option>
                              <option value="81">81 Kg</option>
                              <option value="82">82 Kg</option>
                              <option value="83">83 Kg</option>
                              <option value="84">84 Kg</option>
                              <option value="85">85 Kg</option>
                              <option value="86">86 Kg</option>
                              <option value="87">87 Kg</option>
                              <option value="88">88 Kg</option>
                              <option value="89">89 Kg</option>
                              <option value="90">90 Kg</option>
                              <option value="91">91 Kg</option>
                              <option value="92">92 Kg</option>
                              <option value="93">93 Kg</option>
                              <option value="94">94 Kg</option>
                              <option value="95">95 Kg</option>
                              <option value="96">96 Kg</option>
                              <option value="97">97 Kg</option>
                              <option value="98">98 Kg</option>
                              <option value="99">99 Kg</option>
                              <option value="100">100 Kg</option>
                              <option value="101">101 Kg</option>
                              <option value="102">102 Kg</option>
                              <option value="103">103 Kg</option>
                              <option value="104">104 Kg</option>
                              <option value="105">105 Kg</option>
                              <option value="106">106 Kg</option>
                              <option value="107">107 Kg</option>
                              <option value="108">108 Kg</option>
                              <option value="109">109 Kg</option>
                              <option value="110">110 Kg</option>
                              <option value="111">111 Kg</option>
                              <option value="112">112 Kg</option>
                              <option value="113">113 Kg</option>
                              <option value="114">114 Kg</option>
                              <option value="115">115 Kg</option>
                              <option value="116">116 Kg</option>
                              <option value="117">117 Kg</option>
                              <option value="118">118 Kg</option>
                              <option value="119">119 Kg</option>
                              <option value="120">120 Kg</option>
                              <option value="121">121 Kg</option>
                              <option value="122">122 Kg</option>
                              <option value="123">123 Kg</option>
                              <option value="124">124 Kg</option>
                              <option value="125">125 Kg</option>
                              <option value="126">126 Kg</option>
                              <option value="127">127 Kg</option>
                              <option value="128">128 Kg</option>
                              <option value="129">129 Kg</option>
                              <option value="130">130 Kg</option>
                              <option value="131">131 Kg</option>
                              <option value="132">132 Kg</option>
                              <option value="133">133 Kg</option>
                              <option value="134">134 Kg</option>
                              <option value="135">135 Kg</option>
                              <option value="136">136 Kg</option>
                              <option value="137">137 Kg</option>
                              <option value="138">138 Kg</option>
                              <option value="139">139 Kg</option>
                              <option value="140">140 Kg</option>       
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">College/Institution :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="college" id="college" type="text" placeholder="Enter College/Institution" value="" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Organization :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="organization" id="organization"  type="text" placeholder="Enter Organization" value="" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1><i class="fa fa-glass" style="font-size: xx-large;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Life Style Info</h1>
                  <div id="test_div">
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Eating Habit :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="Vegetarian"   type="radio" name="eating_habit" <?php if($data['eating_habit'] == 'Vegetarian') { ?> checked <?php } ?>> Vegetarian &nbsp;&nbsp;<br>
                          <input value="Non-Vegeterian"  type="radio" name="eating_habit" <?php if($data['eating_habit'] == 'Non-Vegeterian') { ?> checked <?php } ?>> Non-Vegeterian &nbsp;&nbsp;<br>
                          <input value="Eggetarian"  type="radio" name="eating_habit" <?php if($data['eating_habit'] == 'Eggetarian') { ?> checked <?php } ?>> Eggetarian
                          
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Drinking Habit :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="No"   type="radio" name="drinking_habit" <?php if($data['drinking_habit'] == 'No') { ?> checked <?php } ?>> No &nbsp;&nbsp;
                          <input value="Yes"  type="radio" name="drinking_habit" <?php if($data['drinking_habit'] == 'Yes') { ?> checked <?php } ?>> Yes &nbsp;&nbsp;<br>
                          <input value="Drinks Socially"  type="radio" name="drinking_habit" <?php if($data['drinking_habit'] == 'Drinks Socially') { ?> checked <?php } ?>> Drinks Socially
                          
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Smoking Habit :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="No"   type="radio" name="smoking_habit" <?php if($data['smoking_habit'] == 'No') { ?> checked <?php } ?>> No &nbsp;&nbsp;
                          <input value="Yes"  type="radio" name="smoking_habit" <?php if($data['smoking_habit'] == 'Yes') { ?> checked <?php } ?>> Yes &nbsp;&nbsp;<br>
                          <input value="Occasionally"  type="radio" name="smoking_habit" <?php if($data['smoking_habit'] == 'Occasionally') { ?> checked <?php } ?>> Occasionally
                          
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>
                  </div>

                  <hr>

                  <h1><i class="fa fa-book" style="font-size: xx-large;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Religion Information</h1>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Select Star/Nakshatra :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="star" id="star"   style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option  id="star" value="">Select</option>
                              <option value="Ashwini">Ashwini</option>
                              <option value="Bharni">Bharni</option>
                              <option value="Krittika" >Krittika</option>
                              <option value="Rohini">Rohini</option>
                              <option value="Mrigshirsha">Mrigshirsha</option>
                              <option value="Ardra">Ardra</option>
                              <option value="Punarvasu">Punarvasu</option>
                              <option value="Pushya">Pushya</option>
                              <option value="Ashlesha" >Ashlesha</option>
                              <option value="Megha">Megha</option>
                              <option value="Purva phalguni">Purva phalguni</option>
                              <option value="Uttara phalguni">Uttara phalguni</option>
                              <option value="Hasta">Hasta</option>
                              <option value="Chitra">Chitra</option>
                              <option value="Swati">Swati</option>
                              <option value="Vishakha" >Vishakha</option>
                              <option value="Anuradha" >Anuradha</option>
                              <option value="Jyeshtha" >Jyeshtha</option>
                              <option value="Moola">Moola</option>
                              <option value="Purv ashadha">Purv ashadha</option>
                              <option value="Uttar ashadha">Uttar ashadha</option>
                              <option value="Shravan">Shravan</option>
                              <option value="Dhanishta">Dhanishta</option>
                              <option value="Shatbhisha" >Shatbhisha</option>
                              <option value="Poorva bhadrapada" >Poorva bhadrapada</option>
                              <option value="Uttara bhadrapada" >Uttara bhadrapada</option>
                              <option value="Revati">Revati</option>  
                              <option value="Abhijit">Abhijit</option>
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Select Raasi :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="raasi" id="raasi"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option id="raasi" value="0">Select</option>
                              <option value="Mesha/Aries" >Mesha/Aries</option>
                              <option value="Vrushabh/Taurus" >Vrushabh/Taurus</option>
                              <option value="Mithun/Gemini"  >Mithun/Gemini</option>
                              <option value="Simha/Leo">Simha/Leo</option>
                              <option value="Kanya/Virgo" >Kanya/Virgo</option>
                              <option value="Tula/Libra">Tula/Libra</option>
                              <option value="Vrushchik/Scorpius" >Vrushchik/Scorpius</option>
                              <option value="Dhanu/Sagittarius" >Dhanu/Sagittarius</option>
                              <option value="Makar/Capricornus" >Makar/Capricornus</option>
                              <option value="Karka/Cancer" >Karka/Cancer</option>
                              <option value="Kumbha/Aquarius" >Kumbha/Aquarius</option>
                              <option value="Meen/Pisces" >Meen/Pisces</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1><i class="fa fa-address-book" style="font-size: xx-large;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Family Information</h1>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Father's Occupation :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="father_occu" id="father_occu"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option id="father_occu" value="0">Select</option>
                          <option value="Employed" >Employed</option>
                          <option value="Business Man" >Business Man</option>
                          <option value="Professional">Professional</option>
                          <option value="Retired" >Retired</option>
                          <option value="Not Employed" >Not Employed</option>
                          <option value="Passed Away">Passed Away</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Mother's Occupation :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="mother_occu" id="mother_occu"   style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option  id="mother_occu" value="0">Select</option>
                              <option value="Homemaker">Homemaker</option>
                              <option value="Employed" >Employed</option>
                              <option value="Business Woman">Business Woman</option>
                              <option value="Professional">Professional</option>
                              <option value="Retired"> Retired</option>
                              <option value="Not Employed">Not Employed</option>
                              <option value="Passed Away" >Passed Away</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Brothers :</label>
                      </div>
                      <div class="col-sm-3">
                          <select name="brother" id="brother"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option id="brother" value="0">Number of Brothers</option>
                              <option value="None">None</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5+">5+</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1">
                      </div>
                      <div class="col-sm-3">
                          <select name="brother_married"  id="brother_married" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option id="brother_married" value="0">Brothers Married</option>
                              <option value="None">None</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5+">5+</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Sisters :</label>
                      </div>
                      <div class="col-sm-3">
                          <select name="sister" id="sister"   style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option  id="sister" value="0">Number of Sisters</option>
                              <option value="None">None</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5+">5+</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1">
                      </div>
                      <div class="col-sm-3">
                          <select name="sister_married" id="sister_married"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option id="sister_married" value="0">Sisters Married</option>
                              <option value="None">None</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5+">5+</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid" id="family_loc">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Family Location :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="Same as my location"   type="radio" name="family_location" <?php if($data['family_location'] == 'Same as my location') { ?> checked <?php } ?>> Same as my location &nbsp;&nbsp;<br>
                          <input value="Different Location"  type="radio" name="family_location" <?php if($data['family_location'] == 'Different Location') { ?> checked <?php } ?>> Different Location 
                          
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Parent's Contact Number :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="parents_mobile" id="parents_mobile" value="" type="text" placeholder="Enter Parent's Contact Number" min="0" pattern="[1-9]{1}[0-9]{9}" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Parent's Contact Number :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="parents_mobile1" id="parents_mobile1" value="" type="text" placeholder="Enter Parent's Contact Number" min="0" pattern="[1-9]{1}[0-9]{9}" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Parent's Contact Number :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="parents_mobile2" id="parents_mobile2" value="" type="text" placeholder="Enter Parent's Contact Number" min="0" pattern="[1-9]{1}[0-9]{9}" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Ancestral Origin :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="ancestral" id="ancestral" value="" type="text" min="0" placeholder="Enter Ancestral Origin" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-4 no-padding">
                        <label class="cflo"></label>
                    </div>
                     <div class="col-sm-4 wrapper">
                        <input type ="hidden" name = "type" value="AddBasicDetails">
                        <input type ="hidden" name = "basic_id" id="basic_id" value="">
                        <button type="submit" id="submit" class="btn btn-sm btn-success">Complete Profile & Continue</button>
                      </div>
                    <div class="col-sm-4 no-padding">
                        
                    </div>
                   
                  </div>

                  </form>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="modal fade bs-example-modal-lg" id="life-modal-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- header modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myLargeModalLabel">Edit Religion / Location Information</h4>
      </div>

      <!-- body modal -->
      <div class="modal-body">
        <div class="row">
          <h1>What are your hobbies and interests?</h1>
              <form action="" id = "AddPersonalDetails" method="post" enctype="multipart/form-data">
              
              <div id="hob_div">
              <div class="row  to-fmid" id="">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <!-- <div class="col-sm-3 no-padding">
                      <label class="cflo">Body Type :</label>
                  </div> -->
                  <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                  <div class="col-sm-10 no-padding">
                     <input value="Cooking"   type="checkbox" name="hobbies[]" <?php if (in_array("Cooking", $hobbies)){?> checked <?php } ?>> Cooking &nbsp;&nbsp;
                      <input value="Pets"  type="checkbox" name="hobbies[]" <?php if (in_array("Pets", $hobbies)){?> checked <?php } ?>> Pets <br>
                      <input value="Playing Musical Instruments"  type="checkbox" name="hobbies[]" <?php if (in_array("Playing Musical Instruments", $hobbies)){?> checked <?php } ?>> Playing Musical Instruments <br>
                      <input value="Nature"  type="checkbox" name="hobbies[]" <?php if (in_array("Nature", $hobbies)){?> checked <?php } ?>> Nature &nbsp;&nbsp;
                      <input value="Dancing"  type="checkbox" name="hobbies[]" <?php if (in_array("Dancing", $hobbies)){?> checked <?php } ?>> Dancing <br>
                      <input value="Internet Surfing"  type="checkbox" name="hobbies[]" <?php if (in_array("Internet Surfing", $hobbies)){?> checked <?php } ?>> Internet Surfing <br>
                      <input value="Drawing"  type="checkbox" name="hobbies[]" <?php if (in_array("Drawing", $hobbies)){?> checked <?php } ?>> Drawing &nbsp;&nbsp;
                      <input value="Photography"  type="checkbox" name="hobbies[]" <?php if (in_array("Photography", $hobbies)){?> checked <?php } ?>> Photography <br>
                      <input value="Gardening / Landscaping"  type="checkbox" name="hobbies[]" <?php if (in_array("Gardening / Landscaping", $hobbies)){?> checked <?php } ?>> Gardening / Landscaping <br>
                      <input value="Painting"  type="checkbox" name="hobbies[]" <?php if (in_array("Painting", $hobbies)){?> checked <?php } ?>> Painting &nbsp;&nbsp;
                      <input value="Traveling"  type="checkbox" name="hobbies[]" <?php if (in_array("Traveling", $hobbies)){?> checked <?php } ?>> Traveling <br>
                      <input value="Art / Handicraft"  type="checkbox" name="hobbies[]" <?php if (in_array("Art / Handicraft", $hobbies)){?> checked <?php } ?>> Art / Handicraft <br>
                      <input value="Puzzles"  type="checkbox" name="hobbies[]" <?php if (in_array("Puzzles", $hobbies)){?> checked <?php } ?>> Puzzles &nbsp;&nbsp;
                      <input value="Movies"  type="checkbox" name="hobbies[]" <?php if (in_array("Movies", $hobbies)){?> checked <?php } ?>> Movies <br>
                      <input value="Acting"  type="checkbox" name="hobbies[]" <?php if (in_array("Acting", $hobbies)){?> checked <?php } ?>> Acting &nbsp;&nbsp;
                      <input value="Astronomy"  type="checkbox" name="hobbies[]" <?php if (in_array("Astronomy", $hobbies)){?> checked <?php } ?>> Astronomy <br>
                      <input value="Astrology"  type="checkbox" name="hobbies[]" <?php if (in_array("Astrology", $hobbies)){?> checked <?php } ?>> Astrology &nbsp;&nbsp;
                      <input value="Collectibles"  type="checkbox" name="hobbies[]" <?php if (in_array("Collectibles", $hobbies)){?> checked <?php } ?>> Collectibles <br>
                      <input value="Crosswords"  type="checkbox" name="hobbies[]" <?php if (in_array("Crosswords", $hobbies)){?> checked <?php } ?>> Crosswords &nbsp;&nbsp;
                      <input value="Film-making"  type="checkbox" name="hobbies[]" <?php if (in_array("Film-making", $hobbies)){?> checked <?php } ?>> Film-making <br>
                      <input value="Fishing"  type="checkbox" name="hobbies[]" <?php if (in_array("Fishing", $hobbies)){?> checked <?php } ?>> Fishing &nbsp;&nbsp;
                      <input value="Graphology"  type="checkbox" name="hobbies[]" <?php if (in_array("Graphology", $hobbies)){?> checked <?php } ?>> Graphology <br>
                      <input value="Numerology"  type="checkbox" name="hobbies[]" <?php if (in_array("Numerology", $hobbies)){?> checked <?php } ?>> Numerology &nbsp;&nbsp;
                      <input value="Palmistry"  type="checkbox" name="hobbies[]" <?php if (in_array("Palmistry", $hobbies)){?> checked <?php } ?>> Palmistry <br>
                      <input value="Playing musical instruments"  type="checkbox" name="hobbies[]" <?php if (in_array("Playing musical instruments", $hobbies)){?> checked <?php } ?>> Playing musical instruments &nbsp;&nbsp;
                     
                  </div> <?php  } else { ?>
                    <div class="col-sm-10 no-padding">
                     <input value="Cooking"   type="checkbox" name="hobbies[]"> Cooking &nbsp;&nbsp;
                      <input value="Music"  type="checkbox" name="hobbies[]"> Music &nbsp;&nbsp;
                      <input value="Reading"  type="checkbox" name="hobbies[]"> Reading <br>
                      <input value="Nature"  type="checkbox" name="hobbies[]"> Nature &nbsp;&nbsp;
                      <input value="Dancing"  type="checkbox" name="hobbies[]"> Dancing <br>
                      <input value="Internet"  type="checkbox" name="hobbies[]"> Internet <br>
                      <input value="Drawing"  type="checkbox" name="hobbies[]"> Drawing &nbsp;&nbsp;
                      <input value="Photography"  type="checkbox" name="hobbies[]"> Photography <br>
                      <input value="Gardening / Landscaping"  type="checkbox" name="hobbies[]" > Gardening / Landscaping <br>
                      <input value="Painting"  type="checkbox" name="hobbies[]" > Painting &nbsp;&nbsp;
                      <input value="Traveling"  type="checkbox" name="hobbies[]" > Traveling <br>
                      <input value="Art / Handicraft"  type="checkbox" name="hobbies[]" > Art / Handicraft <br>
                      <input value="Puzzles"  type="checkbox" name="hobbies[]" > Puzzles &nbsp;&nbsp;
                      <input value="Movies"  type="checkbox" name="hobbies[]" > Movies <br>
                      <input value="Acting"  type="checkbox" name="hobbies[]" > Acting &nbsp;&nbsp;
                      <input value="Astronomy"  type="checkbox" name="hobbies[]" > Astronomy <br>
                      <input value="Astrology"  type="checkbox" name="hobbies[]" > Astrology &nbsp;&nbsp;
                      <input value="Collectibles"  type="checkbox" name="hobbies[]" > Collectibles <br>
                      <input value="Crosswords"  type="checkbox" name="hobbies[]" > Crosswords &nbsp;&nbsp;
                      <input value="Film-making"  type="checkbox" name="hobbies[]" > Film-making <br>
                      <input value="Fishing"  type="checkbox" name="hobbies[]" > Fishing &nbsp;&nbsp;
                      <input value="Graphology"  type="checkbox" name="hobbies[]" > Graphology <br>
                      <input value="Numerology"  type="checkbox" name="hobbies[]" > Numerology &nbsp;&nbsp;
                      <input value="Palmistry"  type="checkbox" name="hobbies[]" > Palmistry <br>
                      <input value="Playing musical instruments"  type="checkbox" name="hobbies[]" > Playing musical instruments &nbsp;&nbsp;
                  </div>
                  <?php } ?>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>

                <div class="row  to-fmid">
                    <div class="col-sm-1 no-padding">
                        <label class="cflo"></label>
                    </div>
                    <div class="col-sm-2 no-padding">
                        <label class="cflo">Others :</label>
                    </div>
                    <div class="col-sm-8">
                      <input name="hobbies_other"  type="text" min="0" placeholder="Enter your hobbies and interests" class="form-control sml-frm input-sm" value="<?php echo isset($data['hobbies_other'])?$data['hobbies_other']:''?>">
                    </div>
                    <div class="col-sm-1 no-padding">
                        <label class="cflo"></label>
                    </div>
                </div>
              </div>
            </div>


              <hr>

              <h1>What are your favourite cuisine?</h1>
              
              <div id="cuisine_div">
                <div class="row  to-fmid">
                    <div class="col-sm-1 no-padding">
                        <label class="cflo"></label>
                    </div>
                    <!-- <div class="col-sm-3 no-padding">
                        <label class="cflo">Body Type :</label>
                    </div> -->
                    <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                    <div class="col-sm-10 no-padding">
                       <input value="Arabic"   type="checkbox" name="cuisine[]" <?php if (in_array("Arabic", $cuisine)){?> checked <?php } ?>> Arabic &nbsp;&nbsp;
                        <input value="Bengali"  type="checkbox" name="cuisine[]" <?php if (in_array("Bengali", $cuisine)){?> checked <?php } ?>> Bengali &nbsp;&nbsp;
                        <input value="Chinese"  type="checkbox" name="cuisine[]" <?php if (in_array("Chinese", $cuisine)){?> checked <?php } ?>> Chinese <br>
                        <input value="Continental"  type="checkbox" name="cuisine[]" <?php if (in_array("Continental", $cuisine)){?> checked <?php } ?>> Continental &nbsp;&nbsp;
                        <input value="Gujarati"  type="checkbox" name="cuisine[]" <?php if (in_array("Gujarati", $cuisine)){?> checked <?php } ?>> Gujarati <br>
                        <input value="Italian"  type="checkbox" name="cuisine[]" <?php if (in_array("Italian", $cuisine)){?> checked <?php } ?>> Italian &nbsp;&nbsp;
                        <input value="Konkan"  type="checkbox" name="cuisine[]" <?php if (in_array("Konkan", $cuisine)){?> checked <?php } ?>> Konkan &nbsp;&nbsp;
                        <input value="Mexican"  type="checkbox" name="cuisine[]" <?php if (in_array("Mexican", $cuisine)){?> checked <?php } ?>> Mexican <br>
                        <input value="Moghlai"  type="checkbox" name="cuisine[]" <?php if (in_array("Moghlai", $cuisine)){?> checked <?php } ?>> Moghlai &nbsp;&nbsp;
                        <input value="Not a foodie!"  type="checkbox" name="cuisine[]" <?php if (in_array("Not a foodie!", $cuisine)){?> checked <?php } ?>> Not a foodie! <br>
                        <input value="Punjabi"  type="checkbox" name="cuisine[]" <?php if (in_array("Punjabi", $cuisine)){?> checked <?php } ?>> Punjabi &nbsp;&nbsp;
                        <input value="Rajasthani"  type="checkbox" name="cuisine[]" <?php if (in_array("Rajasthani", $cuisine)){?> checked <?php } ?>> Rajasthani <br>
                        <input value="South Indian"  type="checkbox" name="cuisine[]" <?php if (in_array("South Indian", $cuisine)){?> checked <?php } ?>> South Indian &nbsp;&nbsp;
                        <input value="Sushi"  type="checkbox" name="cuisine[]" <?php if (in_array("Sushi", $cuisine)){?> checked <?php } ?>> Sushi  <br>
                        <input value="Thai"  type="checkbox" name="cuisine[]" <?php if (in_array("Thai", $cuisine)){?> checked <?php } ?>> Thai &nbsp;&nbsp;
                        <input value="I am a foodie"  type="checkbox" name="cuisine[]" <?php if (in_array("I am a foodie", $cuisine)){?> checked <?php } ?>> I am a foodie &nbsp;&nbsp;
                    </div> <?php  } else { ?>
                      <div class="col-sm-10 no-padding">
                       <input value="Arabic"   type="checkbox" name="cuisine[]" > Arabic &nbsp;&nbsp;
                        <input value="Bengali"  type="checkbox" name="cuisine[]" > Bengali &nbsp;&nbsp;
                        <input value="Chinese"  type="checkbox" name="cuisine[]" > Chinese <br>
                        <input value="Continental"  type="checkbox" name="cuisine[]" > Continental &nbsp;&nbsp;
                        <input value="Gujarati"  type="checkbox" name="cuisine[]" > Gujarati <br>
                        <input value="Italian"  type="checkbox" name="cuisine[]" > Italian &nbsp;&nbsp;
                        <input value="Konkan"  type="checkbox" name="cuisine[]" > Konkan &nbsp;&nbsp;
                        <input value="Mexican"  type="checkbox" name="cuisine[]" > Mexican <br>
                        <input value="Moghlai"  type="checkbox" name="cuisine[]" > Moghlai &nbsp;&nbsp;
                        <input value="Not a foodie!"  type="checkbox" name="cuisine[]" > Not a foodie! <br>
                        <input value="Punjabi"  type="checkbox" name="cuisine[]" > Punjabi &nbsp;&nbsp;
                        <input value="Rajasthani"  type="checkbox" name="cuisine[]"> Rajasthani <br>
                        <input value="South Indian"  type="checkbox" name="cuisine[]" > South Indian &nbsp;&nbsp;
                        <input value="Sushi"  type="checkbox" name="cuisine[]" > Sushi  <br>
                        <input value="Thai"  type="checkbox" name="cuisine[]" > Thai &nbsp;&nbsp;
                        <input value="I am a foodie"  type="checkbox" name="cuisine[]" > I am a foodie &nbsp;&nbsp;
                    </div> <?php  } ?>
                    <div class="col-sm-1 no-padding">
                        <label class="cflo"></label>
                    </div>
                </div>

                <div class="row  to-fmid">
                    <div class="col-sm-1 no-padding">
                        <label class="cflo"></label>
                    </div>
                    <div class="col-sm-2 no-padding">
                        <label class="cflo">Others :</label>
                    </div>
                    <div class="col-sm-8">
                      <input name="cuisine_other"  type="text" min="0" placeholder="Enter your hobbies and interests" class="form-control sml-frm input-sm" value="<?php echo isset($data['cuisine_other'])?$data['cuisine_other']:''?>" >
                    </div>
                    <div class="col-sm-1 no-padding">
                        <label class="cflo"></label>
                    </div>
                </div>
              </div>

              <hr>
              <div id="all_div">
              <h1>What are your dress type?</h1>
              
              
              <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <!-- <div class="col-sm-3 no-padding">
                      <label class="cflo">Body Type :</label>
                  </div> -->
                  <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                  <div class="col-sm-10 no-padding">
                     <input value="Casual wear"   type="checkbox" name="dress_type[]" <?php if (in_array("Casual wear", $dress_type)){?> checked <?php } ?>> Casual wear &nbsp;&nbsp;
                      <input value="Designer wear"  type="checkbox" name="dress_type[]" <?php if (in_array("Designer wear", $dress_type)){?> checked <?php } ?>> Designer wear &nbsp;&nbsp;
                      <input value="Indian/Ethenic wear"  type="checkbox" name="dress_type[]" <?php if (in_array("Indian/Ethenic wear", $dress_type)){?> checked <?php } ?>> Indian/Ethenic wear <br>
                      <input value="Western formal wear"  type="checkbox" name="dress_type[]" <?php if (in_array("Western formal wear", $dress_type)){?> checked <?php } ?>> Western formal wear &nbsp;&nbsp;
                      <!-- <input value="Pant"  type="checkbox" name="dress_type[]" <?php if (in_array("Pant", $dress_type)){?> checked <?php } ?>> Pant &nbsp;&nbsp; -->
                  </div> <?php  } else { ?>
                   <div class="col-sm-10 no-padding">
                     <input value="Casual wear"   type="checkbox" name="dress_type[]"> Casual wear &nbsp;&nbsp;
                      <input value="Designer wear"  type="checkbox" name="dress_type[]"> Designer wear &nbsp;&nbsp;
                      <input value="Indian/Ethenic wear"  type="checkbox" name="dress_type[]"> Indian/Ethenic wear <br>
                      <input value="Western formal wear"  type="checkbox" name="dress_type[]"> Western formal wear &nbsp;&nbsp;
                  </div> 
                <?php  } ?>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>

              <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <div class="col-sm-2 no-padding">
                      <label class="cflo">Others :</label>
                  </div>
                  <div class="col-sm-8">
                    <input name="dress_type_other"  type="text" min="0" placeholder="Enter your hobbies and interests" class="form-control sml-frm input-sm" value="<?php echo isset($data['dress_type_other'])?$data['dress_type_other']:''?>">
                  </div>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>

              <hr>

              <h1>Your favourite music</h1>
              <div class="row  to-fmid">
                  <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <!-- <div class="col-sm-3 no-padding">
                      <label class="cflo">Body Type :</label>
                  </div> -->
                  <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                  <div class="col-sm-10 no-padding">
                     <input value="Blues"   type="checkbox" name="music[]" <?php if (in_array("Blues", $music)){?> checked <?php } ?>> Blues &nbsp;&nbsp;
                      <input value="Devotional"  type="checkbox" name="music[]" <?php if (in_array("Devotional", $music)){?> checked <?php } ?>> Devotional &nbsp;&nbsp;
                      <input value="Disco"  type="checkbox" name="music[]" <?php if (in_array("Disco", $music)){?> checked <?php } ?>> Disco &nbsp;&nbsp;<br>
                      <input value="Film Songs"  type="checkbox" name="music[]" <?php if (in_array("Film Songs", $music)){?> checked <?php } ?>> Film Songs &nbsp;&nbsp;
                      <input value="Ghazals"  type="checkbox" name="music[]" <?php if (in_array("Ghazals", $music)){?> checked <?php } ?>> Ghazals <br>
                      <input value="Hip-Hop"  type="checkbox" name="music[]" <?php if (in_array("Hip-Hop", $music)){?> checked <?php } ?>> Hip-Hop <br>
                      <input value="Heavy metal"  type="checkbox" name="music[]" <?php if (in_array("Heavy metal", $music)){?> checked <?php } ?>> Heavy metal &nbsp;&nbsp;
                      <input value="House music"  type="checkbox" name="music[]" <?php if (in_array("House music", $music)){?> checked <?php } ?>> House music <br>
                      <input value="Indian Classical"  type="checkbox" name="music[]" <?php if (in_array("Indian Classical", $music)){?> checked <?php } ?>> Indian Classical &nbsp;&nbsp;
                      <input value="Indipop"  type="checkbox" name="music[]" <?php if (in_array("Indipop", $music)){?> checked <?php } ?>> Indipop <br>
                      <input value="Jazz"  type="checkbox" name="music[]" <?php if (in_array("Jazz", $music)){?> checked <?php } ?>> Jazz &nbsp;&nbsp;
                      <input value="Pop"  type="checkbox" name="music[]" <?php if (in_array("Pop", $music)){?> checked <?php } ?>> Pop <br>
                      <input value="Qawalis"  type="checkbox" name="music[]" <?php if (in_array("Qawalis", $music)){?> checked <?php } ?>> Qawalis &nbsp;&nbsp;
                      <input value="Rap"  type="checkbox" name="music[]" <?php if (in_array("Rap", $music)){?> checked <?php } ?>> Rap <br>
                      <input value="Reggae"  type="checkbox" name="music[]" <?php if (in_array("Reggae", $music)){?> checked <?php } ?>> Reggae <br>
                      <input value="Sufi"  type="checkbox" name="music[]" <?php if (in_array("Sufi", $music)){?> checked <?php } ?>> Sufi <br>
                      <input value="Techno"  type="checkbox" name="music[]" <?php if (in_array("Techno", $music)){?> checked <?php } ?>> Techno &nbsp;&nbsp;
                      <input value="Western Classical"  type="checkbox" name="music[]" <?php if (in_array("Western Classical", $music)){?> checked <?php } ?>> Western Classical <br>
                      <input value="I am not a music fan"  type="checkbox" name="music[]" <?php if (in_array("I am not a music fan", $music)){?> checked <?php } ?>> I am not a music fan <br>
                      
                  </div> <?php  } else { ?>
                    <div class="col-sm-10 no-padding">
                     <input value="Blues"   type="checkbox" name="music[]" > Blues &nbsp;&nbsp;
                      <input value="Devotional"  type="checkbox" name="music[]" > Devotional &nbsp;&nbsp;
                      <input value="Disco"  type="checkbox" name="music[]" > Disco &nbsp;&nbsp;<br>
                      <input value="Film Songs"  type="checkbox" name="music[]" > Film Songs &nbsp;&nbsp;
                      <input value="Ghazals"  type="checkbox" name="music[]" > Ghazals <br>
                      <input value="Hip-Hop"  type="checkbox" name="music[]" > Hip-Hop <br>
                      <input value="Heavy metal"  type="checkbox" name="music[]" > Heavy metal &nbsp;&nbsp;
                      <input value="House music"  type="checkbox" name="music[]" > House music <br>
                      <input value="Indian Classical"  type="checkbox" name="music[]"> Indian Classical &nbsp;&nbsp;
                      <input value="Indipop"  type="checkbox" name="music[]" > Indipop <br>
                      <input value="Jazz"  type="checkbox" name="music[]" > Jazz &nbsp;&nbsp;
                      <input value="Pop"  type="checkbox" name="music[]" > Pop <br>
                      <input value="Qawalis"  type="checkbox" name="music[]" > Qawalis &nbsp;&nbsp;
                      <input value="Rap"  type="checkbox" name="music[]" > Rap <br>
                      <input value="Reggae"  type="checkbox" name="music[]" > Reggae <br>
                      <input value="Sufi"  type="checkbox" name="music[]" > Sufi <br>
                      <input value="Techno"  type="checkbox" name="music[]" > Techno &nbsp;&nbsp;
                      <input value="Western Classical"  type="checkbox" name="music[]" > Western Classical <br>
                      <input value="I am not a music fan"  type="checkbox" name="music[]" > I am not a music fan <br>
                  </div>  <?php  } ?>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>
              </div>

              <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <div class="col-sm-2 no-padding">
                      <label class="cflo">Others :</label>
                  </div>
                  <div class="col-sm-8">
                    <input name="music_other"  type="text" min="0" placeholder="Enter your favourite music" class="form-control sml-frm input-sm" value="<?php echo isset($data['music_other'])?$data['music_other']:''?>" >
                  </div>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>

              <hr>

              <h1>Sports/Fitness you like</h1>
              <div class="row  to-fmid">
                  <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <!-- <div class="col-sm-3 no-padding">
                      <label class="cflo">Body Type :</label>
                  </div> -->
                  <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                  <div class="col-sm-10 no-padding">
                     <input value="Adventure Sports"   type="checkbox" name="sports[]" <?php if (in_array("Adventure Sports", $sports)){?> checked <?php } ?>> Adventure Sports &nbsp;&nbsp;
                      <input value="Aerobics"  type="checkbox" name="sports[]" <?php if (in_array("Aerobics", $sports)){?> checked <?php } ?>> Aerobics &nbsp;&nbsp;
                      <input value="Basketball"  type="checkbox" name="sports[]" <?php if (in_array("Basketball", $sports)){?> checked <?php } ?>> Basketball &nbsp;&nbsp;<br>
                      <input value="Badminton"  type="checkbox" name="sports[]" <?php if (in_array("Badminton", $sports)){?> checked <?php } ?>> Badminton &nbsp;&nbsp;
                      <input value="Bowling"  type="checkbox" name="sports[]" <?php if (in_array("Bowling", $sports)){?> checked <?php } ?>> Bowling <br>
                      <input value="Billiards / Snooker / Pool"  type="checkbox" name="sports[]" <?php if (in_array("Billiards / Snooker / Pool", $sports)){?> checked <?php } ?>> Billiards / Snooker / Pool <br>
                      <input value="Cricket"  type="checkbox" name="sports[]" <?php if (in_array("Cricket", $sports)){?> checked <?php } ?>> Cricket &nbsp;&nbsp;
                      <input value="Cycling"  type="checkbox" name="sports[]" <?php if (in_array("Cycling", $sports)){?> checked <?php } ?>> Cycling <br>
                      <input value="Card games"  type="checkbox" name="sports[]" <?php if (in_array("Card games", $sports)){?> checked <?php } ?>> Card games &nbsp;&nbsp;
                      <input value="Carrom"  type="checkbox" name="sports[]" <?php if (in_array("Carrom", $sports)){?> checked <?php } ?>> Carrom <br>
                      <input value="Chess"  type="checkbox" name="sports[]" <?php if (in_array("Chess", $sports)){?> checked <?php } ?>> Chess &nbsp;&nbsp;
                      <input value="Football"  type="checkbox" name="sports[]" <?php if (in_array("Football", $sports)){?> checked <?php } ?>> Football <br>
                      <input value="Golf"  type="checkbox" name="sports[]" <?php if (in_array("Golf", $sports)){?> checked <?php } ?>> Golf &nbsp;&nbsp;
                      <input value="Hockey"  type="checkbox" name="sports[]" <?php if (in_array("Hockey", $sports)){?> checked <?php } ?>> Hockey <br>
                      <input value="Jogging / Walking"  type="checkbox" name="sports[]" <?php if (in_array("Jogging / Walking", $sports)){?> checked <?php } ?>> Jogging / Walking <br>
                      <input value="Martial Arts"  type="checkbox" name="sports[]" <?php if (in_array("Martial Arts", $sports)){?> checked <?php } ?>> Martial Arts <br>
                      <input value="Scrabble"  type="checkbox" name="sports[]" <?php if (in_array("Scrabble", $sports)){?> checked <?php } ?>> Scrabble &nbsp;&nbsp;
                      <input value="Squash"  type="checkbox" name="sports[]" <?php if (in_array("Squash", $sports)){?> checked <?php } ?>> Squash <br>
                      <input value="Swimming / water sports"  type="checkbox" name="sports[]" <?php if (in_array("Swimming / water sports", $sports)){?> checked <?php } ?>> Swimming / water sports <br>
                      <input value="Table-tennis"  type="checkbox" name="sports[]" <?php if (in_array("Table-tennis", $sports)){?> checked <?php } ?>> Table-tennis <br>
                      <input value="Tennis"  type="checkbox" name="sports[]" <?php if (in_array("Tennis", $sports)){?> checked <?php } ?>> Tennis &nbsp;&nbsp;
                      <input value="Volleyball"  type="checkbox" name="sports[]" <?php if (in_array("Volleyball", $sports)){?> checked <?php } ?>> Volleyball <br>
                      <input value="Weight lifting"  type="checkbox" name="sports[]" <?php if (in_array("Weight lifting", $sports)){?> checked <?php } ?>> Weight lifting <br>
                      <input value="Yoga / meditation"  type="checkbox" name="sports[]" <?php if (in_array("Yoga / meditation", $sports)){?> checked <?php } ?>> Yoga / meditation <br>

                  </div> <?php  } else { ?>
                    <div class="col-sm-10 no-padding">
                     <input value="Adventure Sports"   type="checkbox" name="sports[]" > Adventure Sports &nbsp;&nbsp;
                      <input value="Aerobics"  type="checkbox" name="sports[]" > Aerobics &nbsp;&nbsp;
                      <input value="Basketball"  type="checkbox" name="sports[]" > Basketball &nbsp;&nbsp;<br>
                      <input value="Badminton"  type="checkbox" name="sports[]" > Badminton &nbsp;&nbsp;
                      <input value="Bowling"  type="checkbox" name="sports[]" > Bowling <br>
                      <input value="Billiards / Snooker / Pool"  type="checkbox" name="sports[]" > Billiards / Snooker / Pool <br>
                      <input value="Cricket"  type="checkbox" name="sports[]" > Cricket &nbsp;&nbsp;
                      <input value="Cycling"  type="checkbox" name="sports[]" > Cycling <br>
                      <input value="Card games"  type="checkbox" name="sports[]" > Card games &nbsp;&nbsp;
                      <input value="Carrom"  type="checkbox" name="sports[]"> Carrom <br>
                      <input value="Chess"  type="checkbox" name="sports[]" > Chess &nbsp;&nbsp;
                      <input value="Football"  type="checkbox" name="sports[]" > Football <br>
                      <input value="Golf"  type="checkbox" name="sports[]"> Golf &nbsp;&nbsp;
                      <input value="Hockey"  type="checkbox" name="sports[]" > Hockey <br>
                      <input value="Jogging / Walking"  type="checkbox" name="sports[]"> Jogging / Walking <br>
                      <input value="Martial Arts"  type="checkbox" name="sports[]" > Martial Arts <br>
                      <input value="Scrabble"  type="checkbox" name="sports[]" > Scrabble &nbsp;&nbsp;
                      <input value="Squash"  type="checkbox" name="sports[]" > Squash <br>
                      <input value="Swimming / water sports"  type="checkbox" name="sports[]" > Swimming / water sports <br>
                      <input value="Table-tennis"  type="checkbox" name="sports[]" > Table-tennis <br>
                      <input value="Tennis"  type="checkbox" name="sports[]" > Tennis &nbsp;&nbsp;
                      <input value="Volleyball"  type="checkbox" name="sports[]" > Volleyball <br>
                      <input value="Weight lifting"  type="checkbox" name="sports[]" > Weight lifting <br>
                      <input value="Yoga / meditation"  type="checkbox" name="sports[]" > Yoga / meditation <br>
                  </div> <?php  } ?>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>
              </div>

              <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <div class="col-sm-2 no-padding">
                      <label class="cflo">Others :</label>
                  </div>
                  <div class="col-sm-8">
                    <input name="sports_other"  type="text" min="0" placeholder="Enter your favourite sports" class="form-control sml-frm input-sm" value="<?php echo isset($data['sports_other'])?$data['sports_other']:''?>" >
                  </div>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>

              <hr>

              <h1>Spoken languages</h1>
              <div class="row  to-fmid">
                  <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <!-- <div class="col-sm-3 no-padding">
                      <label class="cflo">Body Type :</label>
                  </div> -->
                  <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                  <div class="col-sm-10 no-padding">
                     <input value="SSK Savji"   type="checkbox" name="spoken_languages[]" <?php if (in_array("SSK Savji", $spoken_languages)){?> checked <?php } ?>> SSK Savji &nbsp;&nbsp;
                      <input value="Pategar"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Pategar", $spoken_languages)){?> checked <?php } ?>> Pategar <br>
                      <input value="Khatri"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Khatri", $spoken_languages)){?> checked <?php } ?>> Khatri &nbsp;&nbsp;
                      <input value="Kannada"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Kannada", $spoken_languages)){?> checked <?php } ?>> Kannada  <br>
                      <input value="Marathi"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Marathi", $spoken_languages)){?> checked <?php } ?>> Marathi &nbsp;&nbsp;
                      <input value="Hindi"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Hindi", $spoken_languages)){?> checked <?php } ?>> Hindi  <br>
                      <input value="English"  type="checkbox" name="spoken_languages[]" <?php if (in_array("English", $spoken_languages)){?> checked <?php } ?>> English &nbsp;&nbsp;
                      <input value="Telugu"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Telugu", $spoken_languages)){?> checked <?php } ?>> Telugu  <br>
                      <input value="Tamil"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Tamil", $spoken_languages)){?> checked <?php } ?>> Tamil &nbsp;&nbsp;
                      <input value="Malayalam"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Malayalam", $spoken_languages)){?> checked <?php } ?>> Malayalam  <br>
                  </div> <?php  } else { ?>
                    <div class="col-sm-10 no-padding">
                     <input value="SSK Savji"   type="checkbox" name="spoken_languages[]" > SSK Savji &nbsp;&nbsp;
                      <input value="Pategar"  type="checkbox" name="spoken_languages[]" > Pategar <br>
                      <input value="Khatri"  type="checkbox" name="spoken_languages[]" > Khatri &nbsp;&nbsp;
                      <input value="Kannada"  type="checkbox" name="spoken_languages[]" > Kannada  <br>
                      <input value="Marathi"  type="checkbox" name="spoken_languages[]" > Marathi &nbsp;&nbsp;
                      <input value="Hindi"  type="checkbox" name="spoken_languages[]" > Hindi  <br>
                      <input value="English"  type="checkbox" name="spoken_languages[]" > English &nbsp;&nbsp;
                      <input value="Telugu"  type="checkbox" name="spoken_languages[]" > Telugu  <br>
                      <input value="Tamil"  type="checkbox" name="spoken_languages[]" > Tamil &nbsp;&nbsp;
                      <input value="Malayalam"  type="checkbox" name="spoken_languages[]" > Malayalam  <br>
                  </div> <?php  } ?>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>
              </div>

              <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <div class="col-sm-2 no-padding">
                      <label class="cflo">Others :</label>
                  </div>
                  <div class="col-sm-8">
                    <input name="spoken_languages_other"  type="text" min="0" placeholder="Enter Spoken languages" class="form-control sml-frm input-sm" value="<?php echo isset($data['spoken_languages_other'])?$data['spoken_languages_other']:''?>" >
                  </div>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>

              <hr>
            </div>
              <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo"></label>
                </div>
                 <div class="col-sm-4 wrapper">
                    <input type ="hidden" name = "type" value="AddPersonalDetails">
                    <input type ="hidden" name = "personal_id" id="personal_id" value="<?php echo isset($data['personal_id'])?$data['personal_id']:''?>">
                    <input type ="hidden" name = "hobbies[]" id="hobbies[]" value="">
                    <input type ="hidden" name = "cuisine[]" id="cuisine[]" value="">
                    <input type ="hidden" name = "dress_type[]" id="dress_type[]" value="">
                    <input type ="hidden" name = "music[]" id="music[]" value="">
                    <input type ="hidden" name = "sports[]" id="sports[]" value="">
                    <input type ="hidden" name = "spoken_languages[]" id="spoken_languages[]" value="">
                    <button type="submit" id="submit" class="btn btn-sm btn-success">Submit</button>
                  </div>
                <div class="col-sm-4 no-padding">
                    
                </div>
               
              </div>

              </form>
        </div>
      </div>

    </div>
  </div>
</div>



<?php include("footer.php"); ?>
<script type="text/javascript">
  $(function() {
    $('input[name="disability"]').on('click', function() {
        if ($(this).val() == 'Physically Challenged') {
            $('#disability_name').show();
        }
        else {
            $('#disability_name').hide();
        }
    });
  });
</script>