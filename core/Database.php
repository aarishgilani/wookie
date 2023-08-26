<?php

class Database {
     
    public $connection;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=wookie;charset=utf8mb4';

        $this->connection = new PDO($dsn, 'root', '');
    }

    public function query()
    {
        $statement = $this->connection->prepare('select * from notes');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
}