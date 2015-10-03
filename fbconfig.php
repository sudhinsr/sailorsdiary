<?php
session_start();
require_once 'src/Facebook/autoload.php';


use Facebook\Facebook;
use Facebook\FacebookResponse; 
use Facebook\GraphNodes\GraphUser;
use Facebook\Exceptions\FacebookAuthenticationException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Helpers\FacebookRedirectLoginHelper;

$fb = new Facebook([
  'app_id' => 'yor app id',
  'app_secret' => 'you app scrt',
  'default_graph_version' => 'v2.2',
  ]);



$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}



if (isset ($accessToken))
{

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name', $accessToken);
}
catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();

 $_SESSION['FULLNAME']=$user['name'];
 $_SESSION['FBID']= $user['id'];
    header("Location: index.php");
}
else
{

    
$permissions = ['email']; // optional
$loginUrl = $helper->getLoginUrl('http://your host/fbconfig.php', $permissions);

header("Location: ".$loginUrl);
}
?>
