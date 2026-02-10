<?php

namespace Models;

use Core\Database;




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

    public function store(){

        //Use prepared statements and parametrized queires, prevent sql injection
        $query = "INSERT INTO products(name, sku, category, type, quantity, image_url) VALUES(:name, :category, :type, :quantity, :image_url)";



    }


}