<?php include("header1.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])){
   $register5_id = $_GET['id'];
   $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `register5` WHERE `register5_id` = '$register5_id'"));
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
                  <h1>Let's write something interesting about you</h1>
                  <form action="" id = "AddRegister5" method="post" enctype="multipart/form-data">
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">About you :</label>
                      </div>
                      <div class="col-sm-8">
                          <textarea rows="6" name="about" cols="40" style="width: 100%;"><?php echo isset($data['about'])?$data['about']:''?></textarea>
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                        <input type ="hidden" name = "type" value="AddRegister5">
                        <input type ="hidden" name = "register5_id" id="register5_id" value="<?php echo isset($data['register5_id'])?$data['register5_id']:''?>">
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