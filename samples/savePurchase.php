<?php
use comerciaConnect\Api;
use comerciaConnect\logic\OrderLine;
use comerciaConnect\logic\Product;
use comerciaConnect\logic\Purchase;


include_once("config.php");
include_once("../api.php");

class Example
{
    function work()
    {
        $api = new Api(API_AUTH_URL, API_URL);
        $session = $api->createSession(API_KEY);
        $product = Product::getById($session,2);

        $orderLine = new OrderLine(array(
            "product" => $product,
            "price" => 10.50,
            "quantity" => 5,
            "tax" => 0.5,
        ));

        $purchase = new Purchase(
            $session,
            array(
                "id" => 1,
                "date" => time(),
                "status" => "processing",
                "deliveryAddress" => array(
                    "firstName" => "Mark",
                    "lastName" => "Smit",
                    "street" => "hoofdstraat",
                    "number" => "5",
                    "postalCode" => "7899ab",
                    "city" => "grollo",
                    "province" => "drenthe",
                    "country" => "Netherlands"
                ),
                "invoiceAddress" => array(
                    "firstName" => "Mark",
                    "lastName" => "Smit",
                    "street" => "hoofdstraat",
                    "number" => "5",
                    "postalCode" => "7899ab",
                    "city" => "grollo",
                    "province" => "drenthe",
                    "country" => "Netherlands"
                ),
                "orderLines"=>array($orderLine)

            )
        );

        $purchase->save();

    }
}

(new Example())->work();


?>