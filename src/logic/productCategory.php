<?php
namespace comerciaConnect\logic;

/**
 * This class represents a category which can contain categorys or subcategories
 * @author Mark Smit <m.smit@comercia.nl>
 * @param array $data The data to initialize the address with
 * @param Session $session The session object to connect with Comercia Connect
 */
class ProductCategory
{
    /** @var string */
    var $id;
    /** @var string */
    var $name;
    /** @var int | timestamp */
    var $lastUpdate = 0;

    private $session;

    function __construct($session, $data = [])
    {
        $this->session = $session;

        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }


    /**
     * Saves the category
     * @return bool Indicates if the category is successfully saved
     */
    function save()
    {
        if ($this->session) {
            $this->session->post("productCategory/save", $this);
        }

        return false;
    }


    /**
     * Gets a category from Comercia Connect
     * @param Session $session
     * @param string $id
     * @return Category
     */
    static function getById($session, $id)
    {
        if ($session) {
            $data = $session->get("productCategory/getById/" . $id);

            return new ProductCategory($session, $data["data"]);
        }

        return false;
    }

    /**
     * Gets all categories from Comercia Connect
     * @param Session $session
     * @return Category[]
     */
    static function getAll($session)
    {
        $data = $session->get("productCategory/getAll");
        $result = [];
        foreach ($data["data"] as $product) {
            $result[] = new ProductCategory($product);
        }

        return $result;
    }

    /**
     * maps the hyrarchy of categories.
     * @param Session $session
     * @param String[String]|Key value pairs of category id
     */
    static function updateStructure($session,$maps){
        $requestData=["maps"=>$maps];
        $session->post("productCategory/updateStructure",$requestData);
    }


    /**
     * Saves categorys in bulk
     * @param Session $session
     * @param Category[] $data
     * @return bool Indicates if the category is successfully saved
     */
    static function saveBatch($session,$data){
        $requestData=["data"=>$data];
        $session->post("productCategory/saveBatch",$requestData);
    }


}