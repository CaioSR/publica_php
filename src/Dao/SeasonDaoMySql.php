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

    public function store(Season $season)
    {
        $sql = $this->pdo->prepare('INSERT INTO seasons (name) VALUES (:name)');
        $sql->bindValue(':name', $season->getName());
        $sql->execute();
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
    
    public function find(int $id)
    {
        $sql = $this->pdo->prepare('SELECT * FROM seasons WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0){
            $data = $sql->fetch();

            $season = new Season($data['name'], $data['maxScore'], $data['minScore'], $data['maxScoreCounter'], $data['minScoreCounter'], $data['id']);
            return $season;
        }

        return false;
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
                    $item['minScoreCounter'],
                    $item['id']
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