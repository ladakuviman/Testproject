<?php
//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */


//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to Property Auction');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($gredirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>