<?php include("header1.php"); 

if(!isset($_SESSION['u_id']))
  {
      
  }
  else
    {
        $u_id = $_SESSION['u_id'];
        $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
        $mobile = $delrecord981['mobile'];

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
                  <h1>Edit your mobile number</h1>
                  <form action="" id = "EditNumber" method="post" enctype="multipart/form-data">
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Mobile No :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="mobile"  type="text" placeholder="Enter Mobile No" min="0" pattern="[1-9]{1}[0-9]{9}" class="form-control sml-frm input-sm" required="" value="">
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                        <input type ="hidden" name = "type" value="EditNumber">
                        <input type ="hidden" name = "u_id" id="u_id" value="<?php echo isset($u_id)?$u_id:''?>">
                        <button type="submit" id="submit" style="font-weight:600; float:left" class="btn btn-sm btn-success">Send OTP</button>
                      </div>
                  </div>
                  </form>

                  <form action="" id = "EditNumberOtp" method="post" enctype="multipart/form-data">

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
                        <input type ="hidden" name = "type" value="EditNumberOtp">
                        <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success">Verify & Save</button>
                      </div>
                  </div>

                  </form>



              </div>
            </div>
        </div>

    </div>
</div>


<?php include("footer.php"); ?>