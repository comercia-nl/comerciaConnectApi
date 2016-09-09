<?php
namespace comerciaConnect\logic;
class Product{
    var $id;
    var $name;
    var $quantity;
    var $price;
    var $url;
    var $descriptions;

    private $session;
    function __construct($session)
    {
        $this->session=$session;
    }

    function save(){
        $this->session->post("product/save",$this);
    }
}