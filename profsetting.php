<?php include("header1.php"); 

$user_details = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `register` WHERE `u_id` = '$u_id'"));

?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  .border-bottom {
    border-bottom: 1px solid #dee2e6!important;
  }
  .card {
    position: relative;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
  }
  .card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
  }
  .card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
  }
  .w3-sidebar {
    height: 100%;
    width: 100%!important;
    background-color: #fff !important;
    position: unset!important;
    z-index: 1;
    overflow: auto;
  }
  .hdot {
    background: url(//imgs.bharatmatrimony.com/bmimgs/h-dot.gif) repeat-x bottom;
    height: 1px;
    margin: 10px 0;
  }
</style>
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<section style="background-color: rgb(228, 228, 228);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12  " style="margin-top: 25px;">
         <h3><strong>Profile Setting</strong></h3>
      </div>
      <div class="col-sm-12 ">
        <div style="color:#535353; font-size:13px;" class="reg-box">
          <div class="row  to-fmid" >
            <div class="col-sm-3 ">
              <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" >
                <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event, 'Edit Email Address')">Edit Email Address</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Change Password')">Change Password</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Call Preference')">Call Preference</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Profile Setting')">Profile Setting</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Deactivate Profile')">Deactivate Profile</button>
              </div>
            </div>

            <div class="col-sm-8 " style="border: 1px solid #e7e7e7;margin-top: 20px;">
              <div id="Edit Email Address" class="w3-container city" style="display:block;background-color: #ffffff">
                <h4><strong>Edit Email Address</strong></h4>
                <hr>
                <p style="font-size: 13px;">A valid e-mail id will be used to send you partner search mailers, member to member communication mailers and special offers.</p>
                <form action="" id="UpdateEmail" method="post" enctype="multipart/form-data">
                  <div class="col-sm-6 " style="margin-bottom: 5px;">
                    <input name="email" type="email" placeholder="Enter Email" class="form-control sml-frm input-sm" value="<?php echo($user_details['email']);?>" name="email">
                  </div>
                  <div class="col-sm-2">
                    <input type="hidden" name="type" value="UpdateEmail">
                    <button type="submit" id="" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                  </div><br><br>
                </form>
                <!-- <div class="col-sm-2">
                  <button class="btn btn-sm btn-info" style="padding: 0px 20px;margin-top: 5px">Reset</button>
                </div> -->
                <p></p>
              </div>

              <div id="Change Password" class="w3-container city" style="display:none;background-color: #ffffff">
                <h4><strong>Change Password</strong></h4>
                <hr>
                <p style="font-size: 13px;">Your password must have a minimum of 6 characters. We recommend you choose an alphanumeric password. E.g.: Matri123.</p>
                <form action="" id = "ChangePass" method="post" enctype="multipart/form-data">
                  <div class="col-sm-3" style="margin-bottom: 5px;">
                    <input name="old_password"  type="password" placeholder="Current Password" class="form-control sml-frm input-sm" >
                  </div>
                  <div class="col-sm-3 " style="margin-bottom: 5px;">
                    <input name="password"  type="password" placeholder="New Password" class="form-control sml-frm input-sm" >
                  </div>
                  <div class="col-sm-3 " style="margin-bottom: 5px;">
                    <input name="cpassword"  type="password" placeholder="New Password" class="form-control sml-frm input-sm" >
                  </div>
                  <div class="col-sm-3">
                    <input type ="hidden" name = "type" value="ChangePass">
                    <input type="hidden" name="u_id" value="<?php echo($u_id);?>">
                    <button type="submit" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Change</button>
                  </div>
                  <p></p>
                </form>
              </div>

              <div id="Call Preference" class="w3-container city" style="display:none;background-color: #ffffff">
                <h4><strong>Call Preference</strong></h4>
                <hr>
                <p style="font-size: 13px;">Let us know when we can call you:</p>
                <div class="col-sm-12" style="margin-bottom: 10px;">
                  <input value="Call when there are important updates/offers"   type="radio" name="gender"> Call when there are important updates/offers<br>
                  <input value="Call after 1 month"  type="radio" name="gender"> Call after 1 month <br>
                  <input value="Call after 3 month"  type="radio" name="gender"> Call after 3 month <br>
                  <input value="Call after 6 month"  type="radio" name="gender"> Call after 6 month <br>
                  <input value="Never"  type="radio" name="gender"> Never <br>
                </div>
                <div class="col-sm-3" style="margin-bottom: 10px;">
                  <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                </div>
              </div>

              <div id="Profile Setting" class="w3-container city" style="display:none;background-color: #ffffff">
                <h6><strong>Your Profile Privacy has been set as "Show my Profile to all including visitors"</strong></h6>
                <hr>
                <div class="col-sm-12" style="margin-bottom: 10px;">
                  <input value="Show my Profile to all including visitors. "   type="radio" name="gender"> Show my Profile to all including visitors. <img class="valign" src="https://imgs.hindimatrimony.com/bmimgs/recommend-icon.gif"><br>
                  <div style="background: url(https://imgs.hindimatrimony.com/bmimgs/black-arrow.gif) no-repeat 0 4px; padding-left:10px;font-size:11px;margin-left: 10px;">This will help prospects share your profile with their family members, who are not registered members. *</div>
                  <input value="Show my Profile to registered members only."  type="radio" name="gender"> Show my Profile to registered members only. <br>
                </div>
                <div class="col-sm-3" style="margin-bottom: 10px;">
                  <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                </div>
              </div>

              <div id="Deactivate Profile" class="w3-container city" style="display:none;background-color: #ffffff">
                <h4><strong>Deactivate Profile</strong></h4>
                <hr>
                <p style="font-size: 13px;">You can temporarily deactivate your profile if you do not want to delete it. On deactivation your profile will be hidden from our members and you will not be able to contact any member until you activate.</p>
                <p style="font-size: 13px;">Your profile status is currently active. If you would like to change your status, please select Deactivate Now.</p>
                <p style="font-size: 13px;"><strong>Select the number of days / months you would like to keep your profile deactivated.</strong></p>
                <div class="col-sm-12 no-padding" style="margin-bottom: 10px;">
                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                      <option value="">Select Days</option>
                      <option value="15 Days">15 Days</option>
                      <option value="1 months">1 months</option>
                      <option value="2 months">2 months</option>
                      <option value="3 months">3 months</option>

                  </select>
                </div>
                <p style="font-size: 13px;">NOTE : Your profile will be activated after the selected time period elapses. E.G. If you select 15 days as the time period, your profile will be deactivated for 15 days and will be automatically activated on the 16th day. You will receive a mailer in this regard.</p>
                <div class="col-sm-12 no-padding" style="margin-bottom: 10px;">
                  <button class="btn btn-sm btn-danger" style="padding: 0px 20px;margin-top: 5px">Deactivate Now</button>
                </div>
                <div class="hdot"><!--  --></div>
                  <p style="font-size: 13px;">NOTE : Once you deactivate your profile you will not be able to contact any member either through Express Interest, Personalised Messages or Chat and your profile details will also not be visible to members.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include("footer.php"); ?>
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>