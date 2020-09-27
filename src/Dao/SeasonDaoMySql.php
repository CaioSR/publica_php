<?php
namespace Main\Dao;
use Main\DaoInterfaces\SeasonDaoInterface;
use Main\Dao\GameDaoMySql;
use Main\Models\Season;

/*
* Implementação da interface SeasonDao para bancos MySql
*/

class SeasonDaoMySql implements SeasonDaoInterface {
    private $pdo;

    /*
    * Recebe uma conexão de banco
    */
    public function __construct($driver)
    {
        $this->pdo = $driver;
    }

    /*
    * Armazena temporada no banco
    */
    public function store(Season $season)
    {
        $sql = $this->pdo->prepare('INSERT INTO seasons (name) VALUES (:name)');
        $sql->bindValue(':name', $season->getName());
        $sql->execute();
    }

    /*
    * Busca e retorna uma temporada do banco com base no nome
    */
    public function findByName(String $name)
    {
        $sql = $this->pdo->prepare('SELECT * FROM seasons WHERE name = :name');
        $sql->bindValue(':name', $name);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $season = new Season($data['name'], $data['maxScore'], $data['minScore'], $data['maxScoreCounter'], $data['minScoreCounter'], $data['id']);
            return $season;
        }
    }
    
    /*
    * Busca e retorna uma temporada do banco com base no id
    */
    public function find(int $id)
    {
        $sql = $this->pdo->prepare('SELECT * FROM seasons WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $season = new Season($data['name'], $data['maxScore'], $data['minScore'], $data['maxScoreCounter'], $data['minScoreCounter'], $data['id']);
            return $season;
        }

    }

    /*
    * Retorna todas as temporadas do banco
    */
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

    /*
    * Atualiza uma temporada no banco
    */
    public function update(Season $season)
    {
        $sql = $this->pdo->prepare(
            "UPDATE seasons SET 
            name = :name, 
            maxScore = :maxScore, 
            minScore = :minScore,
            maxScoreCounter = :maxScoreCounter, 
            minScoreCounter = :minScoreCounter 
            WHERE id = :id"
        );
        $sql->bindValue(':name', $season->getName());
        $sql->bindValue(':maxScore', $season->getMaxScore());
        $sql->bindValue(':minScore', $season->getMinScore());
        $sql->bindValue(':maxScoreCounter', $season->getMaxScoreCounter());
        $sql->bindValue(':minScoreCounter', $season->getMinScoreCounter());
        $sql->bindValue(':id', $season->getId());
        $sql->execute();
    }

    /*
    * Deleta uma temporada do banco
    */
    public function delete(int $id)
    {
        $sql = $this->pdo->prepare('DELETE FROM seasons WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        $sql = $this->pdo->prepare('DELETE FROM games WHERE season_id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}