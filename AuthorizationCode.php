<?php
$code = '123456abcdef';
  
// generate a token response
$accessTokenUrl = 'http://alchemy1.nationbuilder.com/php';
$params = array('code' => $code, 'redirect_uri' => $redirectUrl);
$response = $client->getAccessToken($accessTokenUrl, 'authorization_code', $params);

// set the client token
$token = $response['result']['access_token'];
$client->setAccessToken($token);
?>
