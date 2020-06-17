<?php include("header1.php"); 

if(!isset($_SESSION['u_id']))
  {
      
  }
  else
    {
        $u_id = $_SESSION['u_id'];
        $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
        $mobile = $delrecord981['mobile'];

        $delrecord91 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register5` WHERE `u_id` = '$u_id'"));
        $otp = $delrecord91['otp'];
    }


?>

<style type="text/css">
  .to-fmid {
    margin-top: 20px;
  }
</style>
<div class="regformbg">
	<div class="container">
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5">
              <div style="color:#535353; font-size:13px;" class="reg-box shado-1">
                  <h1>Verify your mobile number</h1>
                  <br>
                  <p>You'll receive a 6-digit code via SMS to <?php echo isset($mobile)?$mobile:''?> &nbsp; <br>
                    Your OTP is <?php echo isset($otp)?$otp:''?> <!-- (<a href="#">Edit</a>) --></p>
                  <form action="" id = "AddRegister6" method="post" enctype="multipart/form-data">
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Enter OTP :</label>
                      </div>
                      <div class="col-sm-8">
                          <input name="otp" type="text" min="0" maxlength="6" placeholder="Enter OTP" class="form-control sml-frm input-sm" name="">
                          <!-- <br>
                          <p>Didn't receive code yet?&nbsp;<a href="#">Resend Code</a></p> -->
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                        <input type ="hidden" name = "type" value="AddRegister6">
                        <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success">Complete</button>
                      </div>
                  </div>

                  </form>



              </div>
            </div>
        </div>

    </div>
</div>


<?php include("footer.php"); ?>