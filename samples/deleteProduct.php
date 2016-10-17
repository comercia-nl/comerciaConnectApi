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

        $product=Product::getById($session,1); //making a new instance with this a specific id works too.
        $product->delete();
    }
}

(new example())->work();


?>