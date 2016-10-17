<?php
use comerciaConnect\Api;
use comerciaConnect\logic\Product;
use comerciaConnect\logic\ProductCategory;
use comerciaConnect\logic\ProductDescription;
use comerciaConnect\logic\Website;

include_once("config.php");
include_once("../api.php");

class example
{
    function work()
    {
//setup session
        $api = new Api(API_AUTH_URL, API_URL);
        $session = $api->createSession(API_KEY);


//get website information
        $website = Website::getWebsite($session);

        print_r($website);

    }
}



(new example())->work();
    ?>