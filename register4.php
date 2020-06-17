<?php include("header1.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])){
   $register4_id = $_GET['id'];
   $data = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `register4` WHERE `register4_id` = '$register4_id'"));
   }
   else {
    $data['education'] = "";
    $data['employed'] = "";
    $data['occupation'] = "";
    $data['income'] = "";
    
   }
?>

<style type="text/css">
  .to-fmid {
    margin-top: 20px;
  }
</style>
<div class="regformbg">
	<div class="container">
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5">
              <div style="color:#535353; font-size:13px;" class="reg-box shado-1">
                  <h1>Professional details help you get relevant matches</h1>
                  <form action="" id = "AddRegister4" method="post" enctype="multipart/form-data">
                  
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Highest Education :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="education"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="">Select education category</option>
              
                            <option value="BE / B.Tech."<?php if($data['education'] == 'BE / B.Tech.') { ?> selected <?php } ?>>BE / B.Tech.</option>
                            <option value="Aeronautical Engineering"<?php if($data['education'] == 'Aeronautical Engineering') { ?> selected <?php } ?>>Aeronautical Engineering</option>
                            <option value="B.Arch"<?php if($data['education'] == 'B.Arch') { ?> selected <?php } ?>>B.Arch</option>
                            <option value="BCA"<?php if($data['education'] == 'BCA') { ?> selected <?php } ?>>BCA</option>
                            <option value="BE"<?php if($data['education'] == 'BE') { ?> selected <?php } ?>>BE</option>
                            <option value="B.Plan"<?php if($data['education'] == 'B.Plan') { ?> selected <?php } ?>>B.Plan</option>
                            <option value="B.Sc IT/ Computer Science"<?php if($data['education'] == 'B.Sc IT/ Computer Science') { ?> selected <?php } ?>>B.Sc IT/ Computer Science</option>
                            <option value="B.Tech."<?php if($data['education'] == 'B.Tech.') { ?> selected <?php } ?>>B.Tech.</option>
                            <option value="B.S.(Engineering)"<?php if($data['education'] == 'B.S.(Engineering)') { ?> selected <?php } ?>>B.S.(Engineering)</option>
                            <option value="Other Bachelor Degree in Engineering / Computers"<?php if($data['education'] == 'Other Bachelor Degree in Engineering / Computers') { ?> selected <?php } ?>>Other Bachelor Degree in Engineering / Computers</option>

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
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Employed in :</label>
                      </div>
                      <div class="col-sm-8">
                         <input value="Government"   type="radio" name="employed" <?php if($data['employed'] == 'Government') { ?> checked <?php } ?>> Government &nbsp;&nbsp;
                          <input value="Private"  type="radio" name="employed" <?php if($data['employed'] == 'Private') { ?> checked <?php } ?>> Private &nbsp;&nbsp;
                          <br>
                          <input value="Business"  type="radio" name="employed" <?php if($data['employed'] == 'Business') { ?> checked <?php } ?>> Business &nbsp;&nbsp;
                          <input value="Defence"  type="radio" name="employed" <?php if($data['employed'] == 'Defence') { ?> checked <?php } ?>> Defence &nbsp;&nbsp;
                          <br>
                          <input value="Self Employed"  type="radio" name="employed" <?php if($data['employed'] == 'Self Employed') { ?> checked <?php } ?>> Self Employed &nbsp;&nbsp;
                          <input value="Not Working"  type="radio" name="employed" <?php if($data['employed'] == 'Not Working') { ?> checked <?php } ?>> Not Working
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Occupation :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="occupation"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0">Select Occupation</option>
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
                  </div>

                  
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Annual Income :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="income"  style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="">Select Income</option>
                              <option value="0 - 1 Lakh" <?php if($data['income'] == '0 - 1 Lakh') { ?> selected <?php } ?>>0 - 1 Lakh</option>
                              <option value="1 - 2 Lakhs" <?php if($data['income'] == '1 - 2 Lakhs') { ?> selected <?php } ?>>1 - 2 Lakhs</option>
                              <option value="2 - 3 Lakhs" <?php if($data['income'] == '2 - 3 Lakhs') { ?> selected <?php } ?>>2 - 3 Lakhs</option>
                              <option value="3 - 4 Lakhs" <?php if($data['income'] == '3 - 4 Lakhs') { ?> selected <?php } ?>>3 - 4 Lakhs</option>
                              <option value="4 - 5 Lakhs" <?php if($data['income'] == '4 - 5 Lakhs') { ?> selected <?php } ?>>4 - 5 Lakhs</option>
                              <option value="5 - 6 Lakhs" <?php if($data['income'] == '5 - 6 Lakhs') { ?> selected <?php } ?>>5 - 6 Lakhs</option>
                              <option value="6 - 7 Lakhs" <?php if($data['income'] == '6 - 7 Lakhs') { ?> selected <?php } ?>>6 - 7 Lakhs</option>
                              <option value="7 - 8 Lakhs" <?php if($data['income'] == '7 - 8 Lakhs') { ?> selected <?php } ?>>7 - 8 Lakhs</option>
                              <option value="8 - 9 Lakhs" <?php if($data['income'] == '8 - 9 Lakhs') { ?> selected <?php } ?>>8 - 9 Lakhs</option>
                              <option value="9 - 10 Lakhs" <?php if($data['income'] == '9 - 10 Lakhs') { ?> selected <?php } ?>>9 - 10 Lakhs</option>
                              <option value="10 - 12 Lakhs" <?php if($data['income'] == '10 - 12 Lakhs') { ?> selected <?php } ?>>10 - 12 Lakhs</option>
                              <option value="12 - 14 Lakhs" <?php if($data['income'] == '12 - 14 Lakhs') { ?> selected <?php } ?>>12 - 14 Lakhs</option>
                              <option value="14 - 16 Lakhs" <?php if($data['income'] == '14 - 16 Lakhs') { ?> selected <?php } ?>>14 - 16 Lakhs</option>
                              <option value="16 - 18 Lakhs" <?php if($data['income'] == '16 - 18 Lakhs') { ?> selected <?php } ?>>16 - 18 Lakhs</option>
                              <option value="18 - 20 Lakhs" <?php if($data['income'] == '18 - 20 Lakhs') { ?> selected <?php } ?>>18 - 20 Lakhs</option>
                              <option value="20 - 25 Lakhs" <?php if($data['income'] == '20 - 25 Lakhs') { ?> selected <?php } ?>>20 - 25 Lakhs</option>
                              <option value="25 - 30 Lakhs" <?php if($data['income'] == '25 - 30 Lakhs') { ?> selected <?php } ?>>25 - 30 Lakhs</option>
                              <option value="30 - 35 Lakhs" <?php if($data['income'] == '30 - 35 Lakhs') { ?> selected <?php } ?>>30 - 35 Lakhs</option>
                              <option value="35 - 40 Lakhs" <?php if($data['income'] == '35 - 40 Lakhs') { ?> selected <?php } ?>>35 - 40 Lakhs</option>
                              <option value="40 - 45 Lakhs" <?php if($data['income'] == '40 - 45 Lakhs') { ?> selected <?php } ?>>40 - 45 Lakhs</option>
                              <option value="45 - 50 Lakhs" <?php if($data['income'] == '45 - 50 Lakhs') { ?> selected <?php } ?>>45 - 50 Lakhs</option>
                              <option value="50 - 60 Lakhs" <?php if($data['income'] == '50 - 60 Lakhs') { ?> selected <?php } ?>>50 - 60 Lakhs</option>
                              <option value="60 - 70 Lakhs" <?php if($data['income'] == '60 - 70 Lakhs') { ?> selected <?php } ?>>60 - 70 Lakhs</option>
                              <option value="70 - 80 Lakhs" <?php if($data['income'] == '70 - 80 Lakhs') { ?> selected <?php } ?>>70 - 80 Lakhs</option>
                              <option value="80 - 90 Lakhs" <?php if($data['income'] == '80 - 90 Lakhs') { ?> selected <?php } ?>>80 - 90 Lakhs</option>
                              <option value="90 Lakhs - 1 Crore" <?php if($data['income'] == '90 Lakhs - 1 Crore') { ?> selected <?php } ?>>90 Lakhs - 1 Crore</option>
                              <option value="1 Crore & Above" <?php if($data['income'] == '1 Crore & Above') { ?> selected <?php } ?>>1 Crore & Above</option>
    
                          </select>
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                        <input type ="hidden" name = "type" value="AddRegister4">
                        <input type ="hidden" name = "register4_id" id="register4_id" value="<?php echo isset($data['register4_id'])?$data['register4_id']:''?>">
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