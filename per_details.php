<?php include("header1.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])){
   $personal_id = $_GET['id'];
   $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `personal_details` WHERE `personal_id` = '$personal_id'"));
   $hobbies = explode(",",$data['hobbies']);
   $cuisine = explode(",",$data['cuisine']);
   $dress_type = explode(",",$data['dress_type']);
   $music = explode(",",$data['music']);
   $sports = explode(",",$data['sports']);
   $spoken_languages = explode(",",$data['spoken_languages']);
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
        <div class="row" style="border: 1px solid transparent;border-color: #8b8888;">
            

            <div class="col-sm-12">
              <div style="color:#535353; font-size:13px;" class="reg-box">
                  <h1>What are your hobbies and interests?</h1>
                  <form action="" id = "AddPersonalDetails" method="post" enctype="multipart/form-data">
                  
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <!-- <div class="col-sm-3 no-padding">
                          <label class="cflo">Body Type :</label>
                      </div> -->
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-10 no-padding">
                         <input value="Cooking"   type="checkbox" name="hobbies[]" <?php if (in_array("Cooking", $hobbies)){?> checked <?php } ?>> Cooking &nbsp;&nbsp;
                          <input value="Pets"  type="checkbox" name="hobbies[]" <?php if (in_array("Pets", $hobbies)){?> checked <?php } ?>> Pets <br>
                          <input value="Playing Musical Instruments"  type="checkbox" name="hobbies[]" <?php if (in_array("Playing Musical Instruments", $hobbies)){?> checked <?php } ?>> Playing Musical Instruments <br>
                          <input value="Nature"  type="checkbox" name="hobbies[]" <?php if (in_array("Nature", $hobbies)){?> checked <?php } ?>> Nature &nbsp;&nbsp;
                          <input value="Dancing"  type="checkbox" name="hobbies[]" <?php if (in_array("Dancing", $hobbies)){?> checked <?php } ?>> Dancing <br>
                          <input value="Internet Surfing"  type="checkbox" name="hobbies[]" <?php if (in_array("Internet Surfing", $hobbies)){?> checked <?php } ?>> Internet Surfing <br>
                          <input value="Drawing"  type="checkbox" name="hobbies[]" <?php if (in_array("Drawing", $hobbies)){?> checked <?php } ?>> Drawing &nbsp;&nbsp;
                          <input value="Photography"  type="checkbox" name="hobbies[]" <?php if (in_array("Photography", $hobbies)){?> checked <?php } ?>> Photography <br>
                          <input value="Gardening / Landscaping"  type="checkbox" name="hobbies[]" <?php if (in_array("Gardening / Landscaping", $hobbies)){?> checked <?php } ?>> Gardening / Landscaping <br>
                          <input value="Painting"  type="checkbox" name="hobbies[]" <?php if (in_array("Painting", $hobbies)){?> checked <?php } ?>> Painting &nbsp;&nbsp;
                          <input value="Traveling"  type="checkbox" name="hobbies[]" <?php if (in_array("Traveling", $hobbies)){?> checked <?php } ?>> Traveling <br>
                          <input value="Art / Handicraft"  type="checkbox" name="hobbies[]" <?php if (in_array("Art / Handicraft", $hobbies)){?> checked <?php } ?>> Art / Handicraft <br>
                          <input value="Puzzles"  type="checkbox" name="hobbies[]" <?php if (in_array("Puzzles", $hobbies)){?> checked <?php } ?>> Puzzles &nbsp;&nbsp;
                          <input value="Movies"  type="checkbox" name="hobbies[]" <?php if (in_array("Movies", $hobbies)){?> checked <?php } ?>> Movies <br>
                          <input value="Acting"  type="checkbox" name="hobbies[]" <?php if (in_array("Acting", $hobbies)){?> checked <?php } ?>> Acting &nbsp;&nbsp;
                          <input value="Astronomy"  type="checkbox" name="hobbies[]" <?php if (in_array("Astronomy", $hobbies)){?> checked <?php } ?>> Astronomy <br>
                          <input value="Astrology"  type="checkbox" name="hobbies[]" <?php if (in_array("Astrology", $hobbies)){?> checked <?php } ?>> Astrology &nbsp;&nbsp;
                          <input value="Collectibles"  type="checkbox" name="hobbies[]" <?php if (in_array("Collectibles", $hobbies)){?> checked <?php } ?>> Collectibles <br>
                          <input value="Crosswords"  type="checkbox" name="hobbies[]" <?php if (in_array("Crosswords", $hobbies)){?> checked <?php } ?>> Crosswords &nbsp;&nbsp;
                          <input value="Film-making"  type="checkbox" name="hobbies[]" <?php if (in_array("Film-making", $hobbies)){?> checked <?php } ?>> Film-making <br>
                          <input value="Fishing"  type="checkbox" name="hobbies[]" <?php if (in_array("Fishing", $hobbies)){?> checked <?php } ?>> Fishing &nbsp;&nbsp;
                          <input value="Graphology"  type="checkbox" name="hobbies[]" <?php if (in_array("Graphology", $hobbies)){?> checked <?php } ?>> Graphology <br>
                          <input value="Numerology"  type="checkbox" name="hobbies[]" <?php if (in_array("Numerology", $hobbies)){?> checked <?php } ?>> Numerology &nbsp;&nbsp;
                          <input value="Palmistry"  type="checkbox" name="hobbies[]" <?php if (in_array("Palmistry", $hobbies)){?> checked <?php } ?>> Palmistry <br>
                          <input value="Playing musical instruments"  type="checkbox" name="hobbies[]" <?php if (in_array("Playing musical instruments", $hobbies)){?> checked <?php } ?>> Playing musical instruments &nbsp;&nbsp;
                         
                      </div> <?php  } else { ?>
                        <div class="col-sm-10 no-padding">
                         <input value="Cooking"   type="checkbox" name="hobbies[]"> Cooking &nbsp;&nbsp;
                          <input value="Music"  type="checkbox" name="hobbies[]"> Music &nbsp;&nbsp;
                          <input value="Reading"  type="checkbox" name="hobbies[]"> Reading <br>
                          <input value="Nature"  type="checkbox" name="hobbies[]"> Nature &nbsp;&nbsp;
                          <input value="Dancing"  type="checkbox" name="hobbies[]"> Dancing <br>
                          <input value="Internet"  type="checkbox" name="hobbies[]"> Internet <br>
                          <input value="Drawing"  type="checkbox" name="hobbies[]"> Drawing &nbsp;&nbsp;
                          <input value="Photography"  type="checkbox" name="hobbies[]"> Photography <br>
                          <input value="Gardening / Landscaping"  type="checkbox" name="hobbies[]" > Gardening / Landscaping <br>
                          <input value="Painting"  type="checkbox" name="hobbies[]" > Painting &nbsp;&nbsp;
                          <input value="Traveling"  type="checkbox" name="hobbies[]" > Traveling <br>
                          <input value="Art / Handicraft"  type="checkbox" name="hobbies[]" > Art / Handicraft <br>
                          <input value="Puzzles"  type="checkbox" name="hobbies[]" > Puzzles &nbsp;&nbsp;
                          <input value="Movies"  type="checkbox" name="hobbies[]" > Movies <br>
                          <input value="Acting"  type="checkbox" name="hobbies[]" > Acting &nbsp;&nbsp;
                          <input value="Astronomy"  type="checkbox" name="hobbies[]" > Astronomy <br>
                          <input value="Astrology"  type="checkbox" name="hobbies[]" > Astrology &nbsp;&nbsp;
                          <input value="Collectibles"  type="checkbox" name="hobbies[]" > Collectibles <br>
                          <input value="Crosswords"  type="checkbox" name="hobbies[]" > Crosswords &nbsp;&nbsp;
                          <input value="Film-making"  type="checkbox" name="hobbies[]" > Film-making <br>
                          <input value="Fishing"  type="checkbox" name="hobbies[]" > Fishing &nbsp;&nbsp;
                          <input value="Graphology"  type="checkbox" name="hobbies[]" > Graphology <br>
                          <input value="Numerology"  type="checkbox" name="hobbies[]" > Numerology &nbsp;&nbsp;
                          <input value="Palmistry"  type="checkbox" name="hobbies[]" > Palmistry <br>
                          <input value="Playing musical instruments"  type="checkbox" name="hobbies[]" > Playing musical instruments &nbsp;&nbsp;
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
                          <label class="cflo">Others :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="hobbies_other"  type="text" min="0" placeholder="Enter your hobbies and interests" class="form-control sml-frm input-sm" value="<?php echo isset($data['hobbies_other'])?$data['hobbies_other']:''?>">
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1>What are your favourite cuisine?</h1>
                  
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <!-- <div class="col-sm-3 no-padding">
                          <label class="cflo">Body Type :</label>
                      </div> -->
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-10 no-padding">
                         <input value="Arabic"   type="checkbox" name="cuisine[]" <?php if (in_array("Arabic", $cuisine)){?> checked <?php } ?>> Arabic &nbsp;&nbsp;
                          <input value="Bengali"  type="checkbox" name="cuisine[]" <?php if (in_array("Bengali", $cuisine)){?> checked <?php } ?>> Bengali &nbsp;&nbsp;
                          <input value="Chinese"  type="checkbox" name="cuisine[]" <?php if (in_array("Chinese", $cuisine)){?> checked <?php } ?>> Chinese <br>
                          <input value="Continental"  type="checkbox" name="cuisine[]" <?php if (in_array("Continental", $cuisine)){?> checked <?php } ?>> Continental &nbsp;&nbsp;
                          <input value="Gujarati"  type="checkbox" name="cuisine[]" <?php if (in_array("Gujarati", $cuisine)){?> checked <?php } ?>> Gujarati <br>
                          <input value="Italian"  type="checkbox" name="cuisine[]" <?php if (in_array("Italian", $cuisine)){?> checked <?php } ?>> Italian &nbsp;&nbsp;
                          <input value="Konkan"  type="checkbox" name="cuisine[]" <?php if (in_array("Konkan", $cuisine)){?> checked <?php } ?>> Konkan &nbsp;&nbsp;
                          <input value="Mexican"  type="checkbox" name="cuisine[]" <?php if (in_array("Mexican", $cuisine)){?> checked <?php } ?>> Mexican <br>
                          <input value="Moghlai"  type="checkbox" name="cuisine[]" <?php if (in_array("Moghlai", $cuisine)){?> checked <?php } ?>> Moghlai &nbsp;&nbsp;
                          <input value="Not a foodie!"  type="checkbox" name="cuisine[]" <?php if (in_array("Not a foodie!", $cuisine)){?> checked <?php } ?>> Not a foodie! <br>
                          <input value="Punjabi"  type="checkbox" name="cuisine[]" <?php if (in_array("Punjabi", $cuisine)){?> checked <?php } ?>> Punjabi &nbsp;&nbsp;
                          <input value="Rajasthani"  type="checkbox" name="cuisine[]" <?php if (in_array("Rajasthani", $cuisine)){?> checked <?php } ?>> Rajasthani <br>
                          <input value="South Indian"  type="checkbox" name="cuisine[]" <?php if (in_array("South Indian", $cuisine)){?> checked <?php } ?>> South Indian &nbsp;&nbsp;
                          <input value="Sushi"  type="checkbox" name="cuisine[]" <?php if (in_array("Sushi", $cuisine)){?> checked <?php } ?>> Sushi  <br>
                          <input value="Thai"  type="checkbox" name="cuisine[]" <?php if (in_array("Thai", $cuisine)){?> checked <?php } ?>> Thai &nbsp;&nbsp;
                          <input value="I am a foodie"  type="checkbox" name="cuisine[]" <?php if (in_array("I am a foodie", $cuisine)){?> checked <?php } ?>> I am a foodie &nbsp;&nbsp;
                      </div> <?php  } else { ?>
                        <div class="col-sm-10 no-padding">
                         <input value="Arabic"   type="checkbox" name="cuisine[]" > Arabic &nbsp;&nbsp;
                          <input value="Bengali"  type="checkbox" name="cuisine[]" > Bengali &nbsp;&nbsp;
                          <input value="Chinese"  type="checkbox" name="cuisine[]" > Chinese <br>
                          <input value="Continental"  type="checkbox" name="cuisine[]" > Continental &nbsp;&nbsp;
                          <input value="Gujarati"  type="checkbox" name="cuisine[]" > Gujarati <br>
                          <input value="Italian"  type="checkbox" name="cuisine[]" > Italian &nbsp;&nbsp;
                          <input value="Konkan"  type="checkbox" name="cuisine[]" > Konkan &nbsp;&nbsp;
                          <input value="Mexican"  type="checkbox" name="cuisine[]" > Mexican <br>
                          <input value="Moghlai"  type="checkbox" name="cuisine[]" > Moghlai &nbsp;&nbsp;
                          <input value="Not a foodie!"  type="checkbox" name="cuisine[]" > Not a foodie! <br>
                          <input value="Punjabi"  type="checkbox" name="cuisine[]" > Punjabi &nbsp;&nbsp;
                          <input value="Rajasthani"  type="checkbox" name="cuisine[]"> Rajasthani <br>
                          <input value="South Indian"  type="checkbox" name="cuisine[]" > South Indian &nbsp;&nbsp;
                          <input value="Sushi"  type="checkbox" name="cuisine[]" > Sushi  <br>
                          <input value="Thai"  type="checkbox" name="cuisine[]" > Thai &nbsp;&nbsp;
                          <input value="I am a foodie"  type="checkbox" name="cuisine[]" > I am a foodie &nbsp;&nbsp;
                      </div> <?php  } ?>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Others :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="cuisine_other"  type="text" min="0" placeholder="Enter your hobbies and interests" class="form-control sml-frm input-sm" value="<?php echo isset($data['cuisine_other'])?$data['cuisine_other']:''?>" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1>What are your dress type?</h1>
                  
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <!-- <div class="col-sm-3 no-padding">
                          <label class="cflo">Body Type :</label>
                      </div> -->
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-10 no-padding">
                         <input value="Casual wear"   type="checkbox" name="dress_type[]" <?php if (in_array("Casual wear", $dress_type)){?> checked <?php } ?>> Casual wear &nbsp;&nbsp;
                          <input value="Designer wear"  type="checkbox" name="dress_type[]" <?php if (in_array("Designer wear", $dress_type)){?> checked <?php } ?>> Designer wear &nbsp;&nbsp;
                          <input value="Indian/Ethenic wear"  type="checkbox" name="dress_type[]" <?php if (in_array("Indian/Ethenic wear", $dress_type)){?> checked <?php } ?>> Indian/Ethenic wear <br>
                          <input value="Western formal wear"  type="checkbox" name="dress_type[]" <?php if (in_array("Western formal wear", $dress_type)){?> checked <?php } ?>> Western formal wear &nbsp;&nbsp;
                          <!-- <input value="Pant"  type="checkbox" name="dress_type[]" <?php if (in_array("Pant", $dress_type)){?> checked <?php } ?>> Pant &nbsp;&nbsp; -->
                      </div> <?php  } else { ?>
                       <div class="col-sm-10 no-padding">
                         <input value="Casual wear"   type="checkbox" name="dress_type[]"> Casual wear &nbsp;&nbsp;
                          <input value="Designer wear"  type="checkbox" name="dress_type[]"> Designer wear &nbsp;&nbsp;
                          <input value="Indian/Ethenic wear"  type="checkbox" name="dress_type[]"> Indian/Ethenic wear <br>
                          <input value="Western formal wear"  type="checkbox" name="dress_type[]"> Western formal wear &nbsp;&nbsp;
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
                          <label class="cflo">Others :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="dress_type_other"  type="text" min="0" placeholder="Enter your hobbies and interests" class="form-control sml-frm input-sm" value="<?php echo isset($data['dress_type_other'])?$data['dress_type_other']:''?>">
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1>Your favourite music</h1>
                  <div class="row  to-fmid">
                      <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <!-- <div class="col-sm-3 no-padding">
                          <label class="cflo">Body Type :</label>
                      </div> -->
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-10 no-padding">
                         <input value="Blues"   type="checkbox" name="music[]" <?php if (in_array("Blues", $music)){?> checked <?php } ?>> Blues &nbsp;&nbsp;
                          <input value="Devotional"  type="checkbox" name="music[]" <?php if (in_array("Devotional", $music)){?> checked <?php } ?>> Devotional &nbsp;&nbsp;
                          <input value="Disco"  type="checkbox" name="music[]" <?php if (in_array("Disco", $music)){?> checked <?php } ?>> Disco &nbsp;&nbsp;<br>
                          <input value="Film Songs"  type="checkbox" name="music[]" <?php if (in_array("Film Songs", $music)){?> checked <?php } ?>> Film Songs &nbsp;&nbsp;
                          <input value="Ghazals"  type="checkbox" name="music[]" <?php if (in_array("Ghazals", $music)){?> checked <?php } ?>> Ghazals <br>
                          <input value="Hip-Hop"  type="checkbox" name="music[]" <?php if (in_array("Hip-Hop", $music)){?> checked <?php } ?>> Hip-Hop <br>
                          <input value="Heavy metal"  type="checkbox" name="music[]" <?php if (in_array("Heavy metal", $music)){?> checked <?php } ?>> Heavy metal &nbsp;&nbsp;
                          <input value="House music"  type="checkbox" name="music[]" <?php if (in_array("House music", $music)){?> checked <?php } ?>> House music <br>
                          <input value="Indian Classical"  type="checkbox" name="music[]" <?php if (in_array("Indian Classical", $music)){?> checked <?php } ?>> Indian Classical &nbsp;&nbsp;
                          <input value="Indipop"  type="checkbox" name="music[]" <?php if (in_array("Indipop", $music)){?> checked <?php } ?>> Indipop <br>
                          <input value="Jazz"  type="checkbox" name="music[]" <?php if (in_array("Jazz", $music)){?> checked <?php } ?>> Jazz &nbsp;&nbsp;
                          <input value="Pop"  type="checkbox" name="music[]" <?php if (in_array("Pop", $music)){?> checked <?php } ?>> Pop <br>
                          <input value="Qawalis"  type="checkbox" name="music[]" <?php if (in_array("Qawalis", $music)){?> checked <?php } ?>> Qawalis &nbsp;&nbsp;
                          <input value="Rap"  type="checkbox" name="music[]" <?php if (in_array("Rap", $music)){?> checked <?php } ?>> Rap <br>
                          <input value="Reggae"  type="checkbox" name="music[]" <?php if (in_array("Reggae", $music)){?> checked <?php } ?>> Reggae <br>
                          <input value="Sufi"  type="checkbox" name="music[]" <?php if (in_array("Sufi", $music)){?> checked <?php } ?>> Sufi <br>
                          <input value="Techno"  type="checkbox" name="music[]" <?php if (in_array("Techno", $music)){?> checked <?php } ?>> Techno &nbsp;&nbsp;
                          <input value="Western Classical"  type="checkbox" name="music[]" <?php if (in_array("Western Classical", $music)){?> checked <?php } ?>> Western Classical <br>
                          <input value="I am not a music fan"  type="checkbox" name="music[]" <?php if (in_array("I am not a music fan", $music)){?> checked <?php } ?>> I am not a music fan <br>
                          
                      </div> <?php  } else { ?>
                        <div class="col-sm-10 no-padding">
                         <input value="Blues"   type="checkbox" name="music[]" > Blues &nbsp;&nbsp;
                          <input value="Devotional"  type="checkbox" name="music[]" > Devotional &nbsp;&nbsp;
                          <input value="Disco"  type="checkbox" name="music[]" > Disco &nbsp;&nbsp;<br>
                          <input value="Film Songs"  type="checkbox" name="music[]" > Film Songs &nbsp;&nbsp;
                          <input value="Ghazals"  type="checkbox" name="music[]" > Ghazals <br>
                          <input value="Hip-Hop"  type="checkbox" name="music[]" > Hip-Hop <br>
                          <input value="Heavy metal"  type="checkbox" name="music[]" > Heavy metal &nbsp;&nbsp;
                          <input value="House music"  type="checkbox" name="music[]" > House music <br>
                          <input value="Indian Classical"  type="checkbox" name="music[]"> Indian Classical &nbsp;&nbsp;
                          <input value="Indipop"  type="checkbox" name="music[]" > Indipop <br>
                          <input value="Jazz"  type="checkbox" name="music[]" > Jazz &nbsp;&nbsp;
                          <input value="Pop"  type="checkbox" name="music[]" > Pop <br>
                          <input value="Qawalis"  type="checkbox" name="music[]" > Qawalis &nbsp;&nbsp;
                          <input value="Rap"  type="checkbox" name="music[]" > Rap <br>
                          <input value="Reggae"  type="checkbox" name="music[]" > Reggae <br>
                          <input value="Sufi"  type="checkbox" name="music[]" > Sufi <br>
                          <input value="Techno"  type="checkbox" name="music[]" > Techno &nbsp;&nbsp;
                          <input value="Western Classical"  type="checkbox" name="music[]" > Western Classical <br>
                          <input value="I am not a music fan"  type="checkbox" name="music[]" > I am not a music fan <br>
                      </div>  <?php  } ?>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Others :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="music_other"  type="text" min="0" placeholder="Enter your favourite music" class="form-control sml-frm input-sm" value="<?php echo isset($data['music_other'])?$data['music_other']:''?>" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1>Sports/Fitness you like</h1>
                  <div class="row  to-fmid">
                      <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <!-- <div class="col-sm-3 no-padding">
                          <label class="cflo">Body Type :</label>
                      </div> -->
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-10 no-padding">
                         <input value="Adventure Sports"   type="checkbox" name="sports[]" <?php if (in_array("Adventure Sports", $sports)){?> checked <?php } ?>> Adventure Sports &nbsp;&nbsp;
                          <input value="Aerobics"  type="checkbox" name="sports[]" <?php if (in_array("Aerobics", $sports)){?> checked <?php } ?>> Aerobics &nbsp;&nbsp;
                          <input value="Basketball"  type="checkbox" name="sports[]" <?php if (in_array("Basketball", $sports)){?> checked <?php } ?>> Basketball &nbsp;&nbsp;<br>
                          <input value="Badminton"  type="checkbox" name="sports[]" <?php if (in_array("Badminton", $sports)){?> checked <?php } ?>> Badminton &nbsp;&nbsp;
                          <input value="Bowling"  type="checkbox" name="sports[]" <?php if (in_array("Bowling", $sports)){?> checked <?php } ?>> Bowling <br>
                          <input value="Billiards / Snooker / Pool"  type="checkbox" name="sports[]" <?php if (in_array("Billiards / Snooker / Pool", $sports)){?> checked <?php } ?>> Billiards / Snooker / Pool <br>
                          <input value="Cricket"  type="checkbox" name="sports[]" <?php if (in_array("Cricket", $sports)){?> checked <?php } ?>> Cricket &nbsp;&nbsp;
                          <input value="Cycling"  type="checkbox" name="sports[]" <?php if (in_array("Cycling", $sports)){?> checked <?php } ?>> Cycling <br>
                          <input value="Card games"  type="checkbox" name="sports[]" <?php if (in_array("Card games", $sports)){?> checked <?php } ?>> Card games &nbsp;&nbsp;
                          <input value="Carrom"  type="checkbox" name="sports[]" <?php if (in_array("Carrom", $sports)){?> checked <?php } ?>> Carrom <br>
                          <input value="Chess"  type="checkbox" name="sports[]" <?php if (in_array("Chess", $sports)){?> checked <?php } ?>> Chess &nbsp;&nbsp;
                          <input value="Football"  type="checkbox" name="sports[]" <?php if (in_array("Football", $sports)){?> checked <?php } ?>> Football <br>
                          <input value="Golf"  type="checkbox" name="sports[]" <?php if (in_array("Golf", $sports)){?> checked <?php } ?>> Golf &nbsp;&nbsp;
                          <input value="Hockey"  type="checkbox" name="sports[]" <?php if (in_array("Hockey", $sports)){?> checked <?php } ?>> Hockey <br>
                          <input value="Jogging / Walking"  type="checkbox" name="sports[]" <?php if (in_array("Jogging / Walking", $sports)){?> checked <?php } ?>> Jogging / Walking <br>
                          <input value="Martial Arts"  type="checkbox" name="sports[]" <?php if (in_array("Martial Arts", $sports)){?> checked <?php } ?>> Martial Arts <br>
                          <input value="Scrabble"  type="checkbox" name="sports[]" <?php if (in_array("Scrabble", $sports)){?> checked <?php } ?>> Scrabble &nbsp;&nbsp;
                          <input value="Squash"  type="checkbox" name="sports[]" <?php if (in_array("Squash", $sports)){?> checked <?php } ?>> Squash <br>
                          <input value="Swimming / water sports"  type="checkbox" name="sports[]" <?php if (in_array("Swimming / water sports", $sports)){?> checked <?php } ?>> Swimming / water sports <br>
                          <input value="Table-tennis"  type="checkbox" name="sports[]" <?php if (in_array("Table-tennis", $sports)){?> checked <?php } ?>> Table-tennis <br>
                          <input value="Tennis"  type="checkbox" name="sports[]" <?php if (in_array("Tennis", $sports)){?> checked <?php } ?>> Tennis &nbsp;&nbsp;
                          <input value="Volleyball"  type="checkbox" name="sports[]" <?php if (in_array("Volleyball", $sports)){?> checked <?php } ?>> Volleyball <br>
                          <input value="Weight lifting"  type="checkbox" name="sports[]" <?php if (in_array("Weight lifting", $sports)){?> checked <?php } ?>> Weight lifting <br>
                          <input value="Yoga / meditation"  type="checkbox" name="sports[]" <?php if (in_array("Yoga / meditation", $sports)){?> checked <?php } ?>> Yoga / meditation <br>

                      </div> <?php  } else { ?>
                        <div class="col-sm-10 no-padding">
                         <input value="Adventure Sports"   type="checkbox" name="sports[]" > Adventure Sports &nbsp;&nbsp;
                          <input value="Aerobics"  type="checkbox" name="sports[]" > Aerobics &nbsp;&nbsp;
                          <input value="Basketball"  type="checkbox" name="sports[]" > Basketball &nbsp;&nbsp;<br>
                          <input value="Badminton"  type="checkbox" name="sports[]" > Badminton &nbsp;&nbsp;
                          <input value="Bowling"  type="checkbox" name="sports[]" > Bowling <br>
                          <input value="Billiards / Snooker / Pool"  type="checkbox" name="sports[]" > Billiards / Snooker / Pool <br>
                          <input value="Cricket"  type="checkbox" name="sports[]" > Cricket &nbsp;&nbsp;
                          <input value="Cycling"  type="checkbox" name="sports[]" > Cycling <br>
                          <input value="Card games"  type="checkbox" name="sports[]" > Card games &nbsp;&nbsp;
                          <input value="Carrom"  type="checkbox" name="sports[]"> Carrom <br>
                          <input value="Chess"  type="checkbox" name="sports[]" > Chess &nbsp;&nbsp;
                          <input value="Football"  type="checkbox" name="sports[]" > Football <br>
                          <input value="Golf"  type="checkbox" name="sports[]"> Golf &nbsp;&nbsp;
                          <input value="Hockey"  type="checkbox" name="sports[]" > Hockey <br>
                          <input value="Jogging / Walking"  type="checkbox" name="sports[]"> Jogging / Walking <br>
                          <input value="Martial Arts"  type="checkbox" name="sports[]" > Martial Arts <br>
                          <input value="Scrabble"  type="checkbox" name="sports[]" > Scrabble &nbsp;&nbsp;
                          <input value="Squash"  type="checkbox" name="sports[]" > Squash <br>
                          <input value="Swimming / water sports"  type="checkbox" name="sports[]" > Swimming / water sports <br>
                          <input value="Table-tennis"  type="checkbox" name="sports[]" > Table-tennis <br>
                          <input value="Tennis"  type="checkbox" name="sports[]" > Tennis &nbsp;&nbsp;
                          <input value="Volleyball"  type="checkbox" name="sports[]" > Volleyball <br>
                          <input value="Weight lifting"  type="checkbox" name="sports[]" > Weight lifting <br>
                          <input value="Yoga / meditation"  type="checkbox" name="sports[]" > Yoga / meditation <br>
                      </div> <?php  } ?>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Others :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="sports_other"  type="text" min="0" placeholder="Enter your favourite sports" class="form-control sml-frm input-sm" value="<?php echo isset($data['sports_other'])?$data['sports_other']:''?>" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <h1>Spoken languages</h1>
                  <div class="row  to-fmid">
                      <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <!-- <div class="col-sm-3 no-padding">
                          <label class="cflo">Body Type :</label>
                      </div> -->
                      <?php if(isset($_GET['id']) && !empty($_GET['id'])){ ?>
                      <div class="col-sm-10 no-padding">
                         <input value="SSK Savji"   type="checkbox" name="spoken_languages[]" <?php if (in_array("SSK Savji", $spoken_languages)){?> checked <?php } ?>> SSK Savji &nbsp;&nbsp;
                          <input value="Pategar"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Pategar", $spoken_languages)){?> checked <?php } ?>> Pategar <br>
                          <input value="Khatri"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Khatri", $spoken_languages)){?> checked <?php } ?>> Khatri &nbsp;&nbsp;
                          <input value="Kannada"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Kannada", $spoken_languages)){?> checked <?php } ?>> Kannada  <br>
                          <input value="Marathi"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Marathi", $spoken_languages)){?> checked <?php } ?>> Marathi &nbsp;&nbsp;
                          <input value="Hindi"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Hindi", $spoken_languages)){?> checked <?php } ?>> Hindi  <br>
                          <input value="English"  type="checkbox" name="spoken_languages[]" <?php if (in_array("English", $spoken_languages)){?> checked <?php } ?>> English &nbsp;&nbsp;
                          <input value="Telugu"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Telugu", $spoken_languages)){?> checked <?php } ?>> Telugu  <br>
                          <input value="Tamil"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Tamil", $spoken_languages)){?> checked <?php } ?>> Tamil &nbsp;&nbsp;
                          <input value="Malayalam"  type="checkbox" name="spoken_languages[]" <?php if (in_array("Malayalam", $spoken_languages)){?> checked <?php } ?>> Malayalam  <br>
                      </div> <?php  } else { ?>
                        <div class="col-sm-10 no-padding">
                         <input value="SSK Savji"   type="checkbox" name="spoken_languages[]" > SSK Savji &nbsp;&nbsp;
                          <input value="Pategar"  type="checkbox" name="spoken_languages[]" > Pategar <br>
                          <input value="Khatri"  type="checkbox" name="spoken_languages[]" > Khatri &nbsp;&nbsp;
                          <input value="Kannada"  type="checkbox" name="spoken_languages[]" > Kannada  <br>
                          <input value="Marathi"  type="checkbox" name="spoken_languages[]" > Marathi &nbsp;&nbsp;
                          <input value="Hindi"  type="checkbox" name="spoken_languages[]" > Hindi  <br>
                          <input value="English"  type="checkbox" name="spoken_languages[]" > English &nbsp;&nbsp;
                          <input value="Telugu"  type="checkbox" name="spoken_languages[]" > Telugu  <br>
                          <input value="Tamil"  type="checkbox" name="spoken_languages[]" > Tamil &nbsp;&nbsp;
                          <input value="Malayalam"  type="checkbox" name="spoken_languages[]" > Malayalam  <br>
                      </div> <?php  } ?>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                      <div class="col-sm-2 no-padding">
                          <label class="cflo">Others :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="spoken_languages_other"  type="text" min="0" placeholder="Enter Spoken languages" class="form-control sml-frm input-sm" value="<?php echo isset($data['spoken_languages_other'])?$data['spoken_languages_other']:''?>" >
                      </div>
                      <div class="col-sm-1 no-padding">
                          <label class="cflo"></label>
                      </div>
                  </div>

                  <hr>

                  <div class="row  to-fmid">
                    <div class="col-sm-4 no-padding">
                        <label class="cflo"></label>
                    </div>
                     <div class="col-sm-4 wrapper">
                        <input type ="hidden" name = "type" value="AddPersonalDetails">
                        <input type ="hidden" name = "personal_id" id="personal_id" value="<?php echo isset($data['personal_id'])?$data['personal_id']:''?>">
                        <button type="submit" id="submit" class="btn btn-sm btn-success">Submit</button>
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