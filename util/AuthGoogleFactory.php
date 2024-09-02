<?php

require_once './lib/vendor/autoload.php';

class AuthGoogleFactory
{


    public static function getInstance()
    {

        $clientID = "399901043453-j0eua4324s0365lsqs3tkq8i39dqi7g5.apps.googleusercontent.com";
        $clientSecret = "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";
        $redirectUri = "http://localhost:81/chantilly/web/";



        $client = new Google_Client();

        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");


        return $client;;
    }
}
