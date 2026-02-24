<?php

use Core\Database;

class User{
    
    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function find($email){
        
        $query = "SELECT * FROM users WHERE email = :email";

        $result = $this->db->query($query, ['email' => $email])->find();

        if(!$result){

        }
    }
}