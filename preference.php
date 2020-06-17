<?php include("header1.php"); 

$register = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
$register1 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register1` WHERE `u_id` = '$u_id'"));
$register2 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register2` WHERE `u_id` = '$u_id'"));
$register3 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register3` WHERE `u_id` = '$u_id'"));
$register4 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register4` WHERE `u_id` = '$u_id'"));
$register5 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register5` WHERE `u_id` = '$u_id'"));
$add_photo = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `add_photo` WHERE `u_id` = '$u_id'"));
$basic_details = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `basic_details` WHERE `u_id` = '$u_id'"));
$personal_details = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `personal_details` WHERE `u_id` = '$u_id'"));
$partner_details = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `partner_details` WHERE `u_id` = '$u_id'"));

$age = $register1['age'];
// $birth_date = $register1['b_year'].'-'.$register1['b_month'].'-'.$register1['b_day'];

// $userDob = $birth_date;
 
// //Create a DateTime object using the user's date of birth.
// $dob = new DateTime($userDob);
 
// //We need to compare the user's date of birth with today's date.
// $now = new DateTime();
 
// //Calculate the time difference between the two dates.
// $difference = $now->diff($dob);
 
// //Get the difference in years, as we are looking for the user's age.
// $age = $difference->y;
 
// //Print it out.
// $age;

$height = $register3['height'];
$test = explode(" ",$height);
$Cms = array_pop($test);
$Feet1 = implode(" ", $test);
$Feet = chop($Feet1,"-");

$height_from = $partner_details['height_from'];
$test_from = explode(" ",$height_from);
$Cms_from = array_pop($test_from);
$Feet1_from = implode(" ", $test_from);
$Feet_from = chop($Feet1_from,"-");


$height_to = $partner_details['height_to'];
$test_to = explode(" ",$height_to);
$Cms_to = array_pop($test_to);
$Feet1_to = implode(" ", $test_to);
$Feet_to = chop($Feet1_to,"-");

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
</style>
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
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
                          <font class="mediumtxt">(&nbsp;<img src="https://imgs.hindimatrimony.com/bmimgs/myhome-tickicon.gif" width="14" height="11" alt="" title="" style="vertical-align:middle;" hspace="5"> 
                          <span style="color: green;font:14px/18px Arial;color:#4baa26;">Verified </span>)
                          </font>&nbsp;&nbsp;
                          <?php } 
                          else {

                          }
                          ?>
                        <span style="font:normal 14px/18px Arial;text-decoration:none;"><a href="edit_mobile.php?id=<?php echo isset($u_id)?$u_id:''?>" class="usricons" style="padding:0px 0 8px 0px;">Edit Mobile No</a>
                        </span>
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

                    <div class="col-sm-3 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">
                        <div class="col-sm-4 no-padding">
                          <img src="https://imgs.bharatmatrimony.com/bmimgs/syspop-imgs/add-photo-edit-avatar.png" width="40">
                        </div>
                        <div class="col-sm-8 no-padding">
                          <div class="bigtxt paddt5 lheight120" style="font-weight: bold;font-size: 22px;">Add Photos</div>
                            <div class="hdtxt lheight120">Photos are the first <br>things members look for in a profile. </div>
                        </div>

                        <div class="col-sm-12 no-padding">
                          <div style="text-align:center;background:#f1f1f1;line-height:25px;" class="paddt5 hdtxt">
                            <a href=""> Add Photos Now</a>
                        </div>
                        </div>


                    </div>
                  </div>

                  <hr>

                  <div class="clr4 paddt10" style="font-size:28px;line-height:37px;margin-bottom:15px;color: #c32143;">Partner Preference</div>
                  <div style="color:#777;line-height:16px;font-size:13px;" class="txt-justify paddt10"><span class="boldtxt"><strong>Note :</strong></span> Currently, you will receive matches based on the following preferences: Age, Height, Marital Status, Eating Habits,<br> Religion, Mother Tongue, Caste, Gothra(m), Country, State, Citizenship, Education, Dosham and Physical Status.<br> You can use "Strict Filters"  to control the types of matches you receive. <br>

                  </div>


                  <div class="row  to-fmid">
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-12 no-padding">
                       <div class="biggertxt2 clr7 fleft paddt20"><strong>Basic & Religion Preferences</strong><a style="cursor:pointer;float: right;color:#ffffff;text-decoration:none;background:#3a90d2 url(https://imgs.bharatmatrimony.com/bmimgs/edit-prof-edit-icon.gif) no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;" href="other_details.php?id=<?php echo isset($partner_details['partner_id'])?$partner_details['partner_id']:''?>">Edit</a></div><br>
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Bride's Age&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['age_from'])?$partner_details['age_from']:''?> - <?php echo ($partner_details['age_to'])?$partner_details['age_to']:''?> Years</label>
                      </div>

                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Height&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo isset($Feet_from)?$Feet_from:''?> Ft <?php echo isset($Cms_from)?$Cms_from:''?> Cms - <?php echo isset($Feet_to)?$Feet_to:''?> Ft <?php echo isset($Cms_to)?$Cms_to:''?> Cms</label>

                      </div>

                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Marital status&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['marital_status'])?$partner_details['marital_status']:''?></label>

                      </div>

                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Physical Status&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['physical_status'])?$partner_details['physical_status']:''?></label>

                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Eating Habits&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['eating_habits'])?$partner_details['eating_habits']:''?></label>

                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6">
                          <label class="cflo">Smoking Habits&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['smoking_habits'])?$partner_details['smoking_habits']:''?></label>

                      </div>
                      

                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Drinking Habits&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['drinking_habits'])?$partner_details['drinking_habits']:''?></label>

                      </div>

                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Religion&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['religion'])?$partner_details['religion']:''?></label>

                      </div>
                      
                    </div>

                    <!-- Profile Completeness End-->

                    </div>
                    <div class="col-sm-3 no-padding">
                        


                    </div>

                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-12 no-padding">
                       <div class="biggertxt2 clr7 fleft paddt20"><strong>Professional Preferences</strong><a style="cursor:pointer;float: right;color:#ffffff;text-decoration:none;background:#3a90d2 url(https://imgs.bharatmatrimony.com/bmimgs/edit-prof-edit-icon.gif) no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;" href="other_details.php?id=<?php echo isset($partner_details['partner_id'])?$partner_details['partner_id']:''?>">Edit</a></div><br>
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Education&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['education'])?$partner_details['education']:''?></label>
                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Employed In&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['employed'])?$partner_details['employed']:''?></label>
                      </div>
                      
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Occupation&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['occupation'])?$partner_details['occupation']:''?></label>
                      </div>
                      
                    </div>

                    

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Annual Income&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['income'])?$partner_details['income']:''?></label>
                      </div>
                      
                    </div>


                    <!-- Profile Completeness End-->

                    </div>
                    <div class="col-sm-3 ">
                        


                    </div>

                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-8 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;">

                    <!-- Photo Showing Part -->
                    <div class="col-sm-12 no-padding">
                       <div class="biggertxt2 clr7 fleft paddt20"><strong>Location Preferences</strong><a style="cursor:pointer;float: right;color:#ffffff;text-decoration:none;background:#3a90d2 url(https://imgs.bharatmatrimony.com/bmimgs/edit-prof-edit-icon.gif) no-repeat left 3px;padding:3px 8px 3px 16px;display:inline-block;" href="other_details.php?id=<?php echo isset($partner_details['partner_id'])?$partner_details['partner_id']:''?>">Edit</a></div><br>
                    </div>

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Country&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['country'])?$partner_details['country']:''?></label>
                      </div>
                     
                    </div>

                    <!-- <div class="row  to-fmid">
                      
                      <div class="col-sm-4 ">
                          <label class="cflo">Residing State</label>
                          <label class="cflo" style="float: right;">:</label>
                      </div>
                      <div class="col-sm-8 ">
                        <label class="cflo">India - Maharashtra</label>
                      </div>

                      
                    </div> -->

                    <div class="row  to-fmid">
                      
                      <div class="col-sm-6 ">
                          <label class="cflo">Citizenship&nbsp;&nbsp;:</label>
                          <label class="cflo" style="float: right;"><?php echo ($partner_details['citizenship'])?$partner_details['citizenship']:''?></label>
                      </div>
                      
                    </div>

                    <!-- <div class="row  to-fmid">
                      
                      <div class="col-sm-4 ">
                          <label class="cflo">Residing District</label>
                          <label class="cflo" style="float: right;">:</label>
                      </div>
                      <div class="col-sm-8 ">
                        <label class="cflo">Mumbai</label>
                      </div>

                      
                    </div> -->


                    <!-- Profile Completeness End-->

                    </div>
                    <div class="col-sm-3 ">
                        


                    </div>

                  </div>
                </form>
                </div>

              </div>
            </div>
        </div>

    </div>
</section>
<?php include("footer.php"); ?>
<script  src="index.js"></script>