<?php
namespace Main\Models;

/*
* Modelo de jogo para armazenamento e retirada do banco
*/

class Game {
    private $id;
    private $season_id;
    private $score;

    public function __construct(int $season_id, int $score, int $id = null) 
    {
        $this->id = $id;
        $this->season_id = $season_id;
        $this->score = $score;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSeasonId()
    {
        return $this->season_id;
    }

    public function getScore()
    {
        return $this->score;
    }
}