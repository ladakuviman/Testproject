<?php
session_start();
//Include database
include '../db_config.php';


/*******************************Vishal Code***********************************/




/*
 * AddRegister
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddRegister")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['date']=date("Y-m-d H:i:s");
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $delrecord = mysqli_query($db,"SELECT * FROM `register` WHERE `email` = '$email' OR `mobile` = '$mobile'");
    $c = mysqli_num_rows($delrecord);
    if($c > 0){
        $message = "User Already Registered With Us";
    }
    else 
    { 
        $sql_str = "";
        foreach ($_POST as $key => $value) {
            if(is_array($value))
            {
                $value=implode(',', $value);
            }
            $value=mysqli_real_escape_string($db,$value);
            $sql_str .= "`$key`='$value',";
        }
        if(!empty($sql_str)){
            $sql_str = rtrim($sql_str,',');
        }
              
        $sql = "INSERT INTO register SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Registered Successfully";
            $success = true;

                // $to = $_POST['email'];
                // $full_name = $_POST['full_name'];
                // $surname = $_POST['surname'];
                // $password = $_POST['password'];
                // $subject = "Account Has Been Created";
                // $body="
                //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
                //     <br>
                //     <p> Your Account Has Been Created.</p>
                //     <p> Email : $to </p>
                //     <p> Name : $full_name </p>
                //     <p> Surname : $surname </p>
                //     <p> Password : $password </p>
                //     <br>
                //     <p>Thank You</p>
                // ";
                // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

            $_SESSION['u_id'] = $appt_id;
        }
        else{
            $message = "Problem occure while Registering.";
        }
    }
        
    echo json_encode(array(
        "success"=>$success,
        "message" => $message
    ));
}


/*
 * AddRegister1
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddRegister1")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $_POST['date'] = date("Y-m-d H:i:s");
    $_POST['birth_month'] = $_POST['b_year'].'-'.$_POST['b_month'].'-'.$_POST['b_day'];
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }

    if(!empty($register1_id))
    {
        $sql = "UPDATE register1 SET $sql_str WHERE register1_id='$register1_id'";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $success = true;
            $message = "Updated Successfully";
            $url = 'main.php';
        }
        else{
            $message = "Problem occure while saving.";
        }
    }

    else 
    {
          
        $sql = "INSERT INTO register1 SET $sql_str";

        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Details Successfully Added";
            $success = true;
            $url = 'register2.php';
            // $u_id = $_SESSION['u_id'];
            // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
            // $to = $delrecord981['email'];
            // $full_name = $delrecord981['full_name'];
            // $surname = $delrecord981['surname'];
            // $gender = $_POST['gender'];
            // $religion = $_POST['religion'];
            // $subject = "Details Added Successfully";
            // $body="
            //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
            //     <br>
            //     <p> Your Details Added Successfully.</p>
            //     <p> Gender : $gender </p>
            //     <p> Religion : $religion </p>
            //     <br>
            //     <p>Thank You</p>
            // ";
            // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

        }
        else{
            $message = "Problem occure while Adding.";
        }
    }
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}


if(isset($_POST["type"]) && $_POST["type"] == "SelectCountry")
{
    $success = false;
    $message = "";
    $delrecord = "";
    $country = $_POST['country'];
    $sql01 = mysqli_query($db,"SELECT t1.id, t1.name FROM states t1 join countries t2 on t1.country_id = t2.id  WHERE t2.name='$country'");
    if($sql01)
    {
        $success = true;
        while($r01 = mysqli_fetch_array($sql01))
        {

        $data = $r01['name'];
        echo '<option value="'.$data.'">'.$data.'</option>';

        }
    }
    else
    {   $success = true;

    }

    

    echo json_encode(array(
        "success"=>$success
    ));
}


if(isset($_POST["type"]) && $_POST["type"] == "SelectStates")
{
    $success = false;
    $message = "";
    $delrecord = "";
    $state = $_POST['state'];
    $sql01 = mysqli_query($db,"SELECT t1.id, t1.name FROM cities t1 join states t2 on t1.state_id = t2.id WHERE t2.name='$state'");
    if($sql01)
    {
        $success = true;
        while($r01 = mysqli_fetch_array($sql01))
        {

        $data = $r01['name'];
        echo '<option value="'.$data.'">'.$data.'</option>';

        }
    }
    else
    {   $success = true;

    }

    

    echo json_encode(array(
        
        "success"=>$success
    ));
}


/*
 * AddRegister2
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddRegister2")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $_POST['date']=date("Y-m-d H:i:s");
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }

    if(!empty($register2_id))
    {
        $sql = "UPDATE register2 SET $sql_str WHERE register2_id='$register2_id'";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $success = true;
            $message = "Updated Successfully";
            $url = 'main.php';
        }
        else{
            $message = "Problem occure while saving.";
        }
    }

    else 
    {
          
        $sql = "INSERT INTO register2 SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Details Successfully Added";
            $success = true;
            $url = 'register3.php';
            // $u_id = $_SESSION['u_id'];
            // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
            // $to = $delrecord981['email'];
            // $full_name = $delrecord981['full_name'];
            // $surname = $delrecord981['surname'];
            // $gender = $_POST['gender'];
            // $religion = $_POST['religion'];
            // $subject = "Details Added Successfully";
            // $body="
            //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
            //     <br>
            //     <p> Your Details Added Successfully.</p>
            //     <p> Gender : $gender </p>
            //     <p> Religion : $religion </p>
            //     <br>
            //     <p>Thank You</p>
            // ";
            // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

        }
        else{
            $message = "Problem occure while Adding.";
        }
    }
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}


/*
 * AddRegister3
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddRegister3")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $_POST['date']=date("Y-m-d H:i:s");
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }

    if(!empty($register3_id))
    {
        $sql = "UPDATE register3 SET $sql_str WHERE register3_id='$register3_id'";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $success = true;
            $message = "Updated Successfully";
            $url = 'main.php';
        }
        else{
            $message = "Problem occure while saving.";
        }
    }

    else 
    {
          
        $sql = "INSERT INTO register3 SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Details Successfully Added";
            $success = true;
            $url = 'register4.php';
            // $u_id = $_SESSION['u_id'];
            // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
            // $to = $delrecord981['email'];
            // $full_name = $delrecord981['full_name'];
            // $surname = $delrecord981['surname'];
            // $gender = $_POST['gender'];
            // $religion = $_POST['religion'];
            // $subject = "Details Added Successfully";
            // $body="
            //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
            //     <br>
            //     <p> Your Details Added Successfully.</p>
            //     <p> Gender : $gender </p>
            //     <p> Religion : $religion </p>
            //     <br>
            //     <p>Thank You</p>
            // ";
            // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

        }
        else{
            $message = "Problem occure while Adding.";
        }
    }
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}


/*
 * AddRegister4
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddRegister4")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $_POST['date']=date("Y-m-d H:i:s");
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }

    if(!empty($register4_id))
    {
        $sql = "UPDATE register4 SET $sql_str WHERE register4_id='$register4_id'";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $success = true;
            $message = "Updated Successfully";
            $url = 'main.php';
        }
        else{
            $message = "Problem occure while saving.";
        }
    }

    else 
    {
          
        $sql = "INSERT INTO register4 SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Details Successfully Added";
            $success = true;
            $url = 'register5.php';
            // $u_id = $_SESSION['u_id'];
            // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
            // $to = $delrecord981['email'];
            // $full_name = $delrecord981['full_name'];
            // $surname = $delrecord981['surname'];
            // $gender = $_POST['gender'];
            // $religion = $_POST['religion'];
            // $subject = "Details Added Successfully";
            // $body="
            //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
            //     <br>
            //     <p> Your Details Added Successfully.</p>
            //     <p> Gender : $gender </p>
            //     <p> Religion : $religion </p>
            //     <br>
            //     <p>Thank You</p>
            // ";
            // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

        }
        else{
            $message = "Problem occure while Adding.";
        }
    }
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}





/*
 * AddRegister5
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddRegister5")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $_POST['date']=date("Y-m-d H:i:s");
    $six_digit_random_number = mt_rand(100000, 999999);
    $_POST['otp'] = $six_digit_random_number;
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }
    
    if(!empty($register5_id))
    {
        $sql = "UPDATE register5 SET `about` = '$about' WHERE register5_id='$register5_id'";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $success = true;
            $message = "Updated Successfully";
            $url = 'main.php';
        }
        else{
            $message = "Problem occure while saving.";
        }
    }

    else 
    {

        $sql = "INSERT INTO register5 SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Details Successfully Added";
            $success = true;
            $url = 'register6.php';

            // $u_id = $_SESSION['u_id'];
            // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
            // $to = $delrecord981['email'];
            // $full_name = $delrecord981['full_name'];
            // $surname = $delrecord981['surname'];
            // $gender = $_POST['gender'];
            // $religion = $_POST['religion'];
            // $subject = "Details Added Successfully";
            // $body="
            //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
            //     <br>
            //     <p> Your Details Added Successfully.</p>
            //     <p> Gender : $gender </p>
            //     <p> Religion : $religion </p>
            //     <br>
            //     <p>Thank You</p>
            // ";
            // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

        }
        else{
            $message = "Problem occure while Adding.";
        }
    }
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}


/*
 * EditNumber
 */
if(isset($_POST["type"]) && $_POST["type"] == "EditNumber")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    unset($_POST['type']);
    
    $six_digit_random_number = mt_rand(100000, 999999);
    
    if(!empty($u_id))
    {
        $sql = "UPDATE register SET `mobile` = '$mobile' WHERE u_id = '$u_id'";

        $sql1 = "UPDATE register5 SET `otp` = '$six_digit_random_number' , `status` = '0' WHERE u_id = '$u_id'";

        $query = mysqli_query($db,$sql) or die(mysqli_error($db));

        $query1 = mysqli_query($db,$sql1) or die(mysqli_error($db));
        if($query && $query1){

            $message = "OTP Sent Successfully";
            $success = true;
            // $u_id = $_SESSION['u_id'];
            // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
            // $to = $delrecord981['email'];
            // $full_name = $delrecord981['full_name'];
            // $surname = $delrecord981['surname'];
            // $gender = $_POST['gender'];
            // $religion = $_POST['religion'];
            // $subject = "Details Added Successfully";
            // $body="
            //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
            //     <br>
            //     <p> Your Details Added Successfully.</p>
            //     <p> Gender : $gender </p>
            //     <p> Religion : $religion </p>
            //     <br>
            //     <p>Thank You</p>
            // ";
            // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );
            //$url = 'main.php';
        }
        else{
            $message = "Problem occure while saving.";
        }
    }

        
    echo json_encode(array(
        "success"=>$success,
        //"url"=>$url,
        "message" => $message
    ));
}


/*
 * AddRegister6
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddRegister6")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }
    
    $u_id = $_SESSION['u_id'];
    $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register5` WHERE `u_id` = '$u_id'"));
    $otp = $delrecord981['otp'];

    if ($otp == $_POST['otp']) 
    {
        $delrecord = mysqli_query($db,"SELECT * FROM `register5` WHERE `u_id` = '$u_id' AND `status` = '1'");
        $c = mysqli_num_rows($delrecord);
        if($c > 0){
            $message = "Mobile Number Already Verified.";
            $url = "add_photo.php";
            $success = true;
        }
        else 
        {
            $query =  mysqli_query($db,"UPDATE `register5` SET `status`= '1' WHERE `u_id` = '$u_id'");
            $message = "Otp Matched";
            $url = "add_photo.php";
            $success = true;
        }
    }
    else {
        $message = "Otp Not Matched";
        $url = "register6.php";
    }

        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}



/*
 * EditNumberOtp
 */
if(isset($_POST["type"]) && $_POST["type"] == "EditNumberOtp")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }
    
    $u_id = $_SESSION['u_id'];
    $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register5` WHERE `u_id` = '$u_id'"));
    $otp = $delrecord981['otp'];

    if ($otp == $_POST['otp']) 
    {
        $delrecord = mysqli_query($db,"SELECT * FROM `register5` WHERE `u_id` = '$u_id' AND `status` = '1'");
        $c = mysqli_num_rows($delrecord);
        if($c > 0){
            $message = "Mobile Number Already Verified.";
            $url = "main.php";
            $success = true;
        }
        else 
        {
            $query =  mysqli_query($db,"UPDATE `register5` SET `status`= '1' WHERE `u_id` = '$u_id'");
            $message = "Otp Matched";
            $url = "main.php";
            $success = true;
        }
    }
    else {
        $message = "Otp Not Matched";
        $url = "edit_mobile.php";
    }

        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}


if(isset($_POST["type"]) && $_POST["type"]== 'AddPhoto')
{
    $success = false;
    $url  = "";
    $message  = "";
    $filename1  = "";
    $filename2  = "";
    $filename3  = "";
    $filename4  = "";
    $filename5  = "";
    $filename6  = "";
    extract($_POST);
    $u_id = $_SESSION['u_id'];
    $date=date("Y-m-d H:i:s");
    // print_r($_POST);die;
    $stm_col1= $stm_val1= $stm_update1= "";
    $uploadOk1 = 1; 
    if(isset($_FILES['image1']) && $_FILES['image1']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image1"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image1"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk1 = 0;
        }
        // $extallowed = array("jpg","jpeg","png","gif","bmp");
        // if (!in_array($imageFileType,$extallowed)){
        //     $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
        //     $uploadOk1 = 0;
        // }
        
        $filename1=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename1;
        if ($uploadOk1 != 0) {
            
            if (move_uploaded_file($_FILES["image1"]["tmp_name"], $filepath)) 
            { 
                $stm_col1=",image";
                $stm_val1=",'".$filename1."'";
                $stm_update1=",image='$filename1'";
                
            } else {
                $uploadOk1 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }

    $stm_col2= $stm_val2= $stm_update2= "";
    $uploadOk2 = 1; 
    if(isset($_FILES['image2']) && $_FILES['image2']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image2"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image2"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk2 = 0;
        }
        // $extallowed = array("jpg","jpeg","png","gif","bmp");
        // if (!in_array($imageFileType,$extallowed)){
        //     $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
        //     $uploadOk2 = 0;
        // }
        
        $filename2=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename2;
        if ($uploadOk2 != 0) {
            
            if (move_uploaded_file($_FILES["image2"]["tmp_name"], $filepath)) 
            { 
                $stm_col2=",image";
                $stm_val2=",'".$filename2."'";
                $stm_update2=",image='$filename2'";
                
            } else {
                $uploadOk2 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }

    $stm_col3= $stm_val3= $stm_update3= "";
    $uploadOk3 = 1; 
    if(isset($_FILES['image3']) && $_FILES['image3']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image3"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image3"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk3 = 0;
        }
        // $extallowed = array("jpg","jpeg","png","gif","bmp");
        // if (!in_array($imageFileType,$extallowed)){
        //     $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
        //     $uploadOk3 = 0;
        // }
        
        $filename3=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename3;
        if ($uploadOk3 != 0) {
            
            if (move_uploaded_file($_FILES["image3"]["tmp_name"], $filepath)) 
            { 
                $stm_col3=",image";
                $stm_val3=",'".$filename3."'";
                $stm_update3=",image='$filename3'";
                
            } else {
                $uploadOk3 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }

    $stm_col4= $stm_val4= $stm_update4= "";
    $uploadOk4 = 1; 
    if(isset($_FILES['image4']) && $_FILES['image4']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image4"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image4"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk4 = 0;
        }
        // $extallowed = array("jpg","jpeg","png","gif","bmp");
        // if (!in_array($imageFileType,$extallowed)){
        //     $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
        //     $uploadOk4 = 0;
        // }
        
        $filename4=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename4;
        if ($uploadOk4 != 0) {
            
            if (move_uploaded_file($_FILES["image4"]["tmp_name"], $filepath)) 
            { 
                $stm_col4=",image";
                $stm_val4=",'".$filename4."'";
                $stm_update4=",image='$filename4'";
                
            } else {
                $uploadOk4 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }

    $stm_col5= $stm_val5= $stm_update5= "";
    $uploadOk5 = 1; 
    if(isset($_FILES['image5']) && $_FILES['image5']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image5"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image5"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk5 = 0;
        }
        // $extallowed = array("jpg","jpeg","png","gif","bmp");
        // if (!in_array($imageFileType,$extallowed)){
        //     $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
        //     $uploadOk5 = 0;
        // }
        
        $filename5=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename5;
        if ($uploadOk5 != 0) {
            
            if (move_uploaded_file($_FILES["image5"]["tmp_name"], $filepath)) 
            { 
                $stm_col5=",image";
                $stm_val5=",'".$filename5."'";
                $stm_update5=",image='$filename5'";
                
            } else {
                $uploadOk5 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }

    $stm_col6= $stm_val6= $stm_update6= "";
    $uploadOk6 = 1; 
    if(isset($_FILES['image6']) && $_FILES['image6']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image6"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image6"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk6 = 0;
        }
        // $extallowed = array("jpg","jpeg","png","gif","bmp");
        // if (!in_array($imageFileType,$extallowed)){
        //     $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
        //     $uploadOk6 = 0;
        // }
        
        $filename6=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename6;
        if ($uploadOk6 != 0) {
            
            if (move_uploaded_file($_FILES["image6"]["tmp_name"], $filepath)) 
            { 
                $stm_col6=",image";
                $stm_val6=",'".$filename6."'";
                $stm_update6=",image='$filename6'";
                
            } else {
                $uploadOk6 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }
    // echo $uploadOk2;
    if ($uploadOk1 == 1)
    {
        if(!empty($photo_id))
        {
            $sql = "UPDATE add_photo SET `image1` = '$filename1',`image2` = '$filename2',`image4`='$filename4',`image3` = '$filename3',`image5`='$filename5',`image6`='$filename6' WHERE photo_id='$photo_id'";
            
            $query = mysqli_query($db,$sql) or die(mysqli_error($db));
            if($query){
                $success = true;
                $message = "Updated Successfully";
                $url = 'main.php';
            }
            else{
                $message = "Problem occure while saving.";
            }
        }

        else 
        {
            
            // echo    "INSERT INTO `projects`(`image_slider`,`slider_header`) VALUES ('$filename1','$slider_header')";   

            $q1=mysqli_query($db,"INSERT INTO `add_photo`(`image1`,`image2`,`image3`,`image4`,`image5`,`image6`,`u_id`) VALUES ('$filename1','$filename2','$filename3','$filename4','$filename5','$filename6','$u_id')");
            if($q1)
            {
                $success = true;
                $message = "Added Successfully";
                $url = 'basic_details.php';
            }
            else{
                $message = "File cannot be uploaded";
            }
        }

    }
       

    
        
    
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}


if(isset($_POST["type"]) && $_POST["type"]== 'UserLogin')
{
    $success = false;
    $message = "";
    $url="";
    $status=0;
    $email_mobile = $_POST['email_mobile'];
    $password = $_POST['password'];
    if ($email_mobile == '' OR $password == '') {
        $message = "Fields Cannot Be Empty";
    }
    else 
    {
        $query = $db->query("select * from register where `email` = '$email_mobile' OR  `mobile` = '$email_mobile' ");
        $q = $query->num_rows;
        if($q>0)
        {
            $row = mysqli_fetch_assoc($query);
            if ($password == $row['password'])
            {
                $_SESSION['u_id'] = $row['u_id'];
                //var_dump($_SESSION);
                $success = true;
                $message = "Logged in successfully";
                $login_time=date("Y-m-d H:i:s");
                $query1 = $db->query("select * from log_details where `u_id` = '$row[u_id]'");
                    $q1 = $query1->num_rows;
                    if($q1>0)
                    {

                        $sql = "UPDATE log_details SET `login_time` = '$login_time' WHERE `u_id` = '$row[u_id]'";
        
                        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
                    }
                    else
                    {
                        $sql = "INSERT INTO log_details SET `u_id` = '$row[u_id]' , `login_time` = '$login_time'";
        
                        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
                    }

            }
            else
            {
                $message = "Password Does Not Match Username";
            }
        }
        else
        {
            $message = "User is not registered";
        }
    }
    echo json_encode(array(
        "success"=>$success,
        "message" => $message,
        "status" => $status,
        "url"=>$url
    ));
}



/*
 * AddBasicDetails
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddBasicDetails")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $_POST['date']=date("Y-m-d H:i:s");
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }

    if(!empty($basic_id))
    {
        $sql = "UPDATE basic_details SET $sql_str WHERE basic_id='$basic_id'";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $success = true;
            $message = "Updated Successfully";
            $url = 'main.php';
        }
        else{
            $message = "Problem occure while saving.";
        }
    }

    else 
    {
          
        $sql = "INSERT INTO basic_details SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Details Successfully Added";
            $success = true;
            $url = 'per_details.php';
            // $u_id = $_SESSION['u_id'];
            // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
            // $to = $delrecord981['email'];
            // $full_name = $delrecord981['full_name'];
            // $surname = $delrecord981['surname'];
            // $gender = $_POST['gender'];
            // $religion = $_POST['religion'];
            // $subject = "Details Added Successfully";
            // $body="
            //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
            //     <br>
            //     <p> Your Details Added Successfully.</p>
            //     <p> Gender : $gender </p>
            //     <p> Religion : $religion </p>
            //     <br>
            //     <p>Thank You</p>
            // ";
            // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

        }
        else{
            $message = "Problem occure while Adding.";
        }
    }
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}

/*
 * AddPersonalDetails
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddPersonalDetails")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $_POST['date']=date("Y-m-d H:i:s");

    if ($_POST['hobbies'] == "") {
        $_POST['hobbies'] = array();
        
    }
    if ($_POST['cuisine'] == "") {
        $_POST['cuisine'] = array();
        
    }
    if ($_POST['dress_type'] == "") {
        $_POST['dress_type'] = array();
        
    }
    if ($_POST['music'] == "") {
        $_POST['music'] = array();
        
    }
    if ($_POST['sports'] == "") {
        $_POST['sports'] = array();
        
    }
    if ($_POST['spoken_languages'] == "") {
        $_POST['spoken_languages'] = array();
        
    }

    $_POST['hobbies'] = implode(',', $_POST['hobbies']);
    $_POST['cuisine'] = implode(',', $_POST['cuisine']);
    $_POST['dress_type'] = implode(',', $_POST['dress_type']);
    $_POST['music'] = implode(',', $_POST['music']);
    $_POST['sports'] = implode(',', $_POST['sports']);
    $_POST['spoken_languages'] = implode(',', $_POST['spoken_languages']);
    
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }
    

    if(!empty($personal_id))
    {
        $sql = "UPDATE personal_details SET $sql_str WHERE personal_id='$personal_id'";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $success = true;
            $message = "Updated Successfully";
            $url = 'main.php';
        }
        else{
            $message = "Problem occure while saving.";
        }
    }

    else

    {

        $sql = "INSERT INTO personal_details SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Details Successfully Added";
            $success = true;
            $url = 'other_details.php';
            // $u_id = $_SESSION['u_id'];
            // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
            // $to = $delrecord981['email'];
            // $full_name = $delrecord981['full_name'];
            // $surname = $delrecord981['surname'];
            // $gender = $_POST['gender'];
            // $religion = $_POST['religion'];
            // $subject = "Details Added Successfully";
            // $body="
            //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
            //     <br>
            //     <p> Your Details Added Successfully.</p>
            //     <p> Gender : $gender </p>
            //     <p> Religion : $religion </p>
            //     <br>
            //     <p>Thank You</p>
            // ";
            // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

        }
        else{
            $message = "Problem occure while Adding.";
        }
    }
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}

/*
 * AddPartnerDetails
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddPartnerDetails")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $_POST['date']=date("Y-m-d H:i:s");
    $_POST['marital_status'] = implode(',', $_POST['marital_status']);
    $_POST['eating_habits'] = implode(',', $_POST['eating_habits']);
    $_POST['drinking_habits'] = implode(',', $_POST['drinking_habits']);
    $_POST['smoking_habits'] = implode(',', $_POST['smoking_habits']);
    $_POST['dosh'] = implode(',', $_POST['dosh']);
    $_POST['manglik'] = implode(',', $_POST['manglik']);
    $_POST['employed'] = implode(',', $_POST['employed']);

    $_POST['mother_tongue'] = implode(',', $_POST['mother_tongue']);
    $_POST['caste'] = implode(',', $_POST['caste']);
    $_POST['star'] = implode(',', $_POST['star']);
    $_POST['country'] = implode(',', $_POST['country']);
    $_POST['citizenship'] = implode(',', $_POST['citizenship']);
    $_POST['education'] = implode(',', $_POST['education']);
    $_POST['occupation'] = implode(',', $_POST['occupation']);
    $_POST['income'] = implode(',', $_POST['income']);


    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }

    if(!empty($partner_id))
    {
        $sql = "UPDATE partner_details SET $sql_str WHERE partner_id='$partner_id'";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $success = true;
            $message = "Updated Successfully";
            $url = 'main.php';
        }
        else{
            $message = "Problem occure while saving.";
        }
    }

    else 
    {
    
        $sql = "INSERT INTO partner_details SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Details Successfully Added";
            $success = true;
            $url = 'main.php';
            // $u_id = $_SESSION['u_id'];
            // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
            // $to = $delrecord981['email'];
            // $full_name = $delrecord981['full_name'];
            // $surname = $delrecord981['surname'];
            // $gender = $_POST['gender'];
            // $religion = $_POST['religion'];
            // $subject = "Details Added Successfully";
            // $body="
            //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
            //     <br>
            //     <p> Your Details Added Successfully.</p>
            //     <p> Gender : $gender </p>
            //     <p> Religion : $religion </p>
            //     <br>
            //     <p>Thank You</p>
            // ";
            // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

        }
        else{
            $message = "Problem occure while Adding.";
        }
    }
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}




if(isset($_POST["type"]) && $_POST["type"] == "ManagePack")
{   
    $success = true;
    $message = "";
    extract($_POST);
    //print_r($_POST);
    
    $pack_type = $_POST['pack_type'];
    unset($_POST['type']);

    $q11 = mysqli_query($db,"SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t2.pack_month = '$pack_type' AND t1.pack_id = '1'");
    $data1 = mysqli_fetch_assoc($q11);

    //$_POST['date']=date("Y-m-d H:i:s");
    $sql_str = "";

    
    ob_start();
        ?>
        



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

            <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
              <a href="checkout.php?id=<?php echo $data1['detail_id']; ?>" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Make Payment</a>
            </div>

        </div>
            

       


        <?php 
        $data=ob_get_clean();
        
        
    echo json_encode(array(
        "data"=>$data,
        "success"=>$success,
        "message" => $message
    ));
}



if(isset($_POST["type"]) && $_POST["type"] == "ManagePack1")
{   
    $success = true;
    $message = "";
    extract($_POST);
    //print_r($_POST);
    
    $pack_type1 = $_POST['pack_type1'];
    unset($_POST['type']);

    $q11 = mysqli_query($db,"SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t2.pack_month = '$pack_type1' AND t1.pack_id = '2'");
    $data1 = mysqli_fetch_assoc($q11);

    //$_POST['date']=date("Y-m-d H:i:s");
    $sql_str = "";

    
    ob_start();
        ?>
        



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

            <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
              <a href="checkout.php?id=<?php echo $data1['detail_id']; ?>" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Make Payment</a>
            </div>

        </div>
            

       


        <?php 
        $data=ob_get_clean();
        
        
    echo json_encode(array(
        "data"=>$data,
        "success"=>$success,
        "message" => $message
    ));
}

if(isset($_POST["type"]) && $_POST["type"] == "ManagePack2")
{   
    $success = true;
    $message = "";
    extract($_POST);
    //print_r($_POST);
    
    $pack_type2 = $_POST['pack_type2'];
    unset($_POST['type']);

    $q11 = mysqli_query($db,"SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t2.pack_month = '$pack_type2' AND t1.pack_id = '3'");
    $data1 = mysqli_fetch_assoc($q11);

    //$_POST['date']=date("Y-m-d H:i:s");
    $sql_str = "";

    
    ob_start();
        ?>
        



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

            <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
              <a href="checkout.php?id=<?php echo $data1['detail_id']; ?>" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Make Payment</a>
            </div>

        </div>
            

       


        <?php 
        $data=ob_get_clean();
        
        
    echo json_encode(array(
        "data"=>$data,
        "success"=>$success,
        "message" => $message
    ));
}


if(isset($_POST["type"]) && $_POST["type"] == "ManagePack3")
{   
    $success = true;
    $message = "";
    extract($_POST);
    //print_r($_POST);
    
    $pack_type3 = $_POST['pack_type3'];
    unset($_POST['type']);

    $q11 = mysqli_query($db,"SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t2.pack_month = '$pack_type3' AND t1.pack_id = '4'");
    $data1 = mysqli_fetch_assoc($q11);

    //$_POST['date']=date("Y-m-d H:i:s");
    $sql_str = "";

    
    ob_start();
        ?>
        



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

            <div class="col-sm-12 wrapper" style="margin-bottom: 10px;margin-top: 10px;">
              <a href="checkout.php?id=<?php echo $data1['detail_id']; ?>" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Make Payment</a>
            </div>

        </div>
            

       


        <?php 
        $data=ob_get_clean();
        
        
    echo json_encode(array(
        "data"=>$data,
        "success"=>$success,
        "message" => $message
    ));
}



/*
 * SearchProfile
 */
if(isset($_POST["type"]) && $_POST["type"] == "SearchProfile")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    //print_r($_POST);die;
    unset($_SESSION['user_id']);
    $u_id = $_SESSION['u_id'];
    unset($_POST['type']);

    if (isset($_POST["marital_status"]))
    {
      $marital_status = $_POST["marital_status"];
      $marital_status; 
    } 
    else 
    {
      $marital_status = 'NULL';
      $_POST["marital_status"] = 'NULL';
    }
        

        if ($_POST['age_from'] || $_POST['age_to'] || $_POST['height_from'] || $_POST['height_to'] || $_POST['religion'] || $_POST['mother_tongue'] || $_POST['caste'] || $_POST['country'] || $_POST['state'] || $_POST['city'] || $_POST['education'] || $_POST['marital_status'])
        {

            function reverse_birthday( $years ){
                return date('Y-m-d', strtotime($years . ' years ago'));
                }

            $age_from = reverse_birthday($_POST['age_from']);
            
            $age_to = reverse_birthday($_POST['age_to']);
            
            $user_id=array();

            $data = mysqli_query($db, "SELECT t1.*,t8.* FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t8.`birth_month` BETWEEN '$age_to' AND '$age_from' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t8.* FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t8.`religion` = '$religion' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t8.* FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t8.`mother_tongue` = '$mother_tongue' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t2.*,t99.* FROM register t1 LEFT JOIN `register2` t2 ON t2.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t2.`caste` = '$caste' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t2.*,t99.* FROM register t1 LEFT JOIN `register2` t2 ON t2.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t2.`country` = '$country' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t2.*,t99.* FROM register t1 LEFT JOIN `register2` t2 ON t2.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t2.`state` = '$state' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t2.*,t99.* FROM register t1 LEFT JOIN `register2` t2 ON t2.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t2.`city` = '$city' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t3.*,t99.* FROM register t1 LEFT JOIN `register3` t3 ON t3.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t3.`marital_status` = '$marital_status' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id); 

            $data = mysqli_query($db, "SELECT t1.*,t3.*,t99.* FROM register t1 LEFT JOIN `register3` t3 ON t3.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t3.`height` BETWEEN '$height_from' AND '$height_to' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);    

            $data = mysqli_query($db, "SELECT t1.*,t4.*,t99.* FROM register t1 LEFT JOIN `register4` t4 ON t4.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t4.`education` = '$education' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);
                //print_r($user_id);
                if (empty($user_id)) {

                    $message = "No result found.";

                }
                else {

                    $_SESSION['user_id'] = $user_id;
                    $success = true;

                }



        }
        elseif ($_POST['age_from'] || $_POST['age_to'] || $_POST['height_from'] || $_POST['height_to'] || $_POST['religion'] || $_POST['mother_tongue'] || $_POST['caste'] || $_POST['country'] || $_POST['state'] || $_POST['city'] || $_POST['education'] || $_POST['marital_status'] == '') 
        {

            $user_id=array();
            $data = mysqli_query($db, "SELECT t1.*,t8.* FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t8.`gender` = '$new_gender' AND t1.`u_id` != '$u_id'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }

            $_SESSION['user_id'] = $user_id;
            $success = true;

        }

    
    
    
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}


if(isset($_POST["type"]) && $_POST["type"] == "update_age")
{
    $success = false;
    $message = "";
    $delrecord = "";
    $sql01 = mysqli_query($db,"SELECT YEAR(NOW()) - YEAR(birth_month) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birth_month, '%m%d')) as age, birth_month FROM register1");
    //echo "SELECT YEAR(NOW()) - YEAR(birth_month) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birth_month, '%m%d')) as age FROM register1";
    if($sql01)
    {
        $success = true;
        while($r01 = mysqli_fetch_assoc($sql01)){

            $age = $r01['age'];
            //foreach ($age as $value) {
                $sql = mysqli_query($db,"UPDATE `register1` SET `age` = '$age Years' WHERE `birth_month` = '$r01[birth_month]'");
                if($sql){
                    $success = true;
                    $message = "Updated Successfully";
                }
            //}

        }
        //$data = $r01;
    }
    else
    {
       $success = false;

    }

    

    echo json_encode(array(
        //"data"=>$data,
        "success"=>$success
        //"message" => $message
    ));
}
/*
 * SearchProfile
 */
if(isset($_POST["type"]) && $_POST["type"] == "SearchProfileAdvance")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    //print_r($_POST);die;
    unset($_SESSION['user_id']);
    $u_id = $_SESSION['u_id'];
    unset($_POST['type']);

    if (isset($_POST["marital_status"]))
    {
      $marital_status = $_POST["marital_status"];
      $marital_status; 
    } 
    else 
    {
      $marital_status = 'NULL';
      $_POST["marital_status"] = 'NULL';
    }

    if (isset($_POST["physical_status"]))
    {
      $physical_status = $_POST["physical_status"];
      $physical_status; 
    } 
    else 
    {
      $physical_status = 'NULL';
      $_POST["physical_status"] = 'NULL';
    }

    if (isset($_POST["employed"]))
    {
      $employed = $_POST["employed"];
      $employed; 
    } 
    else 
    {
      $employed = 'NULL';
      $_POST["employed"] = 'NULL';
    }


    if (isset($_POST["eating_habit"]))
    {
      $eating_habit = $_POST["eating_habit"];
      $eating_habit; 
    } 
    else 
    {
      $eating_habit = 'NULL';
      $_POST["eating_habit"] = 'NULL';
    }

    if (isset($_POST["drinking_habit"]))
    {
      $drinking_habit = $_POST["drinking_habit"];
      $drinking_habit; 
    } 
    else 
    {
      $drinking_habit = 'NULL';
      $_POST["drinking_habit"] = 'NULL';
    }


    if (isset($_POST["smoking_habit"]))
    {
      $smoking_habit = $_POST["smoking_habit"];
      $smoking_habit; 
    } 
    else 
    {
      $smoking_habit = 'NULL';
      $_POST["smoking_habit"] = 'NULL';
    }


        if ($_POST['keywords'] != '') {


            

            $user_id=array();

            $pieces = explode(",", $keywords);
            $trimmed_array = array_map('trim', $pieces);
            foreach($trimmed_array as $v)
            {

                $data = mysqli_query($db, "SELECT t1.*,t8.gender FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t1.`created_by` LIKE '$v' OR t1.`full_name` LIKE '$v' OR t1.`father_name` LIKE '$v' OR t1.`surname` LIKE '$v' OR t1.`mobile` LIKE '$v' OR t8.`age` LIKE '$v' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

                $data = mysqli_query($db, "SELECT t1.*,t99.* FROM register t1 LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t99.`gender` LIKE '$v' OR t99.`religion` LIKE '$v' OR t99.`mother_tongue` LIKE '$v' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }
                    
                $data = mysqli_query($db, "SELECT t1.*,t99.*,t8.gender FROM register t1 LEFT JOIN `register2` t99 ON t99.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t99.`caste` LIKE '$v' OR t99.`gotra` LIKE '$v' OR t99.`dosh` LIKE '$v' OR t99.`country` LIKE '$v' OR t99.`city` LIKE '$v' OR t99.`state` LIKE '$v' OR t99.`pincode` LIKE '$v' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

                $data = mysqli_query($db, "SELECT t1.*,t99.*,t8.gender FROM register t1 LEFT JOIN `register3` t99 ON t99.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t99.`marital_status` LIKE '$v' OR t99.`family_status` LIKE '$v' OR t99.`family_type` LIKE '$v' OR t99.`family_values` LIKE '$v' OR t99.`disability` LIKE '$v' OR t99.`disability_name` LIKE '$v' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

                $data = mysqli_query($db, "SELECT t1.*,t99.*,t8.gender FROM register t1 LEFT JOIN `register4` t99 ON t99.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t99.`education` LIKE '$v' OR t99.`employed` LIKE '$v' OR t99.`occupation` LIKE '$v' OR t99.`income` LIKE '$v' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

                $data = mysqli_query($db, "SELECT t1.*,t99.*,t8.gender FROM register t1 LEFT JOIN `register5` t99 ON t99.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t99.`about` LIKE '$v' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

                $data = mysqli_query($db, "SELECT t1.*,t99.*,t8.gender FROM register t1 LEFT JOIN `basic_details` t99 ON t99.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t99.`body_type` LIKE '$v' OR t99.`weight` LIKE '$v' OR t99.`college` LIKE '$v' OR t99.`organization` LIKE '$v' OR t99.`eating_habit` LIKE '$v' OR t99.`drinking_habit` LIKE '$v' OR t99.`smoking_habit` LIKE '$v' OR t99.`star` LIKE '$v' OR t99.`raasi` LIKE '$v' OR t99.`ancestral` LIKE '$v'  AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

            }
                $user_id = array_unique($user_id);
                //print_r($user_id);
                if (empty($user_id)) {

                    $message = "No result found.";

                }
                else {

                    $_SESSION['user_id'] = $user_id;
                    $success = true;

                }


        }
        elseif ($_POST['age_from'] || $_POST['age_to'] || $_POST['height_from'] || $_POST['height_to'] || $_POST['religion'] || $_POST['mother_tongue'] || $_POST['caste'] || $_POST['country'] || $_POST['keywords'] || $_POST['state'] || $_POST['city'] || $_POST['education'] || $_POST['marital_status'] || $_POST['income'] || $_POST['physical_status'] || $_POST['employed'] || $_POST['eating_habit'] || $_POST['drinking_habit'] || $_POST['smoking_habit'])
        {

            function reverse_birthday( $years ){
                return date('Y-m-d', strtotime($years . ' years ago'));
                }

            $age_from = reverse_birthday($_POST['age_from']);
            
            $age_to = reverse_birthday($_POST['age_to']);
            
            $user_id=array();

            $data = mysqli_query($db, "SELECT t1.*,t8.* FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t8.`birth_month` BETWEEN '$age_to' AND '$age_from' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t8.* FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t8.`religion` = '$religion' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t8.* FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t8.`mother_tongue` = '$mother_tongue' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t2.*,t99.* FROM register t1 LEFT JOIN `register2` t2 ON t2.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t2.`caste` = '$caste' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t2.*,t99.* FROM register t1 LEFT JOIN `register2` t2 ON t2.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t2.`country` = '$country' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t2.*,t99.* FROM register t1 LEFT JOIN `register2` t2 ON t2.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t2.`state` = '$state' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t2.*,t99.* FROM register t1 LEFT JOIN `register2` t2 ON t2.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t2.`city` = '$city' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t3.*,t99.* FROM register t1 LEFT JOIN `register3` t3 ON t3.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t3.`marital_status` = '$marital_status' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id); 

            $data = mysqli_query($db, "SELECT t1.*,t3.*,t99.* FROM register t1 LEFT JOIN `register3` t3 ON t3.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t3.`height` BETWEEN '$height_from' AND '$height_to' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);    

            $data = mysqli_query($db, "SELECT t1.*,t4.*,t99.* FROM register t1 LEFT JOIN `register4` t4 ON t4.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t4.`education` = '$education' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t4.*,t99.* FROM register t1 LEFT JOIN `register4` t4 ON t4.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t4.`income` = '$income' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t4.*,t99.* FROM register t1 LEFT JOIN `register4` t4 ON t4.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t4.`employed` = '$employed' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t3.*,t99.* FROM register t1 LEFT JOIN `register3` t3 ON t3.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t3.`disability` = '$physical_status' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t3.*,t99.* FROM register t1 LEFT JOIN `basic_details` t3 ON t3.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t3.`eating_habit` = '$eating_habit' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t3.*,t99.* FROM register t1 LEFT JOIN `basic_details` t3 ON t3.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t3.`smoking_habit` = '$smoking_habit' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            $data = mysqli_query($db, "SELECT t1.*,t3.*,t99.* FROM register t1 LEFT JOIN `basic_details` t3 ON t3.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t3.`drinking_habit` = '$drinking_habit' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);
                //print_r($user_id);
                if (empty($user_id)) {

                    $message = "No result found.";

                }
                else {

                    $_SESSION['user_id'] = $user_id;
                    $success = true;

                }



        }
        elseif ($_POST['age_from'] || $_POST['age_to'] || $_POST['height_from'] || $_POST['height_to'] || $_POST['religion'] || $_POST['mother_tongue'] || $_POST['caste'] || $_POST['country'] || $_POST['state'] || $_POST['city'] || $_POST['education'] || $_POST['marital_status'] || $_POST['income'] || $_POST['keywords'] || $_POST['physical_status'] || $_POST['employed'] || $_POST['eating_habit'] || $_POST['drinking_habit'] || $_POST['smoking_habit'] == '') 
        {

            $user_id=array();
            $data = mysqli_query($db, "SELECT t1.*,t8.* FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t8.`gender` = '$new_gender' AND t1.`u_id` != '$u_id'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }

            $_SESSION['user_id'] = $user_id;
            $success = true;

        }
        

    
    
    
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}


if(isset($_POST["type"]) && $_POST["type"] == "SearchProfileKey")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    //print_r($_POST);die;
    unset($_SESSION['user_id']);
    $u_id = $_SESSION['u_id'];
    unset($_POST['type']);

    if (isset($_POST["marital_status"]))
    {
      $marital_status = $_POST["marital_status"];
      $marital_status; 
    } 
    else 
    {
      $marital_status = 'NULL';
      $_POST["marital_status"] = 'NULL';
    }

    if (isset($_POST["physical_status"]))
    {
      $physical_status = $_POST["physical_status"];
      $physical_status; 
    } 
    else 
    {
      $physical_status = 'NULL';
      $_POST["physical_status"] = 'NULL';
    }

    if (isset($_POST["employed"]))
    {
      $employed = $_POST["employed"];
      $employed; 
    } 
    else 
    {
      $employed = 'NULL';
      $_POST["employed"] = 'NULL';
    }


    if (isset($_POST["eating_habit"]))
    {
      $eating_habit = $_POST["eating_habit"];
      $eating_habit; 
    } 
    else 
    {
      $eating_habit = 'NULL';
      $_POST["eating_habit"] = 'NULL';
    }

    if (isset($_POST["drinking_habit"]))
    {
      $drinking_habit = $_POST["drinking_habit"];
      $drinking_habit; 
    } 
    else 
    {
      $drinking_habit = 'NULL';
      $_POST["drinking_habit"] = 'NULL';
    }


    if (isset($_POST["smoking_habit"]))
    {
      $smoking_habit = $_POST["smoking_habit"];
      $smoking_habit; 
    } 
    else 
    {
      $smoking_habit = 'NULL';
      $_POST["smoking_habit"] = 'NULL';
    }


        if ($_POST['keywords'] != '') {



            $user_id=array();

            $pieces = explode(",", $keywords);
            $trimmed_array = array_map('trim', $pieces);
            foreach($trimmed_array as $v)
            {

                $data = mysqli_query($db, "SELECT t1.*,t8.gender FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t1.`created_by` LIKE '$v' OR t1.`full_name` LIKE '$v' OR t1.`father_name` LIKE '$v' OR t1.`surname` LIKE '$v' OR t1.`mobile` LIKE '$v' OR t8.`age` LIKE '$v' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

                $data = mysqli_query($db, "SELECT t1.*,t99.* FROM register t1 LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t99.`gender` LIKE '$v' OR t99.`religion` LIKE '$v' OR t99.`mother_tongue` LIKE '$v' AND t1.`u_id` != '$u_id' AND t99.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }
                    
                $data = mysqli_query($db, "SELECT t1.*,t99.*,t8.gender FROM register t1 LEFT JOIN `register2` t99 ON t99.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t99.`caste` LIKE '$v' OR t99.`gotra` LIKE '$v' OR t99.`dosh` LIKE '$v' OR t99.`country` LIKE '$v' OR t99.`city` LIKE '$v' OR t99.`state` LIKE '$v' OR t99.`pincode` LIKE '$v' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

                $data = mysqli_query($db, "SELECT t1.*,t99.*,t8.gender FROM register t1 LEFT JOIN `register3` t99 ON t99.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t99.`marital_status` LIKE '$v' OR t99.`family_status` LIKE '$v' OR t99.`family_type` LIKE '$v' OR t99.`family_values` LIKE '$v' OR t99.`disability` LIKE '$v' OR t99.`disability_name` LIKE '$v' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

                $data = mysqli_query($db, "SELECT t1.*,t99.*,t8.gender FROM register t1 LEFT JOIN `register4` t99 ON t99.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t99.`education` LIKE '$v' OR t99.`employed` LIKE '$v' OR t99.`occupation` LIKE '$v' OR t99.`income` LIKE '$v' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

                $data = mysqli_query($db, "SELECT t1.*,t99.*,t8.gender FROM register t1 LEFT JOIN `register5` t99 ON t99.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t99.`about` LIKE '$v' AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

                $data = mysqli_query($db, "SELECT t1.*,t99.*,t8.gender FROM register t1 LEFT JOIN `basic_details` t99 ON t99.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t99.`body_type` LIKE '$v' OR t99.`weight` LIKE '$v' OR t99.`college` LIKE '$v' OR t99.`organization` LIKE '$v' OR t99.`eating_habit` LIKE '$v' OR t99.`drinking_habit` LIKE '$v' OR t99.`smoking_habit` LIKE '$v' OR t99.`star` LIKE '$v' OR t99.`raasi` LIKE '$v' OR t99.`ancestral` LIKE '$v'  AND t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender'");
                    while ($data_data = mysqli_fetch_assoc($data)) 
                    {
                    $user_id[] = $data_data['u_id'];
                    }

            }
                $user_id = array_unique($user_id);
                //print_r($user_id);
                if (empty($user_id)) {

                    $message = "No result found.";

                }
                else {

                    $_SESSION['user_id'] = $user_id;
                    $success = true;

                }


        }
    
    
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}




/*
 * Send Interest
 */
if(isset($_POST["type"]) && $_POST["type"] == "SendInterest")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['date']=date("Y-m-d H:i:s");
    $profile_id = $_POST['profile_id'];
    $u_id = $_POST['u_id'];
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }
    
    $delrecord = mysqli_query($db,"SELECT * FROM `interest_list` WHERE `u_id` = '$u_id' AND `profile_id` = '$profile_id'");
    $c = mysqli_num_rows($delrecord);
    if($c > 0){
        $message = "Interest Already Sent";
    }

    else 
    {
          
        $sql = "INSERT INTO interest_list SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Interest Send";
            $success = true;
            
        }
        else{
            $message = "Problem occure while Adding.";
        }
    }

        
    echo json_encode(array(
        "success"=>$success,
        "message" => $message
    ));
}


/*
 * Short List
 */
if(isset($_POST["type"]) && $_POST["type"] == "Shortlist")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['date']=date("Y-m-d H:i:s");
    $profile_id = $_POST['profile_id'];
    $u_id = $_POST['u_id'];
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }
    
    $delrecord = mysqli_query($db,"SELECT * FROM `short_list` WHERE `u_id` = '$u_id' AND `profile_id` = '$profile_id'");
    $c = mysqli_num_rows($delrecord);
    if($c > 0){

        $sql = "DELETE FROM `short_list` WHERE `u_id` = '$u_id' AND `profile_id` = '$profile_id'";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Shortlist Removed";
            $success = true;
            

        }
        else{
            $message = "Problem occure while Adding.";
        }

    }

    else 
    {
          
        $sql = "INSERT INTO short_list SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            $message = "Shortlist Added";
            $success = true;
            

        }
        else{
            $message = "Problem occure while Adding.";
        }
    }

        
    echo json_encode(array(
        "success"=>$success,
        "message" => $message
    ));
}



/*
 * AcceptInterest
 */
if(isset($_POST["type"]) && $_POST["type"] == "AcceptInterest")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    unset($_POST['type']);
    //$_POST['date']=date("Y-m-d H:i:s");
    $profile_id = $_POST['profile_id'];
    $u_id = $_POST['u_id'];
    
    echo "UPDATE `interest_list` SET `status` = '1' WHERE u_id = '$profile_id' ";die;
    $delrecord = mysqli_query($db,"UPDATE `interest_list` SET `status` = '1' WHERE u_id = '$profile_id' ");
    if($delrecord)
    {
        $success = true;
        $message = "Accepted Successfully";
    }
    else
    {
        $message = "Some Problem Occur, While Accepting.";

    }

        
    echo json_encode(array(
        "success"=>$success,
        "message" => $message
    ));
}


/*
 * AcceptInterest
 */
if(isset($_POST["type"]) && $_POST["type"] == "RejectInterest")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    unset($_POST['type']);
    //$_POST['date']=date("Y-m-d H:i:s");
    $profile_id = $_POST['profile_id'];
    
    $delrecord = mysqli_query($db,"UPDATE `interest_list` SET `status` = '2' WHERE `u_id` = '$profile_id'");
    if($delrecord)
    {
        $success = true;
        $message = "Rejected Successfully";
    }
    else
    {
        $message = "Some Problem Occur, While Accepting.";

    }

        
    echo json_encode(array(
        "success"=>$success,
        "message" => $message
    ));
}


/*
 * View List
 */
if(isset($_POST["type"]) && $_POST["type"] == "Viewlist")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['date']=date("Y-m-d H:i:s");
    $profile_id = $_POST['profile_id'];
    $u_id = $_POST['u_id'];
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }
    
    $delrecord = mysqli_query($db,"SELECT * FROM `view_list` WHERE `u_id` = '$u_id' AND `profile_id` = '$profile_id'");
    $c = mysqli_num_rows($delrecord);
    if($c > 0){
        //$message = "Already Shortlisted";
    }

    else 
    {
          
        $sql = "INSERT INTO view_list SET $sql_str";
        
        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
        if($query){
            $appt_id=mysqli_insert_id($db);
            //$message = "Shortlist Added";
            $success = true;
            

        }
        else{
            //$message = "Problem occure while Adding.";
        }
    }

        
    echo json_encode(array(
        "success"=>$success,
        "message" => $message
    ));
}



if(isset($_POST["type"]) && $_POST["type"] == "EditRegister1")
{
    $success = false;
    $message = "";
    $delrecord = "";
    $register1_id = $_POST['data_id'];
    $sql01 = mysqli_query($db,"SELECT * FROM register1 WHERE `register1_id` = $register1_id");
    if($sql01)
    {
        $success = true;
        $r01 = mysqli_fetch_assoc($sql01);

        $data = $r01;
    }
    else
    {   $success = true;

    }

    

    echo json_encode(array(
        "data"=>$data,
        "success"=>$success
        //"message" => $message
    ));
}


if(isset($_POST["type"]) && $_POST["type"] == "EditRegister2")
{
    $success = false;
    $message = "";
    $delrecord = "";
    $register2_id = $_POST['data_id'];
    $sql01 = mysqli_query($db,"SELECT * FROM register2 WHERE `register2_id` = $register2_id");
    $data1 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `register2` WHERE `register2_id` = '$register2_id'"));
    if($sql01)
    {
        $success = true;
        $r01 = mysqli_fetch_assoc($sql01);

        $data = $r01;

        ob_start();
        ?>
        

        <div class="col-sm-8" id="dosh_div">
         <input value="Yes"   type="radio" name="dosh" <?php if($data1['dosh'] == 'Yes') { ?> checked <?php } ?>> Yes &nbsp;&nbsp;
          <input value="No"  type="radio" name="dosh" <?php if($data1['dosh'] == 'No') { ?> checked <?php } ?>> No &nbsp;&nbsp;
          <input value="Dont Know"  type="radio" name="dosh" <?php if($data1['dosh'] == 'Dont Know') { ?> checked <?php } ?>> Don't Know
        </div>

        <?php 
        $data_new=ob_get_clean();

        ob_start();
        ?>

        <div class="row  to-fmid" id="country_div">
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
                              $selected2 = (isset($data1['country']) && $row1['name'] == $data1['country'])?'selected':'';
                                ?>
                                <option value="<?php echo $row1['name']; ?>" <?=$selected2?>><?php echo $row1['name']; ?></option>
                                <?php
                            } //while loop
                        } //if loop
                        ?> 
              </select>

          </div>
        </div>

        <?php 
        $data_new1=ob_get_clean();

        ob_start();
        ?>

        <div class="row  to-fmid" id="state_div">
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
                  <option value="<?php echo isset($data1['state'])?$data1['state']:''?>"><?php echo isset($data1['state'])?$data1['state']:''?></option>
                <?php } ?>
              </select>
              
          </div>
        </div>

        <?php 
        $data_new2=ob_get_clean();

        ob_start();
        ?>

        <div class="row  to-fmid" id="city_div">
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
                  <option value="<?php echo isset($data1['city'])?$data1['city']:''?>"><?php echo isset($data1['city'])?$data1['city']:''?></option>
                <?php } ?>
              </select>
          </div>
        </div>

        <?php 
        $data_new3=ob_get_clean();

    }
    else
    {   $success = true;

    }

    

    echo json_encode(array(
        "data"=>$data,
        "data_new"=>$data_new,
        "data_new1"=>$data_new1,
        "data_new2"=>$data_new2,
        "data_new3"=>$data_new3,
        "success"=>$success
        //"message" => $message
    ));
}




if(isset($_POST["type"]) && $_POST["type"] == "EditRegister3")
{
    $success = false;
    $message = "";
    $delrecord = "";
    $register3_id = $_POST['data_id'];
    $sql01 = mysqli_query($db,"SELECT * FROM register3 WHERE `register3_id` = $register3_id");
    $data1 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `register3` WHERE `register3_id` = '$register3_id'"));
    if($sql01)
    {
        $success = true;
        $r01 = mysqli_fetch_assoc($sql01);

        $data = $r01;

        ob_start();
        ?>
        

        <div class="row  to-fmid" id="marital_div">
          <div class="col-sm-4 no-padding">
              <label class="cflo">Marital Status :</label>
          </div>
          <div class="col-sm-8">
             <input value="Never Married"   type="radio" name="marital_status" <?php if($data1['marital_status'] == 'Never Married') { ?> checked <?php } ?>> Never Married &nbsp;&nbsp;
              <input value="Widowed"  type="radio" name="marital_status" <?php if($data1['marital_status'] == 'Widowed') { ?> checked <?php } ?>> Widowed &nbsp;&nbsp;
              <br>
              <input value="Divorced"  type="radio" name="marital_status" <?php if($data1['marital_status'] == 'Divorced') { ?> checked <?php } ?>> Divorced &nbsp;&nbsp;
              <input value="Awaiting Divorce"  type="radio" name="marital_status" <?php if($data1['marital_status'] == 'Awaiting Divorce') { ?> checked <?php } ?>> Awaiting Divorce
          </div>
      </div>

        <?php 
        $data_new=ob_get_clean();

        ob_start();
        ?>
        

        <div class="row  to-fmid" id="family_s_div">
          <div class="col-sm-4 no-padding">
              <label class="cflo">Family Status :</label>
          </div>
          <div class="col-sm-8">
             <input value="Middle Class"   type="radio" name="family_status" <?php if($data1['family_status'] == 'Middle Class') { ?> checked <?php } ?>> Middle Class &nbsp;&nbsp;
              <input value="Upper Middle Class"  type="radio" name="family_status" <?php if($data1['family_status'] == 'Upper Middle Class') { ?> checked <?php } ?>> Upper Middle Class <br>
              <input value="Rich"  type="radio" name="family_status" <?php if($data1['family_status'] == 'Rich') { ?> checked <?php } ?>> Rich &nbsp;&nbsp;
              <input value="Affluent"  type="radio" name="family_status" <?php if($data1['family_status'] == 'Affluent') { ?> checked <?php } ?>> Affluent
          </div>
      </div>

        <?php 
        $data_new1=ob_get_clean();

        ob_start();
        ?>
        

       <div class="row  to-fmid" id="family_t_div">
          <div class="col-sm-4 no-padding">
              <label class="cflo">Family Type :</label>
          </div>
          <div class="col-sm-8">
             <input value="Joint"   type="radio" name="family_type" <?php if($data1['family_type'] == 'Joint') { ?> checked <?php } ?>> Joint &nbsp;&nbsp;
              <input value="Nuclear"  type="radio" name="family_type" <?php if($data1['family_type'] == 'Nuclear') { ?> checked <?php } ?>> Nuclear
          </div>
      </div>

        <?php 
        $data_new2=ob_get_clean();

        ob_start();
        ?>
        

       <div id="main_div">
            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Family Type :</label>
                </div>
                <div class="col-sm-8">
                   <input value="Joint"   type="radio" name="family_type" <?php if($data1['family_type'] == 'Joint') { ?> checked <?php } ?>> Joint &nbsp;&nbsp;
                    <input value="Nuclear"  type="radio" name="family_type" <?php if($data1['family_type'] == 'Nuclear') { ?> checked <?php } ?>> Nuclear
                </div>
            </div>

            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Family Values :</label>
                </div>
                <div class="col-sm-8">
                   <input value="Orthodox"   type="radio" name="family_values" <?php if($data1['family_values'] == 'Orthodox') { ?> checked <?php } ?>> Orthodox &nbsp;&nbsp;
                    <input value="Traditional"  type="radio" name="family_values" <?php if($data1['family_values'] == 'Traditional') { ?> checked <?php } ?>> Traditional &nbsp;&nbsp;
                    <br>
                    <input value="Moderate"  type="radio" name="family_values" <?php if($data1['family_values'] == 'Moderate') { ?> checked <?php } ?>> Moderate &nbsp;&nbsp;
                    <input value="Liberal"  type="radio" name="family_values" <?php if($data1['family_values'] == 'Liberal') { ?> checked <?php } ?>> Liberal
                </div>
            </div>

            <div class="row  to-fmid">
                <div class="col-sm-4 no-padding">
                    <label class="cflo">Any Disability :</label>
                </div>
                <div class="col-sm-8">
                   <input value="Normal"   type="radio" name="disability" <?php if($data1['disability'] == 'Normal') { ?> checked <?php } ?>> Normal &nbsp;&nbsp;
                    <input value="Physically Challenged"  type="radio" name="disability" <?php if($data1['disability'] == 'Physically Challenged') { ?> checked <?php } ?>> Physically Challenged 
                </div>
            </div>


            <div id="disability_name" class="row  to-fmid" style="display: none;">
                <div class="col-sm-4 no-padding">
                </div>
                <div class="col-sm-8">
                   <textarea rows="6" name="disability_name" cols="40" style="width: 100%;"><?php echo isset($data1['disability_name'])?$data1['disability_name']:''?></textarea> 
                </div>
            </div>
        </div>

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
        <?php 
        $data_new3=ob_get_clean();
    }
    else
    {   $success = true;

    }

    

    echo json_encode(array(
        "data"=>$data,
        "data_new"=>$data_new,
        "data_new1"=>$data_new1,
        "data_new2"=>$data_new2,
        "data_new3"=>$data_new3,
        "success"=>$success
        //"message" => $message
    ));
}

if(isset($_POST["type"]) && $_POST["type"] == "EditRegister4")
{
    $success = false;
    $message = "";
    $delrecord = "";
    $register4_id = $_POST['data_id'];
    $sql01 = mysqli_query($db,"SELECT * FROM register4 WHERE `register4_id` = $register4_id");
    if($sql01)
    {
        $success = true;
        $r01 = mysqli_fetch_assoc($sql01);

        $data = $r01;

        ob_start();
        ?>
        

        <div class="row  to-fmid" id="emp_id">
          <div class="col-sm-4 no-padding">
              <label class="cflo">Employed in :</label>
          </div>
          <div class="col-sm-8">
             <input value="Government"   type="radio" name="employed" <?php if($data['employed'] == 'Government') { ?> checked <?php } ?>> Government &nbsp;&nbsp;
              <input value="Private"  type="radio" name="employed" <?php if($data['employed'] == 'Private') { ?> checked <?php } ?>> Private &nbsp;&nbsp;
              <br>
              <input value="Business"  type="radio" name="employed" <?php if($data['employed'] == 'Business') { ?> checked <?php } ?>> Business &nbsp;&nbsp;
              <input value="Defence"  type="radio" name="employed" <?php if($data['employed'] == 'Defence') { ?> checked <?php } ?>> Defence &nbsp;&nbsp;
              <br>
              <input value="Self Employed"  type="radio" name="employed" <?php if($data['employed'] == 'Self Employed') { ?> checked <?php } ?>> Self Employed &nbsp;&nbsp;
              <input value="Not Working"  type="radio" name="employed" <?php if($data['employed'] == 'Not Working') { ?> checked <?php } ?>> Not Working
          </div>
      </div>

        <?php 
        $data_new=ob_get_clean();

    }
    else
    {   $success = true;

    }

    

    echo json_encode(array(
        "data"=>$data,
        "data_new"=>$data_new,
        "success"=>$success
        //"message" => $message
    ));
}

if(isset($_POST["type"]) && $_POST["type"] == "EditOther")
{
    $success = false;
    $message = "";
    $delrecord = "";
    $basic_id = $_POST['data_id'];
    $sql01 = mysqli_query($db,"SELECT * FROM basic_details WHERE `basic_id` = $basic_id");
    if($sql01)
    {
        $success = true;
        $r01 = mysqli_fetch_assoc($sql01);

        $data = $r01;

        ob_start();
        ?>
        

        <div class="row  to-fmid" id="body_type">
              <div class="col-sm-1 no-padding">
                  <label class="cflo"></label>
              </div>
              <div class="col-sm-3 no-padding">
                  <label class="cflo">Body Type :</label>
              </div>
              <div class="col-sm-7">
                 <input value="Slim"   type="radio" name="body_type" <?php if($data['body_type'] == 'Slim') { ?> checked <?php } ?>> Slim &nbsp;&nbsp;
                  <input value="Average"  type="radio" name="body_type" <?php if($data['body_type'] == 'Average') { ?> checked <?php } ?>> Average &nbsp;&nbsp;<br>
                  <input value="Athletic"  type="radio" name="body_type" <?php if($data['body_type'] == 'Athletic') { ?> checked <?php } ?>> Athletic &nbsp;&nbsp;
                  <br>
                  <input value="Heavy"  type="radio" name="body_type" <?php if($data['body_type'] == 'Heavy') { ?> checked <?php } ?>> Heavy 
              </div>
              <div class="col-sm-1 no-padding">
                  <label class="cflo"></label>
              </div>
          </div>

        <?php 
        $data_new=ob_get_clean();

        ob_start();
        ?>
        

        <div id="test_div">
          <div class="row  to-fmid">
              <div class="col-sm-1 no-padding">
                  <label class="cflo"></label>
              </div>
              <div class="col-sm-3 no-padding">
                  <label class="cflo">Eating Habit :</label>
              </div>
              <div class="col-sm-7">
                 <input value="Vegetarian"   type="radio" name="eating_habit" <?php if($data['eating_habit'] == 'Vegetarian') { ?> checked <?php } ?>> Vegetarian &nbsp;&nbsp;<br>
                  <input value="Non-Vegeterian"  type="radio" name="eating_habit" <?php if($data['eating_habit'] == 'Non-Vegeterian') { ?> checked <?php } ?>> Non-Vegeterian &nbsp;&nbsp;<br>
                  <input value="Eggetarian"  type="radio" name="eating_habit" <?php if($data['eating_habit'] == 'Eggetarian') { ?> checked <?php } ?>> Eggetarian
                  
              </div>
              <div class="col-sm-1 no-padding">
                  <label class="cflo"></label>
              </div>
          </div>

          <div class="row  to-fmid">
              <div class="col-sm-1 no-padding">
                  <label class="cflo"></label>
              </div>
              <div class="col-sm-3 no-padding">
                  <label class="cflo">Drinking Habit :</label>
              </div>
              <div class="col-sm-7">
                 <input value="No"   type="radio" name="drinking_habit" <?php if($data['drinking_habit'] == 'No') { ?> checked <?php } ?>> No &nbsp;&nbsp;
                  <input value="Yes"  type="radio" name="drinking_habit" <?php if($data['drinking_habit'] == 'Yes') { ?> checked <?php } ?>> Yes &nbsp;&nbsp;<br>
                  <input value="Drinks Socially"  type="radio" name="drinking_habit" <?php if($data['drinking_habit'] == 'Drinks Socially') { ?> checked <?php } ?>> Drinks Socially
                  
              </div>
              <div class="col-sm-1 no-padding">
                  <label class="cflo"></label>
              </div>
          </div>

          <div class="row  to-fmid">
              <div class="col-sm-1 no-padding">
                  <label class="cflo"></label>
              </div>
              <div class="col-sm-3 no-padding">
                  <label class="cflo">Smoking Habit :</label>
              </div>
              <div class="col-sm-7">
                 <input value="No"   type="radio" name="smoking_habit" <?php if($data['smoking_habit'] == 'No') { ?> checked <?php } ?>> No &nbsp;&nbsp;
                  <input value="Yes"  type="radio" name="smoking_habit" <?php if($data['smoking_habit'] == 'Yes') { ?> checked <?php } ?>> Yes &nbsp;&nbsp;<br>
                  <input value="Occasionally"  type="radio" name="smoking_habit" <?php if($data['smoking_habit'] == 'Occasionally') { ?> checked <?php } ?>> Occasionally
                  
              </div>
              <div class="col-sm-1 no-padding">
                  <label class="cflo"></label>
              </div>
          </div>
          </div>

        <?php 
        $data_new1=ob_get_clean();

        ob_start();
        ?>

        <div class="row  to-fmid" id="family_loc">
          <div class="col-sm-1 no-padding">
              <label class="cflo"></label>
          </div>
          <div class="col-sm-3 no-padding">
              <label class="cflo">Family Location :</label>
          </div>
          <div class="col-sm-7">
             <input value="Same as my location"   type="radio" name="family_location" <?php if($data['family_location'] == 'Same as my location') { ?> checked <?php } ?>> Same as my location &nbsp;&nbsp;<br>
              <input value="Different Location"  type="radio" name="family_location" <?php if($data['family_location'] == 'Different Location') { ?> checked <?php } ?>> Different Location 
              
          </div>
          <div class="col-sm-1 no-padding">
              <label class="cflo"></label>
          </div>
      </div>

        <?php 
        $data_new2=ob_get_clean();
    }
    else
    {   $success = true;

    }

    

    echo json_encode(array(
        "data"=>$data,
        "data_new"=>$data_new,
        "data_new1"=>$data_new1,
        "data_new2"=>$data_new2,
        "success"=>$success
        //"message" => $message
    ));
}



if(isset($_POST["type"]) && $_POST["type"] == "EditLife")
{
    $success = false;
    $message = "";
    $delrecord = "";
    $personal_id = $_POST['data_id'];
    $sql01 = mysqli_query($db,"SELECT * FROM personal_details WHERE `personal_id` = $personal_id");
    $data1 = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `personal_details` WHERE `personal_id` = '$personal_id'"));
    $hobbies = explode(",",$data1['hobbies']);
    $cuisine = explode(",",$data1['cuisine']);
    $dress_type = explode(",",$data1['dress_type']);
    $music = explode(",",$data1['music']);
    $sports = explode(",",$data1['sports']);
    $spoken_languages = explode(",",$data1['spoken_languages']);
    if($sql01)
    {
        $success = true;
        $r01 = mysqli_fetch_assoc($sql01);

        $data = $r01;

        ob_start();
        ?>
        
        <div id="hob_div" >
            <div class="row  to-fmid" id="">
              <div class="col-sm-1 no-padding">
                  <label class="cflo"></label>
              </div>
              <!-- <div class="col-sm-3 no-padding">
                  <label class="cflo">Body Type :</label>
              </div> -->
              <?php if(isset($personal_id) && !empty($personal_id)){ ?>
              <div class="col-sm-10 no-padding">
                 <input value="Cooking"   type="checkbox" name="hobbies[]" <?php if (in_array("Cooking", $hobbies)){?> checked <?php } ?>> Cooking &nbsp;&nbsp;
                  <input value="Pets"  type="checkbox" name="hobbies[]" <?php if (in_array("Pets", $hobbies)){?> checked <?php } ?>> Pets <br>
                  <input value="Playing Musical Instruments"  type="checkbox" name="hobbies[]" <?php if (in_array("Playing Musical Instruments", $hobbies)){?> checked <?php } ?>> Playing Musical Instruments <br>
                  <input value="Nature"  type="checkbox" name="hobbies[]" <?php if (in_array("Nature", $hobbies)){?> checked <?php } ?>> Nature &nbsp;&nbsp;
                  <input value="Dancing"  type="checkbox" name="hobbies[]" <?php if (in_array("Dancing", $hobbies)){?> checked <?php } ?>> Dancing <br>
                  <input value="Internet Surfing"  type="checkbox" name="hobbies[]" <?php if (in_array("Internet Surfing", $hobbies)){?> checked <?php } ?>> Internet Surfing <br>
                  <input value="Drawing"  type="checkbox" name="hobbies[]" <?php if (in_array("Drawing", $hobbies)){?> checked <?php } ?>> Drawing &nbsp;&nbsp;
                  <input value="Photography"  type="checkbox" name="hobbies[]" <?php if (in_array("Photography", $hobbies)){?> checked <?php } ?>> Photography <br>
                  <input value="Gardening / Landscaping"  type="checkbox" name="hobbies[]" <?php if (in_array("Gardening / Landscaping", $hobbies)){?> checked <?php } ?>> Gardening / Landscaping <br>
                  <input value="Painting"  type="checkbox" name="hobbies[]" <?php if (in_array("Painting", $hobbies)){?> checked <?php } ?>> Painting &nbsp;&nbsp;
                  <input value="Traveling"  type="checkbox" name="hobbies[]" <?php if (in_array("Traveling", $hobbies)){?> checked <?php } ?>> Traveling <br>
                  <input value="Art / Handicraft"  type="checkbox" name="hobbies[]" <?php if (in_array("Art / Handicraft", $hobbies)){?> checked <?php } ?>> Art / Handicraft <br>
                  <input value="Puzzles"  type="checkbox" name="hobbies[]" <?php if (in_array("Puzzles", $hobbies)){?> checked <?php } ?>> Puzzles &nbsp;&nbsp;
                  <input value="Movies"  type="checkbox" name="hobbies[]" <?php if (in_array("Movies", $hobbies)){?> checked <?php } ?>> Movies <br>
                  <input value="Acting"  type="checkbox" name="hobbies[]" <?php if (in_array("Acting", $hobbies)){?> checked <?php } ?>> Acting &nbsp;&nbsp;
                  <input value="Astronomy"  type="checkbox" name="hobbies[]" <?php if (in_array("Astronomy", $hobbies)){?> checked <?php } ?>> Astronomy <br>
                  <input value="Astrology"  type="checkbox" name="hobbies[]" <?php if (in_array("Astrology", $hobbies)){?> checked <?php } ?>> Astrology &nbsp;&nbsp;
                  <input value="Collectibles"  type="checkbox" name="hobbies[]" <?php if (in_array("Collectibles", $hobbies)){?> checked <?php } ?>> Collectibles <br>
                  <input value="Crosswords"  type="checkbox" name="hobbies[]" <?php if (in_array("Crosswords", $hobbies)){?> checked <?php } ?>> Crosswords &nbsp;&nbsp;
                  <input value="Film-making"  type="checkbox" name="hobbies[]" <?php if (in_array("Film-making", $hobbies)){?> checked <?php } ?>> Film-making <br>
                  <input value="Fishing"  type="checkbox" name="hobbies[]" <?php if (in_array("Fishing", $hobbies)){?> checked <?php } ?>> Fishing &nbsp;&nbsp;
                  <input value="Graphology"  type="checkbox" name="hobbies[]" <?php if (in_array("Graphology", $hobbies)){?> checked <?php } ?>> Graphology <br>
                  <input value="Numerology"  type="checkbox" name="hobbies[]" <?php if (in_array("Numerology", $hobbies)){?> checked <?php } ?>> Numerology &nbsp;&nbsp;
                  <input value="Palmistry"  type="checkbox" name="hobbies[]" <?php if (in_array("Palmistry", $hobbies)){?> checked <?php } ?>> Palmistry <br>
                  <input value="Playing musical instruments"  type="checkbox" name="hobbies[]" <?php if (in_array("Playing musical instruments", $hobbies)){?> checked <?php } ?>> Playing musical instruments &nbsp;&nbsp;
                 
              </div> <?php  } else { ?>
                <div class="col-sm-10 no-padding">
                 <input value="Cooking"   type="checkbox" name="hobbies[]"> Cooking &nbsp;&nbsp;
                  <input value="Music"  type="checkbox" name="hobbies[]"> Music &nbsp;&nbsp;
                  <input value="Reading"  type="checkbox" name="hobbies[]"> Reading <br>
                  <input value="Nature"  type="checkbox" name="hobbies[]"> Nature &nbsp;&nbsp;
                  <input value="Dancing"  type="checkbox" name="hobbies[]"> Dancing <br>
                  <input value="Internet"  type="checkbox" name="hobbies[]"> Internet <br>
                  <input value="Drawing"  type="checkbox" name="hobbies[]"> Drawing &nbsp;&nbsp;
                  <input value="Photography"  type="checkbox" name="hobbies[]"> Photography <br>
                  <input value="Gardening / Landscaping"  type="checkbox" name="hobbies[]" > Gardening / Landscaping <br>
                  <input value="Painting"  type="checkbox" name="hobbies[]" > Painting &nbsp;&nbsp;
                  <input value="Traveling"  type="checkbox" name="hobbies[]" > Traveling <br>
                  <input value="Art / Handicraft"  type="checkbox" name="hobbies[]" > Art / Handicraft <br>
                  <input value="Puzzles"  type="checkbox" name="hobbies[]" > Puzzles &nbsp;&nbsp;
                  <input value="Movies"  type="checkbox" name="hobbies[]" > Movies <br>
                  <input value="Acting"  type="checkbox" name="hobbies[]" > Acting &nbsp;&nbsp;
                  <input value="Astronomy"  type="checkbox" name="hobbies[]" > Astronomy <br>
                  <input value="Astrology"  type="checkbox" name="hobbies[]" > Astrology &nbsp;&nbsp;
                  <input value="Collectibles"  type="checkbox" name="hobbies[]" > Collectibles <br>
                  <input value="Crosswords"  type="checkbox" name="hobbies[]" > Crosswords &nbsp;&nbsp;
                  <input value="Film-making"  type="checkbox" name="hobbies[]" > Film-making <br>
                  <input value="Fishing"  type="checkbox" name="hobbies[]" > Fishing &nbsp;&nbsp;
                  <input value="Graphology"  type="checkbox" name="hobbies[]" > Graphology <br>
                  <input value="Numerology"  type="checkbox" name="hobbies[]" > Numerology &nbsp;&nbsp;
                  <input value="Palmistry"  type="checkbox" name="hobbies[]" > Palmistry <br>
                  <input value="Playing musical instruments"  type="checkbox" name="hobbies[]" > Playing musical instruments &nbsp;&nbsp;
              </div>
              <?php } ?>
              <div class="col-sm-1 no-padding">
                  <label class="cflo"></label>
              </div>

            <div class="row  to-fmid">
                <div class="col-sm-1 no-padding">
                    <label class="cflo"></label>
                </div>
                <div class="col-sm-2 no-padding">
                    <label class="cflo">Others :</label>
                </div>
                <div class="col-sm-8">
                  <input name="hobbies_other"  type="text" min="0" placeholder="Enter your hobbies and interests" class="form-control sml-frm input-sm" value="<?php echo isset($data['hobbies_other'])?$data['hobbies_other']:''?>">
                </div>
                <div class="col-sm-1 no-padding">
                    <label class="cflo"></label>
                </div>
            </div>
            </div>
        </div>

        <?php 
        $data_new=ob_get_clean();

        ob_start();
        ?>

        <div id="cuisine_div">
                <div class="row  to-fmid">
                    <div class="col-sm-1 no-padding">
                        <label class="cflo"></label>
                    </div>
                    <!-- <div class="col-sm-3 no-padding">
                        <label class="cflo">Body Type :</label>
                    </div> -->
                    <?php if(isset($personal_id) && !empty($personal_id)){ ?>
                    <div class="col-sm-10 no-padding">
                       <input value="Arabic"   type="checkbox" name="cuisine[]" <?php if (in_array("Arabic", $cuisine)){?> checked <?php } ?>> Arabic &nbsp;&nbsp;
                        <input value="Bengali"  type="checkbox" name="cuisine[]" <?php if (in_array("Bengali", $cuisine)){?> checked <?php } ?>> Bengali &nbsp;&nbsp;
                        <input value="Chinese"  type="checkbox" name="cuisine[]" <?php if (in_array("Chinese", $cuisine)){?> checked <?php } ?>> Chinese <br>
                        <input value="Continental"  type="checkbox" name="cuisine[]" <?php if (in_array("Continental", $cuisine)){?> checked <?php } ?>> Continental &nbsp;&nbsp;
                        <input value="Gujarati"  type="checkbox" name="cuisine[]" <?php if (in_array("Gujarati", $cuisine)){?> checked <?php } ?>> Gujarati <br>
                        <input value="Italian"  type="checkbox" name="cuisine[]" <?php if (in_array("Italian", $cuisine)){?> checked <?php } ?>> Italian &nbsp;&nbsp;
                        <input value="Konkan"  type="checkbox" name="cuisine[]" <?php if (in_array("Konkan", $cuisine)){?> checked <?php } ?>> Konkan &nbsp;&nbsp;
                        <input value="Mexican"  type="checkbox" name="cuisine[]" <?php if (in_array("Mexican", $cuisine)){?> checked <?php } ?>> Mexican <br>
                        <input value="Moghlai"  type="checkbox" name="cuisine[]" <?php if (in_array("Moghlai", $cuisine)){?> checked <?php } ?>> Moghlai &nbsp;&nbsp;
                        <input value="Not a foodie!"  type="checkbox" name="cuisine[]" <?php if (in_array("Not a foodie!", $cuisine)){?> checked <?php } ?>> Not a foodie! <br>
                        <input value="Punjabi"  type="checkbox" name="cuisine[]" <?php if (in_array("Punjabi", $cuisine)){?> checked <?php } ?>> Punjabi &nbsp;&nbsp;
                        <input value="Rajasthani"  type="checkbox" name="cuisine[]" <?php if (in_array("Rajasthani", $cuisine)){?> checked <?php } ?>> Rajasthani <br>
                        <input value="South Indian"  type="checkbox" name="cuisine[]" <?php if (in_array("South Indian", $cuisine)){?> checked <?php } ?>> South Indian &nbsp;&nbsp;
                        <input value="Sushi"  type="checkbox" name="cuisine[]" <?php if (in_array("Sushi", $cuisine)){?> checked <?php } ?>> Sushi  <br>
                        <input value="Thai"  type="checkbox" name="cuisine[]" <?php if (in_array("Thai", $cuisine)){?> checked <?php } ?>> Thai &nbsp;&nbsp;
                        <input value="I am a foodie"  type="checkbox" name="cuisine[]" <?php if (in_array("I am a foodie", $cuisine)){?> checked <?php } ?>> I am a foodie &nbsp;&nbsp;
                    </div> <?php  } else { ?>
                      <div class="col-sm-10 no-padding">
                       <input value="Arabic"   type="checkbox" name="cuisine[]" > Arabic &nbsp;&nbsp;
                        <input value="Bengali"  type="checkbox" name="cuisine[]" > Bengali &nbsp;&nbsp;
                        <input value="Chinese"  type="checkbox" name="cuisine[]" > Chinese <br>
                        <input value="Continental"  type="checkbox" name="cuisine[]" > Continental &nbsp;&nbsp;
                        <input value="Gujarati"  type="checkbox" name="cuisine[]" > Gujarati <br>
                        <input value="Italian"  type="checkbox" name="cuisine[]" > Italian &nbsp;&nbsp;
                        <input value="Konkan"  type="checkbox" name="cuisine[]" > Konkan &nbsp;&nbsp;
                        <input value="Mexican"  type="checkbox" name="cuisine[]" > Mexican <br>
                        <input value="Moghlai"  type="checkbox" name="cuisine[]" > Moghlai &nbsp;&nbsp;
                        <input value="Not a foodie!"  type="checkbox" name="cuisine[]" > Not a foodie! <br>
                        <input value="Punjabi"  type="checkbox" name="cuisine[]" > Punjabi &nbsp;&nbsp;
                        <input value="Rajasthani"  type="checkbox" name="cuisine[]"> Rajasthani <br>
                        <input value="South Indian"  type="checkbox" name="cuisine[]" > South Indian &nbsp;&nbsp;
                        <input value="Sushi"  type="checkbox" name="cuisine[]" > Sushi  <br>
                        <input value="Thai"  type="checkbox" name="cuisine[]" > Thai &nbsp;&nbsp;
                        <input value="I am a foodie"  type="checkbox" name="cuisine[]" > I am a foodie &nbsp;&nbsp;
                    </div> <?php  } ?>
                    <div class="col-sm-1 no-padding">
                        <label class="cflo"></label>
                    </div>
                </div>

                <div class="row  to-fmid">
                    <div class="col-sm-1 no-padding">
                        <label class="cflo"></label>
                    </div>
                    <div class="col-sm-2 no-padding">
                        <label class="cflo">Others :</label>
                    </div>
                    <div class="col-sm-8">
                      <input name="cuisine_other"  type="text" min="0" placeholder="Enter your hobbies and interests" class="form-control sml-frm input-sm" value="<?php echo isset($data['cuisine_other'])?$data['cuisine_other']:''?>" >
                    </div>
                    <div class="col-sm-1 no-padding">
                        <label class="cflo"></label>
                    </div>
                </div>
              </div>

        <?php 
        $data_new1=ob_get_clean();


        ob_start();
        ?>

        <div id="all_div">
              <h1>What are your dress type?</h1>
              
              
              <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <!-- <div class="col-sm-3 no-padding">
                      <label class="cflo">Body Type :</label>
                  </div> -->
                  <?php if(isset($personal_id) && !empty($personal_id)){ ?>
                  <div class="col-sm-10 no-padding">
                     <input value="Casual wear"   type="checkbox" name="dress_type[]" <?php if (in_array("Casual wear", $dress_type)){?> checked <?php } ?>> Casual wear &nbsp;&nbsp;
                      <input value="Designer wear"  type="checkbox" name="dress_type[]" <?php if (in_array("Designer wear", $dress_type)){?> checked <?php } ?>> Designer wear &nbsp;&nbsp;
                      <input value="Indian/Ethenic wear"  type="checkbox" name="dress_type[]" <?php if (in_array("Indian/Ethenic wear", $dress_type)){?> checked <?php } ?>> Indian/Ethenic wear <br>
                      <input value="Western formal wear"  type="checkbox" name="dress_type[]" <?php if (in_array("Western formal wear", $dress_type)){?> checked <?php } ?>> Western formal wear &nbsp;&nbsp;
                      <!-- <input value="Pant"  type="checkbox" name="dress_type[]" <?php if (in_array("Pant", $dress_type)){?> checked <?php } ?>> Pant &nbsp;&nbsp; -->
                  </div> <?php  } else { ?>
                   <div class="col-sm-10 no-padding">
                     <input value="Casual wear"   type="checkbox" name="dress_type[]"> Casual wear &nbsp;&nbsp;
                      <input value="Designer wear"  type="checkbox" name="dress_type[]"> Designer wear &nbsp;&nbsp;
                      <input value="Indian/Ethenic wear"  type="checkbox" name="dress_type[]"> Indian/Ethenic wear <br>
                      <input value="Western formal wear"  type="checkbox" name="dress_type[]"> Western formal wear &nbsp;&nbsp;
                  </div> 
                <?php  } ?>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>

              <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <div class="col-sm-2 no-padding">
                      <label class="cflo">Others :</label>
                  </div>
                  <div class="col-sm-8">
                    <input name="dress_type_other"  type="text" min="0" placeholder="Enter your hobbies and interests" class="form-control sml-frm input-sm" value="<?php echo isset($data['dress_type_other'])?$data['dress_type_other']:''?>">
                  </div>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>

              <hr>

              <h1>Your favourite music</h1>
              <div class="row  to-fmid">
                  <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <!-- <div class="col-sm-3 no-padding">
                      <label class="cflo">Body Type :</label>
                  </div> -->
                  <?php if(isset($personal_id) && !empty($personal_id)){ ?>
                  <div class="col-sm-10 no-padding">
                     <input value="Blues"   type="checkbox" name="music[]" <?php if (in_array("Blues", $music)){?> checked <?php } ?>> Blues &nbsp;&nbsp;
                      <input value="Devotional"  type="checkbox" name="music[]" <?php if (in_array("Devotional", $music)){?> checked <?php } ?>> Devotional &nbsp;&nbsp;
                      <input value="Disco"  type="checkbox" name="music[]" <?php if (in_array("Disco", $music)){?> checked <?php } ?>> Disco &nbsp;&nbsp;<br>
                      <input value="Film Songs"  type="checkbox" name="music[]" <?php if (in_array("Film Songs", $music)){?> checked <?php } ?>> Film Songs &nbsp;&nbsp;
                      <input value="Ghazals"  type="checkbox" name="music[]" <?php if (in_array("Ghazals", $music)){?> checked <?php } ?>> Ghazals <br>
                      <input value="Hip-Hop"  type="checkbox" name="music[]" <?php if (in_array("Hip-Hop", $music)){?> checked <?php } ?>> Hip-Hop <br>
                      <input value="Heavy metal"  type="checkbox" name="music[]" <?php if (in_array("Heavy metal", $music)){?> checked <?php } ?>> Heavy metal &nbsp;&nbsp;
                      <input value="House music"  type="checkbox" name="music[]" <?php if (in_array("House music", $music)){?> checked <?php } ?>> House music <br>
                      <input value="Indian Classical"  type="checkbox" name="music[]" <?php if (in_array("Indian Classical", $music)){?> checked <?php } ?>> Indian Classical &nbsp;&nbsp;
                      <input value="Indipop"  type="checkbox" name="music[]" <?php if (in_array("Indipop", $music)){?> checked <?php } ?>> Indipop <br>
                      <input value="Jazz"  type="checkbox" name="music[]" <?php if (in_array("Jazz", $music)){?> checked <?php } ?>> Jazz &nbsp;&nbsp;
                      <input value="Pop"  type="checkbox" name="music[]" <?php if (in_array("Pop", $music)){?> checked <?php } ?>> Pop <br>
                      <input value="Qawalis"  type="checkbox" name="music[]" <?php if (in_array("Qawalis", $music)){?> checked <?php } ?>> Qawalis &nbsp;&nbsp;
                      <input value="Rap"  type="checkbox" name="music[]" <?php if (in_array("Rap", $music)){?> checked <?php } ?>> Rap <br>
                      <input value="Reggae"  type="checkbox" name="music[]" <?php if (in_array("Reggae", $music)){?> checked <?php } ?>> Reggae <br>
                      <input value="Sufi"  type="checkbox" name="music[]" <?php if (in_array("Sufi", $music)){?> checked <?php } ?>> Sufi <br>
                      <input value="Techno"  type="checkbox" name="music[]" <?php if (in_array("Techno", $music)){?> checked <?php } ?>> Techno &nbsp;&nbsp;
                      <input value="Western Classical"  type="checkbox" name="music[]" <?php if (in_array("Western Classical", $music)){?> checked <?php } ?>> Western Classical <br>
                      <input value="I am not a music fan"  type="checkbox" name="music[]" <?php if (in_array("I am not a music fan", $music)){?> checked <?php } ?>> I am not a music fan <br>
                      
                  </div> <?php  } else { ?>
                    <div class="col-sm-10 no-padding">
                     <input value="Blues"   type="checkbox" name="music[]" > Blues &nbsp;&nbsp;
                      <input value="Devotional"  type="checkbox" name="music[]" > Devotional &nbsp;&nbsp;
                      <input value="Disco"  type="checkbox" name="music[]" > Disco &nbsp;&nbsp;<br>
                      <input value="Film Songs"  type="checkbox" name="music[]" > Film Songs &nbsp;&nbsp;
                      <input value="Ghazals"  type="checkbox" name="music[]" > Ghazals <br>
                      <input value="Hip-Hop"  type="checkbox" name="music[]" > Hip-Hop <br>
                      <input value="Heavy metal"  type="checkbox" name="music[]" > Heavy metal &nbsp;&nbsp;
                      <input value="House music"  type="checkbox" name="music[]" > House music <br>
                      <input value="Indian Classical"  type="checkbox" name="music[]"> Indian Classical &nbsp;&nbsp;
                      <input value="Indipop"  type="checkbox" name="music[]" > Indipop <br>
                      <input value="Jazz"  type="checkbox" name="music[]" > Jazz &nbsp;&nbsp;
                      <input value="Pop"  type="checkbox" name="music[]" > Pop <br>
                      <input value="Qawalis"  type="checkbox" name="music[]" > Qawalis &nbsp;&nbsp;
                      <input value="Rap"  type="checkbox" name="music[]" > Rap <br>
                      <input value="Reggae"  type="checkbox" name="music[]" > Reggae <br>
                      <input value="Sufi"  type="checkbox" name="music[]" > Sufi <br>
                      <input value="Techno"  type="checkbox" name="music[]" > Techno &nbsp;&nbsp;
                      <input value="Western Classical"  type="checkbox" name="music[]" > Western Classical <br>
                      <input value="I am not a music fan"  type="checkbox" name="music[]" > I am not a music fan <br>
                  </div>  <?php  } ?>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>
              </div>

              <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <div class="col-sm-2 no-padding">
                      <label class="cflo">Others :</label>
                  </div>
                  <div class="col-sm-8">
                    <input name="music_other"  type="text" min="0" placeholder="Enter your favourite music" class="form-control sml-frm input-sm" value="<?php echo isset($data['music_other'])?$data['music_other']:''?>" >
                  </div>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>

              <hr>

              <h1>Sports/Fitness you like</h1>
              <div class="row  to-fmid">
                  <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <!-- <div class="col-sm-3 no-padding">
                      <label class="cflo">Body Type :</label>
                  </div> -->
                  <?php if(isset($personal_id) && !empty($personal_id)){ ?>
                  <div class="col-sm-10 no-padding">
                     <input value="Adventure Sports"   type="checkbox" name="sports[]" <?php if (in_array("Adventure Sports", $sports)){?> checked <?php } ?>> Adventure Sports &nbsp;&nbsp;
                      <input value="Aerobics"  type="checkbox" name="sports[]" <?php if (in_array("Aerobics", $sports)){?> checked <?php } ?>> Aerobics &nbsp;&nbsp;
                      <input value="Basketball"  type="checkbox" name="sports[]" <?php if (in_array("Basketball", $sports)){?> checked <?php } ?>> Basketball &nbsp;&nbsp;<br>
                      <input value="Badminton"  type="checkbox" name="sports[]" <?php if (in_array("Badminton", $sports)){?> checked <?php } ?>> Badminton &nbsp;&nbsp;
                      <input value="Bowling"  type="checkbox" name="sports[]" <?php if (in_array("Bowling", $sports)){?> checked <?php } ?>> Bowling <br>
                      <input value="Billiards / Snooker / Pool"  type="checkbox" name="sports[]" <?php if (in_array("Billiards / Snooker / Pool", $sports)){?> checked <?php } ?>> Billiards / Snooker / Pool <br>
                      <input value="Cricket"  type="checkbox" name="sports[]" <?php if (in_array("Cricket", $sports)){?> checked <?php } ?>> Cricket &nbsp;&nbsp;
                      <input value="Cycling"  type="checkbox" name="sports[]" <?php if (in_array("Cycling", $sports)){?> checked <?php } ?>> Cycling <br>
                      <input value="Card games"  type="checkbox" name="sports[]" <?php if (in_array("Card games", $sports)){?> checked <?php } ?>> Card games &nbsp;&nbsp;
                      <input value="Carrom"  type="checkbox" name="sports[]" <?php if (in_array("Carrom", $sports)){?> checked <?php } ?>> Carrom <br>
                      <input value="Chess"  type="checkbox" name="sports[]" <?php if (in_array("Chess", $sports)){?> checked <?php } ?>> Chess &nbsp;&nbsp;
                      <input value="Football"  type="checkbox" name="sports[]" <?php if (in_array("Football", $sports)){?> checked <?php } ?>> Football <br>
                      <input value="Golf"  type="checkbox" name="sports[]" <?php if (in_array("Golf", $sports)){?> checked <?php } ?>> Golf &nbsp;&nbsp;
                      <input value="Hockey"  type="checkbox" name="sports[]" <?php if (in_array("Hockey", $sports)){?> checked <?php } ?>> Hockey <br>
                      <input value="Jogging / Walking"  type="checkbox" name="sports[]" <?php if (in_array("Jogging / Walking", $sports)){?> checked <?php } ?>> Jogging / Walking <br>
                      <input value="Martial Arts"  type="checkbox" name="sports[]" <?php if (in_array("Martial Arts", $sports)){?> checked <?php } ?>> Martial Arts <br>
                      <input value="Scrabble"  type="checkbox" name="sports[]" <?php if (in_array("Scrabble", $sports)){?> checked <?php } ?>> Scrabble &nbsp;&nbsp;
                      <input value="Squash"  type="checkbox" name="sports[]" <?php if (in_array("Squash", $sports)){?> checked <?php } ?>> Squash <br>
                      <input value="Swimming / water sports"  type="checkbox" name="sports[]" <?php if (in_array("Swimming / water sports", $sports)){?> checked <?php } ?>> Swimming / water sports <br>
                      <input value="Table-tennis"  type="checkbox" name="sports[]" <?php if (in_array("Table-tennis", $sports)){?> checked <?php } ?>> Table-tennis <br>
                      <input value="Tennis"  type="checkbox" name="sports[]" <?php if (in_array("Tennis", $sports)){?> checked <?php } ?>> Tennis &nbsp;&nbsp;
                      <input value="Volleyball"  type="checkbox" name="sports[]" <?php if (in_array("Volleyball", $sports)){?> checked <?php } ?>> Volleyball <br>
                      <input value="Weight lifting"  type="checkbox" name="sports[]" <?php if (in_array("Weight lifting", $sports)){?> checked <?php } ?>> Weight lifting <br>
                      <input value="Yoga / meditation"  type="checkbox" name="sports[]" <?php if (in_array("Yoga / meditation", $sports)){?> checked <?php } ?>> Yoga / meditation <br>

                  </div> <?php  } else { ?>
                    <div class="col-sm-10 no-padding">
                     <input value="Adventure Sports"   type="checkbox" name="sports[]" > Adventure Sports &nbsp;&nbsp;
                      <input value="Aerobics"  type="checkbox" name="sports[]" > Aerobics &nbsp;&nbsp;
                      <input value="Basketball"  type="checkbox" name="sports[]" > Basketball &nbsp;&nbsp;<br>
                      <input value="Badminton"  type="checkbox" name="sports[]" > Badminton &nbsp;&nbsp;
                      <input value="Bowling"  type="checkbox" name="sports[]" > Bowling <br>
                      <input value="Billiards / Snooker / Pool"  type="checkbox" name="sports[]" > Billiards / Snooker / Pool <br>
                      <input value="Cricket"  type="checkbox" name="sports[]" > Cricket &nbsp;&nbsp;
                      <input value="Cycling"  type="checkbox" name="sports[]" > Cycling <br>
                      <input value="Card games"  type="checkbox" name="sports[]" > Card games &nbsp;&nbsp;
                      <input value="Carrom"  type="checkbox" name="sports[]"> Carrom <br>
                      <input value="Chess"  type="checkbox" name="sports[]" > Chess &nbsp;&nbsp;
                      <input value="Football"  type="checkbox" name="sports[]" > Football <br>
                      <input value="Golf"  type="checkbox" name="sports[]"> Golf &nbsp;&nbsp;
                      <input value="Hockey"  type="checkbox" name="sports[]" > Hockey <br>
                      <input value="Jogging / Walking"  type="checkbox" name="sports[]"> Jogging / Walking <br>
                      <input value="Martial Arts"  type="checkbox" name="sports[]" > Martial Arts <br>
                      <input value="Scrabble"  type="checkbox" name="sports[]" > Scrabble &nbsp;&nbsp;
                      <input value="Squash"  type="checkbox" name="sports[]" > Squash <br>
                      <input value="Swimming / water sports"  type="checkbox" name="sports[]" > Swimming / water sports <br>
                      <input value="Table-tennis"  type="checkbox" name="sports[]" > Table-tennis <br>
                      <input value="Tennis"  type="checkbox" name="sports[]" > Tennis &nbsp;&nbsp;
                      <input value="Volleyball"  type="checkbox" name="sports[]" > Volleyball <br>
                      <input value="Weight lifting"  type="checkbox" name="sports[]" > Weight lifting <br>
                      <input value="Yoga / meditation"  type="checkbox" name="sports[]" > Yoga / meditation <br>
                  </div> <?php  } ?>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>
              </div>

              <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <div class="col-sm-2 no-padding">
                      <label class="cflo">Others :</label>
                  </div>
                  <div class="col-sm-8">
                    <input name="sports_other"  type="text" min="0" placeholder="Enter your favourite sports" class="form-control sml-frm input-sm" value="<?php echo isset($data['sports_other'])?$data['sports_other']:''?>" >
                  </div>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>

              <hr>

              <h1>Spoken languages</h1>
              <div class="row  to-fmid">
                  <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <!-- <div class="col-sm-3 no-padding">
                      <label class="cflo">Body Type :</label>
                  </div> -->
                  <?php if(isset($personal_id) && !empty($personal_id)){ ?>
                  <div class="col-sm-10 no-padding">
                     <input value="SSK Savji"   type="checkbox" name="spoken_languages[]" <?php if (in_array("SSK Savji", $spoken_languages)){?> checked <?php } ?>> SSK Savji &nbsp;&nbsp;
                      <input value="Pategar"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Pategar", $spoken_languages)){?> checked <?php } ?>> Pategar <br>
                      <input value="Khatri"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Khatri", $spoken_languages)){?> checked <?php } ?>> Khatri &nbsp;&nbsp;
                      <input value="Kannada"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Kannada", $spoken_languages)){?> checked <?php } ?>> Kannada  <br>
                      <input value="Marathi"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Marathi", $spoken_languages)){?> checked <?php } ?>> Marathi &nbsp;&nbsp;
                      <input value="Hindi"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Hindi", $spoken_languages)){?> checked <?php } ?>> Hindi  <br>
                      <input value="English"  type="checkbox" name="spoken_languages[]" <?php if (in_array("English", $spoken_languages)){?> checked <?php } ?>> English &nbsp;&nbsp;
                      <input value="Telugu"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Telugu", $spoken_languages)){?> checked <?php } ?>> Telugu  <br>
                      <input value="Tamil"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Tamil", $spoken_languages)){?> checked <?php } ?>> Tamil &nbsp;&nbsp;
                      <input value="Malayalam"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Malayalam", $spoken_languages)){?> checked <?php } ?>> Malayalam  <br>
                  </div> <?php  } else { ?>
                    <div class="col-sm-10 no-padding">
                     <input value="SSK Savji"   type="checkbox" name="spoken_languages[]" > SSK Savji &nbsp;&nbsp;
                      <input value="Pategar"  type="checkbox" name="spoken_languages[]" > Pategar <br>
                      <input value="Khatri"  type="checkbox" name="spoken_languages[]" > Khatri &nbsp;&nbsp;
                      <input value="Kannada"  type="checkbox" name="spoken_languages[]" > Kannada  <br>
                      <input value="Marathi"  type="checkbox" name="spoken_languages[]" > Marathi &nbsp;&nbsp;
                      <input value="Hindi"  type="checkbox" name="spoken_languages[]" > Hindi  <br>
                      <input value="English"  type="checkbox" name="spoken_languages[]" > English &nbsp;&nbsp;
                      <input value="Telugu"  type="checkbox" name="spoken_languages[]" > Telugu  <br>
                      <input value="Tamil"  type="checkbox" name="spoken_languages[]" > Tamil &nbsp;&nbsp;
                      <input value="Malayalam"  type="checkbox" name="spoken_languages[]" > Malayalam  <br>
                  </div> <?php  } ?>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>
              </div>

              <div class="row  to-fmid">
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
                  <div class="col-sm-2 no-padding">
                      <label class="cflo">Others :</label>
                  </div>
                  <div class="col-sm-8">
                    <input name="spoken_languages_other"  type="text" min="0" placeholder="Enter Spoken languages" class="form-control sml-frm input-sm" value="<?php echo isset($data['spoken_languages_other'])?$data['spoken_languages_other']:''?>" >
                  </div>
                  <div class="col-sm-1 no-padding">
                      <label class="cflo"></label>
                  </div>
              </div>

              <hr>
            </div>

        <?php 
        $data_new11=ob_get_clean();
        
    }
    else
    {   $success = true;

    }

    

    echo json_encode(array(
        "data"=>$data,
        "data_new"=>$data_new,
        "data_new1"=>$data_new1,
        "data_new11"=>$data_new11,
        "success"=>$success
        //"message" => $message
    ));
}




if(isset($_POST["type"]) && $_POST["type"]== 'AddIDBadge')
{
    $success = false;
    $message  = "";
    $filename1  = "";
    $filename2  = "";
    $filename3  = "";
    
    extract($_POST);
    $u_id = $_SESSION['u_id'];
    $date=date("Y-m-d H:i:s");
    // print_r($_POST);die;
    $stm_col1= $stm_val1= $stm_update1= "";
    $uploadOk1 = 1; 
    if(isset($_FILES['image1']) && $_FILES['image1']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image1"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image1"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk1 = 0;
        }
        // $extallowed = array("jpg","jpeg","png","gif","bmp");
        // if (!in_array($imageFileType,$extallowed)){
        //     $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
        //     $uploadOk1 = 0;
        // }
        
        $filename1=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename1;
        if ($uploadOk1 != 0) {
            
            if (move_uploaded_file($_FILES["image1"]["tmp_name"], $filepath)) 
            { 
                $stm_col1=",image";
                $stm_val1=",'".$filename1."'";
                $stm_update1=",image='$filename1'";
                
            } else {
                $uploadOk1 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }

    $stm_col2= $stm_val2= $stm_update2= "";
    $uploadOk2 = 1; 
    if(isset($_FILES['image2']) && $_FILES['image2']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image2"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image2"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk2 = 0;
        }
        $extallowed = array("jpg","jpeg","png","gif","bmp");
        if (!in_array($imageFileType,$extallowed)){
            $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
            $uploadOk2 = 0;
        }
        
        $filename2=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename2;
        if ($uploadOk2 != 0) {
            
            if (move_uploaded_file($_FILES["image2"]["tmp_name"], $filepath)) 
            { 
                $stm_col2=",image";
                $stm_val2=",'".$filename2."'";
                $stm_update2=",image='$filename2'";
                
            } else {
                $uploadOk2 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }

    $stm_col3= $stm_val3= $stm_update3= "";
    $uploadOk3 = 1; 
    if(isset($_FILES['image3']) && $_FILES['image3']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image3"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image3"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk3 = 0;
        }
        $extallowed = array("jpg","jpeg","png","gif","bmp");
        if (!in_array($imageFileType,$extallowed)){
            $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
            $uploadOk3 = 0;
        }
        
        $filename3=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename3;
        if ($uploadOk3 != 0) {
            
            if (move_uploaded_file($_FILES["image3"]["tmp_name"], $filepath)) 
            { 
                $stm_col3=",image";
                $stm_val3=",'".$filename3."'";
                $stm_update3=",image='$filename3'";
                
            } else {
                $uploadOk3 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }

    
    // echo $uploadOk2;
    if ($uploadOk1 == 1)
    {
        if(!empty($photo_id))
        {
            $sql = "UPDATE add_photo SET `image1` = '$filename1',`image2` = '$filename2',`image4`='$filename4',`image3` = '$filename3',`image5`='$filename5',`image6`='$filename6' WHERE photo_id='$photo_id'";
            
            $query = mysqli_query($db,$sql) or die(mysqli_error($db));
            if($query){
                $success = true;
                $message = "Updated Successfully";
                $url = 'main.php';
            }
            else{
                $message = "Problem occure while saving.";
            }
        }

        else 
        {
            
            // echo    "INSERT INTO `projects`(`image_slider`,`slider_header`) VALUES ('$filename1','$slider_header')";   

            $q1=mysqli_query($db,"INSERT INTO `identity_badge`(`driving_license`,`pan_card`,`passport`,`status`,`u_id`) VALUES ('$filename1','$filename2','$filename3','0','$u_id')");
            if($q1)
            {
                $success = true;
                $message = "Added Successfully";
                //$url = 'basic_details.php';
            }
            else{
                $message = "File cannot be uploaded";
            }
        }

    }
       

    
        
    
        
    echo json_encode(array(
        "success"=>$success,
        //"url"=>$url,
        "message" => $message
    ));
}


if(isset($_POST["type"]) && $_POST["type"]== 'AddProBadge')
{
    $success = false;
    $message  = "";
    $filename1  = "";
    $filename2  = "";
    
    extract($_POST);
    $u_id = $_SESSION['u_id'];
    $date=date("Y-m-d H:i:s");
    // print_r($_POST);die;
    $stm_col1= $stm_val1= $stm_update1= "";
    $uploadOk1 = 1; 
    if(isset($_FILES['image1']) && $_FILES['image1']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image1"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image1"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk1 = 0;
        }
        // $extallowed = array("jpg","jpeg","png","gif","bmp");
        // if (!in_array($imageFileType,$extallowed)){
        //     $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
        //     $uploadOk1 = 0;
        // }
        
        $filename1=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename1;
        if ($uploadOk1 != 0) {
            
            if (move_uploaded_file($_FILES["image1"]["tmp_name"], $filepath)) 
            { 
                $stm_col1=",image";
                $stm_val1=",'".$filename1."'";
                $stm_update1=",image='$filename1'";
                
            } else {
                $uploadOk1 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }

    $stm_col2= $stm_val2= $stm_update2= "";
    $uploadOk2 = 1; 
    if(isset($_FILES['image2']) && $_FILES['image2']['name'] != "")
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image2"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image2"]["size"] > 1000000000) {
            $message =  "Sorry, your Feature Image is too large.";
            $uploadOk2 = 0;
        }
        $extallowed = array("jpg","jpeg","png","gif","bmp");
        if (!in_array($imageFileType,$extallowed)){
            $message  = "Sorry,For Featured Image jpg & png extension files are allowed";
            $uploadOk2 = 0;
        }
        
        $filename2=uniqid().".".$imageFileType;
        $filepath=$target_dir.$filename2;
        if ($uploadOk2 != 0) {
            
            if (move_uploaded_file($_FILES["image2"]["tmp_name"], $filepath)) 
            { 
                $stm_col2=",image";
                $stm_val2=",'".$filename2."'";
                $stm_update2=",image='$filename2'";
                
            } else {
                $uploadOk2 = 0;
                $message  = "Sorry, your file was not uploaded.";
            }
        }
    }


    
    // echo $uploadOk2;
    if ($uploadOk1 == 1)
    {
        if(!empty($photo_id))
        {
            $sql = "UPDATE add_photo SET `image1` = '$filename1',`image2` = '$filename2',`image4`='$filename4',`image3` = '$filename3',`image5`='$filename5',`image6`='$filename6' WHERE photo_id='$photo_id'";
            
            $query = mysqli_query($db,$sql) or die(mysqli_error($db));
            if($query){
                $success = true;
                $message = "Updated Successfully";
                $url = 'main.php';
            }
            else{
                $message = "Problem occure while saving.";
            }
        }

        else 
        {
            
            // echo    "INSERT INTO `projects`(`image_slider`,`slider_header`) VALUES ('$filename1','$slider_header')";   

            $q1=mysqli_query($db,"INSERT INTO `professional_badge`(`education`,`salary`,`status`,`u_id`) VALUES ('$filename1','$filename2','0','$u_id')");
            if($q1)
            {
                $success = true;
                $message = "Added Successfully";
                //$url = 'basic_details.php';
            }
            else{
                $message = "File cannot be uploaded";
            }
        }

    }
       

    
        
    
        
    echo json_encode(array(
        "success"=>$success,
        //"url"=>$url,
        "message" => $message
    ));
}



/*
 * AddTransaction
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddTransaction")
{   
    $success = false;
    $message = "";
    extract($_POST);
    //print_r($_POST);die;
    $date=date("Y-m-d");
    $u_id = $_POST['u_id'];
    $order_id = mt_rand(100000, 999999);
    $length = 5;
    $unique_id1 = bin2hex(openssl_random_pseudo_bytes($length));
    $transaction_id = strtoupper($unique_id1);
    $status = '1';

    //echo "INSERT INTO `transaction`(`u_id`,`package_id`,`pack_name`,`duration`,`price`,`order_id`,`transaction_id`,`status`,`date`) VALUES ('$u_id','$package_id','$pack_name','$duration','$price','$order_id','$transaction_id','$status','$date')";
    $q1 = mysqli_query($db,"INSERT INTO `transaction`(`u_id`,`package_id`,`detail_id`,`pack_name`,`duration`,`price`,`order_id`,`transaction_id`,`status`,`date`) VALUES ('$u_id','$package_id','$detail_id','$pack_name','$duration','$price','$order_id','$transaction_id','$status','$date')");
    if($q1)
    {
        $success = true;
        $message= "Successfully Paid";
    }
    else
    {
        $message= "File cannot be uploaded";
    }


    echo json_encode(array(
        "success"=>$success,
        "message" => $message
    ));
}



/*
 * AddFeedback
 */
if(isset($_POST["type"]) && $_POST["type"] == "AddFeedback")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    $_POST['u_id'] = $_SESSION['u_id'];
    $_POST['date']=date("Y-m-d");
    $sql_str = "";
    foreach ($_POST as $key => $value) {
        if(is_array($value))
        {
            $value=implode(',', $value);
        }
        $value=mysqli_real_escape_string($db,$value);
        $sql_str .= "`$key`='$value',";
    }
    if(!empty($sql_str)){
        $sql_str = rtrim($sql_str,',');
    }

          
    $sql = "INSERT INTO feedback SET $sql_str";
    
    $query = mysqli_query($db,$sql) or die(mysqli_error($db));
    if($query){
        $appt_id=mysqli_insert_id($db);
        $message = "Send Successfully";
        $success = true;
        // $u_id = $_SESSION['u_id'];
        // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
        // $to = $delrecord981['email'];
        // $full_name = $delrecord981['full_name'];
        // $surname = $delrecord981['surname'];
        // $gender = $_POST['gender'];
        // $religion = $_POST['religion'];
        // $subject = "Details Added Successfully";
        // $body="
        //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
        //     <br>
        //     <p> Your Details Added Successfully.</p>
        //     <p> Gender : $gender </p>
        //     <p> Religion : $religion </p>
        //     <br>
        //     <p>Thank You</p>
        // ";
        // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

    }
    else{
        $message = "Problem occure while Sending.";
    }
        
    echo json_encode(array(
        "success"=>$success,
        "message" => $message
    ));
}




/*
 * AddFeedback
 */
if(isset($_POST["type"]) && $_POST["type"] == "UpdateEmail")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    
    $sql = "UPDATE `register` SET `email` = '$email' ";
    
    $query = mysqli_query($db,$sql) or die(mysqli_error($db));
    if($query){

        $message = "Updated Successfully";
        $success = true;
        // $u_id = $_SESSION['u_id'];
        // $delrecord981 = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `register` WHERE `u_id` = '$u_id'"));
        // $to = $delrecord981['email'];
        // $full_name = $delrecord981['full_name'];
        // $surname = $delrecord981['surname'];
        // $gender = $_POST['gender'];
        // $religion = $_POST['religion'];
        // $subject = "Details Added Successfully";
        // $body="
        //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
        //     <br>
        //     <p> Your Details Added Successfully.</p>
        //     <p> Gender : $gender </p>
        //     <p> Religion : $religion </p>
        //     <br>
        //     <p>Thank You</p>
        // ";
        // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );

    }
    else{
        $message = "Problem occure while Sending.";
    }
        
    echo json_encode(array(
        "success"=>$success,
        "message" => $message
    ));
}


if(isset($_POST["type"]) && $_POST["type"] == "ChangePass")
{   
    $success = false;
    $message = "";
    extract($_POST);
    unset($_POST['type']);
    $u_id= $_POST['u_id'];
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];
    $old_password= $_POST['old_password'];

    if ($password != $cpassword) {

        $message = "Password and Confim Password not matched";

    }
    else 
    {
        $data = mysqli_fetch_assoc(mysqli_query($db,"select * from register where `u_id` = '$u_id'"));
        if($data['password'] != $old_password){

            $message = "Old password is wrong";
        }
        else 
        {
            
                  
            $query =  mysqli_query($db,"UPDATE `register` SET `password`= '$password' WHERE `u_id` = '$u_id'");
            if($query)
            {
                $message = "Password changed successfully";
                $success = true;
            }
            else{
                $message = "Password cannot be updated";
            }
        }
    }   
    echo json_encode(array(
        "success"=>$success,
        "message" => $message
    ));
}



if(isset($_POST["type"]) && $_POST["type"]== 'ForgotPassword')
{
    $success = false;
    $message = "";
    $url="";
    $status=0;
    $email_mobile = $_POST['email_mobile'];
    
    
    $query = $db->query("select * from register where `email` = '$email_mobile' OR  `mobile` = '$email_mobile' ");
    $q = $query->num_rows;
    if($q>0)
    {
        $row = mysqli_fetch_assoc($query);
        
        $row['mobile'];
        $row['password'];
        $to = $row['email'];
        // $full_name = $delrecord981['full_name'];
        // $surname = $delrecord981['surname'];
        // $subject = "Your Password";
        // $body="
        //     <b style='text-transform:capitalize;'>Dear $full_name $surname, </b>
        //     <br>
        //     <p> Your Password is give below.</p>
        //     <p> Password : $row['password'] </p>
        //     <br>
        //     <p>Thank You</p>
        // ";
        // send_phpmail1( $full_name." ".$surname, $to ,"", "" , $subject, $body );
        $message = "Password sent to your registered mobile number or email";
        $success = true;
    }
    else
    {
        $message = "User is not registered";
    }

    
    echo json_encode(array(
        "success"=>$success,
        "message" => $message,
    ));
}





/*
 * SearchFrontProfile
 */
if(isset($_POST["type"]) && $_POST["type"] == "SearchFrontProfile")
{   
    $success = false;
    $message = "";
    $url = "";
    extract($_POST);
    //print_r($_POST);die;
    unset($_POST['type']);

    if (isset($_POST["marital_status"]))
    {
      $marital_status = $_POST["marital_status"];
      $marital_status; 
    } 
    else 
    {
      $marital_status = 'NULL';
      $_POST["marital_status"] = 'NULL';
    }
        

        if ($_POST['age_from'] || $_POST['age_to'] || $_POST['caste'] || $_POST['marital_status'])
        {

            // function reverse_birthday( $years ){
            //     return date('Y-m-d', strtotime($years . ' years ago'));
            //     }

            // $age_from = reverse_birthday($_POST['age_from']);
            
            // $age_to = reverse_birthday($_POST['age_to']);
            
            $user_id=array();

            $data = mysqli_query($db, "SELECT t1.*,t8.* FROM register t1 LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t8.`age` BETWEEN '$age_from' AND '$age_to' ");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);


            $data = mysqli_query($db, "SELECT t1.*,t2.*,t99.* FROM register t1 LEFT JOIN `register2` t2 ON t2.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t2.`caste` = '$caste'");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id);

            

            $data = mysqli_query($db, "SELECT t1.*,t3.*,t99.* FROM register t1 LEFT JOIN `register3` t3 ON t3.`u_id` = t1.`u_id` LEFT JOIN `register1` t99 ON t99.`u_id` = t1.`u_id` WHERE t3.`marital_status` = '$marital_status' ");
                while ($data_data = mysqli_fetch_assoc($data)) 
                {
                $user_id[] = $data_data['u_id'];
                }
                $user_id = array_unique($user_id); 

            
                if (empty($user_id)) {

                    $message = "No result found.";

                }
                else {

                    $_SESSION['user_id'] = $user_id;
                    $success = true;

                }



        }
        
    $message = "No result found.";
    
    
    
        
    echo json_encode(array(
        "success"=>$success,
        "url"=>$url,
        "message" => $message
    ));
}