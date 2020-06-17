<?php include("header.php"); 
    
    

 ?>

<section id="middle">
    <header id="page-header">
        <h1>Package Name</h1>
    </header>
    <div id="content" class="padding-20">
        <div class="row">
            
            
            <div class="col-md-12">
                <div class="panel panel-default mypanel">
                    <div class="panel-heading">
                    <span class="elipsis">
                        <!-- panel title -->
                        <strong>Package Name</strong>
                    </span>
                                        
                    <!-- <a href="add_pack_name.php" class="btn btn-info btn-xs pull-right">Add Package Name</a> -->
                    </div>


                
                    <div class="panel-body">

                        <!-- <div class="row" style="margin-right: 0px;margin-left: 0px;">
                            <div class="col-md-6 col-sm-6" style="padding-left: 0px;">
                                <label>Filter Product *</label>
                                <label style="padding-bottom: 15px;"></label>
                                <div class="fancy-form fancy-form-select">
                                    <select class="form-control select2" id="filer_product"  name="filer_product" required>
                                        <option value="">--Select--</option>
                                        <option value="Pending">Pending Product</option>
                                        <option value="Upcoming">Upcoming Product</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->        
                        <div class="row">
                            
                            <?php
                            $i=1;
                            $q2 = mysqli_query($db,"SELECT * from pack ORDER by pack_id DESC");
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
                                            <td><?php echo $r2['date']; ?></td>
                                            <td>
                                                <a class="btn btn-xs btn-info" id="" href="add_pack_name.php?id=<?php echo $r2['pack_id']; ?>" title="Approve"><i class="fa fa-check"> Edit</i></a>
                                                <!-- <a class="btn btn-xs btn-danger DeletePackName" id="" href="javascript:void(0);" title="Delete" data-id="<?php echo $r2['pack_id']; ?>"><i class="fa fa-trash"> Delete</i></a> -->
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