<?php include("header1.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])){
   $register2_id = $_GET['id'];
   $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `register2` WHERE `register2_id` = '$register2_id'"));
   }
   else {
    $data['caste'] = "";
    $data['gotra'] = "";
    $data['dosh'] = "";
    $data['country'] = "";
    $data['city'] = "";
    $data['state'] = "";
    $data['pincode'] = "";
   }
?>
<style type="text/css">
  .to-fmid {
    margin-top: 20px;
  }
  .reg-box {
    height: auto;
  }
  @media screen and (max-width: 600px) {
    .reg-box {
        margin-top: 40px;
    }
  }
</style>
<div class="regformbg">
	<div class="container">
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5">
              <div style="color:#535353; font-size:13px;" class="reg-box shado-1">
                  <h1>Religion/Caste/Location details help us find better matches</h1>
                  <form action="" id = "AddRegister2" method="post" enctype="multipart/form-data">


                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Caste :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="caste"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="">Select</option>
                              <option value="Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)" <?php if($data['caste'] == 'Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)') { ?> selected <?php } ?>>Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)</option>
                          </select>
                      </div>
                  </div>

                  

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Gotra :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="gotra"  type="text" placeholder="Enter Gotra" value="<?php echo isset($data['gotra'])?$data['gotra']:''?>" class="form-control sml-frm input-sm" >
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Dosh :</label>
                      </div>
                      <div class="col-sm-8">
                         <input value="Yes"   type="radio" name="dosh" <?php if($data['dosh'] == 'Yes') { ?> checked <?php } ?>> Yes &nbsp;&nbsp;
                          <input value="No"  type="radio" name="dosh" <?php if($data['dosh'] == 'No') { ?> checked <?php } ?>> No &nbsp;&nbsp;
                          <input value="Dont Know"  type="radio" name="dosh" <?php if($data['dosh'] == 'Dont Know') { ?> checked <?php } ?>> Don't Know
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Country :</label>
                      </div>
                      <div class="col-sm-8">
                          
                          <select name="country" style="padding-top: 3px;" class="form-control sml-frm input-sm countries"  id="SelectCountry" required="required">
                              <option value="">Select Country</option>
                              <option value="India">India</option>
                              <?php
                                    $sql = $db->query("SELECT * FROM `countries`");
                                    $numrow = $sql->num_rows;
                                    if ($numrow > 0) {
                                        $i = 1;
                                        while ($row1 = $sql->fetch_assoc()) {
                                          $selected2 = (isset($data['country']) && $row1['name'] == $data['country'])?'selected':'';
                                            ?>
                                            <option value="<?php echo $row1['name']; ?>" <?=$selected2?>><?php echo $row1['name']; ?></option>
                                            <?php
                                        } //while loop
                                    } //if loop
                                    ?> 
                          </select>
    
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">State :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="state" style="padding-top: 3px;" class="states form-control sml-frm input-sm" id="SelectStates" required="required">
                            <?php 
                            if ($register2_id == '') { ?>

                              <option value="">Select State</option>
                            <?php }
                            else { ?>
                              <option value="<?php echo isset($data['state'])?$data['state']:''?>"><?php echo isset($data['state'])?$data['state']:''?></option>
                            <?php } ?>
                          </select>
                          
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">City :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="city" style="padding-top: 3px;" class="states form-control sml-frm input-sm" id="SelectCity" required="required">
                              <?php 
                            if ($register2_id == '') { ?>

                              <option value="">Select State</option>
                            <?php }
                            else { ?>
                              <option value="<?php echo isset($data['city'])?$data['city']:''?>"><?php echo isset($data['city'])?$data['city']:''?></option>
                            <?php } ?>
                          </select>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Zip Code :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="pincode"  type="text" placeholder="Enter Zip Code" value="<?php echo isset($data['pincode'])?$data['pincode']:''?>" class="form-control sml-frm input-sm" >
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                        <input type ="hidden" name = "type" value="AddRegister2">
                        <input type ="hidden" name = "register2_id" id="register2_id" value="<?php echo isset($data['register2_id'])?$data['register2_id']:''?>">
                        <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success">Save & Continue</button>
                      </div>
                  </div>

                  </form>



              </div>
            </div>
        </div>

    </div>
</div>


<?php include("footer.php"); ?>