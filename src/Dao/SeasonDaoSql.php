<?php
require_once('../DaoInterfaces/SeasonDaoInterface.php');

class SeasonDaoMySql implements SeasonDaoInterface 
{
    private PDO $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function store(Season $season)
    {

    }
    
    public function find(int $id)
    {

    }

    public function findAll()
    {

    }

    public function update(Season $season)
    {

    }

    public function delete(int $id)
    {

    }
}