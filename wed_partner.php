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
  #owl-demo1 .item{
  margin: 15px;
}
#owl-demo1 .item img{
  display: block;
  width: 100%;
  height: auto;
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
    width: 216px;
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
                        <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'Mandap')">Mandap</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Stage Decoration')">Stage Decoration</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Bridal Makeup')">Bridal Makeup</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Marriage Hall')">Marriage Hall</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Photography')">Photography</button>
                      </div>
                    </div>
                    

                    <div class="col-sm-12 city" id="Mandap" style="display:block;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong>WHICH PLACE YOU REQUIRE THIS SERVICE</strong></h4>
                          <hr>
                          

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Name</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="text" placeholder="Enter Name" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Mobile Number</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="Number" min="0" placeholder="Enter Mobile Number" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Email ID</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="email" min="0" placeholder="Enter Email ID" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Country</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select Country</option>
                                      <option value="India">India</option>
                                      <option value="Bangladesh">Bangladesh</option>
                                      <option value="UAE">UAE</option>
                                      <option value="Nepal">Nepal</option>
            
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
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select State</option>
                                      <option value="Maharashtra">Maharashtra</option>
                                      <option value="Gujarat">Gujarat</option>
                                      <option value="Assam">Assam</option>
                                      <option value="Kerala">Kerala</option>
            
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
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select City</option>
                                      <option value="Mumbai">Mumbai</option>
                                      <option value="Pune">Pune</option>
                                      <option value="Kolkata">Kolkata</option>
                                      <option value="Jaipur">Jaipur</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Pin Code</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="text"  placeholder="Enter Pin Code" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          

                          <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
                            <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                          </div>

                        </div>

                        <!-- <div class="w3-container " style="background-color: #ffffff">
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
                        </div> -->


                    </div>

                    <div class="col-sm-12 city" id="Stage Decoration" style="display:none;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong>WHICH PLACE YOU REQUIRE THIS SERVICE</strong></h4>
                          <hr>
                          

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Name</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="text" placeholder="Enter Name" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Mobile Number</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="Number" min="0" placeholder="Enter Mobile Number" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Email ID</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="email" min="0" placeholder="Enter Email ID" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Country</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select Country</option>
                                      <option value="India">India</option>
                                      <option value="Bangladesh">Bangladesh</option>
                                      <option value="UAE">UAE</option>
                                      <option value="Nepal">Nepal</option>
            
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
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select State</option>
                                      <option value="Maharashtra">Maharashtra</option>
                                      <option value="Gujarat">Gujarat</option>
                                      <option value="Assam">Assam</option>
                                      <option value="Kerala">Kerala</option>
            
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
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select City</option>
                                      <option value="Mumbai">Mumbai</option>
                                      <option value="Pune">Pune</option>
                                      <option value="Kolkata">Kolkata</option>
                                      <option value="Jaipur">Jaipur</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Pin Code</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="text"  placeholder="Enter Pin Code" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          

                          <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
                            <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                          </div>

                        </div>

                        <!-- <div class="w3-container " style="background-color: #ffffff">
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
                        </div> -->


                    </div>

                    <div class="col-sm-12 city" id="Bridal Makeup" style="display:none;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong>WHICH PLACE YOU REQUIRE THIS SERVICE</strong></h4>
                          <hr>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Name</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="text" placeholder="Enter Name" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Mobile Number</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="Number" min="0" placeholder="Enter Mobile Number" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Email ID</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="email" min="0" placeholder="Enter Email ID" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Country</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select Country</option>
                                      <option value="India">India</option>
                                      <option value="Bangladesh">Bangladesh</option>
                                      <option value="UAE">UAE</option>
                                      <option value="Nepal">Nepal</option>
            
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
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select State</option>
                                      <option value="Maharashtra">Maharashtra</option>
                                      <option value="Gujarat">Gujarat</option>
                                      <option value="Assam">Assam</option>
                                      <option value="Kerala">Kerala</option>
            
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
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select City</option>
                                      <option value="Mumbai">Mumbai</option>
                                      <option value="Pune">Pune</option>
                                      <option value="Kolkata">Kolkata</option>
                                      <option value="Jaipur">Jaipur</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Pin Code</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="text"  placeholder="Enter Pin Code" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          

                          <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
                            <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                          </div>

                        </div>

                        <!-- <div class="w3-container " style="background-color: #ffffff">
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
                        </div> -->

                    </div>

                    <div class="col-sm-12 city" id="Marriage Hall" style="display:none;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong>WHICH PLACE YOU REQUIRE THIS SERVICE</strong></h4>
                          <hr>
                          
                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Name</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="text" placeholder="Enter Name" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Mobile Number</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="Number" min="0" placeholder="Enter Mobile Number" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Email ID</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="email" min="0" placeholder="Enter Email ID" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Country</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select Country</option>
                                      <option value="India">India</option>
                                      <option value="Bangladesh">Bangladesh</option>
                                      <option value="UAE">UAE</option>
                                      <option value="Nepal">Nepal</option>
            
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
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select State</option>
                                      <option value="Maharashtra">Maharashtra</option>
                                      <option value="Gujarat">Gujarat</option>
                                      <option value="Assam">Assam</option>
                                      <option value="Kerala">Kerala</option>
            
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
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select City</option>
                                      <option value="Mumbai">Mumbai</option>
                                      <option value="Pune">Pune</option>
                                      <option value="Kolkata">Kolkata</option>
                                      <option value="Jaipur">Jaipur</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Pin Code</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="text"  placeholder="Enter Pin Code" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          

                          <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
                            <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                          </div>

                        </div>

                        <!-- <div class="w3-container " style="background-color: #ffffff">
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
                        </div> -->

                    </div>

                    <div class="col-sm-12 city" id="Photography" style="display:none;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong>WHICH PLACE YOU REQUIRE THIS SERVICE</strong></h4>
                          <hr>
                          
                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Name</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="text" placeholder="Enter Name" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Mobile Number</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="Number" min="0" placeholder="Enter Mobile Number" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Email ID</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="email" min="0" placeholder="Enter Email ID" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Country</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select Country</option>
                                      <option value="India">India</option>
                                      <option value="Bangladesh">Bangladesh</option>
                                      <option value="UAE">UAE</option>
                                      <option value="Nepal">Nepal</option>
            
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
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select State</option>
                                      <option value="Maharashtra">Maharashtra</option>
                                      <option value="Gujarat">Gujarat</option>
                                      <option value="Assam">Assam</option>
                                      <option value="Kerala">Kerala</option>
            
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
                                  <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <option value="">Select City</option>
                                      <option value="Mumbai">Mumbai</option>
                                      <option value="Pune">Pune</option>
                                      <option value="Kolkata">Kolkata</option>
                                      <option value="Jaipur">Jaipur</option>
            
                                  </select>
                              </div>
                              <div class="col-sm-1 no-padding">
                                  <label class="cflo"></label>
                              </div>
                          </div>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Pin Code</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <input name="subcaste"  type="text"  placeholder="Enter Pin Code" class="form-control sml-frm input-sm" name="">
                              </div>
                              
                          </div>

                          

                          <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
                            <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                          </div>

                        </div>

                        <!-- <div class="w3-container " style="background-color: #ffffff">
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
                        </div> -->

                    </div>

                </div>

              </div>
            </div>

    <div class="col-sm-12 ">
    
        <div id="owl-demo1" class="owl-carousel owl-theme " style="opacity: 1; display: block;">
            <div class="item">
              <img src="assets/images/img1.jpg" alt="Owl Image" style="width: 100%">
                <div class="owl-featured-detail" style="text-align:center !important;"><br>
                </div>
            </div>

       
            <div class="item">
              <img src="assets/images/img1.jpg" alt="Owl Image" style="width: 100%">
                <div class="owl-featured-detail" style="text-align:center !important;"><br>
                </div>
            </div>

            <div class="item">
              <img src="assets/images/img1.jpg" alt="Owl Image" style="width: 100%">
                <div class="owl-featured-detail" style="text-align:center !important;"><br>
                </div>
            </div>

            <div class="item">
              <img src="assets/images/img1.jpg" alt="Owl Image" style="width: 100%">
                <div class="owl-featured-detail" style="text-align:center !important;"><br>
                </div>
            </div>
 
        </div>
    </div>

            <div class="col-sm-12">
                <div  class="w3-container ">
                  <h4><strong>Advertise your business Here</strong></h4>
                  <hr>
                  

                  <div class="row  to-fmid">
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Name</label>
                          <label class="cflo" style="float: right;">:</label>
                      </div>
                      <div class="col-sm-7">
                          <input name="subcaste"  type="text" placeholder="Enter Name" class="form-control sml-frm input-sm" name="">
                      </div>
                      
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Mobile Number</label>
                          <label class="cflo" style="float: right;">:</label>
                      </div>
                      <div class="col-sm-7">
                          <input name="subcaste"  type="Number" min="0" placeholder="Enter Mobile Number" class="form-control sml-frm input-sm" name="">
                      </div>
                      
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Email ID</label>
                          <label class="cflo" style="float: right;">:</label>
                      </div>
                      <div class="col-sm-7">
                          <input name="subcaste"  type="email" min="0" placeholder="Enter Email ID" class="form-control sml-frm input-sm" name="">
                      </div>
                      
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Country</label>
                          <label class="cflo" style="float: right;">:</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="">Select Country</option>
                              <option value="India">India</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="UAE">UAE</option>
                              <option value="Nepal">Nepal</option>

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
                          <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="">Select State</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Gujarat">Gujarat</option>
                              <option value="Assam">Assam</option>
                              <option value="Kerala">Kerala</option>

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
                          <select name="createdby"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="">Select City</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="Pune">Pune</option>
                              <option value="Kolkata">Kolkata</option>
                              <option value="Jaipur">Jaipur</option>

                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Pin Code</label>
                          <label class="cflo" style="float: right;">:</label>
                      </div>
                      <div class="col-sm-7">
                          <input name="subcaste"  type="text"  placeholder="Enter Pin Code" class="form-control sml-frm input-sm" name="">
                      </div>
                      
                  </div>

                  

                  <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
                    <button class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                  </div>

                </div>

                <!-- <div class="w3-container " style="background-color: #ffffff">
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
                </div> -->


            </div>

        </div>

    </div>
</section>
<?php include("footer.php"); ?>
<script  src="index.js"></script>
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

<script>
    jQuery(document).ready(function($){
  $(document).ready(function() {
 
  $("#owl-demo1").owlCarousel({
 
      autoPlay: 5000, //Set AutoPlay to 3 seconds
      navigation :true,
      items : 3,
      responsive:true,
      pagination:true,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});

  });

</script>