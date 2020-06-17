<?php include("header1.php"); ?>
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
  .clr-blue3 {
    color: #4a546e;
  }
  .medium-txt1 {
    font-size: 16px;
    letter-spacing: .8px;
  }
  .activity-lists {
    float: left;
    width: 100%;
    padding: 20px 15px 20px 20px;
    margin: 0;
  }
  .activity-lists li {
    float: left;
    width: 100%;
    list-style-type: none;
    margin-bottom: 10px;
  }
  .pro-counts-inbox-left {
    float: left;
    width: 78%;
    font-size: 14px;
    font-weight: 400;
    color: #333;
  }
  .active-org span {
    color: #ed6402!important;
  }
</style>
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<section style="background-color: rgb(228, 228, 228);">
  <div class="container">
        <div class="row">

            <div class="col-sm-12  " style="margin-top: 25px;">
               <h3><strong>Your Calls</strong></h3>
            </div>
            

            <div class="col-sm-12 ">
              <div style="color:#535353; font-size:13px;" class="reg-box">
                  <form method="post" action="main.php">
                  
                  <div class="row  to-fmid" >
                    <div class="col-sm-3 ">
                      <div class="card border-bottom border-radius-7">
                        <div class="card-header">
                          <div class="font-weight-bold medium-txt1 clr-blue3">Activity</div>
                        </div>
                        <div class="accordion-body">
                          <ul class="activity-lists">
                            <li><a routerlink="shortlistedbyyou.php" href="shortlistedbyyou.php">
                              <span class="pro-counts-inbox-left">Shortlisted by You</span><span class="pro-counts-inbox-right"></span></a>
                            </li>
                            <li><a routerlink="whoviewedyou.php" href="whoviewedyou.php">
                              <span class="pro-counts-inbox-left">Who Viewed You</span>
                              <span class="pro-counts-inbox-right"></span></a>
                            </li>
                            <li><a routerlink="whoshortlistedyou.php" href="whoshortlistedyou.php">
                              <span class="pro-counts-inbox-left">Who Shortlisted You</span>
                              <span class="pro-counts-inbox-right"></span></a>
                            </li>
                            <li><a routerlink="blocked.php" href="blocked.php">
                              <span class="pro-counts-inbox-left">Blocked Profiles</span>
                              <span class="pro-counts-inbox-right"></span></a>
                            </li>
                            <li><a routerlink="ignored.php" href="ignored.php">
                              <span class="pro-counts-inbox-left">Ignored Profiles</span>
                              <span class="pro-counts-inbox-right"></span></a>
                            </li>
                            <li><a routerlink="received.php" href="received.php">
                              <span class="pro-counts-inbox-left">SMS Received</span>
                              <span class="pro-counts-inbox-right"></span></a>
                            </li>
                            <li><a routerlink="sent.php" href="sent.php">
                              <span class="pro-counts-inbox-left">SMS Sent</span>
                              <span class="pro-counts-inbox-right"></span></a>
                            </li>
                            <li><a routerlink="urcall.php" class="active-org" href="urcall.php">
                              <span class="pro-counts-inbox-left">Your Calls</span>
                              <span class="pro-counts-inbox-right"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-1 no-padding">
                    </div>

                    <div class="col-sm-8">
                      <div  class="col-md-12 col-sm-12 col-12" style="text-align: center;margin-top: 115px;min-height: 115px;">
                        <span >Currently, there are no profiles in this folder</span>
                      </div>
                    </div>
                  </div>
                  

                </form>
                </div>

              </div>
            </div>
        </div>

    </div>
</section>
<?php include("footer.php"); ?>
<script  src="index.js"></script>