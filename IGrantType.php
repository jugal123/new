<?php
$redirectUrl    = 'http://www.myapp.com/oauth_callback';
$authorizeUrl   = 'https://foobar.nationbuilder.com/oauth/authorize';
$authUrl = $client->getAuthenticationUrl($authorizeUrl, $redirectUrl);
echo $authUrl;
?>
