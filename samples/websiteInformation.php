<?php
use comerciaConnect\Api;
use comerciaConnect\logic\Website;

include_once("config.php");
include_once("../src/api.php");

class Example
{
    function work()
    {
        //setup session
        $api = new Api(API_AUTH_URL, API_URL);
        $session = $api->createSession(API_KEY);


        //get website information
        $website = Website::getWebsite($session);

        print_r($website);


        //create a link to the comercia connect control panel without the need of logging in.
        echo $website->controlPanelUrl();

    }
}



(new Example())->work();
    ?>
