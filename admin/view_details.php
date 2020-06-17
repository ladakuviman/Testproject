<?php include("header.php");
   if(isset($_GET['id']) && !empty($_GET['id'])){
        $u_id = $_GET['id'];
        $register = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
        $register1 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register1` WHERE `u_id` = '$u_id'"));
        $register2 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register2` WHERE `u_id` = '$u_id'"));
        $register3 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register3` WHERE `u_id` = '$u_id'"));
        $register4 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register4` WHERE `u_id` = '$u_id'"));
        $register5 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register5` WHERE `u_id` = '$u_id'"));
        $add_photo = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `add_photo` WHERE `u_id` = '$u_id'"));
        $basic_details = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `basic_details` WHERE `u_id` = '$u_id'"));
        $personal_details = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `personal_details` WHERE `u_id` = '$u_id'"));
    }
 ?>
<section id="middle">
    
    <header id="page-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <h1>Add Package Details</h1>
    </header>
    <div id="content" class="dashboard padding-20">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><!--<?php echo isset($data['dashboard_id'])?'Dashboard':'Dashboard';?>-->Add Package Details</h2>
            </div>
            <div class="panel-body">
                <form action="" id = "AddDetails" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Created by</label>
                                    <input type="text"  placeholder = "Created by" class = "form-control" name = "" id = "" title = "Created by"   value="<?php echo isset($register['created_by'])?$register['created_by']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Full Name</label>
                                    <input type="text"  placeholder = "Full Name" class = "form-control" name = "pack_month" id = "pack_month" title = "Full Name"   value="<?php echo $register['b_year'].' '.$register['father_name'].' '.$register['surname'];?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Mobile No</label>
                                    <input type="text"  placeholder = "Mobile No" class = "form-control" name = "" id = "" title = "Mobile No"   value="<?php echo isset($register['mobile'])?$register['mobile']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Email</label>
                                    <input type="text"  placeholder = "Email" class = "form-control" name = "pack_month" id = "pack_month" title = "Email"   value="<?php echo isset($register['email'])?$register['email']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>DOB</label>
                                    <input type="text"  placeholder = "DOB" class = "form-control" name = "" id = "" title = "DOB"   value="<?php echo $register1['b_year'].' - '.$register1['b_month'].' - '.$register1['b_day'];?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Gender</label>
                                    <input type="text"  placeholder = "Gender" class = "form-control" name = "pack_month" id = "pack_month" title = "Gender"   value="<?php echo isset($register1['gender'])?$register1['gender']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Religion</label>
                                    <input type="text"  placeholder = "Religion" class = "form-control" name = "" id = "" title = "Religion"   value="<?php echo isset($register1['religion'])?$register1['religion']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Mother Tongue</label>
                                    <input type="text"  placeholder = "Mother Tongue" class = "form-control" name = "pack_month" id = "pack_month" title = "Mother Tongue"   value="<?php echo isset($register1['mother_tongue'])?$register1['mother_tongue']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Caste</label>
                                    <input type="text"  placeholder = "Caste" class = "form-control" name = "" id = "" title = "Caste"   value="<?php echo isset($register1['religion'])?$register1['religion']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Gotra</label>
                                    <input type="text"  placeholder = "Gotra" class = "form-control" name = "pack_month" id = "pack_month" title = "Gotra"   value="<?php echo isset($register1['mother_tongue'])?$register1['mother_tongue']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Dosh</label>
                                    <input type="text"  placeholder = "Dosh" class = "form-control" name = "" id = "" title = "Dosh"   value="<?php echo isset($register2['dosh'])?$register2['dosh']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Country</label>
                                    <input type="text"  placeholder = "Country" class = "form-control" name = "pack_month" id = "pack_month" title = "Country"   value="<?php echo isset($register2['country'])?$register2['country']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>State</label>
                                    <input type="text"  placeholder = "State" class = "form-control" name = "" id = "" title = "State"   value="<?php echo isset($register2['state'])?$register2['state']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>City</label>
                                    <input type="text"  placeholder = "City" class = "form-control" name = "pack_month" id = "pack_month" title = "City"   value="<?php echo isset($register2['city'])?$register2['city']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Pincode</label>
                                    <input type="text"  placeholder = "Pincode" class = "form-control" name = "" id = "" title = "Pincode"   value="<?php echo isset($register2['pincode'])?$register2['pincode']:''?>" readonly>  
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Marital Status</label>
                                    <input type="text"  placeholder = "Marital Status" class = "form-control" name = "" id = "" title = "Marital Status"   value="<?php echo isset($register3['marital_status'])?$register3['marital_status']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Height</label>
                                    <input type="text"  placeholder = "Height" class = "form-control" name = "pack_month" id = "pack_month" title = "Height"   value="<?php echo isset($register3['height'])?$register3['height']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Family Status</label>
                                    <input type="text"  placeholder = "Family Status" class = "form-control" name = "" id = "" title = "Family Status"   value="<?php echo isset($register3['family_status'])?$register3['family_status']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Family Type</label>
                                    <input type="text"  placeholder = "Family Type" class = "form-control" name = "pack_month" id = "pack_month" title = "Family Type"   value="<?php echo isset($register3['family_type'])?$register3['family_type']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Family Values</label>
                                    <input type="text"  placeholder = "Family Values" class = "form-control" name = "" id = "" title = "Family Values"   value="<?php echo isset($register3['family_values'])?$register3['family_values']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Any Disability</label>
                                    <input type="text"  placeholder = "Any Disability" class = "form-control" name = "pack_month" id = "pack_month" title = "Any Disability"   value="<?php echo isset($register3['disability'])?$register3['disability']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Disability Name</label>
                                    <input type="text"  placeholder = "Disability Name" class = "form-control" name = "" id = "" title = "Disability Name"   value="<?php echo isset($register3['disability_name'])?$register3['disability_name']:''?>" readonly>  
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Highest Education</label>
                                    <input type="text"  placeholder = "Highest Education" class = "form-control" name = "" id = "" title = "Highest Education"   value="<?php echo isset($register4['education'])?$register4['education']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Employed in</label>
                                    <input type="text"  placeholder = "Employed in" class = "form-control" name = "pack_month" id = "pack_month" title = "Employed in"   value="<?php echo isset($register4['employed'])?$register4['employed']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Occupation</label>
                                    <input type="text"  placeholder = "Occupation" class = "form-control" name = "" id = "" title = "Occupation"   value="<?php echo isset($register4['occupation'])?$register4['occupation']:''?>" readonly>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Annual Income</label>
                                    <input type="text"  placeholder = "Annual Income" class = "form-control" name = "pack_month" id = "pack_month" title = "Annual Income"   value="<?php echo isset($register4['income'])?$register4['income']:''?>" readonly>  
                                </div>
                                                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>About you</label>
                                    <input type="text"  placeholder = "About you" class = "form-control" name = "" id = "" title = "About you"   value="<?php echo isset($register5['about'])?$register5['about']:''?>" readonly>  
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>


<?php include("footer.php"); ?>
