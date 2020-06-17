<?php include("header1.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])){
   $photo_id = $_GET['id'];
   $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `add_photo` WHERE `photo_id` = '$photo_id'"));
   }
   else {
    $data['image1'] = "";
    $data['image2'] = "";
    $data['image3'] = "";
    $data['image4'] = "";
    $data['image5'] = "";
    $data['image6'] = "";

    
    
   }
?>
<style type="text/css">
  .to-fmid {
    margin-top: 20px;
  }
  .reg-box {
    height: 550px;
    width: 100%;
    background-color: rgb(228, 228, 228);
    margin-top: 25px;
    padding: 20px;
  }
</style>
<section style="background-color: rgb(228, 228, 228);">
	<div class="container">
        <div class="row">
            <div class="col-sm-1">
              <img src="">
            </div>

            <div class="col-sm-4">
              <img style="border-radius: 50%;width: 100%;padding: 50px" src="assets/images/img_avatar.png" alt="Avatar" class="avatar">
            </div>

            <div class="col-sm-1">
              <img src="">
            </div>

            <div class="col-sm-6">
              <div style="color:#535353; font-size:13px;" class="reg-box">
                  <h1>Add a photo to ensure your profile gets featured on top of the search results</h1>
                  <form action="" id = "AddPhoto" method="post" enctype="multipart/form-data">
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Add Photo :</label>
                      </div>
                      <div class="col-sm-8">
                          <div class="fancy-file-upload fancy-file-primary">
                              <input type="file" class="form-control" name="image1" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif" required>
                          </div>
                          <br>
                          <p>Image size 15MB. bmp/jpeg/gif/png</p>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Add Photo :</label>
                      </div>
                      <div class="col-sm-8">
                          <div class="fancy-file-upload fancy-file-primary">
                              <input type="file" class="form-control" name="image2" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif">
                          </div>
                          <br>
                          <p>Image size 15MB. bmp/jpeg/gif/png</p>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Add Photo :</label>
                      </div>
                      <div class="col-sm-8">
                          <div class="fancy-file-upload fancy-file-primary">
                              <input type="file" class="form-control" name="image3" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif">
                          </div>
                          <br>
                          <p>Image size 15MB. bmp/jpeg/gif/png</p>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Add Photo :</label>
                      </div>
                      <div class="col-sm-8">
                          <div class="fancy-file-upload fancy-file-primary">
                              <input type="file" class="form-control" name="image4" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif">
                          </div>
                          <br>
                          <p>Image size 15MB. bmp/jpeg/gif/png</p>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Add Photo :</label>
                      </div>
                      <div class="col-sm-8">
                          <div class="fancy-file-upload fancy-file-primary">
                              <input type="file" class="form-control" name="image5" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif">
                          </div>
                          <br>
                          <p>Image size 15MB. bmp/jpeg/gif/png</p>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Add Photo :</label>
                      </div>
                      <div class="col-sm-8">
                          <div class="fancy-file-upload fancy-file-primary">
                              <input type="file" class="form-control" name="image6" onchange="jQuery(this).next('input').val(this.value);"  accept="image/jpeg, image/jfif, image/JFIF, image/png, image/JPG, image/PNG , image/BMP, image/GIF,  image/bmp, image/jpg, image/gif">
                          </div>
                          <br>
                          <p>Image size 15MB. bmp/jpeg/gif/png</p>
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                       <input type ="hidden" name = "type" value="AddPhoto">
                       <input type ="hidden" name = "photo_id" id="photo_id" value="<?php echo isset($data['photo_id'])?$data['photo_id']:''?>">
                        <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success">Upload & Continue</button>
                      </div>
                  </div>

                  </form>



              </div>
            </div>
        </div>

    </div>
</section>

<?php include("footer.php"); ?>