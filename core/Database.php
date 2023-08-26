<?php

class Database {
     
    public $connection;
    public $statement;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=wookie;charset=utf8mb4';

        $this->connection = new PDO($dsn, 'root', '');
    }

    public function query($query, $param=[])
    {

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($param);

        return $this;

    }
    
    public function findAllOrFail($type = PDO::FETCH_ASSOC)
    {
        $result = $this->statement->fetchAll($type);

        if(! empty($result)) {
            return $result;
        }
        else {
            return array( ['note' => 'Data not found, check execution query.'] );
        }
            
    }

    public function findOrFail($type = PDO::FETCH_ASSOC)
    {

        $result = $this->statement->fetch($type);

        if(! empty($result)){
            return $result;
        }
        else{
            return ['error' => 'Query execution failed, check Database class'];
        }
    }

}