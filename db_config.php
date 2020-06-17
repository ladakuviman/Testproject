<?php

if(isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=="127.0.0.1"  || $_SERVER['HTTP_HOST']=="192.168.1.1")){
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "matrimonial";
    $baseurl = "http://localhost/matrimonial_new"; 
}
else{
    $dbservername = "localhost";
    $dbusername = "msbtee_matrimonial";
    $dbpassword = "Vmt@4321";
    $dbname = "msbtee_matrimonial";
    $baseurl = "http://msbteee.com/developer/matrimonial_new";
}
// Create connection
$db =$db2 = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
//$db2 = new mysqli($dbservername, $dbusername, $dbpassword, $dbname2);
// Check connection
if ($db->connect_error || $db2->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
mysqli_set_charset($db,"utf8");

define('BASEURL',$baseurl);
$webname = "amarlok";
$webtitle = "amarlok";
$webmail="info@amarloktv.com";
//mail setting
$mailsetting = array(
    "Host"              =>  "smtpout.secureserver.net",
    "Port"              =>  587,
    "SMTPSecure"        =>  "tls",
    "SMTPAuth"          =>  true,
    "gmail_username"    =>  "info@amarloktv.com",
    "gmail_password"    =>  "Vmt@4321",
    "defaultfromemail"  =>  "info@amarloktv.com",
    "defaultfromname"   =>  "Vmt@4321",
    "defaulttoemail"    =>  "info@amarloktv.com",
    "defaulttoname"     =>  "Vmt@4321",
    "defaultccemail"    =>  "info@amarloktv.com",
    "defaultccname"     =>  "Vmt@4321"
);

include_once "function.php";

?>