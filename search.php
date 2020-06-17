<?php include("header1.php"); ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .to-fmid {
    margin-top: 20px;
  }
  body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
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
  .cflo {
    font-weight: 300;
    padding-top: 0px;
  }
  .w3-bar .w3-bar-item {
    padding: 8px 16px;
    float: left;
    width: 360px;
    border: none;
    display: block;
    outline: 0;
  }
  .w3-button:hover {
    color: #fafafa!important;
    background-color: #f44336!important;
  }
</style>
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<section style="background-color: rgb(228, 228, 228);">
  <div class="container">
        <div class="row">

            <div class="col-sm-12  " style="margin-top: 25px;">
               <!-- <h3><strong>Profile Setting</strong></h3> -->
            </div>
            

            <div class="col-sm-12 ">
              <div style="color:#535353; font-size:13px;" class="reg-box">
                  
                  <div class="row  to-fmid" >
                    <div class="col-sm-12 ">
                      <div class="w3-bar w3-black">
                        <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'Regular Search')">Regular Search</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Advance Search')">Advance Search</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Keyword Search')">Keyword Search</button>
                      </div>
                    </div>
                    

                    <div class="col-sm-12 city" id="Regular Search" style="display:block;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong>Regular Search</strong></h4>
                          <hr>
                          <form action="" id = "SearchProfile" method="post" enctype="multipart/form-data">

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Age</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-2">
                                  <select name="age_from"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                    <option value="">Select Age</option>
                                    <?php 

                                      if($gender == 'Female') {

                                        for ($i=21; $i<=60; $i++) { 
                                          echo "<option value='$i'>$i</option>";
                                        }
                                      }
                                      else {

                                        for ($i=18; $i<=60; $i++) { 
                                          echo "<option value='$i'>$i</option>"; 
                                        }
                                      }

                                    ?>
            
                                  </select>
                              </div>
                              <div class="col-sm-1">
                                <label class="cflo">to</label>
                              </div>
                              <div class="col-sm-2">
                                  <select name="age_to"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                    <option value="">Select Age</option>
                                      <?php 
                                      if($gender == 'Female') {

                                        for ($i=21; $i<=60; $i++) { 
                                          echo "<option value='$i'>$i</option>";
                                        }
                                      }
                                      else {

                                        for ($i=18; $i<=60; $i++) { 
                                          echo "<option value='$i'>$i</option>"; 
                                        }
                                      }

                                    ?>
            
                                  </select>
                              </div>
                              <div class="col-sm-1">
                                  <label class="cflo">years</label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Height</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-2">
                                  <select name="height_from"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Feet/Inches</option>
                                <option value="4">4ft - 121 cm</option>
                               <option value="4 - 1">4ft 1in - 124cm</option>
                               <option value="4 - 2">4ft 2in - 127cm</option>
                               <option value="4 - 3">4ft 3in - 129cm</option>
                               <option value="4 - 4">4ft 4in - 132cm</option>
                               <option value="4 - 5">4ft 5in - 134cm</option>
                                <option value="4 - 6">4ft 6in - 137cm</option>
                                <option value="4 - 7">4ft 7in - 139cm</option>
                                <option value="4 - 8">4ft 8in - 142cm</option>
                                <option value="4 - 9">4ft 9in - 144cm</option>
                                <option value="4 - 10">4ft 10in - 147cm</option>
                                <option value="4 - 11">4ft 11in - 149cm</option>
                                <option value="5"  >5ft - 152cm</option>
                                <option value="5 - 1">5ft 1in - 154cm</option>
                                <option value="5 - 2">5ft 2in - 157cm</option>
                                <option value="5 - 3">5ft 3in - 160cm</option>
                                <option value="5 - 4">5ft 4in - 162cm</option>
                                <option value="5 - 5">5ft 5in - 165cm</option>
                                <option value="5 - 6">5ft 6in - 167cm</option>
                                <option value="5 - 7">5ft 7in - 170cm</option>
                                <option value="5 - 8">5ft 8in - 172cm</option>
                                <option value="5 - 9">5ft 9in - 175cm</option>
                                <option value="5 - 10">5ft 10in - 177cm</option>
                                <option value="5 - 11" >5ft 11in - 180cm</option>
                                <option value="6" >6ft - 182cm</option>
                                <option value="6 - 1">6ft 1in - 185cm</option>
                                <option value="6 - 2">6ft 2in - 187cm</option>
                                <option value="6 - 3">6ft 3in - 190cm</option>
                                <option value="6 - 4">6ft 4in - 193cm</option>
                                <option value="6 - 5">6ft 5in - 195cm</option>
                                <option value="6 - 6">6ft 6in - 198cm</option>
                                <option value="6 - 7">6ft 7in - 200cm</option>
                                <option value="6 - 8">6ft 8in - 203cm</option>
                                <option value="6 - 9">6ft 9in - 205cm</option>
                                <option value="6 - 10">6ft 10in - 208cm</option>
                                <option value="6 - 11">6ft 11in - 210cm</option>
                                <option value="7" >7ft - 213cm</option>  
            
                                  </select>
                              </div>
                              <div class="col-sm-1">
                                <label class="cflo">to</label>
                              </div>
                              <div class="col-sm-2">
                                  <select name="height_to"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Feet/Inches</option>
                                <option value="4">4ft - 121 cm</option>
                               <option value="4 - 1">4ft 1in - 124cm</option>
                               <option value="4 - 2">4ft 2in - 127cm</option>
                               <option value="4 - 3">4ft 3in - 129cm</option>
                               <option value="4 - 4">4ft 4in - 132cm</option>
                               <option value="4 - 5">4ft 5in - 134cm</option>
                                <option value="4 - 6">4ft 6in - 137cm</option>
                                <option value="4 - 7">4ft 7in - 139cm</option>
                                <option value="4 - 8">4ft 8in - 142cm</option>
                                <option value="4 - 9">4ft 9in - 144cm</option>
                                <option value="4 - 10">4ft 10in - 147cm</option>
                                <option value="4 - 11">4ft 11in - 149cm</option>
                                <option value="5"  >5ft - 152cm</option>
                                <option value="5 - 1">5ft 1in - 154cm</option>
                                <option value="5 - 2">5ft 2in - 157cm</option>
                                <option value="5 - 3">5ft 3in - 160cm</option>
                                <option value="5 - 4">5ft 4in - 162cm</option>
                                <option value="5 - 5">5ft 5in - 165cm</option>
                                <option value="5 - 6">5ft 6in - 167cm</option>
                                <option value="5 - 7">5ft 7in - 170cm</option>
                                <option value="5 - 8">5ft 8in - 172cm</option>
                                <option value="5 - 9">5ft 9in - 175cm</option>
                                <option value="5 - 10">5ft 10in - 177cm</option>
                                <option value="5 - 11" >5ft 11in - 180cm</option>
                                <option value="6" >6ft - 182cm</option>
                                <option value="6 - 1">6ft 1in - 185cm</option>
                                <option value="6 - 2">6ft 2in - 187cm</option>
                                <option value="6 - 3">6ft 3in - 190cm</option>
                                <option value="6 - 4">6ft 4in - 193cm</option>
                                <option value="6 - 5">6ft 5in - 195cm</option>
                                <option value="6 - 6">6ft 6in - 198cm</option>
                                <option value="6 - 7">6ft 7in - 200cm</option>
                                <option value="6 - 8">6ft 8in - 203cm</option>
                                <option value="6 - 9">6ft 9in - 205cm</option>
                                <option value="6 - 10">6ft 10in - 208cm</option>
                                <option value="6 - 11">6ft 11in - 210cm</option>
                                <option value="7" >7ft - 213cm</option> 
            
                                  </select>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                            <div class="col-sm-3 no-padding">
                                <label class="cflo">Marital Status</label>
                                <label class="cflo" style="float: right;">:</label>
                            </div>
                            <div class="col-sm-7">
                               <!-- <input value="All"   type="radio" name="marital_status"> All &nbsp;&nbsp; -->
                                <input value="Unmarried"  type="radio" name="marital_status"> Unmarried &nbsp;&nbsp;<br>
                                <input value="Widow/Widowed"  type="radio" name="marital_status"> Widow/Widowed &nbsp;&nbsp;<br>
                                <input value="Divorced"  type="radio" name="marital_status"> Divorced &nbsp;&nbsp;<br>
                                <input value="Awaiting Divorce"   type="radio" name="marital_status"> Awaiting Divorce 
                                
                            </div>
                            <div class="col-sm-1 no-padding">
                                <label class="cflo"></label>
                            </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Religion</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="religion"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select</option>
                                      <option value="Hindu">Hindu</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Mother Tongue</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="mother_tongue"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select</option>
                                      <option value="SSK Savji" >SSK Savji</option>
                                      <option value="Pategar" >Pategar</option>
                                      <option value="Khatri">Khatri</option>
                                      <option value="Kannada" >Kannada</option>
                                      <option value="Marathi" >Marathi</option>
                                      <option value="Hindi">Hindi</option>
                                      <option value="English" >English</option>
                                      <option value="Telugu">Telugu</option>
                                      <option value="Tamil">Tamil</option>
                                      <option value="Malayalam" >Malayalam</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Caste</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="caste"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select</option>
                                      <option value="Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)">Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Country</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="country" style="padding-top: 3px;" class="form-control sml-frm input-sm countries"  id="SelectCountry" >
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
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">State</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                    <select name="state" style="padding-top: 3px;" class="states form-control sml-frm input-sm" id="SelectStates" >
                                      <?php 
                                      if ($register2_id == '') { ?>

                                        <option value="">Select State</option>
                                      <?php }
                                      else { ?>
                                        <option value="<?php echo isset($data['state'])?$data['state']:''?>"><?php echo isset($data['state'])?$data['state']:''?></option>
                                      <?php } ?>
                                    </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">City</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="city" style="padding-top: 3px;" class="states form-control sml-frm input-sm" id="SelectCity" >
                                    <?php 
                                    if ($register2_id == '') { ?>

                                      <option value="">Select State</option>
                                    <?php }
                                    else { ?>
                                      <option value="<?php echo isset($data['city'])?$data['city']:''?>"><?php echo isset($data['city'])?$data['city']:''?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Education</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="education"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                    <option value="">Select education category</option>
                    
                                  <option value="BE / B.Tech." >BE / B.Tech.</option>
                                  <option value="Aeronautical Engineering"  >Aeronautical Engineering</option>
                                  <option value="B.Arch" >B.Arch</option>
                                  <option value="BCA">BCA</option>
                                  <option value="BE">BE</option>
                                  <option value="B.Plan" >B.Plan</option>
                                  <option value="B.Sc IT/ Computer Science" >B.Sc IT/ Computer Science</option>
                                  <option value="B.Tech.">B.Tech.</option>
                                  <option value="B.S.(Engineering)" >B.S.(Engineering)</option>
                                  <option value="Other Bachelor Degree in Engineering / Computers" >Other Bachelor Degree in Engineering / Computers</option>

                                  <option value="MCA / PGDCA">MCA / PGDCA</option>
                                  <option value="ME / M.Tech.">ME / M.Tech.</option>
                                  <option value="M.Arch.">M.Arch.</option>
                                  <option value="MCA">MCA</option>
                                  <option value="ME">ME</option>
                                  <option value="M.Sc. IT / Computer Science">M.Sc. IT / Computer Science</option>
                                  <option value="3">M.S.(Engg.)</option>
                                  <option value="M.S.(Engg.)">M.Tech.</option>
                                  <option value="PGDCA">PGDCA</option>
                                  <option value="Other Masters Degree in Engineering / Computers">Other Masters Degree in Engineering / Computers</option>

                                  <option value="Aviation Degree">Aviation Degree</option>
                                  <option value="B.A.">B.A.</option>
                                  <option value="B.Com.">B.Com.</option>
                                  <option value="B.Ed.">B.Ed.</option>
                                  <option value="BFA">BFA</option>
                                  <option value="BFT">BFT</option>
                                  <option value="BLIS">BLIS</option>
                                  <option value="B.M.M.">B.M.M.</option>
                                  <option value="B.Sc.">B.Sc.</option>
                                  <option value="B.S.W">B.S.W</option>
                                  <option value="B.Phil.">B.Phil.</option>
                                  <option value="Other Bachelor Degree in Arts / Science / Commerce">Other Bachelor Degree in Arts / Science / Commerce</option>

                                  <option value="M.A.">M.A.</option>
                                  <option value="MCom">MCom</option>
                                  <option value="M.Ed.">M.Ed.</option>
                                  <option value="MFA">MFA</option>
                                  <option value="MLIS">MLIS</option>
                                  <option value="M.Sc.">M.Sc.</option>
                                  <option value="MSW">MSW</option>
                                  <option value="M.Phil.">M.Phil.</option>
                                  <option value="Other Master Degree in Arts / Science / Commerce">Other Master Degree in Arts / Science / Commerce</option>

                                  <option value="BBA">BBA</option>
                                  <option value="BFM (Financial Management)">BFM (Financial Management)</option>
                                  <option value="BHM (Hotel Management)">BHM (Hotel Management)</option>
                                  <option value="BHA / BHM (Hospital Administration)">BHA / BHM (Hospital Administration)</option>
                                  <option value="Other Bachelor Degree in Management">Other Bachelor Degree in Management</option>

                                  <option value="MBA">MBA</option>
                                  <option value="MFM (Financial Management)">MFM (Financial Management)</option>
                                  <option value="MHM  (Hotel Management)">MHM  (Hotel Management)</option>
                                  <option value="MHRM (Human Resource Management)">MHRM (Human Resource Management)</option>
                                  <option value="PGDM">PGDM</option>
                                  <option value="MBA / PGDM">MBA / PGDM</option>
                                  <option value="MHA / MHM (Hospital Administration)">MHA / MHM (Hospital Administration)</option>
                                  <option value="Other Master Degree in Management">Other Master Degree in Management</option>

                                  <option value="B.A.M.S.">B.A.M.S.</option>
                                  <option value="BDS">BDS</option>
                                  <option value="BHMS">BHMS</option>
                                  <option value="BSMS">BSMS</option>
                                  <option value="BPharm">BPharm</option>
                                  <option value="BPT">BPT</option>
                                  <option value="BUMS">BUMS</option>
                                  <option value="BVSc">BVSc</option>
                                  <option value="MBBS">MBBS</option>
                                  <option value="B.Sc. Nursing">B.Sc. Nursing</option>
                                  <option value="Other Bachelor Degree in Medicine">Other Bachelor Degree in Medicine</option>

                                  <option value="MDS">MDS</option>
                                  <option value="MD / MS (Medical)">MD / MS (Medical)</option>
                                  <option value="M.Pharm">M.Pharm</option>
                                  <option value="MPT">MPT</option>
                                  <option value="MVSc">MVSc </option>
                                  <option value="Other Master Degree in Medicine">Other Master Degree in Medicine</option>

                                  <option value="BGL">BGL</option>
                                  <option value="B.L.">B.L.</option>
                                  <option value="LL.B.">LL.B.</option>
                                  <option value="BGL / B.L. / LL.B.">BGL / B.L. / LL.B.</option>
                                  <option value="Other Bachelor Degree in Legal">Other Bachelor Degree in Legal</option>

                                  <option value="LL.M.">LL.M.</option>
                                  <option value="M.L.">M.L.</option>
                                  <option value="M.L. / LL.M.">M.L. / LL.M.</option>
                                  <option value="Other Master Degree in  Legal">Other Master Degree in  Legal</option>

                                  <option value="CA">CA</option>
                                  <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial Analyst)</option>
                                  <option value="CS">CS</option>
                                  <option value="ICWA">ICWA</option>
                                  <option value="Other Degree in Finance">Other Degree in Finance</option>

                                  <option value="IAS">IAS</option>
                                  <option value="IES">IES</option>
                                  <option value="IFS">IFS</option>
                                  <option value="IRS">IRS</option>
                                  <option value="IPS">IPS</option>
                                  <option value="IAS / IPS/ IRS / IES / IFS">IAS / IPS/ IRS / IES / IFS</option>
                                  <option value="Other Degree in Service">Other Degree in Service</option>

                                  <option value="Ph.D.">Ph.D.</option>

                                  <option value="Diploma">Diploma</option>
                                  <option value="Polytechnic">Polytechnic</option>
                                  <option value="Trade School">Trade School</option>
                                  <option value="Others">Others</option>

                                  <option value="Higher Secondary School / High School">Higher Secondary School / High School</option>
          
                                </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>


                          <div class="col-sm-12 wrapper" style="margin-bottom: 10px;">
                            <input type ="hidden" name = "type" value="SearchProfile">
                            <!-- <input type ="hidden" name = "search_type" id="search_type" value="Regular"> -->
                            <!-- <input type ="hidden" name = "marital_status" id="marital_status" value=""> -->
                            <input type ="hidden" name = "gender" id="gender" value="<?php echo($gender);?>">
                            <input type ="hidden" name = "new_gender" id="new_gender" value="<?php echo($new_gender);?>">
                            <button type="submit" id="submit" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Search</button>
                          </div>

                        </form>

                        </div>

                        <div class="w3-container " style="background-color: #ffffff">
                            <h4><strong>Search By ID</strong></h4>
                            <hr>
                            <div class="row  to-fmid">
                              <div class="col-sm-6 no-padding" style="margin-bottom: 10px;">
                                <input name="subcaste"  type="text"  placeholder="Enter Matrimony ID" class="form-control sml-frm input-sm" name="">
                              </div>
                              <div class="col-sm-4 " style="margin-bottom: 20px;">
                                <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                              </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-sm-12 city" id="Advance Search" style="display:none;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong>Advance Search</strong></h4>
                          <hr>
                          <!-- <div class="row  to-fmid">
                            <div class="col-sm-3 no-padding">
                                <label class="cflo">Gender</label>
                                <label class="cflo" style="float: right;">:</label>
                            </div>
                            <div class="col-sm-7">
                               <input value="Male"   type="radio" name="gender"> Male &nbsp;&nbsp;
                                <input value="Female"  type="radio" name="gender"> Female &nbsp;&nbsp;<br>
                            </div>
                            <div class="col-sm-1 no-padding">
                                <label class="cflo"></label>
                            </div>
                          </div> -->
                          <form action="" id = "SearchProfileAdvance" method="post" enctype="multipart/form-data">
                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Age</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-2">
                                  <select name="age_from"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                    <option value="">Select Age</option>
                                    <?php 

                                      if($gender == 'Male') {

                                        for ($i=21; $i<=60; $i++) { 
                                          echo "<option value='$i'>$i</option>";
                                        }
                                      }
                                      else {

                                        for ($i=18; $i<=60; $i++) { 
                                          echo "<option value='$i'>$i</option>"; 
                                        }
                                      }

                                    ?>
            
                                  </select>
                              </div>
                              <div class="col-sm-1">
                                <label class="cflo">to</label>
                              </div>
                              <div class="col-sm-2">
                                  <select name="age_to"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                    <option value="">Select Age</option>
                                      <?php 
                                      if($gender == 'Male') {

                                        for ($i=21; $i<=60; $i++) { 
                                          echo "<option value='$i'>$i</option>";
                                        }
                                      }
                                      else {

                                        for ($i=18; $i<=60; $i++) { 
                                          echo "<option value='$i'>$i</option>"; 
                                        }
                                      }

                                    ?>
            
                                  </select>
                              </div>
                              <div class="col-sm-1">
                                  <label class="cflo">years</label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Height</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-2">
                                  <select name="height_from"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Feet/Inches</option>
                                <option value="4">4ft - 121 cm</option>
                               <option value="4 - 1">4ft 1in - 124cm</option>
                               <option value="4 - 2">4ft 2in - 127cm</option>
                               <option value="4 - 3">4ft 3in - 129cm</option>
                               <option value="4 - 4">4ft 4in - 132cm</option>
                               <option value="4 - 5">4ft 5in - 134cm</option>
                                <option value="4 - 6">4ft 6in - 137cm</option>
                                <option value="4 - 7">4ft 7in - 139cm</option>
                                <option value="4 - 8">4ft 8in - 142cm</option>
                                <option value="4 - 9">4ft 9in - 144cm</option>
                                <option value="4 - 10">4ft 10in - 147cm</option>
                                <option value="4 - 11">4ft 11in - 149cm</option>
                                <option value="5"  >5ft - 152cm</option>
                                <option value="5 - 1">5ft 1in - 154cm</option>
                                <option value="5 - 2">5ft 2in - 157cm</option>
                                <option value="5 - 3">5ft 3in - 160cm</option>
                                <option value="5 - 4">5ft 4in - 162cm</option>
                                <option value="5 - 5">5ft 5in - 165cm</option>
                                <option value="5 - 6">5ft 6in - 167cm</option>
                                <option value="5 - 7">5ft 7in - 170cm</option>
                                <option value="5 - 8">5ft 8in - 172cm</option>
                                <option value="5 - 9">5ft 9in - 175cm</option>
                                <option value="5 - 10">5ft 10in - 177cm</option>
                                <option value="5 - 11" >5ft 11in - 180cm</option>
                                <option value="6" >6ft - 182cm</option>
                                <option value="6 - 1">6ft 1in - 185cm</option>
                                <option value="6 - 2">6ft 2in - 187cm</option>
                                <option value="6 - 3">6ft 3in - 190cm</option>
                                <option value="6 - 4">6ft 4in - 193cm</option>
                                <option value="6 - 5">6ft 5in - 195cm</option>
                                <option value="6 - 6">6ft 6in - 198cm</option>
                                <option value="6 - 7">6ft 7in - 200cm</option>
                                <option value="6 - 8">6ft 8in - 203cm</option>
                                <option value="6 - 9">6ft 9in - 205cm</option>
                                <option value="6 - 10">6ft 10in - 208cm</option>
                                <option value="6 - 11">6ft 11in - 210cm</option>
                                <option value="7" >7ft - 213cm</option>  
            
                                  </select>
                              </div>
                              <div class="col-sm-1">
                                <label class="cflo">to</label>
                              </div>
                              <div class="col-sm-2">
                                  <select name="height_to"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Feet/Inches</option>
                                <option value="4">4ft - 121 cm</option>
                               <option value="4 - 1">4ft 1in - 124cm</option>
                               <option value="4 - 2">4ft 2in - 127cm</option>
                               <option value="4 - 3">4ft 3in - 129cm</option>
                               <option value="4 - 4">4ft 4in - 132cm</option>
                               <option value="4 - 5">4ft 5in - 134cm</option>
                                <option value="4 - 6">4ft 6in - 137cm</option>
                                <option value="4 - 7">4ft 7in - 139cm</option>
                                <option value="4 - 8">4ft 8in - 142cm</option>
                                <option value="4 - 9">4ft 9in - 144cm</option>
                                <option value="4 - 10">4ft 10in - 147cm</option>
                                <option value="4 - 11">4ft 11in - 149cm</option>
                                <option value="5"  >5ft - 152cm</option>
                                <option value="5 - 1">5ft 1in - 154cm</option>
                                <option value="5 - 2">5ft 2in - 157cm</option>
                                <option value="5 - 3">5ft 3in - 160cm</option>
                                <option value="5 - 4">5ft 4in - 162cm</option>
                                <option value="5 - 5">5ft 5in - 165cm</option>
                                <option value="5 - 6">5ft 6in - 167cm</option>
                                <option value="5 - 7">5ft 7in - 170cm</option>
                                <option value="5 - 8">5ft 8in - 172cm</option>
                                <option value="5 - 9">5ft 9in - 175cm</option>
                                <option value="5 - 10">5ft 10in - 177cm</option>
                                <option value="5 - 11" >5ft 11in - 180cm</option>
                                <option value="6" >6ft - 182cm</option>
                                <option value="6 - 1">6ft 1in - 185cm</option>
                                <option value="6 - 2">6ft 2in - 187cm</option>
                                <option value="6 - 3">6ft 3in - 190cm</option>
                                <option value="6 - 4">6ft 4in - 193cm</option>
                                <option value="6 - 5">6ft 5in - 195cm</option>
                                <option value="6 - 6">6ft 6in - 198cm</option>
                                <option value="6 - 7">6ft 7in - 200cm</option>
                                <option value="6 - 8">6ft 8in - 203cm</option>
                                <option value="6 - 9">6ft 9in - 205cm</option>
                                <option value="6 - 10">6ft 10in - 208cm</option>
                                <option value="6 - 11">6ft 11in - 210cm</option>
                                <option value="7" >7ft - 213cm</option> 
            
                                  </select>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                            <div class="col-sm-3 no-padding">
                                <label class="cflo">Marital Status</label>
                                <label class="cflo" style="float: right;">:</label>
                            </div>
                            <div class="col-sm-7">
                               <!-- <input value="All"   type="radio" name="marital_status"> All &nbsp;&nbsp; -->
                                <input value="Unmarried"  type="radio" name="marital_status"> Unmarried &nbsp;&nbsp;<br>
                                <input value="Widow/Widowed"  type="radio" name="marital_status"> Widow/Widowed &nbsp;&nbsp;<br>
                                <input value="Divorced"  type="radio" name="marital_status"> Divorced &nbsp;&nbsp;<br>
                                <input value="Awaiting Divorce"   type="radio" name="marital_status"> Awaiting Divorce 
                                
                            </div>
                            <div class="col-sm-1 no-padding">
                                <label class="cflo"></label>
                            </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Religion</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="religion"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select</option>
                                      <option value="Hindu">Hindu</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Mother Tongue</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="mother_tongue"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select</option>
                                      <option value="SSK Savji" >SSK Savji</option>
                                      <option value="Pategar" >Pategar</option>
                                      <option value="Khatri">Khatri</option>
                                      <option value="Kannada" >Kannada</option>
                                      <option value="Marathi" >Marathi</option>
                                      <option value="Hindi">Hindi</option>
                                      <option value="English" >English</option>
                                      <option value="Telugu">Telugu</option>
                                      <option value="Tamil">Tamil</option>
                                      <option value="Malayalam" >Malayalam</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Caste</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="caste"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select</option>
                                      <option value="Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)">Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                            <div class="col-sm-3 no-padding">
                                <label class="cflo">Physical Status</label>
                                <label class="cflo" style="float: right;">:</label>
                            </div>
                            <div class="col-sm-7">
                               <input value="Doesn't Matter"   type="radio" name="physical_status"> Doesn't Matter &nbsp;&nbsp;
                                <input value="Normal"  type="radio" name="physical_status"> Normal &nbsp;&nbsp;<br>
                                <input value="Physically Challenged"  type="radio" name="physical_status"> Physically Challenged &nbsp;&nbsp;<br>
                            </div>
                            <div class="col-sm-1 no-padding">
                                <label class="cflo"></label>
                            </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Country</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="country" style="padding-top: 3px;" class="form-control sml-frm input-sm countries"  id="SelectCountry" >
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
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">State</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                    <select name="state" style="padding-top: 3px;" class="states form-control sml-frm input-sm" id="SelectStates" >
                                      <?php 
                                      if ($register2_id == '') { ?>

                                        <option value="">Select State</option>
                                      <?php }
                                      else { ?>
                                        <option value="<?php echo isset($data['state'])?$data['state']:''?>"><?php echo isset($data['state'])?$data['state']:''?></option>
                                      <?php } ?>
                                    </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">City</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="city" style="padding-top: 3px;" class="states form-control sml-frm input-sm" id="SelectCity" >
                                    <?php 
                                    if ($register2_id == '') { ?>

                                      <option value="">Select State</option>
                                    <?php }
                                    else { ?>
                                      <option value="<?php echo isset($data['city'])?$data['city']:''?>"><?php echo isset($data['city'])?$data['city']:''?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Education</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="education"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                    <option value="">Select education category</option>
                    
                                  <option value="BE / B.Tech." >BE / B.Tech.</option>
                                  <option value="Aeronautical Engineering"  >Aeronautical Engineering</option>
                                  <option value="B.Arch" >B.Arch</option>
                                  <option value="BCA">BCA</option>
                                  <option value="BE">BE</option>
                                  <option value="B.Plan" >B.Plan</option>
                                  <option value="B.Sc IT/ Computer Science" >B.Sc IT/ Computer Science</option>
                                  <option value="B.Tech.">B.Tech.</option>
                                  <option value="B.S.(Engineering)" >B.S.(Engineering)</option>
                                  <option value="Other Bachelor Degree in Engineering / Computers" >Other Bachelor Degree in Engineering / Computers</option>

                                  <option value="MCA / PGDCA">MCA / PGDCA</option>
                                  <option value="ME / M.Tech.">ME / M.Tech.</option>
                                  <option value="M.Arch.">M.Arch.</option>
                                  <option value="MCA">MCA</option>
                                  <option value="ME">ME</option>
                                  <option value="M.Sc. IT / Computer Science">M.Sc. IT / Computer Science</option>
                                  <option value="3">M.S.(Engg.)</option>
                                  <option value="M.S.(Engg.)">M.Tech.</option>
                                  <option value="PGDCA">PGDCA</option>
                                  <option value="Other Masters Degree in Engineering / Computers">Other Masters Degree in Engineering / Computers</option>

                                  <option value="Aviation Degree">Aviation Degree</option>
                                  <option value="B.A.">B.A.</option>
                                  <option value="B.Com.">B.Com.</option>
                                  <option value="B.Ed.">B.Ed.</option>
                                  <option value="BFA">BFA</option>
                                  <option value="BFT">BFT</option>
                                  <option value="BLIS">BLIS</option>
                                  <option value="B.M.M.">B.M.M.</option>
                                  <option value="B.Sc.">B.Sc.</option>
                                  <option value="B.S.W">B.S.W</option>
                                  <option value="B.Phil.">B.Phil.</option>
                                  <option value="Other Bachelor Degree in Arts / Science / Commerce">Other Bachelor Degree in Arts / Science / Commerce</option>

                                  <option value="M.A.">M.A.</option>
                                  <option value="MCom">MCom</option>
                                  <option value="M.Ed.">M.Ed.</option>
                                  <option value="MFA">MFA</option>
                                  <option value="MLIS">MLIS</option>
                                  <option value="M.Sc.">M.Sc.</option>
                                  <option value="MSW">MSW</option>
                                  <option value="M.Phil.">M.Phil.</option>
                                  <option value="Other Master Degree in Arts / Science / Commerce">Other Master Degree in Arts / Science / Commerce</option>

                                  <option value="BBA">BBA</option>
                                  <option value="BFM (Financial Management)">BFM (Financial Management)</option>
                                  <option value="BHM (Hotel Management)">BHM (Hotel Management)</option>
                                  <option value="BHA / BHM (Hospital Administration)">BHA / BHM (Hospital Administration)</option>
                                  <option value="Other Bachelor Degree in Management">Other Bachelor Degree in Management</option>

                                  <option value="MBA">MBA</option>
                                  <option value="MFM (Financial Management)">MFM (Financial Management)</option>
                                  <option value="MHM  (Hotel Management)">MHM  (Hotel Management)</option>
                                  <option value="MHRM (Human Resource Management)">MHRM (Human Resource Management)</option>
                                  <option value="PGDM">PGDM</option>
                                  <option value="MBA / PGDM">MBA / PGDM</option>
                                  <option value="MHA / MHM (Hospital Administration)">MHA / MHM (Hospital Administration)</option>
                                  <option value="Other Master Degree in Management">Other Master Degree in Management</option>

                                  <option value="B.A.M.S.">B.A.M.S.</option>
                                  <option value="BDS">BDS</option>
                                  <option value="BHMS">BHMS</option>
                                  <option value="BSMS">BSMS</option>
                                  <option value="BPharm">BPharm</option>
                                  <option value="BPT">BPT</option>
                                  <option value="BUMS">BUMS</option>
                                  <option value="BVSc">BVSc</option>
                                  <option value="MBBS">MBBS</option>
                                  <option value="B.Sc. Nursing">B.Sc. Nursing</option>
                                  <option value="Other Bachelor Degree in Medicine">Other Bachelor Degree in Medicine</option>

                                  <option value="MDS">MDS</option>
                                  <option value="MD / MS (Medical)">MD / MS (Medical)</option>
                                  <option value="M.Pharm">M.Pharm</option>
                                  <option value="MPT">MPT</option>
                                  <option value="MVSc">MVSc </option>
                                  <option value="Other Master Degree in Medicine">Other Master Degree in Medicine</option>

                                  <option value="BGL">BGL</option>
                                  <option value="B.L.">B.L.</option>
                                  <option value="LL.B.">LL.B.</option>
                                  <option value="BGL / B.L. / LL.B.">BGL / B.L. / LL.B.</option>
                                  <option value="Other Bachelor Degree in Legal">Other Bachelor Degree in Legal</option>

                                  <option value="LL.M.">LL.M.</option>
                                  <option value="M.L.">M.L.</option>
                                  <option value="M.L. / LL.M.">M.L. / LL.M.</option>
                                  <option value="Other Master Degree in  Legal">Other Master Degree in  Legal</option>

                                  <option value="CA">CA</option>
                                  <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial Analyst)</option>
                                  <option value="CS">CS</option>
                                  <option value="ICWA">ICWA</option>
                                  <option value="Other Degree in Finance">Other Degree in Finance</option>

                                  <option value="IAS">IAS</option>
                                  <option value="IES">IES</option>
                                  <option value="IFS">IFS</option>
                                  <option value="IRS">IRS</option>
                                  <option value="IPS">IPS</option>
                                  <option value="IAS / IPS/ IRS / IES / IFS">IAS / IPS/ IRS / IES / IFS</option>
                                  <option value="Other Degree in Service">Other Degree in Service</option>

                                  <option value="Ph.D.">Ph.D.</option>

                                  <option value="Diploma">Diploma</option>
                                  <option value="Polytechnic">Polytechnic</option>
                                  <option value="Trade School">Trade School</option>
                                  <option value="Others">Others</option>

                                  <option value="Higher Secondary School / High School">Higher Secondary School / High School</option>
          
                                </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                            <div class="col-sm-3 no-padding">
                                <label class="cflo">Employed In</label>
                                <label class="cflo" style="float: right;">:</label>
                            </div>
                            <div class="col-sm-7">
                               <!-- <input value="All"   type="radio" name="employed"> All &nbsp;&nbsp; <br> -->
                                <input value="Government"  type="radio" name="employed"> Goverment/PSU &nbsp;&nbsp;<br>
                                <input value="Private"  type="radio" name="employed"> Private &nbsp;&nbsp;<br>
                                <input value="Business"  type="radio" name="employed"> Business &nbsp;&nbsp;<br>
                                <input value="Self Employed"  type="radio" name="employed"> Self Employed &nbsp;&nbsp;<br>
                                <input value="Not Working"  type="radio" name="employed"> Not Working &nbsp;&nbsp;<br>
                            </div>
                            <div class="col-sm-1 no-padding">
                                <label class="cflo"></label>
                            </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Annual income</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="income"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="">Select Income</option>
                              <option value="0 - 1 Lakh" >0 - 1 Lakh</option>
                              <option value="1 - 2 Lakhs"  >1 - 2 Lakhs</option>
                              <option value="2 - 3 Lakhs"  >2 - 3 Lakhs</option>
                              <option value="3 - 4 Lakhs"  >3 - 4 Lakhs</option>
                              <option value="4 - 5 Lakhs"  >4 - 5 Lakhs</option>
                              <option value="5 - 6 Lakhs"  >5 - 6 Lakhs</option>
                              <option value="6 - 7 Lakhs"  >6 - 7 Lakhs</option>
                              <option value="7 - 8 Lakhs"  >7 - 8 Lakhs</option>
                              <option value="8 - 9 Lakhs"  >8 - 9 Lakhs</option>
                              <option value="9 - 10 Lakhs"  >9 - 10 Lakhs</option>
                              <option value="10 - 12 Lakhs"   >10 - 12 Lakhs</option>
                              <option value="12 - 14 Lakhs"   >12 - 14 Lakhs</option>
                              <option value="14 - 16 Lakhs"   >14 - 16 Lakhs</option>
                              <option value="16 - 18 Lakhs"   >16 - 18 Lakhs</option>
                              <option value="18 - 20 Lakhs"   >18 - 20 Lakhs</option>
                              <option value="20 - 25 Lakhs"   >20 - 25 Lakhs</option>
                              <option value="25 - 30 Lakhs"   >25 - 30 Lakhs</option>
                              <option value="30 - 35 Lakhs"   >30 - 35 Lakhs</option>
                              <option value="35 - 40 Lakhs"   >35 - 40 Lakhs</option>
                              <option value="40 - 45 Lakhs"   >40 - 45 Lakhs</option>
                              <option value="45 - 50 Lakhs"   >45 - 50 Lakhs</option>
                              <option value="50 - 60 Lakhs"   >50 - 60 Lakhs</option>
                              <option value="60 - 70 Lakhs"   >60 - 70 Lakhs</option>
                              <option value="70 - 80 Lakhs"   >70 - 80 Lakhs</option>
                              <option value="80 - 90 Lakhs"   >80 - 90 Lakhs</option>
                              <option value="90 Lakhs - 1 Crore" >90 Lakhs - 1 Crore</option>
                              <option value="1 Crore & Above">1 Crore & Above</option>
    
                            </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                            <div class="col-sm-3 no-padding">
                                <label class="cflo">Eating Habits</label>
                                <label class="cflo" style="float: right;">:</label>
                            </div>
                            <div class="col-sm-7">
                               <!-- <input value="Any"   type="radio" name="eating_habit"> Any &nbsp;&nbsp; -->
                                <input value="Vegetarian"  type="radio" name="eating_habit"> Vegetarian &nbsp;&nbsp;<br>
                                <input value="Non Vegetarian"  type="radio" name="eating_habit"> Non Vegetarian &nbsp;&nbsp;<br>
                                <input value="Eggetarian"  type="radio" name="eating_habit"> Eggetarian &nbsp;&nbsp;<br>
                            </div>
                            <div class="col-sm-1 no-padding">
                                <label class="cflo"></label>
                            </div>
                          </div>

                          <div class="row  to-fmid">
                            <div class="col-sm-3 no-padding">
                                <label class="cflo">Drinking</label>
                                <label class="cflo" style="float: right;">:</label>
                            </div>
                            <div class="col-sm-7">
                               <!-- <input value="Any"   type="radio" name="drinking_habit"> Any &nbsp;&nbsp; -->
                                <input value="Non drinker"  type="radio" name="drinking_habit"> Non drinker &nbsp;&nbsp;<br>
                                <input value="Light / Social drinker"  type="radio" name="drinking_habit"> Light / Social drinker &nbsp;&nbsp;<br>
                                <input value="Regular drinker"  type="radio" name="drinking_habit"> Regular drinker &nbsp;&nbsp;<br>
                            </div>
                            <div class="col-sm-1 no-padding">
                                <label class="cflo"></label>
                            </div>
                          </div>

                          <div class="row  to-fmid">
                            <div class="col-sm-3 no-padding">
                                <label class="cflo">Smoking</label>
                                <label class="cflo" style="float: right;">:</label>
                            </div>
                            <div class="col-sm-7">
                               <!-- <input value="Any"   type="radio" name="smoking_habit"> Any &nbsp;&nbsp; -->
                                <input value="Non smoker"  type="radio" name="smoking_habit"> Non smoker &nbsp;&nbsp;<br>
                                <input value="Light / Social smoker"  type="radio" name="smoking_habit"> Light / Social smoker &nbsp;&nbsp;<br>
                                <input value="Regular smoker"  type="radio" name="smoking_habit"> Regular drinker &nbsp;&nbsp;<br>
                            </div>
                            <div class="col-sm-1 no-padding">
                                <label class="cflo"></label>
                            </div>
                          </div>

                          <div class="row  to-fmid">
                            <div class="col-sm-3 no-padding">
                                <label class="cflo">Search using Keywords</label>
                                <label class="cflo" style="float: right;">:</label>
                            </div>
                            <div class="col-sm-7">
                               <input name="keywords"  type="text"  placeholder="Search using Keywords" class="form-control sml-frm input-sm" name="">
                            </div>
                            <div class="col-sm-1 no-padding">
                                <label class="cflo"></label>
                            </div>
                          </div>

                          <!-- <div class="row  to-fmid">
                            <div class="col-sm-3 no-padding">
                                <label class="cflo">Show Profile</label>
                                <label class="cflo" style="float: right;">:</label>
                            </div>
                            <div class="col-sm-7">
                               <input value="With Photo"   type="radio" name="gender"> With Photo &nbsp;&nbsp;
                                <input value="Online Right Now"  type="radio" name="gender"> Online Right Now &nbsp;&nbsp;<br>
                                <input value="Premium Members"  type="radio" name="gender"> Premium Members &nbsp;&nbsp;<br>
                                
                            </div>
                            <div class="col-sm-1 no-padding">
                                <label class="cflo"></label>
                            </div>
                          </div> -->

                          <div class="col-sm-12 wrapper" style="margin-bottom: 10px;">
                            <!-- <input type ="hidden" name = "search_type" id="search_type" value="Regular"> -->
                            <!-- <input type ="hidden" name = "marital_status" id="marital_status" value="">
                            <input type ="hidden" name = "physical_status" id="physical_status" value="">
                            <input type ="hidden" name = "employed" id="employed" value="">
                            <input type ="hidden" name = "eating_habit" id="eating_habit" value="">
                            <input type ="hidden" name = "drinking_habit" id="drinking_habit" value="">
                            <input type ="hidden" name = "smoking_habit" id="smoking_habit" value=""> -->
                            <input type ="hidden" name = "gender" id="gender" value="<?php echo($gender);?>">
                            <input type ="hidden" name = "new_gender" id="new_gender" value="<?php echo($new_gender);?>">
                            <input type ="hidden" name = "type" value="SearchProfileAdvance">
                            <button type="submit" id="submit" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Search</button>
                          </div>
                        </form>

                        </div>

                        <div class="w3-container " style="background-color: #ffffff">
                            <h4><strong>Search By ID</strong></h4>
                            <hr>
                            <div class="row  to-fmid">
                              <div class="col-sm-6 no-padding" style="margin-bottom: 10px;">
                                <input name="subcaste"  type="text"  placeholder="Enter Matrimony ID" class="form-control sml-frm input-sm" name="">
                              </div>
                              <div class="col-sm-4 " style="margin-bottom: 20px;">
                                <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                              </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-sm-12 city" id="Keyword Search" style="display:none;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong>Keyword Search</strong></h4>
                          <hr>
                          <form action="" id = "SearchProfileKey" method="post" enctype="multipart/form-data">
                            <p style="font-size: 12px;">Find profiles based on keywords. If you're looking for very specific results, try Keyword option in Advance Search Tab</p>
                            <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Search using Keywords</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                 <input name="keywords"  type="text"  placeholder="Search using Keywords" class="form-control sml-frm input-sm" name="">
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                            </div>
                          <!-- <input value="Show profiles with photo"   type="radio" name="gender"> Show profiles with photo &nbsp;&nbsp; -->
                          
                          <p style="font-size: 12px;" class="mediumtxt clr2 paddb5">Example 1: Hindu, Khatri, Female, 25/30 Yrs<br>Example 2: Pategar, Male, 25 Years, Good Looking</p>

                          <div class="col-sm-12 wrapper" style="margin-bottom: 10px;">
                            <input type ="hidden" name = "type" value="SearchProfileKey">
                            <!-- <input type ="hidden" name = "search_type" id="search_type" value="Regular"> -->
                            <!-- <input type ="hidden" name = "marital_status" id="marital_status" value=""> -->
                            <input type ="hidden" name = "gender" id="gender" value="<?php echo($gender);?>">
                            <input type ="hidden" name = "new_gender" id="new_gender" value="<?php echo($new_gender);?>">
                            <button type="submit" id="submit" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Search</button>
                            <!-- <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Search</button> -->
                          </div>
                        </form>

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