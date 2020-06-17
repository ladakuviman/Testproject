<?php include("header1.php"); 
         
  if(isset($_GET['id']) && !empty($_GET['id'])){
  $id = $_GET['id'];
  $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT t1.*,t2.* FROM `pack` t1 LEFT JOIN `pack_details` t2 ON t2.pack_id = t1.pack_id WHERE t2.detail_id = '$id'"));
  }
  $user_details = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `register` WHERE `u_id` = '$u_id'"));

?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .to-fmid {
    margin-top: 20px;
  }
  body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
  }
  .reg-box {
    height: auto;
    width: 100%;
    background-color: rgb(228, 228, 228);
    margin-top: 25px;
    margin-bottom: 25px;
    padding: 0px;
  }
  .to-fmid {
    margin-top: 10px;
    font-size: 16px;
  }
  .sml-frm {
    height: 34px !important;
  }
  .wrapper {
    text-align: center;
  }

  .button {
      position: absolute;
      top: 50%;
  }
  .btn-sm, .btn-group-sm>.btn {
    padding: 10px 20px;
    font-size: 15px;
    line-height: 1.5;
    border-radius: 3px;
  }
  .border-bottom {
    border-bottom: 1px solid #dee2e6!important;
  }
  .card {
    position: relative;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
  }
  .card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
  }
  #owl-demo1 .item{
  margin: 15px;
}
#owl-demo1 .item img{
  display: block;
  width: 100%;
  height: auto;
}
  .card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
  }
  .w3-sidebar {
    height: 100%;
    width: 100%!important;
    background-color: #fff !important;
    position: unset!important;
    z-index: 1;
    overflow: auto;
  }
  .hdot {
    background: url(//imgs.bharatmatrimony.com/bmimgs/h-dot.gif) repeat-x bottom;
    height: 1px;
    margin: 10px 0;
  }
  .cflo {
    font-weight: 300;
    padding-top: 0px;
  }
  .w3-bar .w3-bar-item {
    padding: 8px 16px;
    float: left;
    width: 270px;
    border: none;
    display: block;
    outline: 0;
  }
  .w3-button:hover {
    color: #fafafa!important;
    background-color: #f44336!important;
  }
  .section_padding {
    padding: 50px 0px;
  }
  .p_star {
    display: inline-block;
    position: relative;
  }
  .checkout_area .form-control {
    border: 1px solid #eee;
  }
  .checkout_area .form-control {
      font-size: 14px;
      height: 40px;
  }
  .form-control:disabled, .form-control[readonly] {
      background-color: #c6c6c6;
      opacity: 1;
  }
  .p_star input {
      background: #fff;
  }
  .order_box {
    background: #f7f7f7;
    padding: 30px;
  }
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .order_box .list li a {
    font-size: 14px;
    color: #242424;
    font-weight: normal;
    border-bottom: 1px solid #eeeeee;
    display: block;
    line-height: 42px;
  }
  .order_box .list li a span {
    float: right;
  }
  .order_box .creat_account {
    margin: 15px 0;
  }
  .order_box .btn_3 {
    display: block;
    line-height: 38px;
    text-transform: uppercase;
    text-align: center;
  }
  .billing_details h3 {
    margin-top: 0px;
    margin-bottom: 30px;
  }
  .form-group {
    width: 100%;
  }
</style>
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>


<section class="checkout_area section_padding" style="background-color: rgb(228, 228, 228);" >
  <div class="container">
    <div class="billing_details">
      <div class="row">
        <form action="" id="AddTransaction" method="post" enctype="multipart/form-data">
          <div class="col-lg-8">
            <h3>Billing Details</h3>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" name="uname" value="" placeholder="Full Name">
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="email" placeholder="E-mail">
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" min="0" pattern="[1-9]{1}[0-9]{9}" class="form-control" name="name" placeholder="Mobile Number">
              </div>
              <!-- <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" name="number" placeholder="Mobile Number">
              </div> -->
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Your Order</h2>
                <ul class="list">
                  <li>
                    <a href="#">Package
                      <span>Total</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" name="title"><?php echo($data['pack_name']);?><span class="last" name="price">Rs. <?php echo($data['pack_price']);?></span></a>
                  </li>
                  <li>
                    <a href="#" name="title">Duration<span class="last" name="price"><?php echo($data['pack_month']);?></span></a>
                  </li>
                </ul>
              <ul class="list list_2">
                <li>
                  <a href="#">Total
                    <span>Rs. <?php echo($data['pack_price']);?></span>
                  </a>
                </li>
              </ul>
              <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector">
                <label for="f-option4">I’ve read and accept the </label>
                <a href="#" required="">terms &amp; conditions*</a>
              </div>
              <input type="hidden" name="u_id" value="<?php echo($u_id);?>">
              <input type="hidden" name="package_id" value="<?php echo($data['pack_id']);?>">
              <input type="hidden" name="detail_id" value="<?php echo($data['detail_id']);?>">
              <input type="hidden" name="pack_name" value="<?php echo($data['pack_name']);?>">
              <input type="hidden" name="duration" value="<?php echo($data['pack_month']);?>">
              <input type="hidden" name="price" value="<?php echo($data['pack_price']);?>">
              <input type="hidden" name="type" value="AddTransaction">
              <button type="submit" id="submit" class="btn btn-sm btn-success" style="width: 100%;">Pay</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php include("footer.php"); ?>


