<?php include("header.php");
/*$totenq=mysqli_num_rows(mysqli_query($db,"SELECT `enq_id` FROM `enquiry`"));
$totbook=mysqli_num_rows(mysqli_query($db,"SELECT `book_id` FROM `booking_table` WHERE `status`='1'"));
$tenbok=mysqli_num_rows(mysqli_query($db,"SELECT `book_id` FROM `booking_table` WHERE `is_tentative`='1'"));
$tmbook=mysqli_num_rows(mysqli_query($db,"SELECT `book_id` FROM `booking_table` WHERE `status`='1' AND  YEAR(curdate()) = YEAR(`event_date`) AND MONTH(`event_date`) = MONTH(CURDATE())"));
$tmtenbok=mysqli_num_rows(mysqli_query($db,"SELECT `book_id` FROM `booking_table` WHERE `is_tentative`='1' AND  YEAR(curdate()) = YEAR(`event_date`) AND MONTH(`event_date`) = MONTH(CURDATE())"));*/


?>

<section id="middle">
	
	<header id="page-header">
	    <h1>Welcome</h1>
	</header>
	<div id="content" class="dashboard padding-20">
        <div class="row">
            <div class="col-md-3">

                
                    <div class="box info">
                        <div class="box-title">
                            <h4> Total Registered Users </h4>
                            <?php
                                $bq=mysqli_query($db,"SELECT * FROM `register` ");
                                $c = mysqli_num_rows($bq);

                            ?>
                            <big class="block"><?=$c;?></big>
                            <!-- <i class="fa fa-car"></i> -->
                        </div>
                    </div>

            </div>
            <div class="col-md-3">
                
                    <div class="box success">
                        <div class="box-title">
                            <h4> Total Gold plan Users </h4>
                            <?php
                                $bq=mysqli_query($db,"SELECT * FROM `transaction` WHERE `status` = '1' AND `pack_name` = 'Gold'");
                                $c = mysqli_num_rows($bq);

                            ?>
                            <big class="block"><?=$c;?></big>
                            <!-- <i class="fa fa-check"></i> -->
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="box danger">
                        <div class="box-title">
                            <h4> Total Diamond plan Users </h4>
                            <?php
                                $bq=mysqli_query($db,"SELECT * FROM `transaction` WHERE `status` = '1' AND `pack_name` = 'Diamond'");
                                $c = mysqli_num_rows($bq);

                            ?>
                            <big class="block"><?=$c;?></big>
                            <!-- <i class="fa fa-shower"></i> -->
                        </div>
                    </div>
            </div>
            
            <div class="col-md-3">
                
                    <div class="box warning">
                        <div class="box-title">
                            <h4> Total Platinum plan Users</h4>
                            <?php
                                $bq=mysqli_query($db,"SELECT * FROM `transaction` WHERE `status` = '1' AND `pack_name` = 'Platinum'");
                                $c = mysqli_num_rows($bq);

                            ?>
                            <big class="block"><?=$c;?></big>
                            <!-- <i class="fa fa-wrench"></i> -->
                        </div>
                    </div>
            </div>

            <div class="col-md-3">
                
                    <div class="box black">
                        <div class="box-title">
                            <h4> Total Personalised plan Users </h4>
                            <?php
                                $bq=mysqli_query($db,"SELECT * FROM `transaction` WHERE `status` = '1' AND `pack_name` = 'Personalised'");
                                $c = mysqli_num_rows($bq);

                            ?>
                            <big class="block"><?=$c;?></big>
                            <!-- <i class="fa fa-user-o"></i> -->
                        </div>
                    </div>
            </div>
            
        <div class="clearfix"></div>
       
    </div>
</section>


<?php include("footer.php"); ?>