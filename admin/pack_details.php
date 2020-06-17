<?php include("header.php"); 
    
    

 ?>

<section id="middle">
    <header id="page-header">
        <h1>Package Details</h1>
    </header>
    <div id="content" class="padding-20">
        <div class="row">
            
            
            <div class="col-md-12">
                <div class="panel panel-default mypanel">
                    <div class="panel-heading">
                    <span class="elipsis">
                        <!-- panel title -->
                        <strong>Package Details</strong>
                    </span>
                                        
                    <a href="add_pack_details.php" class="btn btn-info btn-xs pull-right">Add Package Details</a>
                    </div>


                
                    <div class="panel-body">

                        <div class="row">
                            
                            <?php
                            $i=1;
                            $q2 = mysqli_query($db,"SELECT t1.*,t2.* from `pack_details` t1 LEFT JOIN `pack` t2 ON t2.pack_id = t1.pack_id ORDER by t1.`detail_id` DESC");
                            $num1=mysqli_num_rows($q2);
                            if($num1!=0)
                            {
                            ?>
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped  table-bordered table-hover sample_5" id="sample_5">
                                    <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Package Name</th>
                                        <th>Package Month</th>
                                        <th>Package Price</th>
                                        <th>Package Description</th>
                                        <th>Date</th>
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
                                            <td><?php echo $r2['pack_name']; ?></td>
                                            <td><?php echo $r2['pack_month']; ?></td>
                                            <td><?php echo $r2['pack_price']; ?></td>
                                            <td><?php echo $r2['description']; ?></td>
                                            <td><?php echo $r2['date']; ?></td>
                                            <td>
                                                <a class="btn btn-xs btn-info" id="" href="add_pack_details.php?id=<?php echo $r2['detail_id']; ?>" title="Approve"><i class="fa fa-check"> Edit</i></a>
                                                <a class="btn btn-xs btn-danger DeletePackName" id="" href="javascript:void(0);" title="Delete" data-id="<?php echo $r2['detail_id']; ?>"><i class="fa fa-trash"> Delete</i></a>
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