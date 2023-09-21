<?php

class DB
{
    private pdo $pdo;

    public function __construct(string $host = "tobias-billen.lima-db.de", $dbname = "db_377475_15", $user = "USER377475_tp01", $pw ="c06pXd9ukXOeida")
    {
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pw);
    }


    public function select(string $query): array
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function insert(string $query): int
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $this->pdo->lastInsertId();
    }
}