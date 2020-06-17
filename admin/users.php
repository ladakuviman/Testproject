<?php include("header.php"); 
    
    

 ?>

<section id="middle">
    <header id="page-header">
        <h1>Users</h1>
    </header>
    <div id="content" class="padding-20">
        <div class="row">
            
            
            <div class="col-md-12">
                <div class="panel panel-default mypanel">
                    <div class="panel-heading">
                    <span class="elipsis">
                        <!-- panel title -->
                        <strong>Users</strong>
                    </span>
                                        
                    <!-- <a href="add_article.php" class="btn btn-info btn-xs pull-right">Add Article</a> -->
                    </div>


                
                    <div class="panel-body">

                        <div class="row">
                            
                            <?php
                            $i=1;
                            $q2 = mysqli_query($db,"SELECT t1.*,t1.u_id as uid,t2.* from register t1 LEFT JOIN transaction t2 ON t2.u_id = t1.u_id ORDER by t1.u_id DESC");
                            $num1=mysqli_num_rows($q2);
                            if($num1!=0)
                            {
                            ?>
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped  table-bordered table-hover sample_5" id="sample_5">
                                    <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <!-- <th>Created by</th> -->
                                        <th>Full Name</th>
                                        <!-- <th>Father Name</th>
                                        <th>Surname</th> -->
                                        <th>Mobile No</th>
                                        <th>Email</th>
                                        <th>Package</th>
                                        <!-- <th>Date</th> -->
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
                                            <!-- <td><?php echo $r2['created_by']; ?></td> -->
                                            <td><?php echo $r2['full_name'].' '.$r2['father_name'].' '.$r2['surname']; ?></td>
                                            <!-- <td><?php echo $r2['father_name']; ?></td>
                                            <td><?php echo $r2['surname']; ?></td> -->
                                            <td><?php echo $r2['mobile']; ?></td>
                                            <td><?php echo $r2['email']; ?></td>
                                            <td><?php if($r2['pack_name'] == ''){ echo "Free"; }else{echo $r2['pack_name'];} ?></td>
                                            <!-- <td><?php echo $r2['date']; ?></td> -->
                                            <td>
                                                <a class="btn btn-xs btn-info" id="" href="view_details.php?id=<?php echo $r2['uid']; ?>" title="View Details"><i class="fa fa-check"> View Details</i></a>    
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