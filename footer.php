<?php
$baseApiUrl = 'https://Alchemy1.nationbuilder.com';
$client->setAccessToken($token);
$response = $client->fetch($baseApiUrl . '/api/v1/people');
print_r($response);
?>
