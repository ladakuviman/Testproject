<?php include("header1.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])){
   $register3_id = $_GET['id'];
   $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `register3` WHERE `register3_id` = '$register3_id'"));
   }
   else {
    $data['marital_status'] = "";
    $data['height'] = "";
    $data['family_status'] = "";
    $data['family_values'] = "";
    $data['family_type'] = "";
    $data['disability'] = "";
   }
?>
<style type="text/css">
  .to-fmid {
    margin-top: 5px;
  }
</style>
<div class="regformbg">
	<div class="container">
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5">
              <div style="color:#535353; font-size:13px;" class="reg-box shado-1">
                  <h1>Personal details get you the right matches</h1>
                  <form action="" id = "AddRegister3" method="post" enctype="multipart/form-data">
                  
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Marital Status :</label>
                      </div>
                      <div class="col-sm-8">
                         <input value="Never Married"   type="radio" name="marital_status" <?php if($data['marital_status'] == 'Never Married') { ?> checked <?php } ?>> Never Married &nbsp;&nbsp;
                          <input value="Widowed"  type="radio" name="marital_status" <?php if($data['marital_status'] == 'Widowed') { ?> checked <?php } ?>> Widowed &nbsp;&nbsp;
                          <br>
                          <input value="Divorced"  type="radio" name="marital_status" <?php if($data['marital_status'] == 'Divorced') { ?> checked <?php } ?>> Divorced &nbsp;&nbsp;
                          <input value="Awaiting Divorce"  type="radio" name="marital_status" <?php if($data['marital_status'] == 'Awaiting Divorce') { ?> checked <?php } ?>> Awaiting Divorce
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Height :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="height"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                               <option value="0">Feet/Inches</option>
                               <option value="4"<?php if($data['height'] == '4') { ?> selected <?php } ?>>4ft - 121 cm</option>
                               <option value="4 - 1"<?php if($data['height'] == '4 - 1') { ?> selected <?php } ?>>4ft 1in - 124cm</option>
                               <option value="4 - 2"<?php if($data['height'] == '4 - 2') { ?> selected <?php } ?>>4ft 2in - 127cm</option>
                               <option value="4 - 3"<?php if($data['height'] == '4 - 3') { ?> selected <?php } ?>>4ft 3in - 129cm</option>
                               <option value="4 - 4"<?php if($data['height'] == '4 - 4') { ?> selected <?php } ?>>4ft 4in - 132cm</option>
                               <option value="4 - 5"<?php if($data['height'] == '4 - 5') { ?> selected <?php } ?>>4ft 5in - 134cm</option>
                                <option value="4 - 6"<?php if($data['height'] == '4 - 6') { ?> selected <?php } ?>>4ft 6in - 137cm</option>
                                <option value="4 - 7"<?php if($data['height'] == '4 - 7') { ?> selected <?php } ?>>4ft 7in - 139cm</option>
                                <option value="4 - 8"<?php if($data['height'] == '4 - 8') { ?> selected <?php } ?>>4ft 8in - 142cm</option>
                                <option value="4 - 9"<?php if($data['height'] == '4 - 9') { ?> selected <?php } ?>>4ft 9in - 144cm</option>
                                <option value="4 - 10"<?php if($data['height'] == '4 - 10') { ?> selected <?php } ?>>4ft 10in - 147cm</option>
                                <option value="4 - 11"<?php if($data['height'] == '4 - 11') { ?> selected <?php } ?>>4ft 11in - 149cm</option>
                                <option value="5" <?php if($data['height'] == '5 ') { ?> selected <?php } ?>>5ft - 152cm</option>
                                <option value="5 - 1"<?php if($data['height'] == '5 - 1') { ?> selected <?php } ?>>5ft 1in - 154cm</option>
                                <option value="5 - 2"<?php if($data['height'] == '5 - 2') { ?> selected <?php } ?>>5ft 2in - 157cm</option>
                                <option value="5 - 3"<?php if($data['height'] == '5 - 3') { ?> selected <?php } ?>>5ft 3in - 160cm</option>
                                <option value="5 - 4"<?php if($data['height'] == '5 - 4') { ?> selected <?php } ?>>5ft 4in - 162cm</option>
                                <option value="5 - 5"<?php if($data['height'] == '5 - 5') { ?> selected <?php } ?>>5ft 5in - 165cm</option>
                                <option value="5 - 6"<?php if($data['height'] == '5 - 6') { ?> selected <?php } ?>>5ft 6in - 167cm</option>
                                <option value="5 - 7"<?php if($data['height'] == '5 - 7') { ?> selected <?php } ?>>5ft 7in - 170cm</option>
                                <option value="5 - 8"<?php if($data['height'] == '5 - 8') { ?> selected <?php } ?>>5ft 8in - 172cm</option>
                                <option value="5 - 9"<?php if($data['height'] == '5 - 9') { ?> selected <?php } ?>>5ft 9in - 175cm</option>
                                <option value="5 - 10"<?php if($data['height'] == '5 - 10') { ?> selected <?php } ?>>5ft 10in - 177cm</option>
                                <option value="5 - 11" <?php if($data['height'] == '5 - 11') { ?> selected <?php } ?>>5ft 11in - 180cm</option>
                                <option value="6"<?php if($data['height'] == '6 ') { ?> selected <?php } ?>>6ft - 182cm</option>
                                <option value="6 - 1"<?php if($data['height'] == '6 - 1') { ?> selected <?php } ?>>6ft 1in - 185cm</option>
                                <option value="6 - 2"<?php if($data['height'] == '6 - 2') { ?> selected <?php } ?>>6ft 2in - 187cm</option>
                                <option value="6 - 3"<?php if($data['height'] == '6 - 3') { ?> selected <?php } ?>>6ft 3in - 190cm</option>
                                <option value="6 - 4"<?php if($data['height'] == '6 - 4') { ?> selected <?php } ?>>6ft 4in - 193cm</option>
                                <option value="6 - 5"<?php if($data['height'] == '6 - 5') { ?> selected <?php } ?>>6ft 5in - 195cm</option>
                                <option value="6 - 6"<?php if($data['height'] == '6 - 6') { ?> selected <?php } ?>>6ft 6in - 198cm</option>
                                <option value="6 - 7"<?php if($data['height'] == '6 - 7') { ?> selected <?php } ?>>6ft 7in - 200cm</option>
                                <option value="6 - 8"<?php if($data['height'] == '6 - 8') { ?> selected <?php } ?>>6ft 8in - 203cm</option>
                                <option value="6 - 9"<?php if($data['height'] == '6 - 9') { ?> selected <?php } ?>>6ft 9in - 205cm</option>
                                <option value="6 - 10"<?php if($data['height'] == '6 - 10') { ?> selected <?php } ?>>6ft 10in - 208cm</option>
                                <option value="6 - 11"<?php if($data['height'] == '6 - 11') { ?> selected <?php } ?>>6ft 11in - 210cm</option>
                                <option value="7"<?php if($data['height'] == '7 ') { ?> selected <?php } ?>>7ft - 213cm</option>
    
                          </select>
                      </div>
                  </div>

                  
                  <div class="row  to-fmid">
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

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                       <input type ="hidden" name = "type" value="AddRegister3">
                       <input type ="hidden" name = "register3_id" id="register3_id" value="<?php echo isset($data['register3_id'])?$data['register3_id']:''?>">
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