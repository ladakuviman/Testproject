<?php include("header.php"); ?>

<style type="text/css">
  .to-fmid {
    margin-top: 20px;
  }
  .reg-box {
    height: auto;
  }
  @media screen and (max-width: 600px)
  {
  .regformbg {
    height: 816px;
  }
  .fot-contrr {
    height: auto;
  }
}   
</style>

<div class="regformbg">
    <div class="container">
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5">
              <div style="color:#535353; font-size:13px;" class="reg-box shado-1">
                  <h1>Register  Free</h1>
                  <!-- <form method="post" action="register1.php"> -->
                  <form action="" id = "AddRegister" method="post" enctype="multipart/form-data">
                    <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Created by :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="created_by"  style="padding-top: 3px;" class="form-control sml-frm input-sm" required="">
                              <option value="">Select</option>
                              <option value="Parents">Parents</option>
                              <option value="Myself">Myself</option>
                              <option value="Daughter">Daughter</option>
                              <option value="Son">Son</option>
                              <option value="Brother">Brother</option>
                              <option value="Sister">Sister</option>
                              <option value="Relative">Relative</option>
                              <option value="Friend">Friend</option>
    
                          </select>
                      </div>
                    </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-4 no-padding">
                        <label class="cflo">Name :</label>
                    </div>
                    <div class="col-sm-8">
                       <input  type="text" placeholder="Enter Name" class="form-control sml-frm input-sm" name="full_name" required="">
                    </div>
                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-4 no-padding">
                        <label class="cflo">Father Name :</label>
                    </div>
                    <div class="col-sm-8">
                       <input  type="text" placeholder="Enter Father Name" class="form-control sml-frm input-sm" name="father_name" required="">
                    </div>
                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-4 no-padding">
                        <label class="cflo">Surname :</label>
                    </div>
                    <div class="col-sm-8">
                       <input  type="text" placeholder="Enter Surname" class="form-control sml-frm input-sm" name="surname" required="">
                    </div>
                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-4 no-padding">
                        <label class="cflo">Mobile No :</label>
                    </div>
                    <div class="col-sm-8">
                      <input name="mobile"  type="text" placeholder="Enter Mobile No" min="0" pattern="[1-9]{1}[0-9]{9}" class="form-control sml-frm input-sm" required="">
                    </div>
                  </div>

                  

                  <div class="row  to-fmid">
                    <div class="col-sm-4 no-padding">
                        <label class="cflo">Email :</label>
                    </div>
                    <div class="col-sm-8">
                      <input name="email"  type="email" placeholder="Enter Email" class="form-control sml-frm input-sm" required="">
                    </div>
                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-4 no-padding">
                        <label class="cflo">Password :</label>
                    </div>
                    <div class="col-sm-8">
                      <input name="password"  type="password" id="myInput" minlength="8" placeholder="Enter Password" class="form-control sml-frm input-sm" required="">
                      <input type="checkbox" onclick="myFunction12()">&nbsp;Show Password
                    </div>
                  </div>
                  

                  <div class="row  to-fmid">
                    <div class="col-sm-4 no-padding">
                        
                    </div>
                    <div class="col-sm-8">
                      <input type ="hidden" name = "type" value="AddRegister">
                      <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-submit btn-sm btn-success">Register Now</button>
                    </div>
                  </div>

                  </form>



              </div>
            </div>
        </div>

    </div>

    <div class="fot-contrr">
      <div class="container">
        <div class="row center">
          <h2  class="dfsgg">Find the one who completes You</h2>
          <form action="" id = "SearchFrontProfile" method="post" enctype="multipart/form-data">
            <div  class="row iju-ckij">
              <div class="col-sm-6 mbo">
               <span> Age : </span>
                <select name="age_from" style="width:35%;">
                  <option value="">Age</option>
                  <?php 

                    // if($gender == 'Male') {

                    //   for ($i=21; $i<=60; $i++) { 
                    //     echo "<option value='$i'>$i</option>";
                    //   }
                    // }
                    // else {

                      for ($i=18; $i<=60; $i++) { 
                        echo "<option value='$i Years'>$i</option>"; 
                      }
                    // }

                  ?>
                  
                </select>
                 <span> To : </span>
                <select name="age_to" style="width:35%;">
                  <option value="">Age</option>
                  <?php 

                    // if($gender == 'Male') {

                    //   for ($i=21; $i<=60; $i++) { 
                    //     echo "<option value='$i'>$i</option>";
                    //   }
                    // }
                    // else {

                      for ($i=18; $i<=60; $i++) { 
                        echo "<option value='$i Years'>$i</option>"; 
                      }
                    // }

                  ?>
                </select>
              </div>
              <!-- <div class="col-sm-2">
                <select name="marital_status" style="width:100%;">
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Awaiting Divorce">Awaiting Divorce</option>
                </select>

              </div> -->
              <div class="col-sm-3">
                <select name="marital_status" style="width:100%;">
                  <option value="">Maritial Status</option>
                  <option value="Never Married">Never Married</option>
                  <option value="Widowed">Widowed</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Awaiting Divorce">Awaiting Divorce</option>
                </select>

              </div>
              <div class="col-sm-3">
              <select name="caste" style="width:100%;">
                <option  value="">Select Denomination</option>
                <option  value="Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)" >Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)</option>
              </select>
              </div>
            </div>
            <div  class="row" style="margin-top: 20px;">
              <div class="col-sm-5 mbo">
              </div>
              <div class="col-sm-2 mbo">
                <input type ="hidden" name = "type" value="SearchFrontProfile">
                <button type="submit" id="submit" class="btn btn-sm btn-default" style="width:100%;margin-top: 5px;">Search</button>
                <!-- <button  style="width:100%;" class="btn btn-default">SEARCH</button> -->
              </div>
              <div class="col-sm-5 mbo">
              </div>
            </div>
          </form>
        </div>
      </div>  
    </div>



    <div class="succss-story">
      
        <div class="container">
            <div style="margin-bottom:20px;" class="row center">
                <h2>Success Story</h2>
            </div>

            <div class="row mbo2">
                <div style="margin-top:20px;" class="col-sm-6">
                  <div class="col-sm-3">
                      <img style="width:100%;" src="assets/images/7dd.jpg">
                  </div>
                  <div class="col-sm-9">
                      <h4>Lorem & Ipsum</h4>
                      <p style="font-size:12px;">There are many variations of passages of Lorem Ipsum available, but There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.</p>
                  </div>
                </div>
                 <div style="margin-top:20px;" class="col-sm-6">
                  <div class="col-sm-3">
                      <img style="width:100%;" src="assets/images/7dd.jpg">
                  </div>
                  <div class="col-sm-9">
                      <h4>Lorem & Ipsum</h4>
                      <p style="font-size:12px;">There are many variations of passages of Lorem Ipsum available, but There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.</p>
                  </div>
                </div>

                 <div style="margin-top:20px;" class="col-sm-6">
                  <div class="col-sm-3">
                      <img style="width:100%;" src="assets/images/7dd.jpg">
                  </div>
                  <div class="col-sm-9">
                      <h4>Lorem & Ipsum</h4>
                      <p style="font-size:12px;">There are many variations of passages of Lorem Ipsum available, but There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.</p>
                  </div>
                </div>

                 <div style="margin-top:20px;" class="col-sm-6">
                  <div class="col-sm-3">
                      <img style="width:100%;" src="assets/images/7dd.jpg">
                  </div>
                  <div class="col-sm-9">
                      <h4>Lorem & Ipsum</h4>
                      <p style="font-size:12px;">There are many variations of passages of Lorem Ipsum available, but There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.</p>
                  </div>
                </div>

            </div>
              

        </div>

    </div>
    <script>
function myFunction12() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<?php include("footer.php"); ?>



  
  