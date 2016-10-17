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

       //print_r(Product::getAll($session));
        print_r(Product::getById($session,1));

      //  print_r(ProductCategory::getAll($session));
    //   print_r(ProductCategory::getById($session,1));

    }
}

(new example())->work();


?>