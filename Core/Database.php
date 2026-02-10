<?php

namespace Core;

use PDO; 


class Database{
    
    //becomes new PDO aka php data object
    public $connection;

    //
    protected $statement;

    public function __construct($config, $username = 'root', $password ='')
    {   

        //build out connection string
        $dsn = "mysql:" . http_build_query($config, '', ';');

        //Estabhlish how you want the data and how your connecting to db
        $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        
    }


    public function query($query, $params = []){


        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;

    }

    public function getAll(){
        return $this->statement->fetchAll();
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail(){

        $result = $this->find();

        if(!$result){
            abort();
        }

        return $result;
    }

    
}