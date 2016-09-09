<?php
include_once("config.php");
include_once("../api.php");

//setup session
$api = new \ComerciaConnect\Api(API_AUTH_URL, API_URL);
$session = $api->createSession(API_KEY);


//get website information
$website = \comerciaConnect\logic\Website::getWebsite($session, "mysite");

//add/update a product
$product = new \comerciaConnect\logic\Product($session);
$product->name = "lol";
$product->quantity = 100;
$product->price = 10.50;
$product->url = "http://producturl.nl";

$product->descriptions=array(
    new \comerciaConnect\logic\ProductDescription("en-gb","lol","and a description"),
    new \comerciaConnect\logic\ProductDescription("nl-nl","lol","en een description")
);


$product->save();


?>