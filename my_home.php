<?php include("header1.php");



?>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .to-fmid {
    margin-top: 20px;
  }
  .reg-box {
    height: auto;
    width: 100%;
    background-color: #fff;
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
  
  .hdot {
    background: url(//imgs.bharatmatrimony.com/bmimgs/h-dot.gif) repeat-x bottom;
    height: 1px;
    margin: 10px 0;
  }
  .cflo {
    font-weight: 300;
    padding-top: 0px;
  }
  .hover-shadow[_ngcontent-shk-c28]:hover {
    background-color: #fff!important;
    box-shadow: 1px 0 8px 3px #eee!important;
    border-radius: 0;
  }
  .hover-shadow[_ngcontent-shk-c28], .set-total-profile-wrap[_ngcontent-shk-c28] {
    float: left;
    width: 100%;
  }
  .list-viw-profile-bg-white {
      background: url(https://imgs.bharatmatrimony.com/bmimgs/desktop-images/list-view-profile-bg-new.png?v1) no-repeat;
      width: 188px;
      height: 161px;
      margin: 0 auto;
  }
  img[_ngcontent-shk-c4] {
    cursor: pointer;
    }
    .lvimg-white {
        width: 155px;
        height: 155px;
        position: relative;
        top: 5px;
        left: 15px;
        border-radius: 13px 12px 13px 13px;
    }
    .ser-plo-list {
        float: left;
        width: 95%;
        font-size: 14px;
        font-weight: 600;
        text-align: center;
        color: #fff;
        position: absolute;
        top: 35%;
        left: -4px;
        z-index: 1;
    }
    .verified {
        color: #5377d8!important;
        padding: 4px 12px 4px 0!important;
    }
    .tag1 {
        font-size: 12px;
        letter-spacing: .5px;
        font-weight: 700;
        text-align: center;
        border-radius: 20px;
    }
    .mutual-icon, .premium-icon, .recent-join-icon, .verify-blue-icon, .verify-icon {
        padding-left: 0!important;
      }
      .verify-icon::before {
        background-position: -255px -191px !important;
        height: 28px;
        top: 0;
        padding-left: 21px;
        padding-bottom: 10px;
    }
    .close-profile-icon::before {
        background-position: -303px -237px !important;
        height: 25px;
        top: -55px;
        padding-left: 22px;
        padding-bottom: 15px;
        left: 400px;
    }
    .block-icon::before, .brother-icon::before, .caste-icon::before, .close-profile-icon::before, .dosh-icon::before, .drinks-icon::before, .employ-icon::before, .equality-img-1::before, .equality-img-2::before, .equality-img-3::before, .equality-img-4::before, .equality-img-5::before, .equality-img-6::before, .equality-img-7::before, .equality-img-8::before, .equality-img-9::before, .family-icon::before, .flag-icon::before, .gothram-icon::before, .greycros::before, .grntick::before, .horo-icon::before, .ident-badge-icon::before, .lifestyle-img-1::before, .lifestyle-img-2::before, .lifestyle-img-3::before, .lifestyle-img-4::before, .lifestyle-img-5::before, .lifestyle-img-6::before, .lifestyle-img-7::before, .lifestyle-img-8::before, .lifestyle-img-9::before, .location-icon::before, .lock-brack-icon1::before, .lock-brack-icon::before, .lock-str-icon1::before, .lock-str-icon::before, .mobile-badge-icon::before, .more-icon::after, .mutual-icon::before, .nuc-family-icon::before, .nxtprf::after, .pers-icon::before, .person-height-icon::before, .premium-icon::before, .prevprf::before, .prof-edit::before, .profes-badge-icon::before, .profile-badge-icon::before, .recent-join-icon::before, .religion-icon::before, .report-icon::before, .ring-icon1::before, .ring-icon::before, .rupee-icon::before, .short-icon::before, .shortlisted-icon::before, .sister-icon::before, .sm-call-icon::before, .smoke-icon::before, .social-badge-icon::before, .spoon-icon::before, .star-icon::before, .starblink-icon::before, .study-icon::before, .verify-blue-icon::before, .verify-icon::before, .work-icon::before, .zodiac-icon::before {
        background: url(https://imgs.bharatmatrimony.com/bmimgs/desktop-images/vp-icons.png) no-repeat;
        content: "";
        position: relative;
    }
    .clr-black1 {
        color: #000!important;
    }
    .clr-grey2 {
        color: #727272;
    }
    .online-gray {
        padding: 4px 0;
        background: #b7b7b7;
        width: 8px;
        height: 8px;
        border-radius: 10px;
        display: inline-block;
    }
    .fw-bold {
        font-weight: 700;
    }
    .a-1 {
        font-weight: 700;
        color: #ed6402!important;
        font-size: 12px;
        letter-spacing: .5px;
        text-decoration: none!important;
    }
    .text-uppercase {
        text-transform: uppercase!important;
    }
    .a-1 span, .a-2 span {
        background-position: -53px -101px !important;
        width: 18px;
        height: 14px;
        display: inline-block;
        cursor: pointer;
        top: 3px;
        background-size: 86px !important;
        left: -5px;
    }
    .a-1 span, .a-2 span::before, .accept-icn::before, .dailyrec-arw::after, .decline-icn::before, .lp-calls::before, .lp-chats::before, .lp-dailyrec::before, .lp-editpref::before, .lp-editprof::before, .lp-identitybadge::before, .lp-mobilebadge::before, .lp-notes::before, .lp-rewards::before, .lp-sent-receiv::before, .lp-setting::before, .lp-ss::before, .lp-support::before, .lp-trustbadge::before, .lp-viewd-num::before, .lp-vmatchs::before, .lp-wedserv::before, .myhom-lftarw::after, .myhom-rgtarw::after, .myhomeeditbg::after {
        background: url(https://imgs.bharatmatrimony.com/bmimgs/desktop-images/myhome-icons.png?v1) no-repeat;
        content: "";
        position: relative;
    }
    .pt-3, .py-3 {
        padding-top: 1rem!important;
    }
    .small-txt2 {
        font-size: 14px;
        letter-spacing: .7px;
    }
    .pr-5, .px-5 {
        padding-right: 3rem!important;
    }
    .ring-icon::before {
        background-position: -99px -13px !important;
        height: 20px;
        margin-right: 10px;
        padding-left: 20px;
    }
    .pb-2, .py-2 {
        padding-bottom: .5rem!important;
    }
    .pt-2, .py-2 {
        padding-top: .5rem!important;
    }
    .block-icon::before, .brother-icon::before, .caste-icon::before, .close-profile-icon::before, .dosh-icon::before, .drinks-icon::before, .employ-icon::before, .equality-img-1::before, .equality-img-2::before, .equality-img-3::before, .equality-img-4::before, .equality-img-5::before, .equality-img-6::before, .equality-img-7::before, .equality-img-8::before, .equality-img-9::before, .family-icon::before, .flag-icon::before, .gothram-icon::before, .greycros::before, .grntick::before, .horo-icon::before, .ident-badge-icon::before, .lifestyle-img-1::before, .lifestyle-img-2::before, .lifestyle-img-3::before, .lifestyle-img-4::before, .lifestyle-img-5::before, .lifestyle-img-6::before, .lifestyle-img-7::before, .lifestyle-img-8::before, .lifestyle-img-9::before, .location-icon::before, .lock-brack-icon1::before, .lock-brack-icon::before, .lock-str-icon1::before, .lock-str-icon::before, .mobile-badge-icon::before, .more-icon::after, .mutual-icon::before, .nuc-family-icon::before, .nxtprf::after, .pers-icon::before, .person-height-icon::before, .premium-icon::before, .prevprf::before, .prof-edit::before, .profes-badge-icon::before, .profile-badge-icon::before, .recent-join-icon::before, .religion-icon::before, .report-icon::before, .ring-icon1::before, .ring-icon::before, .rupee-icon::before, .short-icon::before, .shortlisted-icon::before, .sister-icon::before, .sm-call-icon::before, .smoke-icon::before, .social-badge-icon::before, .spoon-icon::before, .star-icon::before, .starblink-icon::before, .study-icon::before, .verify-blue-icon::before, .verify-icon::before, .work-icon::before, .zodiac-icon::before {
        background: url(https://imgs.bharatmatrimony.com/bmimgs/desktop-images/vp-icons.png) no-repeat;
        content: "";
        position: relative;
    }
    .ml-3, .mx-3 {
        margin-left: 1rem!important;
    }
    .mstxt1 {
        font-size: 12px;
        letter-spacing: .5px;
    }
    .clr-blue1 {
        color: #5c6888;
    }
    .fw-black {
        font-weight: 900;
    }
    .progress {
        display: flex;
        overflow: hidden;
        font-size: .75rem;
        background-color: #e9ecef;
        border-radius: .25rem;
    }
    .progress {
        height: 4px;
    }
    .progress-bar {
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #00a03a;
        transition: width .6s ease;
    }
    .p-3 {
        padding: 1rem!important;
    }
    .border {
        border: 1px solid #dee2e6!important;
    }
    .bdr-rad-10 {
        border-radius: 10px;
    }
    .align-items-center {
        -webkit-box-align: center!important;
        align-items: center!important;
    }
    .figure {
        display: inline-block;
    }
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
        cursor: pointer;
    }
    .viewBtnsend-interst {
        display: inline-block;
        background-color: #ff9902;
        border: 2px solid #ff9902!important;
        color: #fff;
        line-height: 15px;
        font-weight: 700;
        font-size: 14px;
        padding: 10px 30px;
        border-radius: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .viewBtnsend-shortlist {
        display: inline-block;
        color: #ff9902;
        line-height: 15px;
        font-weight: 700;
        font-size: 14px;
        padding: 10px 30px;
        border-radius: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: 2px solid #ff9902;
        background: #fff;
    }
    .viewBtnsend-shortlist {
        display: inline-block;
        color: #ff9902;
        line-height: 15px;
        font-weight: 700;
        font-size: 14px;
        padding: 10px 30px;
        border-radius: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: 2px solid #ff9902;
        background: #fff;
    }
    .short-icon::before {
        background-position: -241px -247px !important;
        height: 28px;
        top: -1px;
        padding-left: 21px;
        padding-bottom: 4px;
        left: -5px;
    }
    .block-icon::before, .brother-icon::before, .caste-icon::before, .close-profile-icon::before, .dosh-icon::before, .drinks-icon::before, .employ-icon::before, .equality-img-1::before, .equality-img-2::before, .equality-img-3::before, .equality-img-4::before, .equality-img-5::before, .equality-img-6::before, .equality-img-7::before, .equality-img-8::before, .equality-img-9::before, .family-icon::before, .flag-icon::before, .gothram-icon::before, .greycros::before, .grntick::before, .horo-icon::before, .ident-badge-icon::before, .lifestyle-img-1::before, .lifestyle-img-2::before, .lifestyle-img-3::before, .lifestyle-img-4::before, .lifestyle-img-5::before, .lifestyle-img-6::before, .lifestyle-img-7::before, .lifestyle-img-8::before, .lifestyle-img-9::before, .location-icon::before, .lock-brack-icon1::before, .lock-brack-icon::before, .lock-str-icon1::before, .lock-str-icon::before, .mobile-badge-icon::before, .more-icon::after, .mutual-icon::before, .nuc-family-icon::before, .nxtprf::after, .pers-icon::before, .person-height-icon::before, .premium-icon::before, .prevprf::before, .prof-edit::before, .profes-badge-icon::before, .profile-badge-icon::before, .recent-join-icon::before, .religion-icon::before, .report-icon::before, .ring-icon1::before, .ring-icon::before, .rupee-icon::before, .short-icon::before, .shortlisted-icon::before, .sister-icon::before, .sm-call-icon::before, .smoke-icon::before, .social-badge-icon::before, .spoon-icon::before, .star-icon::before, .starblink-icon::before, .study-icon::before, .verify-blue-icon::before, .verify-icon::before, .work-icon::before, .zodiac-icon::before {
        background: url(https://imgs.bharatmatrimony.com/bmimgs/desktop-images/vp-icons.png) no-repeat;
        content: "";
        position: relative;
    }

    .block-icon::before, .brother-icon::before, .caste-icon::before, .close-profile-icon::before, .dosh-icon::before, .drinks-icon::before, .employ-icon::before, .equality-img-1::before, .equality-img-2::before, .equality-img-3::before, .equality-img-4::before, .equality-img-5::before, .equality-img-6::before, .equality-img-7::before, .equality-img-8::before, .equality-img-9::before, .family-icon::before, .flag-icon::before, .gothram-icon::before, .greycros::before, .grntick::before, .horo-icon::before, .ident-badge-icon::before, .lifestyle-img-1::before, .lifestyle-img-2::before, .lifestyle-img-3::before, .lifestyle-img-4::before, .lifestyle-img-5::before, .lifestyle-img-6::before, .lifestyle-img-7::before, .lifestyle-img-8::before, .lifestyle-img-9::before, .location-icon::before, .lock-brack-icon1::before, .lock-brack-icon::before, .lock-str-icon1::before, .lock-str-icon::before, .mobile-badge-icon::before, .more-icon::after, .mutual-icon::before, .nuc-family-icon::before, .nxtprf::after, .pers-icon::before, .person-height-icon::before, .premium-icon::before, .prevprf::before, .prof-edit::before, .profes-badge-icon::before, .profile-badge-icon::before, .recent-join-icon::before, .religion-icon::before, .report-icon::before, .ring-icon1::before, .ring-icon::before, .rupee-icon::before, .short-icon::before, .shortlisted-icon::before, .sister-icon::before, .sm-call-icon::before, .smoke-icon::before, .social-badge-icon::before, .spoon-icon::before, .star-icon::before, .starblink-icon::before, .study-icon::before, .verify-blue-icon::before, .verify-icon::before, .work-icon::before, .zodiac-icon::before {
        background: url(https://imgs.bharatmatrimony.com/bmimgs/desktop-images/vp-icons.png) no-repeat;
        content: "";
        position: relative;
    }
    .upgpromo {
        background: #1f2b49;
        color: #fff;
    }
    .pt-sm-3, .py-sm-3 {
        padding-top: 1rem!important;
    }
    .pb-3, .py-3 {
        padding-bottom: 1rem!important;
    }
    .ls1-2 {
        letter-spacing: 1.2px!important;
    }
    .txt-center {
        text-align: center;
    }

    .font-weight-bold {
        font-weight: 700!important;
    }


    .color-inherit {
        color: inherit;
    }
    .ls1-2 {
        letter-spacing: 1.2px!important;
    }
    .fw-bold {
        font-weight: 700;
    }
    .medium-txt2 {
        font-size: 18px;
        letter-spacing: .8px;
    }
    .upgbtn {
        border: 1px solid #fff;
        color: #fff;
        font-size: 10px;
        font-weight: 900;
        border-radius: 8px;
        padding: 5px 10px;
        cursor: pointer;
        letter-spacing: .5px;
    }
    .mt-4, .my-4 {
        margin-top: 1.5rem!important;
    }
    .lh-normal {
        line-height: normal;
    }
    .paddt40 {
        padding-top: 40px;
    }
    .list-viw-profile-call-rt {
        position: absolute;
        bottom: -5px;
        right: 22px;
        z-index: 2;
        cursor: pointer;
    }
    .list-viw-profile-call-rt img {
        width: 50px;
        height: 50px;
    }
    .outline-none {
        outline: 0!important;
        box-shadow: none;
    }
    .clr-grey2 {
        color: #727272;
    }
    .font-weight-bold {
        font-weight: 700!important;
    }
    .text-decoration-none {
        text-decoration: none!important;
    }
    .pl-0, .px-0 {
        padding-left: 0!important;
    }
    .pl-1, .px-1 {
        padding-left: .25rem!important;
    }
    .mt-0, .my-0 {
        margin-top: 0!important;
    }
    .pt-1, .py-1 {
        padding-top: .25rem!important;
    }
    .fw-regular {
        font-weight: 400;
    }
    .clr-black3 {
        color: #424242;
    }
    .mt-3, .my-3 {
        margin-top: 1rem!important;
    }
    .text-muted {
        color: #6c757d!important;
    }
    .float-right {
        float: right!important;
    }
    .hd-txt1 {
        font-size: 24px;
        letter-spacing: 1.5px;
    }
    .clr-orange1 {
        color: #ed6402!important;
    }
    .text-right {
        text-align: right!important;
    }
    .cursor-pointer {
        cursor: pointer;
    }
    .mt-2, .my-2 {
        margin-top: .5rem!important;
    }
    .ml-2, .mx-2 {
        margin-left: .5rem!important;
    }
    img {
        vertical-align: middle;
        border-style: none;
        max-width: 100%;
    }
    .btn-primary[_ngcontent-uwt-c5] {
        font-size: 14px;
        font-weight: 700;
        padding: 7px 20px;
        border-radius: 8px;
        text-transform: uppercase;
        border: none;
        color: #fff;
        background: #ff9902;
        letter-spacing: .7px;
    }
    .information-sent[_ngcontent-pth-c11] {
    background-color: #fff;
    color: #888;
    border: 2px solid #e3e3e3!important;
    }
</style>
<link rel="stylesheet" href="style.css">
<!-- <link rel="stylesheet" href="stl.css"> -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>




<section style="background-color: #fff;">
  <div class="container">
    <div class="row">
        <div _ngcontent-qty-c11="" class="row pt-1" style="margin-top: 1.5rem!important">
            <div _ngcontent-qty-c11="" class="col-lg-5 col-md-5 col-sm-5 clr-black3 medium-txt2 fw-bold pl-0">
                <span _ngcontent-qty-c11="" class="col-lg-8 col-md-8 col-sm-8 clr-black3 medium-txt2 fw-bold"> Discover Matches</span>
            </div>
            <div _ngcontent-qty-c11="" class="col-lg-4 col-md-4 col-sm-4 text-right">
                <a _ngcontent-qty-c11="" class="a-1 text-uppercase" routerlink="#" href="pro_view.php">View all profiles <span _ngcontent-qty-c11="" class="ml-2"></span>
                </a>
            </div>
        </div>

        <?php 
            $full1_data = mysqli_query($db,"SELECT t1.*,t2.*,t3.*,t4.*,t5.*,t6.*,t7.*,t8.* FROM register t1 LEFT JOIN `register2` t2 ON t2.`u_id` = t1.`u_id` LEFT JOIN `register3` t3 ON t3.`u_id` = t1.`u_id` LEFT JOIN `register4` t4 ON t4.`u_id` = t1.`u_id` LEFT JOIN `register5` t5 ON t5.`u_id` = t1.`u_id` LEFT JOIN `basic_details` t6 ON t6.`u_id` = t1.`u_id` LEFT JOIN `personal_details` t7 ON t7.`u_id` = t1.`u_id` LEFT JOIN `register1` t8 ON t8.`u_id` = t1.`u_id` WHERE t1.`u_id` != '$u_id' AND t8.`gender` = '$new_gender' GROUP BY t1.`u_id`");
            while ($full_data = mysqli_fetch_assoc($full1_data))
            {
                $birth_date = $full_data['b_year'].'-'.$full_data['b_month'].'-'.$full_data['b_day'];

                $userDob = $birth_date;
                 
                //Create a DateTime object using the user's date of birth.
                $dob = new DateTime($userDob);
                 
                //We need to compare the user's date of birth with today's date.
                $now = new DateTime();
                 
                //Calculate the time difference between the two dates.
                $difference = $now->diff($dob);
                 
                //Get the difference in years, as we are looking for the user's age.
                $age = $difference->y;
                 
                //Print it out.
                $age;

                $height = $full_data['height'];
                $test = explode(" ",$height);
                $Cms = array_pop($test);
                $Feet1 = implode(" ", $test);
                $Feet = chop($Feet1,"-");

        ?>

        <div class="col-sm-9">
            <div style="color:#535353; font-size:13px;" class="reg-box">
              <div class="row  to-fmid" >
                <div _ngcontent-shk-c28="" class="row mb-5">
                  <div _ngcontent-shk-c28="" class="set-total-profile-wrap hover-shadow">
                    <div _ngcontent-shk-c28="" class="">
                      <div _ngcontent-shk-c28="" class="">
                        <div _ngcontent-shk-c28="" class="col-md-12 col-sm-12 col-12 border-0">
                          <div _ngcontent-shk-c28="" class="row mt-4">
                            <div _ngcontent-shk-c28="" class="col-md-4 col-sm-12 col-12">
                              <photo _ngcontent-shk-c28="" _nghost-shk-c4="">
                                <div _ngcontent-shk-c4="" appnorightclick="">
                                  <div _ngcontent-shk-c4="" id="carousel-main_H6736970">
                                    <div _ngcontent-shk-c4="" class="photoSliderCarousel photoSliderCarouselNew_H6736970 relative">
                                      <div _ngcontent-shk-c4="">
                                        <div _ngcontent-shk-c4="" class="list-viw-profile-bg-white">
                                            <?php if($full_data['gender'] == 'Male') { ?>

                                                <img _ngcontent-shk-c4="" class="lvimg-white" draggable="false" src="https://imgs.hindimatrimony.com/bmimgs/desktop-images/Male.png">

                                            <?php } else { ?>

                                                <img _ngcontent-shk-c4="" class="lvimg-white" draggable="false" src="https://imgs.hindimatrimony.com/bmimgs/desktop-images/Female.png">

                                            <?php } ?>
                                        </div>
                                        <div _ngcontent-shk-c4="" class="ser-plo-list">
                                          <app-buttons _ngcontent-shk-c4="" _nghost-shk-c19="">
                                            <app-actions _ngcontent-shk-c19="" _nghost-shk-c24=""></app-actions>
                                            <div _ngcontent-shk-c19="" class="col-lg-12 col-md-12 col-sm-12 paddt40 desk-cta pr-sm-0 lh-normal">
                                              <span _ngcontent-shk-c19="" class="pointer">
                                                <span _ngcontent-shk-c19=""> Request Her to 
                                                  <span _ngcontent-shk-c19="">
                                                    <br _ngcontent-shk-c19="">
                                                  </span>Add Photo 
                                                </span>
                                              </span>
                                            </div>
                                          </app-buttons>
                                        </div>
                                      </div>
                                      <span _ngcontent-shk-c4="">
                                        <app-buttons _ngcontent-shk-c4="" _nghost-shk-c19="">
                                          <app-actions _ngcontent-shk-c19="" _nghost-shk-c24="">
                                            
                                          </app-actions>
                                          <span _ngcontent-shk-c19="" class="list-viw-profile-call-rt">
                                            <a _ngcontent-shk-c22="" class="clr-black1 text-decoration-none col-md-12 pl-0 Viewlist" target="_blank" href="main_view.php?id=<?php echo ($full_data['u_id'])?$full_data['u_id']:''?>" u_id="<?php echo isset($u_id)?$u_id:''?>" profile_id="<?php echo isset($full_data['u_id'])?$full_data['u_id']:''?>">
                                            <img _ngcontent-shk-c19="" class="pointer" src="https://imgs.hindimatrimony.com/bmimgs/desktop-images/call-icon.png"></a>
                                          </span>
                                        </app-buttons>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </photo>
                            </div>
                            <div _ngcontent-shk-c28="" class="col-md-8 col-sm-12 col-12 mb-2 px-1">
                              <app-listview _ngcontent-shk-c28="" _nghost-shk-c22="">
                                <div _ngcontent-shk-c22="" class="row mt-0 pl-1 pb-2">
                                    <div _ngcontent-shk-c22="" class="pt-1">&nbsp;&nbsp;
                                      <?php 
                                        $identity_badge = mysqli_query($db,"SELECT * FROM `identity_badge` WHERE `u_id` = '$full_data[u_id]' AND `status` = '1'");
                                        $c = mysqli_num_rows($identity_badge);
                                        if($c > 0){ ?> 
                                          <img src="assets/images/identity.jfif" style="max-width: 6%;">
                                        <?php }
                                        else {
                                        } ?>
                                      
                                      <?php 
                                        $professional_badge = mysqli_query($db,"SELECT * FROM `professional_badge` WHERE `u_id` = '$full_data[u_id]' AND `status` = '1'");
                                        $c = mysqli_num_rows($professional_badge);
                                        if($c > 0){ ?> 
                                      <img src="assets/images/professional.jfif" style="max-width: 6%;">
                                      <?php }
                                        else {
                                        } ?>
                                    </div>
                                </div>
                                <div _ngcontent-shk-c22="" class="row">
                                  <a _ngcontent-shk-c22="" class="clr-black1 text-decoration-none col-md-12 pl-0 Viewlist" target="_blank" href="main_view.php?id=<?php echo ($full_data['u_id'])?$full_data['u_id']:''?>" u_id="<?php echo isset($u_id)?$u_id:''?>" profile_id="<?php echo isset($full_data['u_id'])?$full_data['u_id']:''?>">
                                    <div _ngcontent-shk-c22="" class="col-md-12 col-sm-12 col-12 fw-black hd-txt1 cursor-pointer outline-none color-initial"> <?php echo ($full_data['full_name'].' '.$full_data['surname'])?$full_data['full_name'].' '.$full_data['surname']:''?> </div>
                                  </a>
                                  <div _ngcontent-shk-c22="" class="col-md-1 col-sm-12 col-1 no-padding position-absolute">
                                    <a _ngcontent-shk-c22="" class="close-profile-list" title="Move this profile to ignore list. It won't appear in your future search results">
                                    <span _ngcontent-shk-c22="" class="close-profile-icon"></span>
                                    </a>
                                  </div>
                                  <div _ngcontent-shk-c22="" class="col-md-12 col-sm-12 col-12 small-txt2 color-initial clr-grey2">
                                    <!-- <a _ngcontent-shk-c22="" class="cursor-pointer outline-none text-decoration-none clr-grey2" target="_blank" href="#">H6736970</a> -->
                                    <span _ngcontent-shk-c22="">Profile Created by <?php echo isset($full_data['created_by'])?$full_data['created_by']:''?></span>
                                    <span _ngcontent-shk-c22="">
                                      <span _ngcontent-shk-c22="">
                                        <span _ngcontent-shk-c22="" class="pl-2 pr-2">|&nbsp;</span>
                                        <span _ngcontent-shk-c22="" class="online-gray"></span>
                                        <span _ngcontent-shk-c22="" class="cursor-pointer">&nbsp;Active&nbsp;-&nbsp;17 hours ago</span>
                                      </span>
                                    </span>
                                  </div>
                                </div>
                                <div _ngcontent-shk-c22="" class="row">
                                  <div _ngcontent-shk-c22="" class="col-md-12 col-sm-12 col-12 small-txt2 color-initial clr-grey2">
                                    <a _ngcontent-shk-c22="" class="cursor-pointer outline-none text-decoration-none clr-grey2" target="_blank" href="#"></a>
                                  </div>
                                </div>
                                <div _ngcontent-shk-c22="">
                                    <div _ngcontent-shk-c22="" class="row pt-3 font-weight-bold small-txt2 cursor-pointer outline-none color-initial">
                                    <a _ngcontent-shk-c22="" class="clr-black1 text-decoration-none col-md-12 pl-0 Viewlist" target="_blank" href="main_view.php?id=<?php echo ($full_data['u_id'])?$full_data['u_id']:''?>" u_id="<?php echo isset($u_id)?$u_id:''?>" profile_id="<?php echo isset($full_data['u_id'])?$full_data['u_id']:''?>">
                                      <div _ngcontent-shk-c22="" class="col-md-12 col-sm-12 col-12 fw-black">
                                        <span _ngcontent-shk-c22=""> <?php echo isset($age)?$age:''?> yrs,&nbsp;</span> <?php echo isset($Feet)?$Feet:''?>&nbsp;Ft&nbsp;/ <?php echo isset($Cms)?$Cms:'0'?> Cms,&nbsp; 
                                        <span _ngcontent-shk-c22=""><?php echo isset($full_data['mother_tongue'])?$full_data['mother_tongue']:''?>,&nbsp;</span>
                                      </div>
                                      <div _ngcontent-shk-c22="" class="col-md-12 col-sm-12 col-12 fw-black">
                                        <span _ngcontent-shk-c22=""> <?php echo isset($full_data['religion'])?$full_data['religion']:''?>,&nbsp;</span>
                                        <!-- <span _ngcontent-shk-c22=""> <?php echo isset($full_data['caste'])?$full_data['caste']:''?>,</span> -->
                                      </div>
                                      <div _ngcontent-shk-c22="" class="col-md-12 col-sm-12 col-12 fw-black">
                                        <span _ngcontent-shk-c22=""> <?php echo isset($full_data['education'])?$full_data['education']:''?>,&nbsp; </span>
                                        <span _ngcontent-shk-c22=""> <?php echo isset($full_data['occupation'])?$full_data['occupation']:''?>,&nbsp; </span>
                                        <span _ngcontent-shk-c22=""> <?php echo isset($full_data['city'])?$full_data['city']:''?>,&nbsp; </span><span _ngcontent-shk-c22=""> <?php echo isset($full_data['state'])?$full_data['state']:''?> </span>
                                      </div>
                                        </a>
                                    </div>
                                  <div _ngcontent-shk-c22="" class="row mt-3 font-weight-bold text-muted small-txt2">
                                    <div _ngcontent-shk-c22="" class="col-md-11 col-sm-12 col-12 pr-5">
                                      <div _ngcontent-shk-c22="" class="clr-black3 small-txt2 fw-regular ring-icon d-flex align-items-center" style="display: flex;"> Both of you are fond of Music &amp; Film songs</div>
                                    </div>
                                  </div>
                                </div>
                              </app-listview>
                            </div>
                          </div>
                          <div _ngcontent-shk-c28="" class="row py-2 d-flex align-items-center">
                            <div _ngcontent-shk-c28="" class="col-md-4 col-sm-12 col-xs-12 p-3">
                              <score-card _ngcontent-shk-c28="" _nghost-shk-c30="">
                                <div _ngcontent-shk-c30="" class="no-padding col-md-12 col-sm-12 col-12">
                                  <div _ngcontent-shk-c30="" class="no-padding col-md-10 col-sm-10 col-12 float-left ml-3">
                                    <div _ngcontent-shk-c30="" class="row no-gutters font-weight-bold mb-1 d-flex align-items-center mstxt1">
                                      <div _ngcontent-shk-c30="" class="no-padding col-md-9 col-sm-9 col-12 mstxt1 fw-black clr-blue1">Match Score</div>
                                      <div _ngcontent-shk-c30="" class="no-padding col-md-3 col-sm-3 col-12 text-right medium-txt1 fw-black clr-blue1">85%</div>
                                    </div>
                                    <div _ngcontent-shk-c30="" class="progress">
                                      <div _ngcontent-shk-c30="" aria-valuemax="100" aria-valuemin="0" class="progress-bar" role="progressbar" style="width: 85%;"></div>
                                    </div>
                                  </div>
                                </div>
                              </score-card>
                            </div>
                            <div _ngcontent-shk-c28="" class="col-md-8 col-sm-12 col-xs-12 pl-0">
                              <div _ngcontent-shk-c28="" class="row mt-0 p-3">
                                <div _ngcontent-shk-c28="" class="border p-3 bdr-rad-10 pr-31 ">
                                  <div _ngcontent-shk-c28="" class="row">
                                    <app-buttons _ngcontent-shk-c28="" class="d-flex align-items-center" _nghost-shk-c19="">
                                      <app-actions _ngcontent-shk-c19="" _nghost-shk-c24="">
                                        
                                      </app-actions>
                                      <div _ngcontent-shk-c19="" class="figure  col-md-6 col-sm-6">
                                        <?php
                                            $interest_list_details = mysqli_query($db,"SELECT * FROM `interest_list` WHERE `u_id` = $u_id AND `profile_id` = '$full_data[u_id]'");
                                            $c = mysqli_num_rows($interest_list_details);
                                                if($c > 0) { ?>

                                            <button _ngcontent-pth-c11="" class="viewBtnsend-interst mx-3 information-sent " type="button">Interest Sent</button>

                                        <?php } else { ?>

                                            <button type="submit" class="viewBtnsend-interst mx-3 SendInterest" u_id="<?php echo isset($u_id)?$u_id:''?>" profile_id="<?php echo isset($full_data['u_id'])?$full_data['u_id']:''?>">Send Interest</button>

                                        <?php } ?>
                                      </div>
                                      <div _ngcontent-shk-c19="" class="figure pl-md-2 col-md-6 col-sm-6">
                                        <?php
                                            $short_list_details = mysqli_query($db,"SELECT * FROM `short_list` WHERE `u_id` = $u_id AND `profile_id` = '$full_data[u_id]'");
                                            $c = mysqli_num_rows($short_list_details);
                                                if($c > 0) { ?>

                                                <button _ngcontent-shk-c19="" class="viewBtnsend-shortlist Shortlist" type="button" u_id="<?php echo isset($u_id)?$u_id:''?>" profile_id="<?php echo isset($full_data['u_id'])?$full_data['u_id']:''?>">
                                                  <span _ngcontent-shk-c19="" class="short-icon">Shortlisted</span>
                                                </button>

                                            <?php } else { ?>

                                                <button _ngcontent-shk-c19="" class="viewBtnsend-shortlist Shortlist" type="button" u_id="<?php echo isset($u_id)?$u_id:''?>" profile_id="<?php echo isset($full_data['u_id'])?$full_data['u_id']:''?>">
                                                  <span _ngcontent-shk-c19="" class="short-icon">Shortlist</span>
                                                </button>

                                        <?php } ?>
                                      </div>
                                    </app-buttons>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <app-right-panel _ngcontent-shk-c28="" style="width:100%;" _nghost-shk-c31="">
                            <div _ngcontent-shk-c31=""></div>
                          </app-right-panel>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <?php } ?>

        
    </div>

    <div class="row">
      <div>
        <div>
            <div class=" col-lg-9 col-md-9 col-sm-9 mt-4">
                <div class="row" style="margin-bottom: 20px;">
                    <div>
                        <a href="#" 
                        style="text-decoration:none;">
                            <div style="background:url(assets/images/dhoni.jpg) no-repeat;height:128px;color:#FFF;letter-spacing:1px;background-size: 100% 100%;border-radius: 10px;">
                                <!-- <div style="color: #FFF;padding:8px 0px 0px 300px;">
                                    <div style="font-size: 18px;">Best way to find your partner</div>
                                    <div style="font-size: 15px;padding-bottom:12px;">on 6 Month Classic Premium.</div>
                                    <div style="font-size: 12px;color: #FFF;font-weight: 600;background-color: transparent;padding: 5px 10px;border-radius: 10px;display: inline-block;border: 2px solid #FFF;text-transform: uppercase;">Upgrade Now</div>
                                </div> -->
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-9" >

        <!-- Photo Showing Part -->
        <div class="col-sm-12 no-padding" style="background-color: #ffffff;border: 1px solid #e7e7e7;padding: 20px 20px 20px 20px;box-shadow: 1px 0 8px 3px #eee;border-radius: 12px;">
           <h4><strong>Complete Your Profile For More Responses</strong></h4><br>
           <div _ngcontent-uwt-c5="" class="mt-3" style="text-align: center;"><button _ngcontent-uwt-c5="" class="btn-primary"><a href="main.php" style="color: #ffffff;"> Add Details Now </a></button></div>
        </div>

        

    </div>

    <div class="row">
      <div>
        <div>
            <div class=" col-lg-9 col-md-9 col-sm-9 mt-4">
                <div class="row" style="margin-bottom: 20px;">
                    <div>
                        <a href="#" 
                        style="text-decoration:none;">
                            <div style="background:url(assets/images/horoscope.jpg) no-repeat;height:128px;color:#FFF;letter-spacing:1px;background-size: 100% 100%;border-radius: 10px;">
                                <!-- <div style="color: #FFF;padding:8px 0px 0px 300px;">
                                    <div style="font-size: 18px;">Best way to find your partner</div>
                                    <div style="font-size: 15px;padding-bottom:12px;">on 6 Month Classic Premium.</div>
                                    <div style="font-size: 12px;color: #FFF;font-weight: 600;background-color: transparent;padding: 5px 10px;border-radius: 10px;display: inline-block;border: 2px solid #FFF;text-transform: uppercase;">Upgrade Now</div>
                                </div> -->
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    

    </div>
  </div>
</section>



<?php include("footer.php"); ?>
