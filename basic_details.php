<?php include("header1.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])){
   $basic_id = $_GET['id'];
   $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `basic_details` WHERE `basic_id` = '$basic_id'"));
   }
   else {
    $data['body_type'] = "";
    $data['weight'] = "";
    $data['college'] = "";
    $data['organization'] = "";
    $data['eating_habit'] = "";
    $data['smoking_habit'] = "";
    $data['drinking_habit'] = "";
    $data['star'] = "";
    $data['raasi'] = "";

    $data['father_occu'] = "";
    $data['mother_occu'] = "";
    $data['brother'] = "";
    $data['brother_married'] = "";
    $data['sister'] = "";
    $data['sister_married'] = "";
    $data['family_location'] = "";
    $data['parents_mobile'] = "";
    $data['parents_mobile1'] = "";
    $data['parents_mobile2'] = "";
    $data['ancestral'] = "";
    
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
</style>
<section style="background-color: rgb(228, 228, 228);">
	<div class="container">
        <div class="row">
            

            <div class="col-sm-12">
              <div style="color:#535353; font-size:13px;" class="reg-box">
                  <h1><i class="fa fa-file-text" style="font-size: xx-large;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Basic Details</h1>
                  <form action="" id = "AddBasicDetails" method="post" enctype="multipart/form-data">
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Body Type :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="Slim"   type="radio" name="body_type" <?php if($data['body_type'] == 'Slim') { ?> checked <?php } ?>> Slim &nbsp;&nbsp;
                          <input value="Average"  type="radio" name="body_type" <?php if($data['body_type'] == 'Average') { ?> checked <?php } ?>> Average &nbsp;&nbsp;<br>
                          <input value="Athletic"  type="radio" name="body_type" <?php if($data['body_type'] == 'Athletic') { ?> checked <?php } ?>> Athletic &nbsp;&nbsp;
                          <br>
                          <input value="Heavy"  type="radio" name="body_type" <?php if($data['body_type'] == 'Heavy') { ?> checked <?php } ?>> Heavy 
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Weight :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="weight"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">--Kgs--</option>
                              <option value="41"<?php if($data['weight'] == '41') { ?> selected <?php } ?>>41 Kg</option>
                              <option value="42"<?php if($data['weight'] == '42') { ?> selected <?php } ?>>42 Kg</option>
                              <option value="43"<?php if($data['weight'] == '43') { ?> selected <?php } ?>>43 Kg</option>
                              <option value="44"<?php if($data['weight'] == '44') { ?> selected <?php } ?>>44 Kg</option>
                              <option value="45"<?php if($data['weight'] == '45') { ?> selected <?php } ?>>45 Kg</option>
                              <option value="46"<?php if($data['weight'] == '46') { ?> selected <?php } ?>>46 Kg</option>
                              <option value="47"<?php if($data['weight'] == '47') { ?> selected <?php } ?>>47 Kg</option>
                              <option value="48"<?php if($data['weight'] == '48') { ?> selected <?php } ?>>48 Kg</option>
                              <option value="49"<?php if($data['weight'] == '49') { ?> selected <?php } ?>>49 Kg</option>
                              <option value="50"<?php if($data['weight'] == '50') { ?> selected <?php } ?>>50 Kg</option>
                              <option value="51"<?php if($data['weight'] == '51') { ?> selected <?php } ?>>51 Kg</option>
                              <option value="52"<?php if($data['weight'] == '52') { ?> selected <?php } ?>>52 Kg</option>
                              <option value="53"<?php if($data['weight'] == '53') { ?> selected <?php } ?>>53 Kg</option>
                              <option value="54"<?php if($data['weight'] == '54') { ?> selected <?php } ?>>54 Kg</option>
                              <option value="55"<?php if($data['weight'] == '55') { ?> selected <?php } ?>>55 Kg</option>
                              <option value="56"<?php if($data['weight'] == '56') { ?> selected <?php } ?>>56 Kg</option>
                              <option value="57"<?php if($data['weight'] == '57') { ?> selected <?php } ?>>57 Kg</option>
                              <option value="58"<?php if($data['weight'] == '58') { ?> selected <?php } ?>>58 Kg</option>
                              <option value="59"<?php if($data['weight'] == '59') { ?> selected <?php } ?>>59 Kg</option>
                              <option value="60"<?php if($data['weight'] == '60') { ?> selected <?php } ?>>60 Kg</option>
                              <option value="61"<?php if($data['weight'] == '61') { ?> selected <?php } ?>>61 Kg</option>
                              <option value="62"<?php if($data['weight'] == '62') { ?> selected <?php } ?>>62 Kg</option>
                              <option value="63"<?php if($data['weight'] == '63') { ?> selected <?php } ?>>63 Kg</option>
                              <option value="64"<?php if($data['weight'] == '64') { ?> selected <?php } ?>>64 Kg</option>
                              <option value="65"<?php if($data['weight'] == '65') { ?> selected <?php } ?>>65 Kg</option>
                              <option value="66"<?php if($data['weight'] == '66') { ?> selected <?php } ?>>66 Kg</option>
                              <option value="67"<?php if($data['weight'] == '67') { ?> selected <?php } ?>>67 Kg</option>
                              <option value="68"<?php if($data['weight'] == '68') { ?> selected <?php } ?>>68 Kg</option>
                              <option value="69"<?php if($data['weight'] == '69') { ?> selected <?php } ?>>69 Kg</option>
                              <option value="70"<?php if($data['weight'] == '70') { ?> selected <?php } ?>>70 Kg</option>
                              <option value="71"<?php if($data['weight'] == '71') { ?> selected <?php } ?>>71 Kg</option>
                              <option value="72"<?php if($data['weight'] == '72') { ?> selected <?php } ?>>72 Kg</option>
                              <option value="73"<?php if($data['weight'] == '73') { ?> selected <?php } ?>>73 Kg</option>
                              <option value="74"<?php if($data['weight'] == '74') { ?> selected <?php } ?>>74 Kg</option>
                              <option value="75"<?php if($data['weight'] == '75') { ?> selected <?php } ?>>75 Kg</option>
                              <option value="76"<?php if($data['weight'] == '76') { ?> selected <?php } ?>>76 Kg</option>
                              <option value="77"<?php if($data['weight'] == '77') { ?> selected <?php } ?>>77 Kg</option>
                              <option value="78"<?php if($data['weight'] == '78') { ?> selected <?php } ?>>78 Kg</option>
                              <option value="79"<?php if($data['weight'] == '79') { ?> selected <?php } ?>>79 Kg</option>
                              <option value="80"<?php if($data['weight'] == '80') { ?> selected <?php } ?>>80 Kg</option>
                              <option value="81"<?php if($data['weight'] == '81') { ?> selected <?php } ?>>81 Kg</option>
                              <option value="82"<?php if($data['weight'] == '82') { ?> selected <?php } ?>>82 Kg</option>
                              <option value="83"<?php if($data['weight'] == '83') { ?> selected <?php } ?>>83 Kg</option>
                              <option value="84"<?php if($data['weight'] == '84') { ?> selected <?php } ?>>84 Kg</option>
                              <option value="85"<?php if($data['weight'] == '85') { ?> selected <?php } ?>>85 Kg</option>
                              <option value="86"<?php if($data['weight'] == '86') { ?> selected <?php } ?>>86 Kg</option>
                              <option value="87"<?php if($data['weight'] == '87') { ?> selected <?php } ?>>87 Kg</option>
                              <option value="88"<?php if($data['weight'] == '88') { ?> selected <?php } ?>>88 Kg</option>
                              <option value="89"<?php if($data['weight'] == '89') { ?> selected <?php } ?>>89 Kg</option>
                              <option value="90"<?php if($data['weight'] == '90') { ?> selected <?php } ?>>90 Kg</option>
                              <option value="91"<?php if($data['weight'] == '91') { ?> selected <?php } ?>>91 Kg</option>
                              <option value="92"<?php if($data['weight'] == '92') { ?> selected <?php } ?>>92 Kg</option>
                              <option value="93"<?php if($data['weight'] == '93') { ?> selected <?php } ?>>93 Kg</option>
                              <option value="94"<?php if($data['weight'] == '94') { ?> selected <?php } ?>>94 Kg</option>
                              <option value="95"<?php if($data['weight'] == '95') { ?> selected <?php } ?>>95 Kg</option>
                              <option value="96"<?php if($data['weight'] == '96') { ?> selected <?php } ?>>96 Kg</option>
                              <option value="97"<?php if($data['weight'] == '97') { ?> selected <?php } ?>>97 Kg</option>
                              <option value="98"<?php if($data['weight'] == '98') { ?> selected <?php } ?>>98 Kg</option>
                              <option value="99"<?php if($data['weight'] == '99') { ?> selected <?php } ?>>99 Kg</option>
                              <option value="100"<?php if($data['weight'] == '100') { ?> selected <?php } ?>>100 Kg</option>
                              <option value="101"<?php if($data['weight'] == '101') { ?> selected <?php } ?>>101 Kg</option>
                              <option value="102"<?php if($data['weight'] == '102') { ?> selected <?php } ?>>102 Kg</option>
                              <option value="103"<?php if($data['weight'] == '103') { ?> selected <?php } ?>>103 Kg</option>
                              <option value="104"<?php if($data['weight'] == '104') { ?> selected <?php } ?>>104 Kg</option>
                              <option value="105"<?php if($data['weight'] == '105') { ?> selected <?php } ?>>105 Kg</option>
                              <option value="106"<?php if($data['weight'] == '106') { ?> selected <?php } ?>>106 Kg</option>
                              <option value="107"<?php if($data['weight'] == '107') { ?> selected <?php } ?>>107 Kg</option>
                              <option value="108"<?php if($data['weight'] == '108') { ?> selected <?php } ?>>108 Kg</option>
                              <option value="109"<?php if($data['weight'] == '109') { ?> selected <?php } ?>>109 Kg</option>
                              <option value="110"<?php if($data['weight'] == '110') { ?> selected <?php } ?>>110 Kg</option>
                              <option value="111"<?php if($data['weight'] == '111') { ?> selected <?php } ?>>111 Kg</option>
                              <option value="112"<?php if($data['weight'] == '112') { ?> selected <?php } ?>>112 Kg</option>
                              <option value="113"<?php if($data['weight'] == '113') { ?> selected <?php } ?>>113 Kg</option>
                              <option value="114"<?php if($data['weight'] == '114') { ?> selected <?php } ?>>114 Kg</option>
                              <option value="115"<?php if($data['weight'] == '115') { ?> selected <?php } ?>>115 Kg</option>
                              <option value="116"<?php if($data['weight'] == '116') { ?> selected <?php } ?>>116 Kg</option>
                              <option value="117"<?php if($data['weight'] == '117') { ?> selected <?php } ?>>117 Kg</option>
                              <option value="118"<?php if($data['weight'] == '118') { ?> selected <?php } ?>>118 Kg</option>
                              <option value="119"<?php if($data['weight'] == '119') { ?> selected <?php } ?>>119 Kg</option>
                              <option value="120"<?php if($data['weight'] == '120') { ?> selected <?php } ?>>120 Kg</option>
                              <option value="121"<?php if($data['weight'] == '121') { ?> selected <?php } ?>>121 Kg</option>
                              <option value="122"<?php if($data['weight'] == '122') { ?> selected <?php } ?>>122 Kg</option>
                              <option value="123"<?php if($data['weight'] == '123') { ?> selected <?php } ?>>123 Kg</option>
                              <option value="124"<?php if($data['weight'] == '124') { ?> selected <?php } ?>>124 Kg</option>
                              <option value="125"<?php if($data['weight'] == '125') { ?> selected <?php } ?>>125 Kg</option>
                              <option value="126"<?php if($data['weight'] == '126') { ?> selected <?php } ?>>126 Kg</option>
                              <option value="127"<?php if($data['weight'] == '127') { ?> selected <?php } ?>>127 Kg</option>
                              <option value="128"<?php if($data['weight'] == '128') { ?> selected <?php } ?>>128 Kg</option>
                              <option value="129"<?php if($data['weight'] == '129') { ?> selected <?php } ?>>129 Kg</option>
                              <option value="130"<?php if($data['weight'] == '130') { ?> selected <?php } ?>>130 Kg</option>
                              <option value="131"<?php if($data['weight'] == '131') { ?> selected <?php } ?>>131 Kg</option>
                              <option value="132"<?php if($data['weight'] == '132') { ?> selected <?php } ?>>132 Kg</option>
                              <option value="133"<?php if($data['weight'] == '133') { ?> selected <?php } ?>>133 Kg</option>
                              <option value="134"<?php if($data['weight'] == '134') { ?> selected <?php } ?>>134 Kg</option>
                              <option value="135"<?php if($data['weight'] == '135') { ?> selected <?php } ?>>135 Kg</option>
                              <option value="136"<?php if($data['weight'] == '136') { ?> selected <?php } ?>>136 Kg</option>
                              <option value="137"<?php if($data['weight'] == '137') { ?> selected <?php } ?>>137 Kg</option>
                              <option value="138"<?php if($data['weight'] == '138') { ?> selected <?php } ?>>138 Kg</option>
                              <option value="139"<?php if($data['weight'] == '139') { ?> selected <?php } ?>>139 Kg</option>
                              <option value="140"<?php if($data['weight'] == '140') { ?> selected <?php } ?>>140 Kg</option>       
    
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
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">College/Institution :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="college"  type="text" placeholder="Enter College/Institution" value="<?php echo isset($data['college'])?$data['college']:''?>" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Organization :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="organization"  type="text" placeholder="Enter Organization" value="<?php echo isset($data['organization'])?$data['organization']:''?>" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1><i class="fa fa-glass" style="font-size: xx-large;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Life Style Info</h1>
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Eating Habit :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="Vegetarian"   type="radio" name="eating_habit" <?php if($data['eating_habit'] == 'Vegetarian') { ?> checked <?php } ?>> Vegetarian &nbsp;&nbsp;<br>
                          <input value="Non-Vegeterian"  type="radio" name="eating_habit" <?php if($data['eating_habit'] == 'Non-Vegeterian') { ?> checked <?php } ?>> Non-Vegeterian &nbsp;&nbsp;<br>
                          <input value="Eggetarian"  type="radio" name="eating_habit" <?php if($data['eating_habit'] == 'Eggetarian') { ?> checked <?php } ?>> Eggetarian
                          
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Drinking Habit :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="No"   type="radio" name="drinking_habit" <?php if($data['drinking_habit'] == 'No') { ?> checked <?php } ?>> No &nbsp;&nbsp;
                          <input value="Yes"  type="radio" name="drinking_habit" <?php if($data['drinking_habit'] == 'Yes') { ?> checked <?php } ?>> Yes &nbsp;&nbsp;<br>
                          <input value="Drinks Socially"  type="radio" name="drinking_habit" <?php if($data['drinking_habit'] == 'Drinks Socially') { ?> checked <?php } ?>> Drinks Socially
                          
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Smoking Habit :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="No"   type="radio" name="smoking_habit" <?php if($data['smoking_habit'] == 'No') { ?> checked <?php } ?>> No &nbsp;&nbsp;
                          <input value="Yes"  type="radio" name="smoking_habit" <?php if($data['smoking_habit'] == 'Yes') { ?> checked <?php } ?>> Yes &nbsp;&nbsp;<br>
                          <input value="Occasionally"  type="radio" name="smoking_habit" <?php if($data['smoking_habit'] == 'Occasionally') { ?> checked <?php } ?>> Occasionally
                          
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1><i class="fa fa-book" style="font-size: xx-large;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Religion Information</h1>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Select Star/Nakshatra :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="star"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Select</option>
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
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Select Raasi :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="raasi"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Select</option>
                              <option value="Mesha/Aries"<?php if($data['raasi'] == 'Mesha/Aries') { ?> selected <?php } ?>>Mesha/Aries</option>
                              <option value="Vrushabh/Taurus"<?php if($data['raasi'] == 'Vrushabh/Taurus') { ?> selected <?php } ?>>Vrushabh/Taurus</option>
                              <option value="Mithun/Gemini"<?php if($data['raasi'] == 'Mithun/Gemini') { ?> selected <?php } ?>>Mithun/Gemini</option>
                              <option value="Simha/Leo"<?php if($data['raasi'] == 'Simha/Leo') { ?> selected <?php } ?>>Simha/Leo</option>
                              <option value="Kanya/Virgo"<?php if($data['raasi'] == 'Kanya/Virgo') { ?> selected <?php } ?>>Kanya/Virgo</option>
                              <option value="Tula/Libra"<?php if($data['raasi'] == 'Tula/Libra') { ?> selected <?php } ?>>Tula/Libra</option>
                              <option value="Vrushchik/Scorpius"<?php if($data['raasi'] == 'Vrushchik/Scorpius') { ?> selected <?php } ?>>Vrushchik/Scorpius</option>
                              <option value="Dhanu/Sagittarius"<?php if($data['raasi'] == 'Dhanu/Sagittarius') { ?> selected <?php } ?>>Dhanu/Sagittarius</option>
                              <option value="Makar/Capricornus"<?php if($data['raasi'] == 'Makar/Capricornus') { ?> selected <?php } ?>>Makar/Capricornus</option>
                              <option value="Karka/Cancer"<?php if($data['raasi'] == 'Karka/Cancer') { ?> selected <?php } ?>>Karka/Cancer</option>
                              <option value="Kumbha/Aquarius"<?php if($data['raasi'] == 'Kumbha/Aquarius') { ?> selected <?php } ?>>Kumbha/Aquarius</option>
                              <option value="Meen/Pisces"<?php if($data['raasi'] == 'Meen/Pisces') { ?> selected <?php } ?>>Meen/Pisces</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1><i class="fa fa-address-book" style="font-size: xx-large;" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Family Information</h1>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Father's Occupation :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="father_occu"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Select</option>
                          <option value="Employed" <?php if($data['father_occu'] == 'Employed') { ?> selected <?php } ?>>Employed</option>
                          <option value="Business Man" <?php if($data['father_occu'] == 'Business Man') { ?> selected <?php } ?>>Business Man</option>
                          <option value="Professional" <?php if($data['father_occu'] == 'Professional') { ?> selected <?php } ?>>Professional</option>
                          <option value="Retired" <?php if($data['father_occu'] == 'Retired') { ?> selected <?php } ?>>Retired</option>
                          <option value="Not Employed" <?php if($data['father_occu'] == 'Not Employed') { ?> selected <?php } ?>>Not Employed</option>
                          <option value="Passed Away" <?php if($data['father_occu'] == 'Passed Away') { ?> selected <?php } ?>>Passed Away</option>
    
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
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Mother's Occupation :</label>
                      </div>
                      <div class="col-sm-7">
                          <select name="mother_occu"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Select</option>
                              <option value="Homemaker" <?php if($data['mother_occu'] == 'Homemaker') { ?> selected <?php } ?>>Homemaker</option>
                              <option value="Employed" <?php if($data['mother_occu'] == 'Employed') { ?> selected <?php } ?>>Employed</option>
                              <option value="Business Woman" <?php if($data['mother_occu'] == 'Business Woman') { ?> selected <?php } ?>>Business Woman</option>
                              <option value="Professional" <?php if($data['mother_occu'] == 'Professional') { ?> selected <?php } ?>>Professional</option>
                              <option value="Retired" <?php if($data['mother_occu'] == 'Retired') { ?> selected <?php } ?>>Retired</option>
                              <option value="Not Employed" <?php if($data['mother_occu'] == 'Not Employed') { ?> selected <?php } ?>>Not Employed</option>
                              <option value="Passed Away" <?php if($data['mother_occu'] == 'Passed Away') { ?> selected <?php } ?>>Passed Away</option>
    
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
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Brothers :</label>
                      </div>
                      <div class="col-sm-3">
                          <select name="brother"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Number of Brothers</option>
                              <option value="None" <?php if($data['brother'] == 'None') { ?> selected <?php } ?>>None</option>
                              <option value="1"<?php if($data['brother'] == '1') { ?> selected <?php } ?>>1</option>
                              <option value="2"<?php if($data['brother'] == '2') { ?> selected <?php } ?>>2</option>
                              <option value="3"<?php if($data['brother'] == '3') { ?> selected <?php } ?>>3</option>
                              <option value="4"<?php if($data['brother'] == '4') { ?> selected <?php } ?>>4</option>
                              <option value="5+"<?php if($data['brother'] == '5+') { ?> selected <?php } ?>>5+</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1">
                      </div>
                      <div class="col-sm-3">
                          <select name="brother_married"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Brothers Married</option>
                              <option value="None" <?php if($data['brother_married'] == 'None') { ?> selected <?php } ?>>None</option>
                              <option value="1"<?php if($data['brother_married'] == '1') { ?> selected <?php } ?>>1</option>
                              <option value="2"<?php if($data['brother_married'] == '2') { ?> selected <?php } ?>>2</option>
                              <option value="3"<?php if($data['brother_married'] == '3') { ?> selected <?php } ?>>3</option>
                              <option value="4"<?php if($data['brother_married'] == '4') { ?> selected <?php } ?>>4</option>
                              <option value="5+"<?php if($data['brother_married'] == '5+') { ?> selected <?php } ?>>5+</option>
    
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
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Sisters :</label>
                      </div>
                      <div class="col-sm-3">
                          <select name="sister"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Number of Sisters</option>
                              <option value="None" <?php if($data['brother_married'] == 'None') { ?> selected <?php } ?>>None</option>
                              <option value="1"<?php if($data['brother_married'] == '1') { ?> selected <?php } ?>>1</option>
                              <option value="2"<?php if($data['brother_married'] == '2') { ?> selected <?php } ?>>2</option>
                              <option value="3"<?php if($data['brother_married'] == '3') { ?> selected <?php } ?>>3</option>
                              <option value="4"<?php if($data['brother_married'] == '4') { ?> selected <?php } ?>>4</option>
                              <option value="5+"<?php if($data['brother_married'] == '5+') { ?> selected <?php } ?>>5+</option>
    
                          </select>
                      </div>
                      <div class="col-sm-1">
                      </div>
                      <div class="col-sm-3">
                          <select name="sister_married"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Sisters Married</option>
                              <option value="None" <?php if($data['sister_married'] == 'None') { ?> selected <?php } ?>>None</option>
                              <option value="1"<?php if($data['sister_married'] == '1') { ?> selected <?php } ?>>1</option>
                              <option value="2"<?php if($data['sister_married'] == '2') { ?> selected <?php } ?>>2</option>
                              <option value="3"<?php if($data['sister_married'] == '3') { ?> selected <?php } ?>>3</option>
                              <option value="4"<?php if($data['sister_married'] == '4') { ?> selected <?php } ?>>4</option>
                              <option value="5+"<?php if($data['sister_married'] == '5+') { ?> selected <?php } ?>>5+</option>
    
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
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Family Location :</label>
                      </div>
                      <div class="col-sm-7">
                         <input value="Same as my location"   type="radio" name="family_location" <?php if($data['family_location'] == 'Same as my location') { ?> checked <?php } ?>> Same as my location &nbsp;&nbsp;<br>
                          <input value="Different Location"  type="radio" name="family_location" <?php if($data['family_location'] == 'Different Location') { ?> checked <?php } ?>> Different Location 
                          
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Parent's Contact Number :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="parents_mobile" value="<?php echo isset($data['parents_mobile'])?$data['parents_mobile']:''?>" type="text" placeholder="Enter Parent's Contact Number" min="0" pattern="[1-9]{1}[0-9]{9}" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Parent's Contact Number :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="parents_mobile1" value="<?php echo isset($data['parents_mobile1'])?$data['parents_mobile1']:''?>" type="text" placeholder="Enter Parent's Contact Number" min="0" pattern="[1-9]{1}[0-9]{9}" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Parent's Contact Number :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="parents_mobile2" value="<?php echo isset($data['parents_mobile2'])?$data['parents_mobile2']:''?>" type="text" placeholder="Enter Parent's Contact Number" min="0" pattern="[1-9]{1}[0-9]{9}" class="form-control sml-frm input-sm" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-3 no-padding">
                          <label class="cflo">Ancestral Origin :</label>
                      </div>
                      <div class="col-sm-7">
                        <input name="ancestral" value="<?php echo isset($data['ancestral'])?$data['ancestral']:''?>" type="text" min="0" placeholder="Enter Ancestral Origin" class="form-control sml-frm input-sm" >
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
                        <input type ="hidden" name = "type" value="AddBasicDetails">
                        <input type ="hidden" name = "basic_id" id="basic_id" value="<?php echo isset($data['basic_id'])?$data['basic_id']:''?>">
                        <button type="submit" id="submit" class="btn btn-sm btn-success">Complete Profile & Continue</button>
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