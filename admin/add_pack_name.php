<?php include("header.php");
   if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `pack` WHERE `pack_id` = '$id'"));
    }
 ?>
<section id="middle">
    
    <header id="page-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <h1>Add Package Name</h1>
    </header>
    <div id="content" class="dashboard padding-20">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><!--<?php echo isset($data['dashboard_id'])?'Dashboard':'Dashboard';?>-->Add Package Name</h2>
            </div>
            <div class="panel-body">
                <form action="" id = "AddPackName" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Package Name *</label>
                                    <input type="text"  placeholder = "Package Name" class = "form-control" name = "pack_name" id = "pack_name" title = "Package Name"   value="<?php echo isset($data['pack_name'])?$data['pack_name']:''?>">  
                                </div>

                                
                                                                
                            </div>
                        </div>

                        
                        <div class="form-group">  
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <input type ="hidden" name = "pack_id" id="pack_id" value="<?php echo isset($data['pack_id'])?$data['pack_id']:''; ?>">
                                        <input type ="hidden" name = "type" value="AddPackName">
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
