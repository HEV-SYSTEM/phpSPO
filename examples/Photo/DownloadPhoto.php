<?php

require_once '../vendor/autoload.php';

use Office365\Graph\GraphServiceClient;
use Office365\Runtime\Auth\OAuthTokenProvider;
use Office365\Runtime\Auth\UserCredentials;


function acquireToken()
{
    $settings = include('../../Settings.php');
    $resource = "https://graph.microsoft.com";
    $provider = new OAuthTokenProvider($settings['TenantName']);
    return $provider->acquireTokenForPassword($resource, $settings['ClientId'],
        new UserCredentials($settings['UserName'], $settings['Password']));
}

try {
    $client = new GraphServiceClient("acquireToken");

    $targetFilePath = "./myprofile.png";
    $fp = fopen($targetFilePath, 'w+');
    $client->getMe()->getPhoto()->getContent($fp)->executeQuery();
    fclose($fp);
} catch (Exception $e) {
    echo 'Error: ', $e->getMessage(), "\n";
}







