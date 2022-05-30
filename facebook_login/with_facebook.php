<?php

use Facebook\Facebook;

session_start();
require "vendor/autoload.php";


$fb = new \Facebook\Facebook([
  'app_id' => '722656635739282',
  'app_secret' => '4f84e0e1e83ef8e4d123c9ca43cc1be4',
  'default_graph_version' => 'v2.10',
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/facebook/facebook_login/dash.php");

try {
    
    $accessToken = $helper->getAccessToken();

    if(isset($accessToken)) {
        $_SESSION['access_token'] = (string) $accessToken;
    }


} catch (Exception $e) {
    print $e->getTraceAsString();
}
