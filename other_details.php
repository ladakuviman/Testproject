<?php include("header1.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])){
   $partner_id = $_GET['id'];
   $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `partner_details` WHERE `partner_id` = '$partner_id'"));
   $marital_status = explode(",",$data['marital_status']);
    $physical_status = explode(",",$data['physical_status']);
    $eating_habits = explode(",",$data['eating_habits']);
    $smoking_habits = explode(",",$data['smoking_habits']);
    $drinking_habits = explode(",",$data['drinking_habits']);
    $dosh = explode(",",$data['dosh']);
    $manglik = explode(",",$data['manglik']);
    $employed = explode(",",$data['employed']);
   }
   else {
    $data['age_from'] = "";
    $data['age_to'] = "";
    $data['height_from'] = "";
    $data['height_to'] = "";
    $data['marital_status'] = "";
    $data['eating_habits'] = "";
    $data['smoking_habits'] = "";
    $data['drinking_habits'] = "";
    $data['star'] = "";
    $data['raasi'] = "";

    $data['physical_status'] = "";
    $data['religion'] = "";
    $data['caste'] = "";
    $data['mother_tongue'] = "";
    $data['manglik'] = "";
    $data['country'] = "";
    $data['citizenship'] = "";
    $data['education'] = "";
    $data['occupation'] = "";
    $data['employed'] = "";
    $data['income'] = "";
    $data['description'] = "";

    

   }
?>
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
    padding: 20px;
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
  .bootstrap-select .bs-ok-default::after {
    width: 0.3em;
    height: 0.6em;
    border-width: 0 0.1em 0.1em 0;
    transform: rotate(45deg) translateY(0.5rem);
}

.btn.dropdown-toggle:focus {
    outline: none !important;
}
.dropdown {
    overflow: visible;
}
.bootstrap-select.show-tick .dropdown-menu .selected span.check-mark {
    position: absolute;
    display: inline-block;
    right: 15px;
    top: 5px;
}
.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: "Glyphicons Halflings";
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.glyphicon-ok:before {
    content: "\e013";
}
.row {
    margin-right: 0px !important;
    margin-left: 0px !important;
}
</style>
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.17/css/bootstrap-select.min.css">
<section style="background-color: rgb(228, 228, 228);">
	<div class="container">
        <div class="row">
            

            <div class="col-sm-12">
              <div style="color:#535353; font-size:13px;" class="reg-box">
                  <h1>Basic Prefrences of your future partner</h1>
                  <form action="" id = "AddPartnerDetails" method="post" enctype="multipart/form-data">
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Age :</label>
                      </div>
                      <div class="col-sm-2">
                          <select name="age_from"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                <option value="18"<?php if($data['age_from'] == '18') { ?> selected <?php } ?>>18</option>
                                <option value="19"<?php if($data['age_from'] == '19') { ?> selected <?php } ?>>19</option>
                                <option value="20"<?php if($data['age_from'] == '20') { ?> selected <?php } ?>>20</option>
                                <option value="21"<?php if($data['age_from'] == '21') { ?> selected <?php } ?>>21</option>
                                <option value="22"<?php if($data['age_from'] == '22') { ?> selected <?php } ?>>22</option>
                                <option value="23"<?php if($data['age_from'] == '23') { ?> selected <?php } ?>>23</option>
                                <option value="24"<?php if($data['age_from'] == '24') { ?> selected <?php } ?>>24</option>
                                <option value="25"<?php if($data['age_from'] == '25') { ?> selected <?php } ?>>25</option>
                                <option value="26"<?php if($data['age_from'] == '26') { ?> selected <?php } ?>>26</option>
                                <option value="27"<?php if($data['age_from'] == '27') { ?> selected <?php } ?>>27</option>
                                <option value="28"<?php if($data['age_from'] == '28') { ?> selected <?php } ?>>28</option>
                                <option value="29"<?php if($data['age_from'] == '29') { ?> selected <?php } ?>>29</option>
                                <option value="30"<?php if($data['age_from'] == '30') { ?> selected <?php } ?>>30</option>
                                <option value="31"<?php if($data['age_from'] == '31') { ?> selected <?php } ?>>31</option>
                                <option value="32"<?php if($data['age_from'] == '32') { ?> selected <?php } ?>>32</option>
                                <option value="33"<?php if($data['age_from'] == '33') { ?> selected <?php } ?>>33</option>
                                <option value="34"<?php if($data['age_from'] == '34') { ?> selected <?php } ?>>34</option>
                                <option value="35"<?php if($data['age_from'] == '35') { ?> selected <?php } ?>>35</option>
                                <option value="36"<?php if($data['age_from'] == '36') { ?> selected <?php } ?>>36</option>
                                <option value="37"<?php if($data['age_from'] == '37') { ?> selected <?php } ?>>37</option>
                                <option value="38"<?php if($data['age_from'] == '38') { ?> selected <?php } ?>>38</option>
                                <option value="39"<?php if($data['age_from'] == '39') { ?> selected <?php } ?>>39</option>
                                <option value="40"<?php if($data['age_from'] == '40') { ?> selected <?php } ?>>40</option>
                                <option value="41"<?php if($data['age_from'] == '41') { ?> selected <?php } ?>>41</option>
                                <option value="42"<?php if($data['age_from'] == '42') { ?> selected <?php } ?>>42</option>
                                <option value="43"<?php if($data['age_from'] == '43') { ?> selected <?php } ?>>43</option>
                                <option value="44"<?php if($data['age_from'] == '44') { ?> selected <?php } ?>>44</option>
                                <option value="45"<?php if($data['age_from'] == '45') { ?> selected <?php } ?>>45</option>
                                <option value="46"<?php if($data['age_from'] == '46') { ?> selected <?php } ?>>46</option>
                                <option value="47"<?php if($data['age_from'] == '47') { ?> selected <?php } ?>>47</option>
                                <option value="48"<?php if($data['age_from'] == '48') { ?> selected <?php } ?>>48</option>
                                <option value="49"<?php if($data['age_from'] == '49') { ?> selected <?php } ?>>49</option>
                                <option value="50"<?php if($data['age_from'] == '50') { ?> selected <?php } ?>>50</option>
                                <option value="51"<?php if($data['age_from'] == '51') { ?> selected <?php } ?>>51</option>
                                <option value="52"<?php if($data['age_from'] == '52') { ?> selected <?php } ?>>52</option>
                                <option value="53"<?php if($data['age_from'] == '53') { ?> selected <?php } ?>>53</option>
                                <option value="54"<?php if($data['age_from'] == '54') { ?> selected <?php } ?>>54</option>
                                <option value="55"<?php if($data['age_from'] == '55') { ?> selected <?php } ?>>55</option>
                                <option value="56"<?php if($data['age_from'] == '56') { ?> selected <?php } ?>>56</option>
                                <option value="57"<?php if($data['age_from'] == '57') { ?> selected <?php } ?>>57</option>
                                <option value="58"<?php if($data['age_from'] == '58') { ?> selected <?php } ?>>58</option>
                                <option value="59"<?php if($data['age_from'] == '59') { ?> selected <?php } ?>>59</option>
                                <option value="60"<?php if($data['age_from'] == '60') { ?> selected <?php } ?>>60</option>
                                <option value="61"<?php if($data['age_from'] == '61') { ?> selected <?php } ?>>61</option>
                                <option value="62"<?php if($data['age_from'] == '62') { ?> selected <?php } ?>>62</option>
                                <option value="63"<?php if($data['age_from'] == '63') { ?> selected <?php } ?>>63</option>
                                <option value="64"<?php if($data['age_from'] == '64') { ?> selected <?php } ?>>64</option>
                                <option value="65"<?php if($data['age_from'] == '65') { ?> selected <?php } ?>>65</option>
                                <option value="66"<?php if($data['age_from'] == '66') { ?> selected <?php } ?>>66</option>
                                <option value="67"<?php if($data['age_from'] == '67') { ?> selected <?php } ?>>67</option>
                                <option value="68"<?php if($data['age_from'] == '68') { ?> selected <?php } ?>>68</option>
                                <option value="69"<?php if($data['age_from'] == '69') { ?> selected <?php } ?>>69</option>
                                <option value="70"<?php if($data['age_from'] == '70') { ?> selected <?php } ?>>70</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                        <label class="cflo">to (years)</label>
                      </div>
                      <div class="col-sm-2">
                          <select name="age_to"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                                <option value="19"<?php if($data['age_to'] == '19') { ?> selected <?php } ?>>19</option>
                                <option value="20"<?php if($data['age_to'] == '20') { ?> selected <?php } ?>>20</option>
                                <option value="21"<?php if($data['age_to'] == '21') { ?> selected <?php } ?>>21</option>
                                <option value="22"<?php if($data['age_to'] == '22') { ?> selected <?php } ?>>22</option>
                                <option value="23"<?php if($data['age_to'] == '23') { ?> selected <?php } ?>>23</option>
                                <option value="24"<?php if($data['age_to'] == '24') { ?> selected <?php } ?>>24</option>
                                <option value="25"<?php if($data['age_to'] == '25') { ?> selected <?php } ?>>25</option>
                                <option value="26"<?php if($data['age_to'] == '26') { ?> selected <?php } ?>>26</option>
                                <option value="27"<?php if($data['age_to'] == '27') { ?> selected <?php } ?>>27</option>
                                <option value="28"<?php if($data['age_to'] == '28') { ?> selected <?php } ?>>28</option>
                                <option value="29"<?php if($data['age_to'] == '29') { ?> selected <?php } ?>>29</option>
                                <option value="30"<?php if($data['age_to'] == '30') { ?> selected <?php } ?>>30</option>
                                <option value="31"<?php if($data['age_to'] == '31') { ?> selected <?php } ?>>31</option>
                                <option value="32"<?php if($data['age_to'] == '32') { ?> selected <?php } ?>>32</option>
                                <option value="33"<?php if($data['age_to'] == '33') { ?> selected <?php } ?>>33</option>
                                <option value="34"<?php if($data['age_to'] == '34') { ?> selected <?php } ?>>34</option>
                                <option value="35"<?php if($data['age_to'] == '35') { ?> selected <?php } ?>>35</option>
                                <option value="36"<?php if($data['age_to'] == '36') { ?> selected <?php } ?>>36</option>
                                <option value="37"<?php if($data['age_to'] == '37') { ?> selected <?php } ?>>37</option>
                                <option value="38"<?php if($data['age_to'] == '38') { ?> selected <?php } ?>>38</option>
                                <option value="39"<?php if($data['age_to'] == '39') { ?> selected <?php } ?>>39</option>
                                <option value="40"<?php if($data['age_to'] == '40') { ?> selected <?php } ?>>40</option>
                                <option value="41"<?php if($data['age_to'] == '41') { ?> selected <?php } ?>>41</option>
                                <option value="42"<?php if($data['age_to'] == '42') { ?> selected <?php } ?>>42</option>
                                <option value="43"<?php if($data['age_to'] == '43') { ?> selected <?php } ?>>43</option>
                                <option value="44"<?php if($data['age_to'] == '44') { ?> selected <?php } ?>>44</option>
                                <option value="45"<?php if($data['age_to'] == '45') { ?> selected <?php } ?>>45</option>
                                <option value="46"<?php if($data['age_to'] == '46') { ?> selected <?php } ?>>46</option>
                                <option value="47"<?php if($data['age_to'] == '47') { ?> selected <?php } ?>>47</option>
                                <option value="48"<?php if($data['age_to'] == '48') { ?> selected <?php } ?>>48</option>
                                <option value="49"<?php if($data['age_to'] == '49') { ?> selected <?php } ?>>49</option>
                                <option value="50"<?php if($data['age_to'] == '50') { ?> selected <?php } ?>>50</option>
                                <option value="51"<?php if($data['age_to'] == '51') { ?> selected <?php } ?>>51</option>
                                <option value="52"<?php if($data['age_to'] == '52') { ?> selected <?php } ?>>52</option>
                                <option value="53"<?php if($data['age_to'] == '53') { ?> selected <?php } ?>>53</option>
                                <option value="54"<?php if($data['age_to'] == '54') { ?> selected <?php } ?>>54</option>
                                <option value="55"<?php if($data['age_to'] == '55') { ?> selected <?php } ?>>55</option>
                                <option value="56"<?php if($data['age_to'] == '56') { ?> selected <?php } ?>>56</option>
                                <option value="57"<?php if($data['age_to'] == '57') { ?> selected <?php } ?>>57</option>
                                <option value="58"<?php if($data['age_to'] == '58') { ?> selected <?php } ?>>58</option>
                                <option value="59"<?php if($data['age_to'] == '59') { ?> selected <?php } ?>>59</option>
                                <option value="60"<?php if($data['age_to'] == '60') { ?> selected <?php } ?>>60</option>
                                <option value="61"<?php if($data['age_to'] == '61') { ?> selected <?php } ?>>61</option>
                                <option value="62"<?php if($data['age_to'] == '62') { ?> selected <?php } ?>>62</option>
                                <option value="63"<?php if($data['age_to'] == '63') { ?> selected <?php } ?>>63</option>
                                <option value="64"<?php if($data['age_to'] == '64') { ?> selected <?php } ?>>64</option>
                                <option value="65"<?php if($data['age_to'] == '65') { ?> selected <?php } ?>>65</option>
                                <option value="66"<?php if($data['age_to'] == '66') { ?> selected <?php } ?>>66</option>
                                <option value="67"<?php if($data['age_to'] == '67') { ?> selected <?php } ?>>67</option>
                                <option value="68"<?php if($data['age_to'] == '68') { ?> selected <?php } ?>>68</option>
                                <option value="69"<?php if($data['age_to'] == '69') { ?> selected <?php } ?>>69</option>
                                <option value="70"<?php if($data['age_to'] == '70') { ?> selected <?php } ?>>70</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1">
                          <!-- <label class="cflo">years</label> -->
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Heights :</label>
                      </div>
                      <div class="col-sm-2">
                          <select name="height_from"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                               <option value="0">Feet/Inches</option>
                                <option value="4"<?php if($data['height_from'] == '4') { ?> selected <?php } ?>>4ft - 121 cm</option>
                               <option value="4 - 1"<?php if($data['height_from'] == '4 - 1') { ?> selected <?php } ?>>4ft 1in - 124cm</option>
                               <option value="4 - 2"<?php if($data['height_from'] == '4 - 2') { ?> selected <?php } ?>>4ft 2in - 127cm</option>
                               <option value="4 - 3"<?php if($data['height_from'] == '4 - 3') { ?> selected <?php } ?>>4ft 3in - 129cm</option>
                               <option value="4 - 4"<?php if($data['height_from'] == '4 - 4') { ?> selected <?php } ?>>4ft 4in - 132cm</option>
                               <option value="4 - 5"<?php if($data['height_from'] == '4 - 5') { ?> selected <?php } ?>>4ft 5in - 134cm</option>
                                <option value="4 - 6"<?php if($data['height_from'] == '4 - 6') { ?> selected <?php } ?>>4ft 6in - 137cm</option>
                                <option value="4 - 7"<?php if($data['height_from'] == '4 - 7') { ?> selected <?php } ?>>4ft 7in - 139cm</option>
                                <option value="4 - 8"<?php if($data['height_from'] == '4 - 8') { ?> selected <?php } ?>>4ft 8in - 142cm</option>
                                <option value="4 - 9"<?php if($data['height_from'] == '4 - 9') { ?> selected <?php } ?>>4ft 9in - 144cm</option>
                                <option value="4 - 10"<?php if($data['height_from'] == '4 - 10') { ?> selected <?php } ?>>4ft 10in - 147cm</option>
                                <option value="4 - 11"<?php if($data['height_from'] == '4 - 11') { ?> selected <?php } ?>>4ft 11in - 149cm</option>
                                <option value="5" <?php if($data['height_from'] == '5 ') { ?> selected <?php } ?>>5ft - 152cm</option>
                                <option value="5 - 1"<?php if($data['height_from'] == '5 - 1') { ?> selected <?php } ?>>5ft 1in - 154cm</option>
                                <option value="5 - 2"<?php if($data['height_from'] == '5 - 2') { ?> selected <?php } ?>>5ft 2in - 157cm</option>
                                <option value="5 - 3"<?php if($data['height_from'] == '5 - 3') { ?> selected <?php } ?>>5ft 3in - 160cm</option>
                                <option value="5 - 4"<?php if($data['height_from'] == '5 - 4') { ?> selected <?php } ?>>5ft 4in - 162cm</option>
                                <option value="5 - 5"<?php if($data['height_from'] == '5 - 5') { ?> selected <?php } ?>>5ft 5in - 165cm</option>
                                <option value="5 - 6"<?php if($data['height_from'] == '5 - 6') { ?> selected <?php } ?>>5ft 6in - 167cm</option>
                                <option value="5 - 7"<?php if($data['height_from'] == '5 - 7') { ?> selected <?php } ?>>5ft 7in - 170cm</option>
                                <option value="5 - 8"<?php if($data['height_from'] == '5 - 8') { ?> selected <?php } ?>>5ft 8in - 172cm</option>
                                <option value="5 - 9"<?php if($data['height_from'] == '5 - 9') { ?> selected <?php } ?>>5ft 9in - 175cm</option>
                                <option value="5 - 10"<?php if($data['height_from'] == '5 - 10') { ?> selected <?php } ?>>5ft 10in - 177cm</option>
                                <option value="5 - 11" <?php if($data['height_from'] == '5 - 11') { ?> selected <?php } ?>>5ft 11in - 180cm</option>
                                <option value="6"<?php if($data['height_from'] == '6 ') { ?> selected <?php } ?>>6ft - 182cm</option>
                                <option value="6 - 1"<?php if($data['height_from'] == '6 - 1') { ?> selected <?php } ?>>6ft 1in - 185cm</option>
                                <option value="6 - 2"<?php if($data['height_from'] == '6 - 2') { ?> selected <?php } ?>>6ft 2in - 187cm</option>
                                <option value="6 - 3"<?php if($data['height_from'] == '6 - 3') { ?> selected <?php } ?>>6ft 3in - 190cm</option>
                                <option value="6 - 4"<?php if($data['height_from'] == '6 - 4') { ?> selected <?php } ?>>6ft 4in - 193cm</option>
                                <option value="6 - 5"<?php if($data['height_from'] == '6 - 5') { ?> selected <?php } ?>>6ft 5in - 195cm</option>
                                <option value="6 - 6"<?php if($data['height_from'] == '6 - 6') { ?> selected <?php } ?>>6ft 6in - 198cm</option>
                                <option value="6 - 7"<?php if($data['height_from'] == '6 - 7') { ?> selected <?php } ?>>6ft 7in - 200cm</option>
                                <option value="6 - 8"<?php if($data['height_from'] == '6 - 8') { ?> selected <?php } ?>>6ft 8in - 203cm</option>
                                <option value="6 - 9"<?php if($data['height_from'] == '6 - 9') { ?> selected <?php } ?>>6ft 9in - 205cm</option>
                                <option value="6 - 10"<?php if($data['height_from'] == '6 - 10') { ?> selected <?php } ?>>6ft 10in - 208cm</option>
                                <option value="6 - 11"<?php if($data['height_from'] == '6 - 11') { ?> selected <?php } ?>>6ft 11in - 210cm</option>
                                <option value="7"<?php if($data['height_from'] == '7 ') { ?> selected <?php } ?>>7ft - 213cm</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                        <label class="cflo">to</label>
                      </div>
                      <div class="col-sm-2">
                          <select name="height_to"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Feet/Inches</option>
                                <option value="4"<?php if($data['height_to'] == '4') { ?> selected <?php } ?>>4ft - 121 cm</option>
                               <option value="4 - 1"<?php if($data['height_to'] == '4 - 1') { ?> selected <?php } ?>>4ft 1in - 124cm</option>
                               <option value="4 - 2"<?php if($data['height_to'] == '4 - 2') { ?> selected <?php } ?>>4ft 2in - 127cm</option>
                               <option value="4 - 3"<?php if($data['height_to'] == '4 - 3') { ?> selected <?php } ?>>4ft 3in - 129cm</option>
                               <option value="4 - 4"<?php if($data['height_to'] == '4 - 4') { ?> selected <?php } ?>>4ft 4in - 132cm</option>
                               <option value="4 - 5"<?php if($data['height_to'] == '4 - 5') { ?> selected <?php } ?>>4ft 5in - 134cm</option>
                                <option value="4 - 6"<?php if($data['height_to'] == '4 - 6') { ?> selected <?php } ?>>4ft 6in - 137cm</option>
                                <option value="4 - 7"<?php if($data['height_to'] == '4 - 7') { ?> selected <?php } ?>>4ft 7in - 139cm</option>
                                <option value="4 - 8"<?php if($data['height_to'] == '4 - 8') { ?> selected <?php } ?>>4ft 8in - 142cm</option>
                                <option value="4 - 9"<?php if($data['height_to'] == '4 - 9') { ?> selected <?php } ?>>4ft 9in - 144cm</option>
                                <option value="4 - 10"<?php if($data['height_to'] == '4 - 10') { ?> selected <?php } ?>>4ft 10in - 147cm</option>
                                <option value="4 - 11"<?php if($data['height_to'] == '4 - 11') { ?> selected <?php } ?>>4ft 11in - 149cm</option>
                                <option value="5" <?php if($data['height_to'] == '5 ') { ?> selected <?php } ?>>5ft - 152cm</option>
                                <option value="5 - 1"<?php if($data['height_to'] == '5 - 1') { ?> selected <?php } ?>>5ft 1in - 154cm</option>
                                <option value="5 - 2"<?php if($data['height_to'] == '5 - 2') { ?> selected <?php } ?>>5ft 2in - 157cm</option>
                                <option value="5 - 3"<?php if($data['height_to'] == '5 - 3') { ?> selected <?php } ?>>5ft 3in - 160cm</option>
                                <option value="5 - 4"<?php if($data['height_to'] == '5 - 4') { ?> selected <?php } ?>>5ft 4in - 162cm</option>
                                <option value="5 - 5"<?php if($data['height_to'] == '5 - 5') { ?> selected <?php } ?>>5ft 5in - 165cm</option>
                                <option value="5 - 6"<?php if($data['height_to'] == '5 - 6') { ?> selected <?php } ?>>5ft 6in - 167cm</option>
                                <option value="5 - 7"<?php if($data['height_to'] == '5 - 7') { ?> selected <?php } ?>>5ft 7in - 170cm</option>
                                <option value="5 - 8"<?php if($data['height_to'] == '5 - 8') { ?> selected <?php } ?>>5ft 8in - 172cm</option>
                                <option value="5 - 9"<?php if($data['height_to'] == '5 - 9') { ?> selected <?php } ?>>5ft 9in - 175cm</option>
                                <option value="5 - 10"<?php if($data['height_to'] == '5 - 10') { ?> selected <?php } ?>>5ft 10in - 177cm</option>
                                <option value="5 - 11" <?php if($data['height_to'] == '5 - 11') { ?> selected <?php } ?>>5ft 11in - 180cm</option>
                                <option value="6"<?php if($data['height_to'] == '6 ') { ?> selected <?php } ?>>6ft - 182cm</option>
                                <option value="6 - 1"<?php if($data['height_to'] == '6 - 1') { ?> selected <?php } ?>>6ft 1in - 185cm</option>
                                <option value="6 - 2"<?php if($data['height_to'] == '6 - 2') { ?> selected <?php } ?>>6ft 2in - 187cm</option>
                                <option value="6 - 3"<?php if($data['height_to'] == '6 - 3') { ?> selected <?php } ?>>6ft 3in - 190cm</option>
                                <option value="6 - 4"<?php if($data['height_to'] == '6 - 4') { ?> selected <?php } ?>>6ft 4in - 193cm</option>
                                <option value="6 - 5"<?php if($data['height_to'] == '6 - 5') { ?> selected <?php } ?>>6ft 5in - 195cm</option>
                                <option value="6 - 6"<?php if($data['height_to'] == '6 - 6') { ?> selected <?php } ?>>6ft 6in - 198cm</option>
                                <option value="6 - 7"<?php if($data['height_to'] == '6 - 7') { ?> selected <?php } ?>>6ft 7in - 200cm</option>
                                <option value="6 - 8"<?php if($data['height_to'] == '6 - 8') { ?> selected <?php } ?>>6ft 8in - 203cm</option>
                                <option value="6 - 9"<?php if($data['height_to'] == '6 - 9') { ?> selected <?php } ?>>6ft 9in - 205cm</option>
                                <option value="6 - 10"<?php if($data['height_to'] == '6 - 10') { ?> selected <?php } ?>>6ft 10in - 208cm</option>
                                <option value="6 - 11"<?php if($data['height_to'] == '6 - 11') { ?> selected <?php } ?>>6ft 11in - 210cm</option>
                                <option value="7"<?php if($data['height_to'] == '7 ') { ?> selected <?php } ?>>7ft - 213cm</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Marital status :</label>
                      </div>
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-7">
                         <input value="All"   type="checkbox" name="marital_status[]" <?php if (in_array("All", $marital_status)){?> checked <?php } ?>> All &nbsp;&nbsp;
                          <input value="Unmarried"  type="checkbox" name="marital_status[]" <?php if (in_array("Unmarried", $marital_status)){?> checked <?php } ?>> Unmarried &nbsp;&nbsp;<br>
                          <input value="Widow/Widowed"  type="checkbox" name="marital_status[]" <?php if (in_array("Widow/Widowed", $marital_status)){?> checked <?php } ?>> Widow/Widowed &nbsp;&nbsp;
                          <input value="Divorced"  type="checkbox" name="marital_status[]" <?php if (in_array("Divorced", $marital_status)){?> checked <?php } ?>> Divorced
                          <input value="Awaiting Divorce"   type="checkbox" name="marital_status[]" <?php if (in_array("Awaiting Divorce", $marital_status)){?> checked <?php } ?>> Awaiting Divorce 
                          
                      </div>
                      <?php  } else { ?>
                        <div class="col-sm-7">
                        <input value="All"   type="checkbox" name="marital_status[]" > All &nbsp;&nbsp;
                          <input value="Unmarried"  type="checkbox" name="marital_status[]" > Unmarried &nbsp;&nbsp;<br>
                          <input value="Widow/Widowed"  type="checkbox" name="marital_status[]" > Widow/Widowed &nbsp;&nbsp;
                          <input value="Divorced"  type="checkbox" name="marital_status[]" > Divorced
                          <input value="Awaiting Divorce"   type="checkbox" name="marital_status[]" > Awaiting Divorce
                          </div>
                      <?php } ?>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Physical status :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="Normal"   type="radio" name="physical_status" <?php if($data['physical_status'] == 'Normal') { ?> checked <?php } ?>> Normal &nbsp;&nbsp;
                          <input value="Doesnt matter"  type="radio" name="physical_status" <?php if($data['physical_status'] == 'Doesnt matter') { ?> checked <?php } ?>> Doesn't matter  &nbsp;&nbsp; <br>
                          <input value="Physically challenged"  type="radio" name="physical_status" <?php if($data['physical_status'] == 'Physically challenged') { ?> checked <?php } ?>> Physically challenged 
                          
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Eating habits :</label>
                      </div>
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-7">
                         <input value="Vegetarian"   type="checkbox" name="eating_habits[]" <?php if (in_array("Vegetarian", $eating_habits)){?> checked <?php } ?>> Vegetarian &nbsp;&nbsp;
                          <input value="Non Vegetarian"  type="checkbox" name="eating_habits[]" <?php if (in_array("Non Vegetarian", $eating_habits)){?> checked <?php } ?>> Non Vegetarian <br>
                          <input value="Eggetarian"  type="checkbox" name="eating_habits[]" <?php if (in_array("Eggetarian", $eating_habits)){?> checked <?php } ?>> Eggetarian &nbsp;&nbsp;
                          <input value="Doesnt matter"  type="checkbox" name="eating_habits[]" <?php if (in_array("Doesnt matter", $eating_habits)){?> checked <?php } ?>> Doesn't matter   
                          
                      </div>
                      <?php  } else { ?>
                       <div class="col-sm-7">
                         <input value="Vegetarian"   type="checkbox" name="eating_habits[]"> Vegetarian &nbsp;&nbsp;
                          <input value="Non Vegetarian"  type="checkbox" name="eating_habits[]"> Non Vegetarian <br>
                          <input value="Eggetarian"  type="checkbox" name="eating_habits[]"> Eggetarian &nbsp;&nbsp;
                          <input value="Doesn't matter"  type="checkbox" name="eating_habits[]"> Doesn't matter   
                          
                      </div>
                    <?php  }  ?>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Drinking habits :</label>
                      </div>
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-7">
                         <input value="Never drinks"   type="checkbox" name="drinking_habits[]" <?php if (in_array("Never drinks", $drinking_habits)){?> checked <?php } ?>> Never drinks &nbsp;&nbsp;
                          <input value="Drinks socially"  type="checkbox" name="drinking_habits[]" <?php if (in_array("Drinks socially", $drinking_habits)){?> checked <?php } ?>> Drinks socially
                          <input value="Drinks regularly"  type="checkbox" name="drinking_habits[]" <?php if (in_array("Drinks regularly", $drinking_habits)){?> checked <?php } ?>> Drinks regularly <br>
                          <input value="Doesnt matter"  type="checkbox" name="drinking_habits[]" <?php if (in_array("Doesnt matter", $drinking_habits)){?> checked <?php } ?>> Doesn't matter   
                          
                      </div>
                      <?php  } else { ?>
                      <div class="col-sm-7">
                         <input value="Never drinks"   type="checkbox" name="drinking_habits[]"> Never drinks &nbsp;&nbsp;
                          <input value="Drinks socially"  type="checkbox" name="drinking_habits[]"> Drinks socially
                          <input value="Drinks regularly"  type="checkbox" name="drinking_habits[]"> Drinks regularly <br>
                          <input value="Doesn't matter"  type="checkbox" name="drinking_habits[]"> Doesn't matter   
                          
                      </div>
                    <?php  }  ?>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Smoking habits :</label>
                      </div>
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-7">
                         <input value="Never Smokes"   type="checkbox" name="smoking_habits[]" <?php if (in_array("Never Smokes", $smoking_habits)){?> checked <?php } ?>> Never Smokes <br>
                          <input value="Smokes ocassionally"  type="checkbox" name="smoking_habits[]" <?php if (in_array("Smokes ocassionally", $smoking_habits)){?> checked <?php } ?>> Smokes ocassionally <br>
                          <input value="Smokes regularly"  type="checkbox" name="smoking_habits[]" <?php if (in_array("Smokes regularly", $smoking_habits)){?> checked <?php } ?>> Smokes regularly <br>
                          <input value="Doesnt matter"  type="checkbox" name="smoking_habits[]" <?php if (in_array("Doesnt matter", $smoking_habits)){?> checked <?php } ?>> Doesn't matter   
                          
                      </div>
                      <?php  } else { ?>
                      <div class="col-sm-7">
                         <input value="Never Smokes"   type="checkbox" name="smoking_habits[]"> Never Smokes <br>
                          <input value="Smokes ocassionally"  type="checkbox" name="smoking_habits[]"> Smokes ocassionally <br>
                          <input value="Smokes regularly"  type="checkbox" name="smoking_habits[]"> Smokes regularly <br>
                          <input value="Doesn't matter"  type="checkbox" name="smoking_habits[]"> Doesn't matter   
                          
                      </div>
                    <?php  }  ?>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1>Religion Preferences of your future partner</h1>
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Religion :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="religion"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="Any">Any</option>
                              <option value="Hindu" <?php if($data['religion'] == 'Hindu') { ?> selected <?php } ?>>Hindu</option>
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Mother Tongue :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="mother_tongue[]"    style="padding-top: 3px;" class="form-control sml-frm input-sm selectpicker"  multiple >
                              <option value="">Select</option>
                              <option value="Any">Any</option>
                              <option value="SSK Savji">SSK Savji</option>
                              <option value="Pategar">Pategar</option>
                              <option value="Khatri">Khatri</option>
                              <option value="Kannada">Kannada</option>
                              <option value="Marathi">Marathi</option>
                              <option value="Hindi">Hindi</option>
                              <option value="English">English</option>
                              <option value="Telugu">Telugu</option>
                              <option value="Tamil">Tamil</option>
                              <option value="Malayalam">Malayalam</option>
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Select Caste :</label>
                      </div>
                      <div class="col-sm-7">
                         <select name="caste[]"  style="padding-top: 3px;" class="form-control sml-frm input-sm selectpicker" multiple="">
                              <option value="">Select</option>
                              <option value="Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)" <?php if($data['caste'] == 'Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)') { ?> selected <?php } ?>>Shri Somvanshiya Shahasrarjun Kshatriya Samaj (SSK)</option>
                              
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Select Star/Nakshatra :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="star[]"  style="padding-top: 3px;" class="form-control sml-frm input-sm selectpicker" multiple>
                              <option value="Any">Any</option>
                              <option value="Ashwini"<?php if($data['star'] == 'Ashwini') { ?> selected <?php } ?>>Ashwini</option>
                              <option value="Bharni"<?php if($data['star'] == 'Bharni') { ?> selected <?php } ?>>Bharni</option>
                              <option value="Krittika"<?php if($data['star'] == 'Krittika') { ?> selected <?php } ?>>Krittika</option>
                              <option value="Rohini"<?php if($data['star'] == 'Rohini') { ?> selected <?php } ?>>Rohini</option>
                              <option value="Mrigshirsha"<?php if($data['star'] == 'Mrigshirsha') { ?> selected <?php } ?>>Mrigshirsha</option>
                              <option value="Ardra"<?php if($data['star'] == 'Ardra') { ?> selected <?php } ?>>Ardra</option>
                              <option value="Punarvasu"<?php if($data['star'] == 'Punarvasu') { ?> selected <?php } ?>>Punarvasu</option>
                              <option value="Pushya"<?php if($data['star'] == 'Pushya') { ?> selected <?php } ?>>Pushya</option>
                              <option value="Ashlesha"<?php if($data['star'] == 'Ashlesha') { ?> selected <?php } ?>>Ashlesha</option>
                              <option value="Megha"<?php if($data['star'] == 'Megha') { ?> selected <?php } ?>>Megha</option>
                              <option value="Purva phalguni"<?php if($data['star'] == 'Purva phalguni') { ?> selected <?php } ?>>Purva phalguni</option>
                              <option value="Uttara phalguni"<?php if($data['star'] == 'Uttara phalguni') { ?> selected <?php } ?>>Uttara phalguni</option>
                              <option value="Hasta"<?php if($data['star'] == 'Hasta') { ?> selected <?php } ?>>Hasta</option>
                              <option value="Chitra"<?php if($data['star'] == 'Chitra') { ?> selected <?php } ?>>Chitra</option>
                              <option value="Swati"<?php if($data['star'] == 'Swati') { ?> selected <?php } ?>>Swati</option>
                              <option value="Vishakha"<?php if($data['star'] == 'Vishakha') { ?> selected <?php } ?>>Vishakha</option>
                              <option value="Anuradha"<?php if($data['star'] == 'Anuradha') { ?> selected <?php } ?>>Anuradha</option>
                              <option value="Jyeshtha"<?php if($data['star'] == 'Jyeshtha') { ?> selected <?php } ?>>Jyeshtha</option>
                              <option value="Moola"<?php if($data['star'] == 'Moola') { ?> selected <?php } ?>>Moola</option>
                              <option value="Purv ashadha"<?php if($data['star'] == 'Purv ashadha') { ?> selected <?php } ?>>Purv ashadha</option>
                              <option value="Uttar ashadha"<?php if($data['star'] == 'Uttar ashadha') { ?> selected <?php } ?>>Uttar ashadha</option>
                              <option value="Shravan"<?php if($data['star'] == 'Shravan') { ?> selected <?php } ?>>Shravan</option>
                              <option value="Dhanishta"<?php if($data['star'] == 'Dhanishta') { ?> selected <?php } ?>>Dhanishta</option>
                              <option value="Shatbhisha"<?php if($data['star'] == 'Shatbhisha') { ?> selected <?php } ?>>Shatbhisha</option>
                              <option value="Poorva bhadrapada"<?php if($data['star'] == 'Poorva bhadrapada') { ?> selected <?php } ?>>Poorva bhadrapada</option>
                              <option value="Uttara bhadrapada"<?php if($data['star'] == 'Uttara bhadrapada') { ?> selected <?php } ?>>Uttara bhadrapada</option>
                              <option value="Revati"<?php if($data['star'] == 'Revati') { ?> selected <?php } ?>>Revati</option>  
                              <option value="Abhijit"<?php if($data['star'] == 'Abhijit') { ?> selected <?php } ?>>Abhijit</option> 
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Dosh :</label>
                      </div>
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-7">
                         <input value="Yes"   type="checkbox" name="dosh[]" <?php if (in_array("Yes", $dosh)){?> checked <?php } ?>> Yes &nbsp;&nbsp;
                          <input value="No"  type="checkbox" name="dosh[]" <?php if (in_array("No", $dosh)){?> checked <?php } ?>> No &nbsp;&nbsp;
                          <input value="Doesnt matter"  type="checkbox" name="dosh[]" <?php if (in_array("Doesnt matter", $dosh)){?> checked <?php } ?>> Doesn't matter   
                          
                      </div>
                      <?php  } else { ?>
                      <div class="col-sm-7">
                         <input value="Yes"   type="checkbox" name="dosh[]"> Yes &nbsp;&nbsp;
                          <input value="No"  type="checkbox" name="dosh[]"> No &nbsp;&nbsp;
                          <input value="Doesn't matter"  type="checkbox" name="dosh[]"> Doesn't matter   
                          
                      </div>
                      <?php  } ?>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Manglik :</label>
                      </div>
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-7">
                         <input value="Yes"   type="checkbox" name="manglik[]" <?php if (in_array("Yes", $manglik)){?> checked <?php } ?>> Yes &nbsp;&nbsp;
                          <input value="No"  type="checkbox" name="manglik[]" <?php if (in_array("No", $manglik)){?> checked <?php } ?>> No &nbsp;&nbsp;
                          <input value="Doesnt matter"  type="checkbox" name="manglik[]" <?php if (in_array("Doesnt matter", $manglik)){?> checked <?php } ?>> Doesn't matter   
                          
                      </div>
                      <?php  } else { ?>
                       <div class="col-sm-7">
                         <input value="Yes"   type="checkbox" name="manglik[]"> Yes &nbsp;&nbsp;
                          <input value="No"  type="checkbox" name="manglik[]"> No &nbsp;&nbsp;
                          <input value="Doesn't matter"  type="checkbox" name="manglik[]"> Doesn't matter   
                          
                      </div>
                      <?php  }  ?>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1>Location of your future partner</h1>
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Country living in :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="country[]" style="padding-top: 3px;" class="form-control sml-frm input-sm selectpicker" multiple="">
                              <option value="Any">Any</option>
                              <option value="India">India</option>
                              <?php
                                    $sql = $db->query("SELECT * FROM `countries`");
                                    $numrow = $sql->num_rows;
                                    if ($numrow > 0) {
                                        $i = 1;
                                        while ($row1 = $sql->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $row1['name']; ?>"><?php echo $row1['name']; ?></option>
                                            <?php
                                        } //while loop
                                    } //if loop
                                    ?> 
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Citizenship :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="citizenship[]" style="padding-top: 3px;" class="form-control sml-frm input-sm selectpicker" multiple="">
                              <option value="Any">Any</option>
                              <?php
                                    $sql = $db->query("SELECT * FROM `countries`");
                                    $numrow = $sql->num_rows;
                                    if ($numrow > 0) {
                                        $i = 1;
                                        while ($row1 = $sql->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $row1['name']; ?>"><?php echo $row1['name']; ?></option>
                                            <?php
                                        } //while loop
                                    } //if loop
                                    ?> 
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1>Profession Preferences of your future partner</h1>
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Education :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="education[]"  style="padding-top: 3px;" class="form-control sml-frm input-sm selectpicker" multiple="">
                              <option value="">Select</option>
                            <option value="Any">Any</option>
                            <option value="BE / B.Tech.">BE / B.Tech.</option>
                            <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                            <option value="B.Arch">B.Arch</option>
                            <option value="BCA">BCA</option>
                            <option value="BE">BE</option>
                            <option value="B.Plan">B.Plan</option>
                            <option value="B.Sc IT/ Computer Science">B.Sc IT/ Computer Science</option>
                            <option value="B.Tech.">B.Tech.</option>
                            <option value="B.S.(Engineering)">B.S.(Engineering)</option>
                            <option value="Other Bachelor Degree in Engineering / Computers">Other Bachelor Degree in Engineering / Computers</option>

                            <option value="MCA / PGDCA">MCA / PGDCA</option>
                            <option value="ME / M.Tech.">ME / M.Tech.</option>
                            <option value="M.Arch.">M.Arch.</option>
                            <option value="MCA">MCA</option>
                            <option value="ME">ME</option>
                            <option value="M.Sc. IT / Computer Science">M.Sc. IT / Computer Science</option>
                            <option value="3">M.S.(Engg.)</option>
                            <option value="M.S.(Engg.)">M.Tech.</option>
                            <option value="PGDCA">PGDCA</option>
                            <option value="Other Masters Degree in Engineering / Computers">Other Masters Degree in Engineering / Computers</option>

                            <option value="Aviation Degree">Aviation Degree</option>
                            <option value="B.A.">B.A.</option>
                            <option value="B.Com.">B.Com.</option>
                            <option value="B.Ed.">B.Ed.</option>
                            <option value="BFA">BFA</option>
                            <option value="BFT">BFT</option>
                            <option value="BLIS">BLIS</option>
                            <option value="B.M.M.">B.M.M.</option>
                            <option value="B.Sc.">B.Sc.</option>
                            <option value="B.S.W">B.S.W</option>
                            <option value="B.Phil.">B.Phil.</option>
                            <option value="Other Bachelor Degree in Arts / Science / Commerce">Other Bachelor Degree in Arts / Science / Commerce</option>

                            <option value="M.A.">M.A.</option>
                            <option value="MCom">MCom</option>
                            <option value="M.Ed.">M.Ed.</option>
                            <option value="MFA">MFA</option>
                            <option value="MLIS">MLIS</option>
                            <option value="M.Sc.">M.Sc.</option>
                            <option value="MSW">MSW</option>
                            <option value="M.Phil.">M.Phil.</option>
                            <option value="Other Master Degree in Arts / Science / Commerce">Other Master Degree in Arts / Science / Commerce</option>

                            <option value="BBA">BBA</option>
                            <option value="BFM (Financial Management)">BFM (Financial Management)</option>
                            <option value="BHM (Hotel Management)">BHM (Hotel Management)</option>
                            <option value="BHA / BHM (Hospital Administration)">BHA / BHM (Hospital Administration)</option>
                            <option value="Other Bachelor Degree in Management">Other Bachelor Degree in Management</option>

                            <option value="MBA">MBA</option>
                            <option value="MFM (Financial Management)">MFM (Financial Management)</option>
                            <option value="MHM  (Hotel Management)">MHM  (Hotel Management)</option>
                            <option value="MHRM (Human Resource Management)">MHRM (Human Resource Management)</option>
                            <option value="PGDM">PGDM</option>
                            <option value="MBA / PGDM">MBA / PGDM</option>
                            <option value="MHA / MHM (Hospital Administration)">MHA / MHM (Hospital Administration)</option>
                            <option value="Other Master Degree in Management">Other Master Degree in Management</option>

                            <option value="B.A.M.S.">B.A.M.S.</option>
                            <option value="BDS">BDS</option>
                            <option value="BHMS">BHMS</option>
                            <option value="BSMS">BSMS</option>
                            <option value="BPharm">BPharm</option>
                            <option value="BPT">BPT</option>
                            <option value="BUMS">BUMS</option>
                            <option value="BVSc">BVSc</option>
                            <option value="MBBS">MBBS</option>
                            <option value="B.Sc. Nursing">B.Sc. Nursing</option>
                            <option value="Other Bachelor Degree in Medicine">Other Bachelor Degree in Medicine</option>

                            <option value="MDS">MDS</option>
                            <option value="MD / MS (Medical)">MD / MS (Medical)</option>
                            <option value="M.Pharm">M.Pharm</option>
                            <option value="MPT">MPT</option>
                            <option value="MVSc">MVSc </option>
                            <option value="Other Master Degree in Medicine">Other Master Degree in Medicine</option>

                            <option value="BGL">BGL</option>
                            <option value="B.L.">B.L.</option>
                            <option value="LL.B.">LL.B.</option>
                            <option value="BGL / B.L. / LL.B.">BGL / B.L. / LL.B.</option>
                            <option value="Other Bachelor Degree in Legal">Other Bachelor Degree in Legal</option>

                            <option value="LL.M.">LL.M.</option>
                            <option value="M.L.">M.L.</option>
                            <option value="M.L. / LL.M.">M.L. / LL.M.</option>
                            <option value="Other Master Degree in  Legal">Other Master Degree in  Legal</option>

                            <option value="CA">CA</option>
                            <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial Analyst)</option>
                            <option value="CS">CS</option>
                            <option value="ICWA">ICWA</option>
                            <option value="Other Degree in Finance">Other Degree in Finance</option>

                            <option value="IAS">IAS</option>
                            <option value="IES">IES</option>
                            <option value="IFS">IFS</option>
                            <option value="IRS">IRS</option>
                            <option value="IPS">IPS</option>
                            <option value="IAS / IPS/ IRS / IES / IFS">IAS / IPS/ IRS / IES / IFS</option>
                            <option value="Other Degree in Service">Other Degree in Service</option>

                            <option value="Ph.D.">Ph.D.</option>

                            <option value="Diploma">Diploma</option>
                            <option value="Polytechnic">Polytechnic</option>
                            <option value="Trade School">Trade School</option>
                            <option value="Others">Others</option>

                            <option value="Higher Secondary School / High School">Higher Secondary School / High School</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Occupation :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="occupation[]"  style="padding-top: 3px;" class="form-control sml-frm input-sm selectpicker" multiple="">
                              <option value="0">Select</option>
                              <option value="Any">Any</option>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMINISTRATION --" class="a">
                                <option value="Manager">Manager</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Officer">Officer</option>
                                <option value="Administrative Professional">Administrative Professional</option>
                                <option value="Executive">Executive</option>
                                <option value="Clerk">Clerk</option>
                                <option value="Human Resources Professional">Human Resources Professional</option>
                                <option value="Secretary / Front Office">Secretary / Front Office</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --" class="a">
                                <option value="Agriculture & Farming Professional">Agriculture & Farming Professional</option>
                                <option value="Horticulturist">Horticulturist</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --" class="a">
                                <option value="Pilot">Pilot</option>
                                <option value="Air Hostess / Flight Attendant">Air Hostess / Flight Attendant</option>
                                <option value="Airline Professional">Airline Professional</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECTURE & DESIGN --" class="a">
                                <option value="Architect">Architect</option>
                                <option value="Interior Designer">Interior Designer</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING & FINANCE --" class="a">
                                <option value="Chartered Accountant">Chartered Accountant</option>
                                <option value="Company Secretary">Company Secretary</option>
                                <option value="Accounts / Finance Professional">Accounts / Finance Professional</option>
                                <option value="Banking Professional">Banking Professional</option>
                                <option value="Auditor">Auditor</option>
                                <option value="Financial Accountant">Financial Accountant</option>
                                <option value="Financial Analyst / Planning">Financial Analyst / Planning</option>
                                <option value="Investment Professional">Investment Professional</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY & FASHION --" class="a">
                                <option value="Fashion Designer">Fashion Designer</option>
                                <option value="Beautician">Beautician</option>
                                <option value="Hair Stylist">Hair Stylist</option>
                                <option value="Jewellery Designer">Jewellery Designer</option>
                                <option value="Designer (Others)">Designer (Others)</option>
                                <option value="Makeup Artist">Makeup Artist</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BPO & CUSTOMER SERVICE --" class="a">
                                <option value="BPO / KPO / ITES Professional">BPO / KPO / ITES Professional</option>
                                <option value="Customer Service Professional">Customer Service Professional</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --" class="a">
                                <option value="Civil Services (IAS / IPS / IRS / IES / IFS)">Civil Services (IAS / IPS / IRS / IES / IFS)</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CORPORATE PROFESSIONALS --" class="a">
                                <option value="Analyst">Analyst</option>
                                <option value="Consultant">Consultant</option>
                                <option value="Corporate Communication">Corporate Communication</option>
                                <option value="Corporate Planning">Corporate Planning</option>
                                <option value="Marketing Professional">Marketing Professional</option>
                                <option value="Operations Management">Operations Management</option>
                                <option value="Sales Professional">Sales Professional</option>
                                <option value="Senior Manager / Manager">Senior Manager / Manager</option>
                                <option value="Subject Matter Expert">Subject Matter Expert</option>
                                <option value="Business Development Professional">Business Development Professional</option>
                                <option value="Content Writer">Content Writer</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --" class="a">
                                <option value="Army">Army</option>
                                <option value="Navy">Navy</option>
                                <option value="Defence Services (Others)">Defence Services (Others)</option>
                                <option value="Air Force">Air Force</option>
                                <option value="Paramilitary">Paramilitary</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION & TRAINING --" class="a">
                                <option value="Professor / Lecturer">Professor / Lecturer</option>
                                <option value="Teaching / Academician">Teaching / Academician</option>
                                <option value="Education Professional">Education Professional</option>
                                <option value="Training Professional">Training Professional</option>
                                <option value="Research Assistant">Research Assistant</option>
                                <option value="Research Scholar">Research Scholar</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ENGINEERING --" class="a">
                                <option value="Civil Engineer">Civil Engineer</option>
                                <option value="Electronics / Telecom Engineer">Electronics / Telecom Engineer</option>
                                <option value="Mechanical / Production Engineer">Mechanical / Production Engineer</option>
                                <option value="Quality Assurance Engineer - Non IT">Quality Assurance Engineer - Non IT</option>
                                <option value="Engineer - Non IT">Engineer - Non IT</option>
                                <option value="Designer">Designer</option>
                                <option value="Product Manager - Non IT">Product Manager - Non IT</option>
                                <option value="Project Manager - Non IT">Project Manager - Non IT</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --" class="a">
                                <option value="Hotel / Hospitality Professional">Hotel / Hospitality Professional</option>
                                <option value="Restaurant / Catering Professional">Restaurant / Catering Professional</option>
                                <option value="Chef / Cook">Chef / Cook</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT & SOFTWARE --" class="a">
                                <option value="Software Professional" >Software Professional</option>
                                <option value="Hardware Professional">Hardware Professional</option>
                                <option value="Product Manager">Product Manager</option>
                                <option value="Project Manager">Project Manager</option>
                                <option value="Program Manager">Program Manager</option>
                                <option value="Animator">Animator</option>
                                <option value="Cyber / Network Security">Cyber / Network Security</option>
                                <option value="UI / UX Designer">UI / UX Designer</option>
                                <option value="Web / Graphic Designer">Web / Graphic Designer</option>
                                <option value="Software Consultant">Software Consultant</option>
                                <option value="Data Analyst">Data Analyst</option>
                                <option value="Data Scientist">Data Scientist</option>
                                <option value="Network Engineer">Network Engineer</option>
                                <option value="Quality Assurance Engineer">Quality Assurance Engineer</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --" class="a">
                                <option value="Lawyer & Legal Professional">Lawyer & Legal Professional</option>
                                <option value="Legal Assistant">Legal Assistant</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LAW ENFORCEMENT --" class="a">
                                <option value="Law Enforcement Officer">Law Enforcement Officer</option>
                                <option value="Police">Police</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL & HEALTHCARE --" class="a">
                                <option value="Doctor">Doctor</option>
                                <option value="Healthcare Professional">Healthcare Professional</option>
                                <option value="Paramedical Professional">Paramedical Professional</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="Physiotherapist">Physiotherapist</option>
                                <option value="Psychologist">Psychologist</option>
                                <option value="Veterinary Doctor">Veterinary Doctor</option>
                                <option value="Dentist">Dentist</option>
                                <option value="Surgeon">Surgeon</option>
                                <option value="Therapist">Therapist</option>
                                <option value="Medical Transcriptionist">Medical Transcriptionist</option>
                                <option value="Dietician / Nutritionist">Dietician / Nutritionist</option>
                                <option value="Lab Technician">Lab Technician</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA & ENTERTAINMENT --" class="a">
                                <option value="Journalist">Journalist</option>
                                <option value="Media Professional">Media Professional</option>
                                <option value="Entertainment Professional">Entertainment Professional</option>
                                <option value="Event Management Professional">Event Management Professional</option>
                                <option value="Advertising / PR Professional">Advertising / PR Professional</option>
                                <option value="Designer">Designer</option>
                                <option value="Actor / Model">Actor / Model</option>
                                <option value="Artist">Artist</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --" class="a">
                                <option value="Mariner / Merchant Navy">Mariner / Merchant Navy</option>
                                <option value="Sailor">Sailor</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --" class="a">
                                <option value="Scientist / Researcher">Scientist / Researcher</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- TOP MANAGEMENT --" class="a">
                                <option value="CXO / President, Director, Chairman">CXO / President, Director, Chairman</option>
                                <option value="VP / AVP / GM / DGM / AGM">VP / AVP / GM / DGM / AGM</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --" class="a">
                                <option value="Technician">Technician</option>
                                <option value="Arts & Craftsman">Arts & Craftsman</option>
                                <option value="Librarian">Librarian</option>
                                <option value="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
                                <option value="Retired">Retired</option>
                                <option value="Transportation / Logistics Professional">Transportation / Logistics Professional</option>
                                <option value="Agent / Broker / Trader">Agent / Broker / Trader</option>
                                <option value="Contractor">Contractor</option>
                                <option value="Fitness Professional">Fitness Professional</option>
                                <option value="Security Professional">Security Professional</option>
                                <option value="Social Worker /  Volunteer / NGO">Social Worker /  Volunteer / NGO</option>
                                <option value="Sportsperson">Sportsperson</option>
                                <option value="Travel Professional">Travel Professional</option>
                                <option value="Singer">Singer</option>
                                <option value="Writer">Writer</option>
                                <option value="Politician">Politician</option>
                                <option value="Associate">Associate</option>
                                <option value="Builder">Builder</option>
                                <option value="Chemist">Chemist</option>
                                <option value="CNC Operator">CNC Operator</option>
                                <option value="Distributor">Distributor</option>
                                <option value="Driver">Driver</option>
                                <option value="Freelancer">Freelancer</option>
                                <option value="Mechanic">Mechanic</option>
                                <option value="Medical Representative">Medical Representative</option>
                                <option value="Musician">Musician</option>
                                <option value="Photo / Videographer">Photo / Videographer</option>
                                <option value="Surveyor">Surveyor</option>
                                <option value="Tailor">Tailor</option>
                                <option value="Others">Others</option>
                              </optgroup>
    
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Employed in :</label>
                      </div>
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-7">
                         <input value="Government"   type="checkbox" name="employed[]" <?php if (in_array("Government", $employed)){?> checked <?php } ?>> Government &nbsp;&nbsp;
                          <input value="Private"  type="checkbox" name="employed[]" <?php if (in_array("Private", $employed)){?> checked <?php } ?>> Private &nbsp;&nbsp;
                          <br>
                          <input value="Business"  type="checkbox" name="employed[]" <?php if (in_array("Business", $employed)){?> checked <?php } ?>> Business &nbsp;&nbsp;
                          <input value="Defence"  type="checkbox" name="employed[]" <?php if (in_array("Defence", $employed)){?> checked <?php } ?>> Defence &nbsp;&nbsp;
                          <br>
                          <input value="Self Employed"  type="checkbox" name="employed[]" <?php if (in_array("Self Employed", $employed)){?> checked <?php } ?>> Self Employed &nbsp;&nbsp;
                          <input value="Not Working"  type="checkbox" name="employed[]" <?php if (in_array("Not Working", $employed)){?> checked <?php } ?>> Not Working
                      </div>
                      <?php  } else { ?>
                      <div class="col-sm-7">
                         <input value="Government"   type="checkbox" name="employed[]"> Government &nbsp;&nbsp;
                          <input value="Private"  type="checkbox" name="employed[]"> Private &nbsp;&nbsp;
                          <br>
                          <input value="Business"  type="checkbox" name="employed[]"> Business &nbsp;&nbsp;
                          <input value="Defence"  type="checkbox" name="employed[]"> Defence &nbsp;&nbsp;
                          <br>
                          <input value="Self Employed"  type="checkbox" name="employed[]"> Self Employed &nbsp;&nbsp;
                          <input value="Not Working"  type="checkbox" name="employed[]"> Not Working
                      </div>
                    <?php  }  ?>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Annual income :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="income[]"  style="padding-top: 3px;" class="form-control sml-frm input-sm selectpicker" multiple="">
                              <option value="">Select</option>
                              <option value="Any">Any</option>
                              <option value="0 - 1 Lakh">0 - 1 Lakh</option>
                              <option value="1 - 2 Lakhs">1 - 2 Lakhs</option>
                              <option value="2 - 3 Lakhs">2 - 3 Lakhs</option>
                              <option value="3 - 4 Lakhs">3 - 4 Lakhs</option>
                              <option value="4 - 5 Lakhs">4 - 5 Lakhs</option>
                              <option value="5 - 6 Lakhs">5 - 6 Lakhs</option>
                              <option value="6 - 7 Lakhs">6 - 7 Lakhs</option>
                              <option value="7 - 8 Lakhs">7 - 8 Lakhs</option>
                              <option value="8 - 9 Lakhs">8 - 9 Lakhs</option>
                              <option value="9 - 10 Lakhs">9 - 10 Lakhs</option>
                              <option value="10 - 12 Lakhs">10 - 12 Lakhs</option>
                              <option value="12 - 14 Lakhs">12 - 14 Lakhs</option>
                              <option value="14 - 16 Lakhs">14 - 16 Lakhs</option>
                              <option value="16 - 18 Lakhs">16 - 18 Lakhs</option>
                              <option value="18 - 20 Lakhs">18 - 20 Lakhs</option>
                              <option value="20 - 25 Lakhs">20 - 25 Lakhs</option>
                              <option value="25 - 30 Lakhs">25 - 30 Lakhs</option>
                              <option value="30 - 35 Lakhs">30 - 35 Lakhs</option>
                              <option value="35 - 40 Lakhs">35 - 40 Lakhs</option>
                              <option value="40 - 45 Lakhs">40 - 45 Lakhs</option>
                              <option value="45 - 50 Lakhs">45 - 50 Lakhs</option>
                              <option value="50 - 60 Lakhs">50 - 60 Lakhs</option>
                              <option value="60 - 70 Lakhs">60 - 70 Lakhs</option>
                              <option value="70 - 80 Lakhs">70 - 80 Lakhs</option>
                              <option value="80 - 90 Lakhs">80 - 90 Lakhs</option>
                              <option value="90 Lakhs - 1 Crore">90 Lakhs - 1 Crore</option>
                              <option value="1 Crore & Above">1 Crore & Above</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1>Partner Description</h1>
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">About Partner :</label>
                      </div>
                      <div class="col-sm-7">
                          
                          <textarea rows="6" name="description" cols="40" style="width: 100%;"><?php echo isset($data['description'])?$data['description']:''?></textarea>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                    <div class="col-sm-4 no-padding">
                        <label class="cflo"></label>
                    </div>
                     <div class="col-sm-4 wrapper">
                      <input type ="hidden" name = "type" value="AddPartnerDetails">
                      <input type ="hidden" name = "partner_id" id="partner_id" value="<?php echo isset($data['partner_id'])?$data['partner_id']:''?>">
                        <button type="submit" id="submit" class="btn btn-submit btn-sm btn-success">Submit</button>
                    </div>
                    <div class="col-sm-4 no-padding">
                        
                    </div>
                   
                  </div>

                  </form>



              </div>
            </div>
        </div>

    </div>
</section>
<?php include("footer.php"); ?>
<!-- <script  src="index.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.17/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($){
    $(document).ready(function(){
      $(function () {
        $('.selectpicker').selectpicker();
      });
    });
  });
</script>