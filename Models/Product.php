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
        
    /**
     * allProducts
     *
     * @return void
     */
    public function allProducts(){

        return $this->db->query("SELECT * FROM products")->getAll();
    }
        
    /**
     * 
     * Find one specific record, aborts to 404 if none found
     * @param  mixed $id
     * @return void
     */
    public function find($id){
        
        $query = "SELECT * FROM products where id = ?";

        return $this->db->query($query, [$id])->findOrFail(403);
        
    }


        
    /**
     * store
     * Put new product into db but first follows business logic 
     * @param  mixed $values
     * @return void
     */
    public function store($values){

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

    public function edit($values){
        $id = (int)$values['id'];
        
        // check if skus exist excluding the current record... cant use the regular skuExist()
        $checkQuery = "SELECT id FROM products WHERE sku = :sku AND id != :id";
        $existing = $this->db->query($checkQuery, [
            'sku' => $values['sku'],
            'id' => $id
        ])->find();
        
        //Error handle sku logic
        if($existing){
            return [
                'success' => false,
                'error' => 'SKU already exists in inventory. Please enter a new SKU',
            ];
        }

        // UPDATE 
        $query = "UPDATE products 
                SET name = :name, 
                    sku = :sku, 
                    category = :category, 
                    type = :type, 
                    quantity = :quantity, 
                    image_url = :image_url, 
                    updated_at = NOW()
                WHERE id = :id";
        
        $this->db->query($query, [
            'name' => $values['name'],
            'sku' => $values['sku'],
            'category' => $values['category'],
            'type' => $values['type'],
            'quantity' => $values['quantity'],
            'image_url' => $values['image_url'],
            'id' => $id
        ]);

        return [
            'success' => true,
        ];
    }

    public function destroy($id){

        // No need to manually check with trusty find or fail 
        $this->db->query("SELECT * FROM products WHERE id = ?", [(int)$id])->findOrFail();
        
        // If we get here, product exists, so delete it
        $this->db->query("DELETE FROM products WHERE id = ?", [(int)$id]);
        
        return true;
    }

    
    /**
     * skuExists
     * 
     * Check if sku already in inventory 
     * @param  mixed $sku
     * @return void
     */
    public function skuExists($sku)
    {
        $query = "SELECT COUNT(*) AS count FROM products WHERE sku = :sku";

        $result = $this->db->query($query, ['sku' => $sku])->find();

       //if higher than 1 theres a match and that breaks the business logic
        return $result['count'] > 0;
    }

    


}