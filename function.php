<?php
require_once 'phpmailer/PHPMailerAutoload.php';

/*
 * Function to generate password and pin
 */
function special_code($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
function random_password($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
function encrypt_password1($password)
{
    $hash_cost_factor = 10;
    $e_pwd = password_hash($password, PASSWORD_DEFAULT, array('cost' => $hash_cost_factor));
    return $e_pwd;
}
function encrypt_password($password)
{
    $hash_cost_factor = 10;
    $e_pwd = password_hash($password, PASSWORD_DEFAULT, array('cost' => $hash_cost_factor));
    return $e_pwd;
}
function verify_password($current,$system)
{

    return password_verify($current, $system);
}


function getCurrentClientDetails(){
    if($_SERVER['HTTP_HOST'] == 'localhost'){
        $IPaddress = '43.229.202.203';
    }
    else{
        $IPaddress = $_SERVER['REMOTE_ADDR'];
    }
    $your_key = '445cd1858f64a2e728d12ea70944c743439d67cb19bfaa9d2a854bc72b978a69';
    $url = "http://api.ipinfodb.com/v3/ip-city/?key=$your_key&ip=$IPaddress&format=json";
    $json       = file_get_contents($url);
    $details    = json_decode($json,true);
    return $details;
}

function encrypt_decrypt($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = 'hosttest786';
    $secret_iv = 'hosttest786';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}


/*
 * Function to generate pin
 */
function random_pin($length)
{
    $chars = "0123456789";
    $pin = substr( str_shuffle( $chars ), 0, $length );
    return $pin;
}
/*
 * get Ip Address
 */
function get_userip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $ip = $_SERVER['HTTP_CLIENT_IP'];}
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; }
    else { $ip = $_SERVER['REMOTE_ADDR']; }
    return $ip;
}

/*
 * function truncate string
 */
function truncate($string,$length)
{
    $string = strip_tags($string);
    if (strlen($string) > $length)
    {
        // truncate string
        $stringCut = substr($string, 0, $length);
        // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
    }
    return $string;
}


function readMore($string,$length)
{
    $string = strip_tags($string);
    if (strlen($string) > $length)
    {
        $stringCut = substr($string, 0, $length);
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'  ....more';
    }
    return $string;
}
/*
 *  Mail Sending Code
 */
function send_phpmail1( $toname, $to ,$fromname, $from , $subject, $body )
{
    global $mailsetting;
    if(empty($from))
    {
        $from = $mailsetting['defaultfromemail'];
    }
    if(empty($fromname))
    {

        $fromname = $mailsetting['defaultfromname'];
    }
    if(empty($to))
    {
        $toname = $mailsetting['defaulttoname'];
        $to = $mailsetting['defaulttoemail'];
    }
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = $mailsetting['Host'];
    $mail->Port = $mailsetting['Port'];
    $mail->SMTPSecure = $mailsetting['SMTPSecure'];
    $mail->SMTPAuth = $mailsetting['SMTPAuth'];
    $mail->Username = $mailsetting['gmail_username'];
    $mail->Password = $mailsetting['gmail_password'];
    $mail->setFrom($from, $fromname);
    $mail->addReplyTo($from, $fromname);
    $mail->addAddress($to, $toname);
    if(!empty($mailsetting['defaultccemail'])){
        $mail->AddCC($mailsetting['defaultccemail'], $mailsetting['defaultccname']);
    }
    // echo $body;die;
    // $mail->AddEmbeddedImage('img/logohead.png');
    $mail->Subject = $subject;
    $mail->IsHTML(true);
    $mail->Body    = $body;
    if (!$mail->send()) {
        return $mail->ErrorInfo;
    } else {
        return true;
    }

}
//Send Attachment PHPMailer
function send_phpmail_attach1($toname,$to,$fromname, $from ,$subject,$message,$attachment=array())
{
    global $mailsetting;

    if(isset($from) && empty($from))
    {
        $from = $mailsetting['defaultfromemail'];
    }
    if(empty($fromname))
    {
        $fromname = $mailsetting['defaultfromname'];
    }

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = $mailsetting['Host'];
    $mail->Port = $mailsetting['Port'];
    $mail->SMTPSecure = $mailsetting['SMTPSecure'];
    $mail->SMTPAuth = $mailsetting['SMTPAuth'];
    $mail->Username = $mailsetting['gmail_username'];
    $mail->Password = $mailsetting['gmail_password'];
    $mail->setFrom($from, $fromname);
    //$mail->addReplyTo($from, $fromname);
    $mail->addAddress($to, $toname);

    //Added extra
    if(!empty($mailsetting['defaultccemail'])){
        $mail->AddCC($mailsetting['defaultccemail'], $mailsetting['defaultccname']);
    }
    var_dump($attachment);
    foreach ($attachment as $file) {
        $mail->AddAttachment( "../upload/attachment/".$file, $file);
    }


    $mail->Subject = $subject;
    $mail->IsHTML(true);
    $mail->Body    = $message;
    if (!$mail->send()) {
        return $mail->ErrorInfo;
    } else {
        return true;
    }

}
function send_phpmail_attach1_front($toname,$to,$fromname, $from ,$subject,$message,$attachment=array())
{
    global $mailsetting;

    if(isset($from) && empty($from))
    {
        $from = $mailsetting['defaultfromemail'];
    }
    if(empty($fromname))
    {
        $fromname = $mailsetting['defaultfromname'];
    }

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = $mailsetting['Host'];
    $mail->Port = $mailsetting['Port'];
    $mail->SMTPSecure = $mailsetting['SMTPSecure'];
    $mail->SMTPAuth = $mailsetting['SMTPAuth'];
    $mail->Username = $mailsetting['gmail_username'];
    $mail->Password = $mailsetting['gmail_password'];
    $mail->setFrom($from, $fromname);
    //$mail->addReplyTo($from, $fromname);
    $mail->addAddress($to, $toname);

    //Added extra
    if(!empty($mailsetting['defaultccemail'])){
        $mail->AddCC($mailsetting['defaultccemail'], $mailsetting['defaultccname']);
    }
    //var_dump($attachment);
    foreach ($attachment as $file) {
        $mail->AddAttachment( "upload/attachment/".$file, $file);
    }


    $mail->Subject = $subject;
    $mail->IsHTML(true);
    $mail->Body    = $message;
    if (!$mail->send()) {
        return $mail->ErrorInfo;
    } else {
        return true;
    }

}

//echo send_phpmail( "Avinash", "jinal@dsvinfosolutions.com" ,"", "", "test", "body" );

/*
 * PHP Mail With Attachment
 */
function send_phpmail_attach11( $toname, $to ,$fromname, $from , $subject, $html_content, $filename )
{
    global $mailsetting;

    if(empty($from))
    {
        $fromname = $mailsetting['defaultfromname'];
        $from = $mailsetting['defaultfromemail'];
    }
    if(empty($to))
    {
        $toname = $mailsetting['defaulttoname'];
        $to = $mailsetting['defaulttoemail'];
    }

    $cc = $mailsetting['defaultccemail'];

    $text_content = '';
    $path = '../img/general';
    $file = $path . "/" . $filename;
    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));
    # Setup mime boundary
    $mime_boundary = 'Multipart_Boundary_x'.md5(time()).'x';

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\r\n";
    $headers .= "Content-Transfer-Encoding: 7bit\r\n";

    $body    = "This is a multi-part message in mime format.\n\n";

    # Add in plain text version
    $body   .= "--$mime_boundary\n";
    $body   .= "Content-Type: text/plain; charset=\"charset=us-ascii\"\n";
    $body   .= "Content-Transfer-Encoding: 7bit\n\n";
    $body   .= $text_content;
    $body   .= "\n\n";

    # Add in HTML version
    $body   .= "--$mime_boundary\n";
    $body   .= "Content-Type: text/html; charset=\"UTF-8\"\n";
    $body   .= "Content-Transfer-Encoding: 7bit\n\n";
    $body   .= $html_content;
    $body   .= "\n\n";

    # Attachments would go here
    $body   .= "--$mime_boundary\n";
    $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\n";
    $body .= "Content-Transfer-Encoding: base64 \n\n";
    $body .= "Content-Disposition: attachment\n\n";
    $body .= $content;
    $body   .= "\n\n";

    # End email
    $body   .= "--$mime_boundary--\n"; # <-- Notice trailing --, required to close email body for mime's

    # Finish off headers
    $headers .= "From: $fromname <$from>\r\n";
    //$headers .= "X-Sender-IP: $_SERVER[SERVER_ADDR]\r\n";
    if(!empty($cc))
    {
        $headers .= "Cc: $cc \r\n";
    }
    $headers .= 'Date: '.date('n/d/Y g:i A')."\r\n";

    # Mail it out
    $mail = mail($to, $subject, $body, $headers);
    if ($mail) {
        return true;
    } else {
        return "Mail not sent";

    }

}
function send_participatemail( $participant_data, $subject, $body )
{
    $fromname = $to = 'MadPropertyBuy.com';
    $from = $to = "sales@madpropertybuy.com";

    $header = "From: ".$fromname."<".$from.">".PHP_EOL;

    for($i=0;$i<count($participant_data);$i++)
    {

        $emaillist[] = $participant_data[$i]['email'];
    }

    $header .= "CC:".implode(',',$emaillist).PHP_EOL;
    $header .= 'MIME-Version: 1.0'.PHP_EOL;
    $header .= 'Content-type: text/html; charset=iso-8859-1' .PHP_EOL;

    //send mail
    if(mail( $to, $subject, $body, $header))
    {
        return 1;
    }
    else
    {
        return 0;
    }

}





/*
 * Get User Data
 */
function checkUser($userData = array(),$db)
{
    if(!empty($userData))
    {

        $prevQuery = "SELECT * FROM users WHERE oauth_provider in ('facebook','website','google') AND email = '".$userData['email']."'";
        $prevResult = $db->query($prevQuery);
        if($prevResult->num_rows > 0)
        {
            //Update user data if already exists
            $query = "UPDATE users SET first_name = '".$userData['first_name']."',last_name='".$userData['last_name']."', email = '".$userData['email']."', gender = '".$userData['gender']."', locale = '".$userData['locale']."', picture = '".$userData['picture']."', link = '".$userData['link']."', modified = '".date("Y-m-d H:i:s")."' WHERE oauth_provider in ('facebook','website','google') AND email = '".$userData['email']."'";

            //  echo $query;
            $update = $db->query($query);
        }
        else
        {

            //Insert user data
            $password = random_password(8);
            $epassword =encrypt_decrypt('encrypt',$password);
            // $name=$userData['first_name']." ".$userData['last_name'];

            $insertlogin=mysqli_query($db,"INSERT INTO `login`( `email`, `password`, `type`) VALUES ('".$userData['email']."','$epassword','2')");
            $uid=mysqli_insert_id($db);


            $query = "INSERT INTO users SET `user_id`='$uid', `password` = '$epassword',status=1,oauth_uid = '".$userData['oauth_uid']."', first_name = '".$userData['first_name']."',last_name='".$userData['last_name']."', email = '".$userData['email']."', gender = '".$userData['gender']."', locale = '".$userData['locale']."', picture = '".$userData['picture']."',oauth_provider = '".$userData['oauth_provider']."', created = '".date("Y-m-d H:i:s")."'";
            //echo $query;
            $insert = $db->query($query);
            if($insert)
            {


                $lastuid = mysqli_insert_id($db);
                $row = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `users` where `user_id` = '$uid'"));
                extract($row);
                $from = "";
//var_dump($row);
                $subject = "$webtitle - Account Has Been Created";

                $qry1 = mysqli_query($db, "SELECT * FROM `email_template` where id= 1 ");
                $value = mysqli_fetch_assoc($qry1);
                $message =  $value['content'];

                $array = array(
                    "first_name"=>$first_name,
                    "last_name"=>$last_name,
                    "full_name"=>$first_name." ".$last_name,
                    "user_id"=>$user_id,
                    // "name"=>$name,
                    "password"=>$password,
                    "email"=>$email

                );
                foreach($array as $key=>$val)
                {
                    $message = str_replace("{".$key."}", $val, $message);
                }
                /*$body="
                    <b style='text-transform:capitalize;'>Your Account has been created. </b>
                    <br>
                    <p> Account Has Been Created With This Information.</p>
                    <p> Firstname : $first_name</p>
                    <p> Lastname : $last_name</p>
                    <p> Authentication Provider : $oauth_provider</p>
                    <p> Email : $email</p>
                    <br>
                    <p>Thank You</p>
                    <img alt=\"$webname\" border=\"0\" width=\"250\" style=\"display:block\"  src=\"cid:logo_2u\"><br>
                ";*/
                $body = $message;
                //send_mail( $to, $from, $subject, $body );
                send_phpmail( $name, $email ,"", "" , $subject, $body );
            }
        }

        //Get user data from the database
        $result = $db->query($prevQuery);
        $userData = $result->fetch_assoc();

    }
    return $userData;
}


function curl($url, $post = "") {
    $curl = curl_init();
    $userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';
    curl_setopt($curl, CURLOPT_URL, $url);
    //The URL to fetch. This can also be set when initializing a session with curl_init().
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    //TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
    //The number of seconds to wait while trying to connect.
    if ($post != "") {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    }
    curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
    //The contents of the "User-Agent: " header to be used in a HTTP request.
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
    //To follow any "Location: " header that the server sends as part of the HTTP header.
    curl_setopt($curl, CURLOPT_AUTOREFERER, TRUE);
    //To automatically set the Referer: field in requests where it follows a Location: redirect.
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    //The maximum number of seconds to allow cURL functions to execute.
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    //To stop cURL from verifying the peer's certificate.
    $contents = curl_exec($curl);
    curl_close($curl);
    return $contents;
}
//function to get specific length number or padding with zero
function leftPad($number, $targetLength)
{
    $output = $number . '';
    while (strlen($output) < $targetLength) {
        $output = '0' . $output;
    }
    return $output;
}
function viewDate($date){
    $newDate = isset($date) && !empty($date)?date("d-m-Y", strtotime($date)):'';
    return $newDate;
}
function viewTime($date){
    $newtime = isset($date) && !empty($date)?date("H:i:s", strtotime($date)):'';
    return $newtime;
}
function viewDateTime($date){
    $newtime = isset($date) && !empty($date)?date("d-m-Y h:i A", strtotime($date)):'';
    return $newtime;
}
/*echo viewDate('2017-07-12 12:00:00');
echo "<br>".viewDateTime('2017-07-12 12:00:00');*/

/*function send_phpmail( $toname, $to ,$fromname, $from , $subject, $body )
{
    global $mailsetting;

    if(empty($from))
    {

        $fromname = $mailsetting['defaultfromname'];
        $from = $mailsetting['defaultfromemail'];
    }
    if(empty($to))
    {
        $toname = $mailsetting['defaulttoname'];
        $to = $mailsetting['defaulttoemail'];
    }
    $cc = $mailsetting['defaultccemail'];
    $header = "From: $fromname <$from> \r\n";
    if(!empty($cc))
    {
        $header .= "Cc: $cc \r\n";
    }

    $header .= 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    //send mail
    if(mail( $to, $subject, $body, $header))
    {
        return true;
    }
    else
    {
        return false;
    }

}*/

/*function send_phpmail( $toname, $to ,$fromname, $from , $subject, $body )
{
    global $mailsetting;
    if(empty($from))
    {
        $from = $mailsetting['defaultfromemail'];
    }
    if(empty($fromname))
    {

        $fromname = $mailsetting['defaultfromname'];
    }
    if(empty($to))
    {
        $toname = $mailsetting['defaulttoname'];
        $to = $mailsetting['defaulttoemail'];
    }

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = $mailsetting['Host'];
    $mail->Port = $mailsetting['Port'];
    $mail->SMTPSecure = $mailsetting['SMTPSecure'];
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->SMTPAuth = $mailsetting['SMTPAuth'];
    $mail->Username = $mailsetting['gmail_username'];
    $mail->Password = $mailsetting['gmail_password'];
    $mail->setFrom($from, $fromname);
    $mail->addReplyTo($from, $fromname);
    $mail->addAddress($to, $toname);
    if(!empty($mailsetting['defaultccemail'])){
        $mail->AddCC($mailsetting['defaultccemail'], $mailsetting['defaultccname']);
    }

    // $mail->AddEmbeddedImage('../assets/images/logo.png', "logo_2u");
    $mail->Subject = $subject;
    $mail->IsHTML(true);
    $mail->Body    = $body;
    if (!$mail->send()) {
        return $mail->ErrorInfo;
    } else {
        return true;
    }

}*/


//echo send_phpmail('Hello','avinash@dsvinfosolutions.com','Hello','dsvinfosolutions@gmail.com','Hello','Hello body testing');
/*
 * Get Initial of String
 */
function getInitial($string)
{
    return substr($string, 0, 1);
}
//amount word
function getAmountWord($number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'One', 2 => 'Two',
        3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
        7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
        10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
        13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
        16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
        19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
        40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
        70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    /* $paise = ($decimal) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';*/
    return ($Rupees ? $Rupees . 'Rupees ' : '');
}
//echo getAmountWord(10000);

function getAuthor($db)
{

    $i=1;
    $author_id='';
    $aname=array();
    $msql=mysqli_query($db,"select DISTINCT author from product WHERE author IS NOT NULL order by author asc");
    $rowCount = mysqli_num_rows($msql);

    if($rowCount > 0)
    {
        while($mrow=mysqli_fetch_assoc($msql))
        {
            //$author_id = $mrow['product_id'];
            $aname[]=$mrow['author'];
        }
    }
    return $aname;
}
function getAuthorbykey($db,$keyval)
{
    $keyval=isset($keyval) && !empty($keyval)?$keyval:0;
    $autname='';
    $aname=getAuthor($db);
    //var_dump($aname);
    $cno=count($aname);
    $no=$keyval + 10;

    for ($i=$keyval; $i < $no; $i++)
    {
        if(!empty($aname[$i]))
        {
            $autname[]=$aname[$i];
        }

    }
    return $autname;

}


function Pagination($db,$sql,$rpage,$req,$limit)
{     
    $adjacents = 3;
    //$query = "SELECT COUNT(*) as num FROM $table";
    $prdsql="set @num = 0, @type = '';";
    //echo $sql;
    $query106 = mysqli_query($db,$prdsql);
    $query106 = mysqli_query($db,$sql);
    //printf("Errormessage: %s\n", mysqli_error($db));
    //var_dump($query106);
    $total_pages = mysqli_num_rows($query106);
    //var_dump($total_pages);
    //$total_pages = $total_pages['num'];

    /* Setup vars for query. */
    $targetpage = $rpage;    //your file name  (the name of this file)
    //$limit = 10;                                //how many items to show per page
    //$page = $_GET['page'];
    $page = isset($_GET['page'])?$_GET['page']:0;
    if($page)
        $start = ($page - 1) * $limit;          //first item to display on this page
    else
        $start = 0;                             //if no page var is given, set start to 0

    /* Get data. */  
    $Pqry=$sql." LIMIT $start, $limit"; 
    //echo $Pqry;
    //$result = mysqli_query($db,$prdsql);
    $result = mysqli_query($db,$Pqry);
   // printf("Errormessage: %s\n", mysqli_error($db));

    /* Setup page vars for display. */
    if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
    $prev = $page - 1;                          //previous page is page - 1
    $next = $page + 1;                          //next page is page + 1
    $lastpage = ceil($total_pages/$limit);      //lastpage is = total pages / items per page, rounded up.
    $lpm1 = $lastpage - 1;
    if(mysqli_num_rows($result)>0)
    {        
        $pagination = $request = "";
        if(isset($req) && !empty($req))
        {
            $request='&'.$req;
        }
        if($lastpage > 1)
        {
            $pagination .= "<div class=\"pagination\">";
            //previous button
            if ($page > 1)
                $pagination.= "<a href=\"$targetpage?page=$prev$request\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i> </a>";
            else
                $pagination.= "<span class=\"disabled\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i> </span>";

            //pages
            if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
            {
                for ($counter = 1; $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter$request\">$counter</a>";
                }
            }
            elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
            {
                //close to beginning; only hide later pages
                if($page < 1 + ($adjacents * 2))
                {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter$request\">$counter</a>";
                    }
                    $pagination.= "...";
                    $pagination.= "<a href=\"$targetpage?page=$lpm1$request\">$lpm1</a>";
                    $pagination.= "<a href=\"$targetpage?page=$lastpage$request\">$lastpage</a>";
                }
                //in middle; hide some front and some back
                elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                {
                    $pagination.= "<a href=\"$targetpage?page=1$request\">1</a>";
                    $pagination.= "<a href=\"$targetpage?page=2$request\">2</a>";
                    $pagination.= "...";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter$request\">$counter</a>";
                    }
                    $pagination.= "...";
                    $pagination.= "<a href=\"$targetpage?page=$lpm1$request\">$lpm1</a>";
                    $pagination.= "<a href=\"$targetpage?page=$lastpage$request\">$lastpage</a>";
                }
                //close to end; only hide early pages
                else
                {
                    $pagination.= "<a href=\"$targetpage?page=1$request\">1</a>";
                    $pagination.= "<a href=\"$targetpage?page=2$request\">2</a>";
                    $pagination.= "...";
                    for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter$request\">$counter</a>";
                    }
                }
            }

            //next button
            if ($page < $counter - 1)
                $pagination.= "<a href=\"$targetpage?page=$next$request\"> <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>";
            else
                $pagination.= "<span class=\"disabled\">  <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></span>";
            $pagination.= "</div>\n";
        }
    }
    else {

        $pagination="<center><h5><i>No Records found...</i></h5></center>";

    }
     $record = array(
        "pagination" => $pagination,
        "result" => $result
    );
    return $record;    
}


function Pagination1($db,$sql,$rpage,$req,$limit)
{
    $adjacents = 3;
    //$query = "SELECT COUNT(*) as num FROM $table";
    $prdsql="set @num = 0, @type = '';";
    //echo $sql;
    $query106 = mysqli_query($db,$prdsql);
    $query106 = mysqli_query($db,$sql);
    //printf("Errormessage: %s\n", mysqli_error($db));
    //var_dump($query106);
    $total_pages = mysqli_num_rows($query106);
    //var_dump($total_pages);
    //$total_pages = $total_pages['num'];

    /* Setup vars for query. */
    $targetpage = $rpage;    //your file name  (the name of this file)
    //$limit = 10;                                //how many items to show per page
    //$page = $_GET['page'];
    $page = isset($_GET['page'])?$_GET['page']:0;
    if($page)
        $start = ($page - 1) * $limit;          //first item to display on this page
    else
        $start = 0;                             //if no page var is given, set start to 0

    /* Get data. */
    $Pqry=$sql." LIMIT $start, $limit";
    //echo $Pqry;
    //$result = mysqli_query($db,$prdsql);
    $result = mysqli_query($db,$Pqry);
    // printf("Errormessage: %s\n", mysqli_error($db));

    /* Setup page vars for display. */
    if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
    $prev = $page - 1;                          //previous page is page - 1
    $next = $page + 1;                          //next page is page + 1
    $lastpage = ceil($total_pages/$limit);      //lastpage is = total pages / items per page, rounded up.
    $lpm1 = $lastpage - 1;
    if(mysqli_num_rows($result)>0)
    {
        $pagination = $request = "";
        if(isset($req) && !empty($req))
        {
            $request='&'.$req;
        }
        if($lastpage > 1)
        {
            $pagination .= "<div class=\"pagination\">";
            //previous button
            if ($page > 1)
                $pagination.= "<a href=\"$targetpage?page=$prev$request\"><i class=\"fa fa-chevron-left page-link\" aria-hidden=\"true\"></i> </a>";
            else
                $pagination.= "<span class=\"disabled\"><i class=\"fa fa-chevron-left page-link\" aria-hidden=\"true\"></i> </span>";

            //pages
            if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
            {
                for ($counter = 1; $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current page-link\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter$request\" class='page-link'>$counter</a>";
                }
            }
            elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
            {
                //close to beginning; only hide later pages
                if($page < 1 + ($adjacents * 2))
                {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current page-link \">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter$request\" class='page-link'>$counter</a>";
                    }
                    $pagination.= "...";
                    //$pagination.= "<a href=\"$targetpage?page=$lpm1$request\" >$lpm1</a>";
                    $pagination.= "<a href=\"$targetpage?page=$lastpage$request\">$lastpage</a>";
                }
                //in middle; hide some front and some back
                elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                {
                    $pagination.= "<a href=\"$targetpage?page=1$request\" class='page-link'> 1 </a>";
                    $pagination.= "<a href=\"$targetpage?page=2$request\" class='page-link'> 2 </a>";
                    $pagination.= "<a href=\"$targetpage?page=2$request\" class='page-link'> 3 </a>";
                    $pagination.= "...";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter$request\">$counter</a>";
                    }
                    $pagination.= "...";
                   // $pagination.= "<a href=\"$targetpage?page=$lpm1$request\" class='page-link'>$lpm1</a>";
                    $pagination.= "<a href=\"$targetpage?page=$lastpage$request\" class='page-link'>$lastpage</a>";
                }
                //close to end; only hide early pages
                else
                {
                    $pagination.= "<a href=\"$targetpage?page=1$request\" class='page-link'> 1 </a>";
                    $pagination.= "<a href=\"$targetpage?page=2$request\" class='page-link'> 2 </a>";
                    $pagination.= "<a href=\"$targetpage?page=2$request\" class='page-link'> 3 </a>";
                    $pagination.= "...";
                    for ($counter = $lastpage - (1 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current page-link\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter$request\" class='page-link'>$counter</a>";
                    }
                }
            }

            //next button




            if ($page < $counter - 1)
                $pagination.= "<a href=\"$targetpage?page=$next$request\" > <i class=\"fa fa-chevron-right page-link\" aria-hidden=\"true\"></i></a>";
            else
                $pagination.= "<span class=\"disabled\" >  <i class=\"fa fa-chevron-right page-link\" aria-hidden=\"true\"></i></span>";
            $pagination.= "</div>\n";
        }
    }
    else {

        //$pagination="<center><h5><i>No Records found...</i></h5></center>";
        $pagination="<a href=\"$targetpage?page=1\" class=' page-link'><i class=\"fa fa-chevron-left page-link\"></i> 1 <i class=\"fa fa-chevron-right page-link\"></i></a>";

    }
    $record = array(
        "pagination" => $pagination,
        "result" => $result,
        "numpage" => $total_pages,
        "start" => $start+1,
        "end" => $start+$limit
    );
    return $record;
}

function send_phpmail( $toname, $to ,$fromname, $from , $subject, $body )
{
    global $mailsetting;

    if(empty($from))
    {

        $fromname = $mailsetting['defaultfromname'];
        $from = $mailsetting['defaultfromemail'];
    }
    if(empty($to))
    {
        $toname = $mailsetting['defaulttoname'];
        $to = $mailsetting['defaulttoemail'];
    }
    $cc = $mailsetting['defaultccemail'];
    $header = "From: $fromname <$from> \r\n";
    if(!empty($cc))
    {
        $header .= "Cc: $cc \r\n";
    }

    $header .= 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    //send mail
    if(mail( $to, $subject, $body, $header))
    {
        return true;
    }
    else
    {
        return false;
    }

}

function Pagination2($db,$sql,$rpage,$req,$limit,$cid)
{
    $adjacents = 3;
    //$query = "SELECT COUNT(*) as num FROM $table";
    $prdsql="set @num = 0, @type = '';";
    //echo $sql;
    $query106 = mysqli_query($db,$prdsql);
    $query106 = mysqli_query($db,$sql);
    //printf("Errormessage: %s\n", mysqli_error($db));
    //var_dump($query106);
    $total_pages = mysqli_num_rows($query106);
    //var_dump($total_pages);
    //$total_pages = $total_pages['num'];

    /* Setup vars for query. */
    $targetpage = $rpage;    //your file name  (the name of this file)
    //$limit = 10;                                //how many items to show per page
    //$page = $_GET['page'];
    $page = isset($_GET['page'])?$_GET['page']:0;
   // var_dump($_REQUEST);
    if($page)
        $start = ($page - 1) * $limit;          //first item to display on this page
    else
        $start = 0;                             //if no page var is given, set start to 0

    /* Get data. */
    $Pqry=$sql." LIMIT $start, $limit";
   // echo $Pqry;
    //$result = mysqli_query($db,$prdsql);
    $result = mysqli_query($db,$Pqry);
    // printf("Errormessage: %s\n", mysqli_error($db));

    /* Setup page vars for display. */
    if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
    $prev = $page - 1;                          //previous page is page - 1
    $next = $page + 1;                          //next page is page + 1
    $lastpage = ceil($total_pages/$limit);      //lastpage is = total pages / items per page, rounded up.
    $lpm1 = $lastpage - 1;
    if(mysqli_num_rows($result)>0)
    {
        $pagination = $request = "";
        if(isset($req) && !empty($req))
        {
            $request='&'.$req;
        }
        if($lastpage > 1)
        {
            $pagination .= "<div class=\"pagination\">";
            //previous button
            if ($page > 1)
                $pagination.= "<a href=\"$targetpage?page=$prev$request&id=$cid\"><i class=\"fa fa-chevron-left page-link\" aria-hidden=\"true\"></i> </a>";
            else
                $pagination.= "<span class=\"disabled\"><i class=\"fa fa-chevron-left page-link\" aria-hidden=\"true\"></i> </span>";

            //pages
            if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
            {
                for ($counter = 1; $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current page-link\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter$request&id=$cid\" class='page-link'>$counter</a>";
                }
            }
            elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
            {
                //close to beginning; only hide later pages
                if($page < 1 + ($adjacents * 2))
                {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current page-link \">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter$request&id=$cid\" class='page-link'>$counter</a>";
                    }
                    $pagination.= "...";
                    $pagination.= "<a href=\"$targetpage?page=$lpm1$request&id=$cid\">$lpm1</a>";
                    $pagination.= "<a href=\"$targetpage?page=$lastpage$request&id=$cid\">$lastpage</a>";
                }
                //in middle; hide some front and some back
                elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                {
                    $pagination.= "<a href=\"$targetpage?page=1$request&id=$cid\" class='page-link'> 1 </a>";
                    $pagination.= "<a href=\"$targetpage?page=2$request&id=$cid\" class='page-link'> 2 </a>";
                    $pagination.= "<a href=\"$targetpage?page=2$request&id=$cid\" class='page-link'> 3 </a>";
                    $pagination.= "...";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter$request&id=$cid\">$counter</a>";
                    }
                    $pagination.= "...";
                    $pagination.= "<a href=\"$targetpage?page=$lpm1$request&id=$cid\" class='page-link'>$lpm1</a>";
                    $pagination.= "<a href=\"$targetpage?page=$lastpage$request&id=$cid\" class='page-link'>$lastpage</a>";
                }
                //close to end; only hide early pages
                else
                {
                    $pagination.= "<a href=\"$targetpage?page=1$request&id=$cid\" class='page-link'> 1 </a>";
                    $pagination.= "<a href=\"$targetpage?page=2$request&id=$cid\" class='page-link'> 2 </a>";
                    $pagination.= "<a href=\"$targetpage?page=2$request&id=$cid\" class='page-link'> 3 </a>";
                    $pagination.= "...";
                    for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current page-link\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter$request&id=$cid\" class='page-link'>$counter</a>";
                    }
                }
            }

            //next button




            if ($page < $counter - 1)
                $pagination.= "<a href=\"$targetpage?page=$next$request&id=$cid\" > <i class=\"fa fa-chevron-right page-link\" aria-hidden=\"true\"></i></a>";
            else
                $pagination.= "<span class=\"disabled\" >  <i class=\"fa fa-chevron-right page-link\" aria-hidden=\"true\"></i></span>";
            $pagination.= "</div>\n";
        }
    }
    else {

        //$pagination="<center><h5><i>No Records found...</i></h5></center>";
        $pagination="<a href=\"$targetpage?page=1&id=$cid\" class=' page-link'><i class=\"fa fa-chevron-left page-link\"></i> 1 <i class=\"fa fa-chevron-right page-link\"></i></a>";

    }
    $record = array(
        "pagination" => $pagination,
        "result" => $result,
        "numpage" => $total_pages,
        "start" => $start+1,
        "end" => $start+$limit
    );
    return $record;
}

//calculate weeks and date between to dates
function diff_in_weeks_and_days($from, $to) {
    $day   = 24 * 3600;
    $from  = strtotime($from);
    $to    = strtotime($to) + $day;
    $diff  = abs($to - $from);
    $weeks = floor($diff / $day / 7);
    $days  = $diff / $day - $weeks * 7;
    $out   = array();
    if ($weeks) $out[] = "$weeks Week" . ($weeks > 1 ? 's' : '');
    if ($days)  $out[] = "$days Day" . ($days > 1 ? 's' : '');
    return implode(', ', $out);
}

//check url
function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}


//Get time ago added on 18-07-2018 by vinay jaiswal
function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
        30 * 24 * 60 * 60       =>  'month',
        24 * 60 * 60            =>  'day',
        60 * 60                 =>  'hour',
        60                      =>  'minute',
        1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return ' ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}


function expire_time_ago( $time )
{
    $time_difference = $time - time();

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
        30 * 24 * 60 * 60       =>  'month',
        24 * 60 * 60            =>  'day',
        60 * 60                 =>  'hour',
        60                      =>  'minute',
        1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'in  ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ';
        }
    }
}





function getLang($value,$column,$lang_column,$table){
    global $db;
    if(isset($_SESSION['Language']) && $_SESSION['Language'] == 'es_ES'){
        $lang = $lang_column.'_es';
    }
    else if(isset($_SESSION['Language']) && $_SESSION['Language'] == 'de_DE'){
        $lang = $lang_column.'_de';
    }
    else{
        $lang = $lang_column;
    }
    
    $sql = "SELECT $lang FROM $table WHERE $column = '$value'";
    $query = mysqli_query($db,$sql) or die(mysqli_error($db));
    $row = mysqli_fetch_assoc($query);
    return $row[$lang];
}





?>





