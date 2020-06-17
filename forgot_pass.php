<?php include("header.php"); 


?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .to-fmid {
    margin-top: 20px;
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
</style>
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<section style="background-color: rgb(228, 228, 228);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12  " style="margin-top: 25px;">
         <h3><strong>Forgot Password</strong></h3>
      </div>
      <div class="col-sm-12 ">
        <div style="color:#535353; font-size:13px;" class="reg-box">
          <div class="row  to-fmid" >
            <!-- <div class="col-sm-3 ">
              <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" >
                <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event, 'Forgot Password')">Forgot Password</button>
              </div>
            </div> -->

            <div class="col-sm-12 " style="border: 1px solid #e7e7e7;margin-top: 20px;">
              <div id="Forgot Password" class="w3-container city" style="display:block;background-color: #ffffff">
                <h4><strong>Forgot Password</strong></h4>
                <hr>
                <p style="font-size: 13px;">Password will be send to your e-mail id or mobile number.</p>
                <form action="" id="ForgotPassword" method="post" enctype="multipart/form-data">
                  <div class="col-sm-4 " style="margin-bottom: 5px;">
                    <input name="email_mobile" type="text" placeholder="Enter Email or Mobile" class="form-control sml-frm input-sm" value="" name="email">
                  </div>
                  <div class="col-sm-2">
                    <input type="hidden" name="type" value="ForgotPassword">
                    <button type="submit" id="" class="btn btn-sm btn-success" style="padding: 0px 20px;margin-top: 5px">Submit</button>
                  </div><br><br>
                </form>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include("footer.php"); ?>
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>