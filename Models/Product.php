<?php

namespace Models;

use Core\Database;
use PDOException;

/**
 * 
 */
class Product{

    protected $db;
    
    //All the Product object needs now is the database to grab it aka dependency injection 
    public function __construct(Database $db)
    {   
        $this->db = $db;
    }

    public function allProducts(){

        return $this->db->query("SELECT * FROM products")->getAll();
    }

        
    /**
     * store
     * Put new product into db
     * @param  mixed $values
     * @return void
     */
    public function store($values =[]){

        //Business Logic: SKUS must be unique
        if($this->skuExists($values['sku'])){
            return [
                'success' => false,
                'error' => 'SKU already exists in inventory. Please enter a new SKU',
            ];
        }

        //Use prepared statements and parametrized queires, prevent sql injection
        $query = "INSERT INTO products(name, sku, category, type, quantity, image_url) VALUES(:name, :sku, :category, :type, :quantity, :image_url)";

        $this->db->query($query, $values);

        return [
            'success' => true,
        ];

    }


    public function skuExists($sku)
    {
        $query = "SELECT COUNT(*) AS count FROM products WHERE sku = :sku";

        $result = $this->db->query($query, ['sku' => $sku])->find();

       //if higher than 1 theres a match and that breaks the business logic
        return $result['count'] > 0;
    }

    


}