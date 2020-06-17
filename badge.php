<?php include("header1.php"); 

$data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `identity_badge` WHERE `u_id` = '$u_id'"));

$data1 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `professional_badge` WHERE `u_id` = '$u_id'"));


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
    margin-top: 0px;
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
  .paddt15 {
    padding-top: 15px;
  }
  .trustbadge-toolbar .custom-file-upload {
    display: inline-block;
    background: #fff;
    cursor: pointer;
    padding: 9px 18px 9px 18px;
    border-radius: 20px;
    color: #000;
    border: 2px solid #d4d3d3;
    margin: 5px 7px 5px 0;
    font-size: 16px;
    text-decoration: none;
  }
  /*input[type=file] {
    display: none;
  }*/
</style>
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<section style="background-color: rgb(228, 228, 228);">
  <div style="background:#206ba5;margin-bottom: 15px;font-family: Roboto Regular;">
    <div class="txt-center" style="padding: 35px 0 0 0;text-align: center;"><img src="https://imgs.hindimatrimony.com/bmimgs/trust-badge-icon.png"></div>
    <div class="txt-center" style="padding: 15px 0 40px 0;font-size: 20px;color:#fff;text-align: center;">Add badges to gain more trust</div>
  </div>
  <div class="container">
    <div class="row">
        

        <div class="col-sm-12">
          <div style="color:#535353; font-size:13px;" class="reg-box">
              
              <div class="row  to-fmid" >
                <div class="col-sm-1 no-padding">
                  </div>

                <div class="col-sm-4 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;border: 1px solid #ccc;border-radius: 25px;margin-top: 40px;">
                  <div class="trstborder identitydiv" style="padding: 30px;position: relative">
                    <form action="" id = "AddIDBadge" method="post" enctype="multipart/form-data">
                      <div style="font-size: 24px;" class="paddt10">Identity Badge</div>
                      <div class="paddt15 dispmessage1" style="font-size: 16px;line-height: 20px;">Let members be able to trust your Age, Name and Date of Birth.</div>
                      <div class="paddt15 msgdisplay1 trustbadgeclr1" style="font-size: 14px;line-height: 16px;">To get this badge, upload the following documents. (This will not be shown to any member)</div>
                      <div class="trustbadge-list" id="msgtextlabel1" style="display: none;"><br><li class="trusttick">Passport Front Side</li></div>
                      <?php if ($data['status'] == '1') { 

                        echo "<br><br><label class='cflo'><strong>Documents has been uploaded</strong></label>";

                       } else { ?>

                      <div class="trustbadge-toolbar paddt15">    

                          <div class="fancy-file-upload fancy-file-primary">
                              <label class="cflo"><strong>Driving Licence :</strong></label>
                              <input type="file" class="form-control" name="image1" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif" required>
                          </div>
                          
                          <div class="fancy-file-upload fancy-file-primary">
                              <label class="cflo"><strong>PAN Card :</strong></label>
                              <input type="file" class="form-control" name="image2" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif" required>
                          </div>
                          
                          <div class="fancy-file-upload fancy-file-primary">
                              <label class="cflo"><strong>Passport :</strong></label>
                              <input type="file" class="form-control" name="image3" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif" required>
                          </div>

                        <div class="row  to-fmid">
                          <div class="col-sm-12">
                           <input type ="hidden" name = "type" value="AddIDBadge">
                           <input type ="hidden" name = "u_id" id="u_id" value="<?php echo isset($u_id)?$u_id:''?>">
                            <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success btn-submit">Upload</button>
                          </div>
                        </div>


                      </div>
                    <?php } ?>
                    </form>
                      </div>
                  </div>

                  <div class="col-sm-1 no-padding">
                  </div>

                <div class="col-sm-4 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;border: 1px solid #ccc;border-radius: 25px;margin-top: 40px;">
                   <div class="trstborder professionaldiv" style="padding: 30px;position: relative">
                    <form action="" id = "AddProBadge" method="post" enctype="multipart/form-data">
                      <div style="font-size: 24px;" class="paddt10">Professional Badge</div>
                          <div class="paddt15 dispmessage2" style="font-size: 16px;line-height: 20px;">Let members be able to trust your Occupation and Education details.</div>

                          <div class="paddt15 uploadstatus6" style="font-size: 14px;line-height: 16px;display: block">To earn this badge, please upload the following documents. (This will not be shown to any member)</div>




                      <div class="trustbadge-list" id="msgtextlabel2"></div>
                      <div class="trustbadge-list" id="msgtextlabel3"></div>
                        <?php if ($data1['status'] == '1') { 

                          echo "<br><br><label class='cflo'><strong>Documents has been uploaded</strong></label>";

                        } else { ?>
                        <div class="trustbadge-toolbar paddt15">
                          <div class="fancy-file-upload fancy-file-primary">
                              <label class="cflo"><strong>Education Certificate :</strong></label>
                              <input type="file" class="form-control" name="image1" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif" required>
                          </div>

                          <div class="fancy-file-upload fancy-file-primary">
                              <label class="cflo"><strong>Salary Slip :</strong></label>
                              <input type="file" class="form-control" name="image2" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif" required>
                          </div><br><br><br>    
                        </div>
                        <div class="row  to-fmid">
                          <div class="col-sm-12">
                           <input type ="hidden" name = "type" value="AddProBadge">
                           <input type ="hidden" name = "u_id" id="u_id" value="<?php echo isset($u_id)?$u_id:''?>">
                            <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success">Upload</button>
                          </div>
                        </div>
                      <?php } ?>
                      </form>

                      </div> 

                </div>

                <div class="col-sm-1 no-padding">
                  </div>
              </div>

              <div class="row  to-fmid" >
                <div class="col-sm-1 no-padding">
                  </div>

                <div class="col-sm-4 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;border: 1px solid #ccc;border-radius: 25px;margin-top: 40px;">
                  <div class="trstborder socialbadgediv" style="padding: 30px;">
                    <div style="font-size: 24px;" class="paddt10">Social Badge</div>
                    <div class="paddt15" style="font-size: 16px;line-height: 20px;">Let members be able to trust your profile better with your social account linked.</div>
                    <div class="paddt15" style="font-size: 14px;line-height: 16px;">To get this badge, please sign in to the below social platform.</div>
                    <div class="trustbadge-toolbar paddt15">
                        <button class="custom-file-upload" onclick="fbLogin();ga('send', {'hitType': 'event', 'eventCategory': 'TrustBadge', 'eventAction': 'facebook', 'eventLabel': 'cardclick'});" id="fbLink">Facebook</button>
                    </div><br>
                    </div>
                  </div>

                  <div class="col-sm-1 no-padding">
                  </div>

                <div class="col-sm-4 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;border: 1px solid #ccc;border-radius: 25px;margin-top: 40px;">
                   <div class="trstborder" style="padding: 30px;position:relative;">
                      <div style="font-size: 24px;" class="paddt10">Profile Badge</div>
                      <div class="paddt15" style="font-size: 16px;line-height: 20px;">Let members be able to trust your Profile Photo.</div>
                      <div class="paddt15 trustbadgeclr1" style="font-size: 14px;line-height: 16px;"> To get this badge take a selfie, this will shown only to paid members on request.</div>
                      <div class="trustbadge-toolbar paddt15">
                          <div class="fancy-file-upload fancy-file-primary">
                              <label class="cflo"><strong>Profile Photo :</strong></label>
                              <input type="file" class="form-control" name="image5" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif">
                          </div>   
                          </div>    
                  </div>

                </div>

                <div class="col-sm-1 no-padding">
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