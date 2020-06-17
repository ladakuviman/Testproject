<?php include("header.php");
   if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `pack_details` WHERE `detail_id` = '$id'"));
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
                                    <label>Package Name *</label>
                                    <div class="fancy-form fancy-form-select">
                                        <select class="form-control select2" id="pack_id"  name="pack_id">
                                            <option value="">----Package Name----</option>
                                                <?php
                                                    $selectpck2 = "SELECT * FROM pack";
                                                    $sql2 = mysqli_query($db, $selectpck2);
                                                while ($row2 = mysqli_fetch_array($sql2)) {
                                                    $selected2 = (isset($data['pack_id']) && $row2['pack_id'] == $data['pack_id'])?'selected':'';
                                                ?>
                                                <option value="<?php echo $row2['pack_id'] ;?>"<?=$selected2?>><?php echo $row2['pack_name'] ;?></option>

                                            <?php } ?> 
                                        </select>
                                     </div>  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Package Month * for eg (2 Month, 12 Month)</label>
                                    <input type="text"  placeholder = "Package Month" class = "form-control" name = "pack_month" id = "pack_month" title = "Package Month"   value="<?php echo isset($data['pack_month'])?$data['pack_month']:''?>">  
                                </div>
                                                                
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Package Price *</label>
                                    <input type="text"  placeholder = "Package Price" class = "form-control" name = "pack_price" id = "pack_price" title = "Package Price"   value="<?php echo isset($data['pack_price'])?$data['pack_price']:''?>">  
                                </div>

                                <div class="col-md-6 col-sm-6 ">
                                    <label>Package Description *</label>
                                    <textarea class="summernote form-control" name="description" id="description" rows="2"><?php echo isset($data['description'])?$data['description']:''; ?></textarea> 
                                </div>
                                                                
                            </div>
                        </div>

                        
                        <div class="form-group">  
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <input type ="hidden" name = "detail_id" id="detail_id" value="<?php echo isset($data['detail_id'])?$data['detail_id']:''; ?>">
                                        <input type ="hidden" name = "type" value="AddDetails">
                                        <input type="submit"  id="formvalidate" data-form="FormDashboard" class="btn btn-info btn-md btn-submit"  value="Submit">
                                    </div>
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
