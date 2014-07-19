<?php
$redirectUrl    = 'http://www.myapp.com/oauth_callback';
$authorizeUrl   = 'http://alchemy1.nationbuilder.com/IGrantType.php';
$authUrl = $client->getAuthenticationUrl($authorizeUrl, $redirectUrl);
echo $authUrl;
echo 'hellodear';
?>
