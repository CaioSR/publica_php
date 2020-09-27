<?php
namespace Main\Dao;
use Main\DaoInterfaces\GameDaoInterface;
use Main\Models\Game;

class GameDaoMySql implements GameDaoInterface {
    private $pdo;

    public function __construct($driver)
    {
        $this->pdo = $driver;
    }

    public function store(Game $game)
    {

    }

    public function find(int $id)
    {

    }

    public function fetchAll(int $season_id)
    {
        $games = [];

        $sql = $this->pdo->prepare('SELECT * FROM games WHERE season_id = :season_id');
        $sql->bindValue(':season_id', $season_id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach ($data as $item) {
                $game = new Game(
                    $item['season_id'],
                    $item['score'],
                    $item['id']
                );
                $games[] = $game;
            }
        }

        return $games;
    }

    public function update(Game $game)
    {

    }

    public function delete(int $id)
    {

    }
}