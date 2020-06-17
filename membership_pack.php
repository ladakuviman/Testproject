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
    width: 270px;
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
        <div class="row" style="margin-bottom: 40px;">

            <div class="col-sm-12  " style="margin-top: 25px;">
               <!-- <h3><strong>Profile Setting</strong></h3> -->
            </div>
            

            <div class="col-sm-12 ">
              <div style="color:#535353; font-size:13px;" class="reg-box">
                  
                  <div class="row  to-fmid" >
                    <div class="col-sm-12 ">
                      <div class="w3-bar w3-black">
                        <?php 
                            $q1 = mysqli_query($db,"SELECT t1.* from `pack` t1 ORDER BY t1.`pack_id` ASC");
                            while($data = mysqli_fetch_assoc($q1))
                            { 
                                
                        ?>
                        <button class="w3-bar-item w3-button tablink " onclick="openCity(event,'<?php echo $data['pack_name']; ?>')"><?php echo $data['pack_name']; ?></button>
                        <!-- <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Diamond')">Diamond</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Platinum')">Platinum</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Personalised')">Personalised</button> -->
                        <?php } ?>
                      </div>
                    </div>
                    
                      <?php 
                        $q11 = mysqli_query($db,"SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t1.pack_id = '1'");
                        $data1 = mysqli_fetch_assoc($q11);
                      ?>
                      <div class="col-sm-12 city" id="<?php echo $data1['pack_name']; ?>" style="display:block;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong><?php echo $data1['pack_name']; ?></strong></h4>
                          <hr>
                          

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Month</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="createdby" id="pack_type" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                        <?php
                                            $selectpck2 = "SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t1.pack_id = '1'";
                                            $sql2 = mysqli_query($db, $selectpck2);
                                        while ($row2 = mysqli_fetch_array($sql2)) {
                                            //$selected2 = (isset($data['pack_id']) && $row2['pack_id'] == $data['pack_id'])?'selected':'';
                                        ?>
                                        <option value="<?php echo $row2['pack_month'] ;?>"><?php echo $row2['pack_month'] ;?></option>

                                    <?php } ?>
                                      <!-- <option value="3_month_gold">3 Month</option>
                                      <option value="6_month_gold">6 Month</option>
                                      <option value="1_year_gold">1 Year</option> -->
                                  </select>
                              </div>
                              
                          </div>

                          <div id="select_div">

                            <div class="row  to-fmid">
                                <div class="col-sm-3 no-padding">
                                    <label class="cflo">Price</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div>
                                <div class="col-sm-7">
                                    <p>Rs. <?php echo $data1['pack_price']; ?></p>
                                </div>
                                
                            </div>

                            <div class="row  to-fmid">
                                <!-- <div class="col-sm-3 no-padding">
                                    <label class="cflo">Feature 1</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div> -->
                                <div class="col-sm-12 no-padding">
                                    <p><?php echo $data1['description']; ?></p>
                                </div>
                                
                            </div>

                            <!-- <div class="row  to-fmid">
                                <div class="col-sm-3 no-padding">
                                    <label class="cflo">Feature 2</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div>
                                <div class="col-sm-7">
                                    <p>Access 40 Social platform accounts.</p>
                                </div>
                                
                            </div>

                            <div class="row  to-fmid">
                                <div class="col-sm-3 no-padding">
                                    <label class="cflo">Feature 3</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div>
                                <div class="col-sm-7">
                                    <p>Paid Gold member tag to ensure more responses.</p>
                                </div>
                                
                            </div>

                            <div class="row  to-fmid">
                                <div class="col-sm-3 no-padding">
                                    <label class="cflo">Feature 4</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div>
                                <div class="col-sm-7">
                                    <p>Get 40 free profile matches.</p>
                                </div>
                                
                            </div>

                            <div class="row  to-fmid">
                                <div class="col-sm-3 no-padding">
                                    <label class="cflo">Feature 5</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div>
                                <div class="col-sm-7">
                                    <p>Get featured highered in search result.</p>
                                </div>
                                
                            </div> -->

                            <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
                              <a href="checkout.php?id=<?php echo $data1['detail_id']; ?>" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Make Payment</a >
                            </div>

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

                    <?php 
                        $q12 = mysqli_query($db,"SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t1.pack_id = '2'");
                        $data2 = mysqli_fetch_assoc($q12);
                      ?>
                    <div class="col-sm-12 city" id="<?php echo $data2['pack_name']; ?>" style="display:none;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong><?php echo $data2['pack_name']; ?></strong></h4>
                          <hr>
                          

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Month</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="createdby" id="pack_type1" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                        <?php
                                            $selectpck2 = "SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t1.pack_id = '2'";
                                            $sql2 = mysqli_query($db, $selectpck2);
                                        while ($row2 = mysqli_fetch_array($sql2)) {
                                            //$selected2 = (isset($data['pack_id']) && $row2['pack_id'] == $data['pack_id'])?'selected':'';
                                        ?>
                                        <option value="<?php echo $row2['pack_month'] ;?>"><?php echo $row2['pack_month'] ;?></option>

                                    <?php } ?>
                                  </select>
                              </div>
                              
                          </div>

                          <div id="select_div1">

                            <div class="row  to-fmid">
                                <div class="col-sm-3 no-padding">
                                    <label class="cflo">Price</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div>
                                <div class="col-sm-7">
                                    <p>Rs. <?php echo $data2['pack_price']; ?></p>
                                </div>
                                
                            </div>

                            <div class="row  to-fmid">
                                <!-- <div class="col-sm-3 no-padding">
                                    <label class="cflo">Feature 1</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div> -->
                                <div class="col-sm-12 no-padding">
                                    <p><?php echo $data2['description']; ?></p>
                                </div>
                                
                            </div>

                            <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
                              <a href="checkout.php?id=<?php echo $data2['detail_id']; ?>" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Make Payment</a>
                            </div>

                          </div>

                        </div>


                    </div>

                    <?php 
                        $q13 = mysqli_query($db,"SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t1.pack_id = '3'");
                        $data3 = mysqli_fetch_assoc($q13);
                      ?>
                    <div class="col-sm-12 city" id="<?php echo $data3['pack_name']; ?>" style="display:none;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong><?php echo $data3['pack_name']; ?></strong></h4>
                          <hr>

                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Month</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="createdby" id="pack_type2" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <?php
                                            $selectpck2 = "SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t1.pack_id = '3'";
                                            $sql2 = mysqli_query($db, $selectpck2);
                                        while ($row2 = mysqli_fetch_array($sql2)) {
                                            //$selected2 = (isset($data['pack_id']) && $row2['pack_id'] == $data['pack_id'])?'selected':'';
                                        ?>
                                        <option value="<?php echo $row2['pack_month'] ;?>"><?php echo $row2['pack_month'] ;?></option>

                                    <?php } ?>
                                  </select>
                              </div>
                              
                          </div>

                          <div id="select_div2">

                            <div class="row  to-fmid">
                                <div class="col-sm-3 no-padding">
                                    <label class="cflo">Price</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div>
                                <div class="col-sm-7">
                                    <p>Rs. <?php echo $data3['pack_price']; ?></p>
                                </div>
                                
                            </div>

                            <div class="row  to-fmid">
                                <!-- <div class="col-sm-3 no-padding">
                                    <label class="cflo">Feature 1</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div> -->
                                <div class="col-sm-12 no-padding">
                                    <p><?php echo $data3['description']; ?></p>
                                </div>
                                
                            </div>

                            <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
                              <a href="checkout.php?id=<?php echo $data3['detail_id']; ?>" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Make Payment</a>
                            </div>

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
                                <a class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</a>
                              </div>
                            </div>
                        </div> -->

                    </div>

                    <?php 
                        $q14 = mysqli_query($db,"SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t1.pack_id = '4'");
                        $data4 = mysqli_fetch_assoc($q14);
                      ?>
                    <div class="col-sm-12 city" id="<?php echo $data4['pack_name']; ?>" style="display:none;border: 1px solid #e7e7e7;margin-top: 20px;">
                        <div  class="w3-container " style="background-color: #ffffff">
                          <h4><strong><?php echo $data4['pack_name']; ?></strong></h4>
                          <hr>
                          
                          <div class="row  to-fmid">
                              <div class="col-sm-3 no-padding">
                                  <label class="cflo">Month</label>
                                  <label class="cflo" style="float: right;">:</label>
                              </div>
                              <div class="col-sm-7">
                                  <select name="createdby" id="pack_type3" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                      <?php
                                            $selectpck2 = "SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t1.pack_id = '4'";
                                            $sql2 = mysqli_query($db, $selectpck2);
                                        while ($row2 = mysqli_fetch_array($sql2)) {
                                            //$selected2 = (isset($data['pack_id']) && $row2['pack_id'] == $data['pack_id'])?'selected':'';
                                        ?>
                                        <option value="<?php echo $row2['pack_month'] ;?>"><?php echo $row2['pack_month'] ;?></option>

                                    <?php } ?>
                                  </select>
                              </div>
                              
                          </div>

                          <div id="select_div3">

                            <div class="row  to-fmid">
                                <div class="col-sm-3 no-padding">
                                    <label class="cflo">Price</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div>
                                <div class="col-sm-7">
                                    <p>Rs. <?php echo $data4['pack_price']; ?></p>
                                </div>
                                
                            </div>

                            <div class="row  to-fmid">
                                <!-- <div class="col-sm-3 no-padding">
                                    <label class="cflo">Feature 1</label>
                                    <label class="cflo" style="float: right;">:</label>
                                </div> -->
                                <div class="col-sm-12 no-padding">
                                    <p><?php echo $data4['description']; ?></p>
                                </div>
                                
                            </div>

                            <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
                              <a href="checkout.php?id=<?php echo $data4['detail_id']; ?>" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Make Payment</a>
                            </div>

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
                                <a class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</a>
                              </div>
                            </div>
                        </div> -->

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

