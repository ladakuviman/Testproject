<?php include("header1.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])){
   $register1_id = $_GET['id'];
   $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `register1` WHERE `register1_id` = '$register1_id'"));
   }
   else {
    $data['b_year'] = "";
    $data['b_day'] = "";
    $data['b_month'] = "";
    $data['gender'] = "";
    $data['religion'] = "";
    $data['mother_tongue'] = "";
   }
?>
<style type="text/css">
  .to-fmid {
    margin-top: 20px;
  }
  .reg-box {
    height: auto;
  }
</style>
<div class="regformbg">
	<div class="container">
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5">
              <div style="color:#535353; font-size:13px;" class="reg-box shado-1">
                  <h1>Provide us with your basic details</h1>
                  <form action="" id = "AddRegister1" method="post" enctype="multipart/form-data">
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Date of Birth :</label>
                      </div>
                      <div class="col-sm-8">
                          <div class="row">
                              <div style="padding:0px 2px;" class="col-sm-4">
                                <select name="b_day"  style="padding-top: 3px;" class="form-control sml-frm  cflo input-sm">
                                    <option value="0" selected="">DD</option>
                                    <option value="01" <?php if($data['b_day'] == '01') { ?> selected <?php } ?> >1</option>
                                    <option value="02" <?php if($data['b_day'] == '02') { ?> selected <?php } ?> >2</option>
                                    <option value="03" <?php if($data['b_day'] == '03') { ?> selected <?php } ?> >3</option>
                                    <option value="04" <?php if($data['b_day'] == '04') { ?> selected <?php } ?> >4</option>
                                    <option value="05" <?php if($data['b_day'] == '05') { ?> selected <?php } ?> >5</option>
                                    <option value="06" <?php if($data['b_day'] == '06') { ?> selected <?php } ?> >6</option>
                                    <option value="07" <?php if($data['b_day'] == '07') { ?> selected <?php } ?> >7</option>
                                    <option value="08" <?php if($data['b_day'] == '08') { ?> selected <?php } ?> >8</option>
                                    <option value="09" <?php if($data['b_day'] == '09') { ?> selected <?php } ?> >9</option>
                                    <option value="10" <?php if($data['b_day'] == '10') { ?> selected <?php } ?> >10</option>
                                    <option value="11" <?php if($data['b_day'] == '11') { ?> selected <?php } ?> >11</option>
                                    <option value="12" <?php if($data['b_day'] == '12') { ?> selected <?php } ?> >12</option>
                                    <option value="13" <?php if($data['b_day'] == '13') { ?> selected <?php } ?> >13</option>
                                    <option value="14" <?php if($data['b_day'] == '14') { ?> selected <?php } ?> >14</option>
                                    <option value="15" <?php if($data['b_day'] == '15') { ?> selected <?php } ?> >15</option>
                                    <option value="16" <?php if($data['b_day'] == '16') { ?> selected <?php } ?> >16</option>
                                    <option value="17" <?php if($data['b_day'] == '17') { ?> selected <?php } ?> >17</option>
                                    <option value="18" <?php if($data['b_day'] == '18') { ?> selected <?php } ?> >18</option>
                                    <option value="19" <?php if($data['b_day'] == '19') { ?> selected <?php } ?> >19</option>
                                    <option value="20" <?php if($data['b_day'] == '20') { ?> selected <?php } ?> >20</option>
                                    <option value="21" <?php if($data['b_day'] == '21') { ?> selected <?php } ?> >21</option>
                                    <option value="22" <?php if($data['b_day'] == '22') { ?> selected <?php } ?> >22</option>
                                    <option value="23" <?php if($data['b_day'] == '23') { ?> selected <?php } ?> >23</option>
                                    <option value="24" <?php if($data['b_day'] == '24') { ?> selected <?php } ?> >24</option>
                                    <option value="25" <?php if($data['b_day'] == '25') { ?> selected <?php } ?> >25</option>
                                    <option value="26" <?php if($data['b_day'] == '26') { ?> selected <?php } ?> >26</option>
                                    <option value="27" <?php if($data['b_day'] == '27') { ?> selected <?php } ?> >27</option>
                                    <option value="28" <?php if($data['b_day'] == '28') { ?> selected <?php } ?> >28</option>
                                    <option value="29" <?php if($data['b_day'] == '29') { ?> selected <?php } ?> >29</option>
                                    <option value="30" <?php if($data['b_day'] == '30') { ?> selected <?php } ?> >30</option>
                                    <option value="31" <?php if($data['b_day'] == '31') { ?> selected <?php } ?> >31</option>
                                </select>
                              </div>
                              <div style="padding:0px 2px;" class="col-sm-4">
                                  <select name="b_month"   style="padding-top: 3px;" class="form-control sml-frm  cflo input-sm">
                                    <option value="0" selected="">MM</option>
                                    <option value="01"<?php if($data['b_month'] == '01') { ?> selected <?php } ?>>January</option>
                                    <option value="02"<?php if($data['b_month'] == '02') { ?> selected <?php } ?>>February</option>
                                    <option value="03"<?php if($data['b_month'] == '03') { ?> selected <?php } ?>>March</option>
                                    <option value="04"<?php if($data['b_month'] == '04') { ?> selected <?php } ?>>April</option>
                                    <option value="05"<?php if($data['b_month'] == '05') { ?> selected <?php } ?>>May</option>
                                    <option value="06"<?php if($data['b_month'] == '06') { ?> selected <?php } ?>>June</option>
                                    <option value="07"<?php if($data['b_month'] == '07') { ?> selected <?php } ?>>July</option>
                                    <option value="08"<?php if($data['b_month'] == '08') { ?> selected <?php } ?>>August</option>
                                    <option value="09" <?php if($data['b_month'] == '09') { ?> selected <?php } ?>>September</option>
                                    <option value="10"<?php if($data['b_month'] == '10') { ?> selected <?php } ?>>October</option>
                                    <option value="11"<?php if($data['b_month'] == '11') { ?> selected <?php } ?>>November</option>
                                    <option value="12"<?php if($data['b_month'] == '12') { ?> selected <?php } ?>>December</option>
                                 </select>
                              </div>
                              <div style="padding:0px 2px;" class="col-sm-4">
                                  <select name="b_year"   style="padding-top: 3px;" class="form-control sml-frm  cflo input-sm">
                                  	<option value="0" selected="">YYYY</option>
                                    <option value="1944"<?php if($data['b_year'] == '1944') { ?> selected <?php } ?>>1944</option>
                                    <option value="1945"<?php if($data['b_year'] == '1945') { ?> selected <?php } ?>>1945</option>
                                    <option value="1946"<?php if($data['b_year'] == '1946') { ?> selected <?php } ?>>1946</option>
                                    <option value="1947"<?php if($data['b_year'] == '1947') { ?> selected <?php } ?>>1947</option>
                                    <option value="1948"<?php if($data['b_year'] == '1948') { ?> selected <?php } ?>>1948</option>
                                    <option value="1949"<?php if($data['b_year'] == '1949') { ?> selected <?php } ?>>1949</option>
                                    <option value="1950"<?php if($data['b_year'] == '1950') { ?> selected <?php } ?>>1950</option>
                                    <option value="1951"<?php if($data['b_year'] == '1951') { ?> selected <?php } ?>>1951</option>
                                    <option value="1952"<?php if($data['b_year'] == '1952') { ?> selected <?php } ?>>1952</option>
                                    <option value="1953"<?php if($data['b_year'] == '1953') { ?> selected <?php } ?>>1953</option>
                                    <option value="1954"<?php if($data['b_year'] == '1954') { ?> selected <?php } ?>>1954</option>
                                    <option value="1955"<?php if($data['b_year'] == '1955') { ?> selected <?php } ?>>1955</option>
                                    <option value="1956"<?php if($data['b_year'] == '1956') { ?> selected <?php } ?>>1956</option>
                                    <option value="1957"<?php if($data['b_year'] == '1957') { ?> selected <?php } ?>>1957</option>
                                    <option value="1958"<?php if($data['b_year'] == '1958') { ?> selected <?php } ?>>1958</option>
                                    <option value="1959"<?php if($data['b_year'] == '1959') { ?> selected <?php } ?>>1959</option>
                                    <option value="1960"<?php if($data['b_year'] == '1960') { ?> selected <?php } ?>>1960</option>
                                    <option value="1961"<?php if($data['b_year'] == '1961') { ?> selected <?php } ?>>1961</option>
                                    <option value="1962"<?php if($data['b_year'] == '1962') { ?> selected <?php } ?>>1962</option>
                                    <option value="1963"<?php if($data['b_year'] == '1963') { ?> selected <?php } ?>>1963</option>
                                    <option value="1964"<?php if($data['b_year'] == '1964') { ?> selected <?php } ?>>1964</option>
                                    <option value="1965"<?php if($data['b_year'] == '1965') { ?> selected <?php } ?>>1965</option>
                                    <option value="1966"<?php if($data['b_year'] == '1966') { ?> selected <?php } ?>>1966</option>
                                    <option value="1967"<?php if($data['b_year'] == '1967') { ?> selected <?php } ?>>1967</option>
                                    <option value="1968"<?php if($data['b_year'] == '1968') { ?> selected <?php } ?>>1968</option>
                                    <option value="1969"<?php if($data['b_year'] == '1969') { ?> selected <?php } ?>>1969</option>
                                    <option value="1970"<?php if($data['b_year'] == '1970') { ?> selected <?php } ?>>1970</option>
                                    <option value="1971"<?php if($data['b_year'] == '1971') { ?> selected <?php } ?>>1971</option>
                                    <option value="1972"<?php if($data['b_year'] == '1972') { ?> selected <?php } ?>>1972</option>
                                    <option value="1973"<?php if($data['b_year'] == '1973') { ?> selected <?php } ?>>1973</option>
                                    <option value="1974"<?php if($data['b_year'] == '1974') { ?> selected <?php } ?>>1974</option>
                                    <option value="1975"<?php if($data['b_year'] == '1975') { ?> selected <?php } ?>>1975</option>
                                    <option value="1976"<?php if($data['b_year'] == '1976') { ?> selected <?php } ?>>1976</option>
                                    <option value="1977"<?php if($data['b_year'] == '1977') { ?> selected <?php } ?>>1977</option>
                                    <option value="1978"<?php if($data['b_year'] == '1978') { ?> selected <?php } ?>>1978</option>
                                    <option value="1979"<?php if($data['b_year'] == '1979') { ?> selected <?php } ?>>1979</option>
                                    <option value="1980"<?php if($data['b_year'] == '1980') { ?> selected <?php } ?>>1980</option>
                                    <option value="1981"<?php if($data['b_year'] == '1981') { ?> selected <?php } ?>>1981</option>
                                    <option value="1982"<?php if($data['b_year'] == '1982') { ?> selected <?php } ?>>1982</option>
                                    <option value="1983"<?php if($data['b_year'] == '1983') { ?> selected <?php } ?>>1983</option>
                                    <option value="1984"<?php if($data['b_year'] == '1984') { ?> selected <?php } ?>>1984</option>
                                    <option value="1985"<?php if($data['b_year'] == '1985') { ?> selected <?php } ?>>1985</option>
                                    <option value="1986"<?php if($data['b_year'] == '1986') { ?> selected <?php } ?>>1986</option>
                                    <option value="1987"<?php if($data['b_year'] == '1987') { ?> selected <?php } ?>>1987</option>
                                    <option value="1988"<?php if($data['b_year'] == '1988') { ?> selected <?php } ?>>1988</option>
                                    <option value="1989"<?php if($data['b_year'] == '1989') { ?> selected <?php } ?>>1989</option>
                                    <option value="1990"<?php if($data['b_year'] == '1990') { ?> selected <?php } ?>>1990</option>
                                    <option value="1991"<?php if($data['b_year'] == '1991') { ?> selected <?php } ?>>1991</option>
                                    <option value="1992"<?php if($data['b_year'] == '1992') { ?> selected <?php } ?>>1992</option>
                                    <option value="1993"<?php if($data['b_year'] == '1993') { ?> selected <?php } ?>>1993</option>
                                    <option value="1994"<?php if($data['b_year'] == '1994') { ?> selected <?php } ?>>1994</option>
                                    <option value="1995"<?php if($data['b_year'] == '1995') { ?> selected <?php } ?>>1995</option>
                                    <option value="1996"<?php if($data['b_year'] == '1996') { ?> selected <?php } ?> >1996</option>
                                    <option value="1997"<?php if($data['b_year'] == '1997') { ?> selected <?php } ?>>1997</option>
                                    <option value="1998"<?php if($data['b_year'] == '1998') { ?> selected <?php } ?>>1998</option>
                                    <option value="1999"<?php if($data['b_year'] == '1999') { ?> selected <?php } ?>>1999</option>
                                    <option value="2000"<?php if($data['b_year'] == '2000') { ?> selected <?php } ?>>2000</option>
                                    <option value="2001"<?php if($data['b_year'] == '2001') { ?> selected <?php } ?>>2001</option>
                                    <option value="2002"<?php if($data['b_year'] == '2002') { ?> selected <?php } ?>>2002</option>
                                 </select>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Gender :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="gender"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="">Select</option>
                              <option value="Male" <?php if($data['gender'] == 'Male') { ?> selected <?php } ?>>Male</option>
                              <option value="Female" <?php if($data['gender'] == 'Female') { ?> selected <?php } ?>>Female</option>
    
                          </select>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Religion :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="religion"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Select</option>
                              <option value="Hindu"<?php if($data['religion'] == 'Hindu') { ?> selected <?php } ?>>Hindu</option>
                          </select>
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Mother Tongue :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="mother_tongue"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="">Select</option>
                              <option value="SSK Savji"<?php if($data['mother_tongue'] == 'SSK Savji') { ?> selected <?php } ?>>SSK Savji</option>
                              <option value="Pategar"<?php if($data['mother_tongue'] == 'Pategar') { ?> selected <?php } ?>>Pategar</option>
                              <option value="Khatri"<?php if($data['mother_tongue'] == 'Khatri') { ?> selected <?php } ?>>Khatri</option>
                              <option value="Kannada"<?php if($data['mother_tongue'] == 'Kannada') { ?> selected <?php } ?>>Kannada</option>
                              <option value="Marathi"<?php if($data['mother_tongue'] == 'Marathi') { ?> selected <?php } ?>>Marathi</option>
                              <option value="Hindi"<?php if($data['mother_tongue'] == 'Hindi') { ?> selected <?php } ?>>Hindi</option>
                              <option value="English"<?php if($data['mother_tongue'] == 'English') { ?> selected <?php } ?>>English</option>
                              <option value="Telugu"<?php if($data['mother_tongue'] == 'Telugu') { ?> selected <?php } ?>>Telugu</option>
                              <option value="Tamil"<?php if($data['mother_tongue'] == 'Tamil') { ?> selected <?php } ?>>Tamil</option>
                              <option value="Malayalam"<?php if($data['mother_tongue'] == 'Malayalam') { ?> selected <?php } ?>>Malayalam</option>
                          </select>
                      </div>
                  </div>
                  
                  
                    

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                        <input type ="hidden" name = "type" value="AddRegister1">
                        <input type ="hidden" name = "register1_id" id="register1_id" value="<?php echo isset($data['register1_id'])?$data['register1_id']:''?>">
                        <button type="submit" id="submit" style="font-weight:600; float:right" class="btn btn-sm btn-success">Save & Continue</button>
                      </div>
                  </div>

                  </form>



              </div>
            </div>
        </div>

    </div>
</div>


<?php include("footer.php"); ?>
