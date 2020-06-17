<?php include("header.php"); 
    
    

 ?>

<section id="middle">
    <header id="page-header">
        <h1>Badges</h1>
    </header>
    <div id="content" class="padding-20">
        <div class="row">
            
            
            <div class="col-md-12">
                <div class="panel panel-default mypanel">
                    <div class="panel-heading">
                    <span class="elipsis">
                        <!-- panel title -->
                        <strong>Identity Badge</strong>
                    </span>
                                        
                    </div>


                
                    <div class="panel-body">

                        <div class="row">
                            
                            <?php
                            $i=1;
                            //echo "SELECT t1.*,t2.* from `identity_badge` t1 LEFT JOIN `register` t2 ON t2.u_id=t1.u_id ORDER by t1.`id` DESC";
                            $q2 = mysqli_query($db,"SELECT t1.*,t2.*,t1.status as stat from `identity_badge` t1 LEFT JOIN `register` t2 ON t2.u_id=t1.u_id ORDER by t1.`id` DESC");
                            $num1=mysqli_num_rows($q2);
                            if($num1!=0)
                            {
                            ?>
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped  table-bordered table-hover sample_5" id="sample_5">
                                    <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Full Name</th>
                                        <th>Mobile No</th>
                                        <th>Email</th>
                                        <th>Driving License</th>
                                        <th>Pan Card</th>
                                        <th>Passport</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       
                                        while($r2 = mysqli_fetch_assoc($q2))
                                        {
                                        ?>
                                            <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $r2['full_name'].' '.$r2['father_name'].' '.$r2['surname']; ?></td>
                                            <td><?php echo $r2['mobile']; ?></td>
                                            <td><?php echo $r2['email']; ?></td>
                                            <td><a target="_blank" href="../uploads/<?php echo $r2['driving_license']; ?>">../<?php echo $r2['driving_license']; ?></a></td>
                                            <td><a target="_blank" href="../uploads/<?php echo $r2['pan_card']; ?>">../<?php echo $r2['pan_card']; ?></a></td>
                                            <td><a target="_blank" href="../uploads/<?php echo $r2['passport']; ?>">../<?php echo $r2['passport']; ?></a></td>
                                            <td>
                                                <?php if($r2['stat'] == '0') { ?>

                                                    <a class="btn btn-xs btn-info ApproveID" id="" href="javascript:void(0);" title="Approve" data-id="<?php echo $r2['id']; ?>"><i class="fa fa-check"> Approve</i></a>
                                                    <a class="btn btn-xs btn-danger RejectID" id="" href="javascript:void(0);" title="Reject" data-id="<?php echo $r2['id']; ?>"><i class="fa fa-trash"> Reject</i></a>
                                                <?php }
                                                elseif ($r2['stat'] == '1') {

                                                    echo "Approved";
                                                }
                                                else {

                                                    echo "Rejected";
                                                } ?>
                                            </td>
                                            </tr>
                                        <?php }?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                    <div class="panel-heading">
                    <span class="elipsis">
                        <!-- panel title -->
                        <strong>Professional Badge</strong>
                    </span>
                                        
                    </div>


                
                    <div class="panel-body">

                        <div class="row">
                            
                            <?php
                            $i=1;
                            $q2 = mysqli_query($db,"SELECT t1.*,t2.*,t1.status as stat from professional_badge t1 LEFT JOIN `register` t2 ON t2.u_id = t1.u_id ORDER by t1.id DESC");
                            $num1=mysqli_num_rows($q2);
                            if($num1!=0)
                            {
                            ?>
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped  table-bordered table-hover sample_5" id="sample_5">
                                    <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Full Name</th>
                                        <th>Mobile No</th>
                                        <th>Email</th>
                                        <th>Education</th>
                                        <th>Salary Slip</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       
                                        while($r2 = mysqli_fetch_assoc($q2))
                                        {
                                        ?>
                                            <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $r2['full_name'].' '.$r2['father_name'].' '.$r2['surname']; ?></td>
                                            <td><?php echo $r2['mobile']; ?></td>
                                            <td><?php echo $r2['email']; ?></td>
                                            <td><a target="_blank" href="../uploads/<?php echo $r2['education']; ?>">../<?php echo $r2['education']; ?></a></td>
                                            <td><a target="_blank" href="../uploads/<?php echo $r2['salary']; ?>">../<?php echo $r2['salary']; ?></a></td>
                                            <td>
                                                <?php if($r2['stat'] == '0') { ?>

                                                    <a class="btn btn-xs btn-info ApprovePro" id="" href="javascript:void(0);" title="Approve" data-id="<?php echo $r2['id']; ?>"><i class="fa fa-check"> Approve</i></a>
                                                    <a class="btn btn-xs btn-danger RejectPro" id="" href="javascript:void(0);" title="Reject" data-id="<?php echo $r2['id']; ?>"><i class="fa fa-trash"> Reject</i></a>
                                                <?php }
                                                elseif ($r2['stat'] == '1') {

                                                    echo "Approved";
                                                }
                                                else {

                                                    echo "Rejected";
                                                } ?>
                                            </td>
                                            </tr>
                                        <?php }?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php include("footer.php"); ?>