<?php

class Database {
     
    public $connection;
    public $statement;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=wookie;charset=utf8mb4';

        $this->connection = new PDO($dsn, 'root', '');
    }

    public function query($query)
    {

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute();

        return $this;

    }
    
    public function findOrFail($type = PDO::FETCH_ASSOC)
    {
        $result = $this->statement->fetchAll($type);

        if(! empty($result)) {
            return $result;
        }
        else {
            return array( ['note' => 'Data not found, check execution query.'] );
        }
            
    }

}