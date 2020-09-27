<?php
namespace Main\Models;
use Main\Models\Game;

class Season {
    private $id;
    private $name;
    private $maxScore;
    private $minScore;
    private $maxScoreCounter;
    private $minScoreCounter;

    public function __construct(String $name, int $maxScore = 0, int $minScore = 0, int $maxScoreCounter = 0, int $minScoreCounter = 0, int $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->maxScore = $maxScore;
        $this->minScore = $minScore;
        $this->maxScoreCounter = $maxScoreCounter;
        $this->minScoreCounter = $minScoreCounter;
    }

    public function addGame(Game $game) 
    {
        $this->verifyScore($game->getScore());
    }

    public function verifyScore(int $score) 
    {
        (($score > $this->maxScore) ? $this->updateMaxScore($score) : ($score < $this->minScore)) ? $this->updateMinScore($score) : '';
        ($this->minScore == 0) ? $this->minScore = $score : '';
    }

    private function updateMaxScore(int $score) 
    {
        ($this->maxScore > 0) ? $this->maxScoreCounter++ : '';
        $this->maxScore = $score;
    }

    private function updateMinScore(int $score) 
    {
        ($this->minScore > 0) ? $this->minScoreCounter++ : '';
        $this->minScore = $score;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMaxScore()
    {
        return $this->maxScore;
    }

    public function getMinScore()
    {
        return $this->minScore;
    }

    public function getMaxScoreCounter()
    {
        return $this->maxScoreCounter;
    }

    public function getMinScoreCounter()
    {
        return $this->minScoreCounter;
    }
}