<?php
session_start();

		include('db_config.php'); 
        $u_id = $_SESSION['u_id'];

    
        
            
                //var_dump($_SESSION);
                $success = true;
                $logout_time = date("Y-m-d H:i:s");
                $query1 = $db->query("select * from log_details where `u_id` = '$u_id'");
                    $q1 = $query1->num_rows;
                    if($q1>0)
                    {

                        $sql = "UPDATE log_details SET `logout_time` = '$logout_time' WHERE `u_id` = '$u_id'";
        
                        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
                    }
                    else
                    {
                        $sql = "INSERT INTO log_details SET `u_id` = '$u_id' , `logout_time` = '$logout_time'";
        
                        $query = mysqli_query($db,$sql) or die(mysqli_error($db));
                    }

            
        
    
    
 
session_destroy();
header("location:index.php");
?>