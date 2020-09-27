<?php
namespace Main\Dao;
use Main\DaoInterfaces\GameDaoInterface;
use Main\Models\Game;

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

    public function fetchAll()
    {

    }

    public function update(Game $game)
    {

    }

    public function delete(int $id)
    {

    }
}