<?php
require_once('../DaoInterfaces/GameDaoInterface.php');

class GameDaoMySql implements GameDaoInterface 
{
    private PDO $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function store(Game $game)
    {

    }

    public function find(int $id)
    {

    }

    public function findAll()
    {

    }

    public function update(Game $game)
    {

    }

    public function delete(int $id)
    {

    }
}