<?php
namespace Main\Dao;
use Main\DaoInterfaces\GameDaoInterface;
use Main\Models\Game;

/*
* Implementação da Interface GameDao para bancos MySql
*/

class GameDaoMySql implements GameDaoInterface {
    private $pdo;

    /*
    * Recebe uma conexão de banco
    */
    public function __construct($driver)
    {
        $this->pdo = $driver;
    }

    /*
    * Armazena jogo no banco
    */
    public function store(Game $game)
    {
        $sql = $this->pdo->prepare('INSERT INTO games (season_id, score) VALUES (:season_id, :score)');
        $sql->bindValue(':season_id', $game->getSeasonId());
        $sql->bindValue(':score', $game->getScore());
        $sql->execute();
    }

    /*
    * Busca e retorna um jogo no banco com base no id
    */
    public function find(int $id)
    {
        $sql = $this->pdo->prepare('SELECT * FROM games WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0){
            $data = $sql->fetch();

            $game = new Game($data['season_id'], $data['score'], $data['id']);
            return $game;
        }
    }

    /*
    * Busca e retorna uma lista de jogos no banco com base no id da temporada
    */
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
}