<?php
namespace Models;
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
            return true;
        }

        return false;
    }
    
    /**
     * store
     * Store new user with hashed bcrypt password
     * @param  mixed $email
     * @param  mixed $password
     * @return void
     */
    public function store($email, $password){
        $query = "INSERT INTO users (email, password) VALUES (:email, :password)";

        $this->db->query($query, [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT),
        ]);
    }
}