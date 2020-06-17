<?php
session_start();
//Include database
include '../db_config.php';
ini_set('display_errors', 1);
//require_once __DIR__ . '/../assets1/lib/mpdf/vendor/autoload.php';
$imageurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$imageurl = str_replace("includes/adminfunction","assets/images/logo_dark.png",$imageurl);

if(isset($_POST['ajax_adminlogin']))
{
    $username = $_POST['ajax_username'];
    $password = $_POST['ajax_password'];

    $query = $db->query("select * from admin where username = '$username'");
    $q = $query->num_rows;
    if($q>0)
    {
        $row = mysqli_fetch_array($query);

        if ($row['status'] == 1)
        {
            if ($password == $row['password'])
            {
                $_SESSION['adminloggedin'] = $row['id'];
                $_SESSION['adminname'] = $row['name'];
                $_SESSION['adminusername'] = $row['email'];
                $_SESSION['ausername'] = $row['username'];
                echo json_encode(array(
                    "valid"=>1,
                    "message" => "Logged in successfully"
                ));
            }
            else
            {
                echo json_encode(array(
                    "valid"=>0,
                    "message" => "Incorrect credentials"
                ));
            }
        }
        else
        {
            echo json_encode(array(
                "valid"=>0,
                "message" => "Account not active contact administrator"
            ));
        }
    }
    else
    {
        echo json_encode(array(
            "valid"=>0,
            "message" => "Admin not register with us"
        ));
    }
}

/*
 * Change password
 */
if(isset($_POST['ajax_changepassword']))
{
    $adminid = $_SESSION['adminloggedin'];
    $current_password	= $_POST['ajax_current_password'] ;
    $new_password	= $_POST['ajax_new_password'];
    $confirm_password	= $_POST['ajax_confirm_password'];

    $new_password = encrypt_password($new_password);
    $data = mysqli_fetch_assoc(mysqli_query($db,"select * from admin where `id` = '$adminid'"));
    if (verify_password($current_password, $data['password']))
    {
        $query =  mysqli_query($db,"UPDATE `admin` SET `password`= '$new_password' WHERE `id` = '$adminid'");
        if($query)
        {
            
            echo json_encode(array(
                "valid"=>1,
                "message" => "Password updated successfully"
            ));
        }
        else
        {
            echo json_encode(array(
                "valid"=>0,
                "message" => "Password Cannot be Updated."
            ));
        }

    }
    else
    {
        echo json_encode(array(
            "valid"=>0,
            "message" => "Current password is incorrect"
        ));
    }
}

/*
 * Generate Password
 */
if(isset($_POST["type"]) && $_POST["type"] == "GeneratePassword")
{
    $success = false;
    $message = "";
    $url="";
    $user_id = $_POST['id'];
    $data=json_decode($_POST['datadetail'],true);
    //var_dump($data);
    /*$query = $db->query("select * from users where user_id = '$user_id'");
    $q = $query->num_rows;*/
    if(isset($data))
    { 
        $username = $data['email'];
        $password = random_password(8);
        $e_password = encrypt_password($password);
        $q2 = mysqli_query($db,"UPDATE `users` SET `password` = '$e_password' where email = '$username'");
        if($q2)
        {
            $loginurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";           
            $loginurl = str_replace("includes/adminfunction",'admin/login.php',$loginurl);

            ini_set("SMTP", "smtpout.secureserver.net");//confirm smtp
            $to = $username;
            $from = "";
            $subject = "$webtitle - Password Reset";
            $body="
                <b style='text-transform:capitalize;'>Dear ".$data['first_name']." ".$data['last_name'].", </b>
                <br>
                <p> your account password has been reset .</p>
                <p> Username : $username</p>
                <p> Password : $password </p>
                <p> Please <a href='$loginurl'> click here to login </a></p>
                <br>
                <p>Thank You</p>
                <img alt=\"$webname\" border=\"0\" width=\"250\" style=\"display:block\"  src=\"cid:logo_2u\"><br>
            ";
            //send_mail( $to, $from, $subject, $body );
            send_phpmail( $data['first_name']." ".$data['last_name'], $to ,"", "" , $subject, $body );
            $success = true;
            $message = "Password has been reset, A Mail has been Sent";
        }
        else
        {
            $message = "Server Busy try after sometime.";
        }
    }
    else
    {
        $message = "User is not registered";
    }
    echo json_encode(array(
        "valid"=>$success,
        "message" => $message
    ));
}




if (isset($_POST['type']) && $_POST['type']=="AddPackName"){

    $success = false;
    $msg = "";
    extract($_POST);
    
    $date = date("Y-m-d H:i:s");
    $valid=true;
    if($valid)
    {

        if(isset($pack_id) && !empty($pack_id))
        {

            $q0 = "UPDATE `pack` SET `pack_name`='$pack_name', `date`='$date' where `pack_id` = $pack_id";            
            $q1=mysqli_query($db,$q0);

            if($q1)
            {
                
                
                $success = true;
                $msg = "Updated successfully";
            }
            else{
                $success = false;
                $msg= "Some Problem Occur while updating.Please try again.";
            }
        } else {

            
            $q0 = "INSERT INTO `pack`(`pack_name`,`date`) VALUES ('$pack_name','$date')";

            $q1=mysqli_query($db,$q0);

            if($q1)
            {
                
                $success = true;
                $msg = "Added successfully";
            }
            else{

                $msg = "Some Problem Occur while inserting.Please try again.";
            }

        }
       
    }
    

    echo json_encode(array(
        'valid'=>$success,
        'msg'=>$msg
    ));

}

if (isset($_POST['type']) && $_POST['type']=="AddArticle"){

    $success = false;
    $msg = "";
    extract($_POST);
    
    $banquetImage = "";
    $uploadOk1 = 1;
    $valid=true;
    if($valid)
    {

        $update_str="";

        $filename="";
        $uploadOk = 1;
        if(isset($_FILES['galleryprintimage3']) && $_FILES['galleryprintimage3']['name'] != ""){
            $target_dir = "../uploads/";
            $target_file = $target_dir . basename($_FILES["galleryprintimage3"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // if ($_FILES["galleryprintimage3"]["size"] > 5000000) {
            //     $msg=  "Sorry, your file is too large.";
            //     $uploadOk = 0;
            // }
            $extallowed = array("pdf","jpg","jpeg","png");
            if (!in_array(strtolower($imageFileType),$extallowed)){
                $msg = "Sorry,For pdf extension files are allowed";
                $status = false;
                $uploadOk = 0;
            }

            $filename=uniqid().".".$imageFileType;
            $filepath=$target_dir.$filename;
            if ($uploadOk != 0) {

                if (move_uploaded_file($_FILES["galleryprintimage3"]["tmp_name"], $filepath)) {
                    $update_str=",galleryprintimage3='$filename'";
                } else {
                    $uploadOk = 0;
                    $msg = "Sorry, your file was not uploaded.";
                }
            }
        }
         

        if ($uploadOk == 1) 
        {
            if(isset($product_id) && !empty($product_id))
            {

                $q0 = "UPDATE `inspiration` SET `title`='$title', `if_image`='$imgupt' , `if_image`='$imgupt' , `category`='$cat_id' where `product_id` = $product_id";            
                $q1=mysqli_query($db,$q0);

                if($q1)
                {
                    
                    
                    $success = true;
                    $msg = "Updated successfully";
                }
                else{
                    $success = false;
                    $msg= "Some Problem Occur while updating.Please try again.";
                }
            } else {

                
                $q0 = "INSERT INTO `article`(`title`,`pdf`) VALUES ('$title','$filename')";

                $q1=mysqli_query($db,$q0);

                if($q1)
                {
                    
                    $success = true;
                    $msg = "Added successfully";
                }
                else{

                    $msg = "Some Problem Occur while inserting.Please try again.";
                }

            }
        }
    }
    

    echo json_encode(array(
        'valid'=>$success,
        'msg'=>$msg
    ));

}

if(isset($_POST["type"]) && $_POST["type"] == "DeletePackName")
{
    $detail_id = $_POST['id'];

    // echo "DELETE FROM banner WHERE id = '$id'";
    $delrecord = mysqli_query($db,"DELETE FROM pack_details WHERE detail_id = '$detail_id'");


    if($delrecord)
    {
        echo json_encode(array(
            "success"=>true,
            "message" => "Deleted successfully"
        ));
    }
    else
    {
        echo json_encode(array(
            "success"=>false,
            "message" => "Some Problem Occur, While Deleting."
        ));
    }

}


if(isset($_POST["type"]) && $_POST["type"] == "DeleteArticle")
{
    $article_id = $_POST['id'];

    // echo "DELETE FROM banner WHERE id = '$id'";
    $delrecord = mysqli_query($db,"DELETE FROM article WHERE article_id = '$article_id'");


    if($delrecord)
    {
        echo json_encode(array(
            "valid"=>true,
            "message" => "Deleted successfully"
        ));
    }
    else
    {
        echo json_encode(array(
            "valid"=>false,
            "message" => "Some Problem Occur, While Deleting."
        ));
    }

}


if (isset($_POST['type']) && $_POST['type']=="AddDetails"){

    $success = false;
    $msg = "";
    extract($_POST);
    $description = mysqli_real_escape_string($db,$_POST['description']);
    $date = date("Y-m-d H:i:s");
    $banquetImage = "";
    $uploadOk1 = 1;
    $valid=true;
    if($valid)
    {


        $uploadOk = 1;
        

        if ($uploadOk == 1) 
        {
            if(isset($detail_id) && !empty($detail_id))
            {

                $q0 = "UPDATE `pack_details` SET `pack_id`='$pack_id', `pack_month`='$pack_month' , `pack_price`='$pack_price' , `description`='$description' , `date`='$date' where `detail_id` = $detail_id";            
                $q1=mysqli_query($db,$q0);

                if($q1)
                {
                    
                    
                    $success = true;
                    $msg = "Updated successfully";
                }
                else{
                    $success = false;
                    $msg= "Some Problem Occur while updating.Please try again.";
                }
            } else {

                
                $q0 = "INSERT INTO `pack_details`(`pack_id`,`pack_month`,`pack_price`,`description`,`date`) VALUES ('$pack_id','$pack_month','$pack_price','$description','$date')";

                $q1=mysqli_query($db,$q0);

                if($q1)
                {
                    
                    $success = true;
                    $msg = "Added successfully";
                }
                else{

                    $msg = "Some Problem Occur while inserting.Please try again.";
                }

            }
        }
    }
    

    echo json_encode(array(
        'valid'=>$success,
        'msg'=>$msg
    ));

}



if(isset($_POST["type"]) && $_POST["type"] == "ApproveID")
{
    $id = $_POST['id'];

    // echo "DELETE FROM banner WHERE id = '$id'";
    $delrecord = mysqli_query($db,"UPDATE identity_badge SET `status` = '1' WHERE id = '$id'");


    if($delrecord)
    {
        echo json_encode(array(
            "success"=>true,
            "message" => "Deleted successfully"
        ));
    }
    else
    {
        echo json_encode(array(
            "success"=>false,
            "message" => "Some Problem Occur, While Deleting."
        ));
    }

}


if(isset($_POST["type"]) && $_POST["type"] == "RejectID")
{
    $id = $_POST['id'];

    // echo "DELETE FROM banner WHERE id = '$id'";
    $delrecord = mysqli_query($db,"UPDATE identity_badge SET `status` = '2' WHERE id = '$id'");


    if($delrecord)
    {
        echo json_encode(array(
            "success"=>true,
            "message" => "Deleted successfully"
        ));
    }
    else
    {
        echo json_encode(array(
            "success"=>false,
            "message" => "Some Problem Occur, While Deleting."
        ));
    }

}

if(isset($_POST["type"]) && $_POST["type"] == "ApprovePro")
{
    $id = $_POST['id'];

    // echo "DELETE FROM banner WHERE id = '$id'";
    $delrecord = mysqli_query($db,"UPDATE professional_badge SET `status` = '1' WHERE id = '$id'");


    if($delrecord)
    {
        echo json_encode(array(
            "success"=>true,
            "message" => "Deleted successfully"
        ));
    }
    else
    {
        echo json_encode(array(
            "success"=>false,
            "message" => "Some Problem Occur, While Deleting."
        ));
    }

}

if(isset($_POST["type"]) && $_POST["type"] == "RejectPro")
{
    $id = $_POST['id'];

    // echo "DELETE FROM banner WHERE id = '$id'";
    $delrecord = mysqli_query($db,"UPDATE professional_badge SET `status` = '2' WHERE id = '$id'");


    if($delrecord)
    {
        echo json_encode(array(
            "success"=>true,
            "message" => "Deleted successfully"
        ));
    }
    else
    {
        echo json_encode(array(
            "success"=>false,
            "message" => "Some Problem Occur, While Deleting."
        ));
    }

}