<?php
namespace Main\Dao;
use Main\DaoInterfaces\SeasonDaoInterface;
use Main\Models\Season;

class SeasonDaoMySql implements SeasonDaoInterface {
    private $pdo;

    public function __construct($driver)
    {
        $this->pdo = $driver;
    }

    public function doesExists(String $name)
    {
        $sql = $this->pdo->prepare('SELECT * FROM seasons WHERE name = :name');
        $sql->bindValue(':name', $name);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function store(Season $season)
    {
        $sql = $this->pdo->prepare("INSERT INTO seasons (name) VALUES (:name)");
        $sql->bindValue(':name', $season->getName());
        $sql->execute();
    }
    
    public function find(int $id)
    {

    }

    public function fetchAll()
    {
        $seasons = [];

        $sql = $this->pdo->query('SELECT * FROM seasons');
        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach ($data as $item) {
                $season = new Season(
                    $item['name'],
                    $item['maxScore'],
                    $item['minScore'],
                    $item['maxScoreCounter'],
                    $item['minScoreCounter']
                );
                $seasons[] = $season;
            }   
        }

        return $seasons;
    }

    public function update(Season $season)
    {

    }

    public function delete(int $id)
    {

    }
}