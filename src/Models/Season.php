<?php
require_once('Game.php');

class Season 
{
    //private Array $games;
    private int $maxScore;
    private int $minScore;
    private int $maxScoreCounter;
    private int $minScoreCounter;

    public function __contruct() 
    {

    }

    public function __construct(int $maxScore, int $minScore, int $maxScoreCounter, int $minScoreCounter)
    {
        $this->maxScore = $maxScore;
        $this->minScore = $minScore;
        $this->maxScoreCounter = $maxScoreCounter;
        $this->minScoreCounter = $minScoreCounter;
    }

    public function addGame(Game $game) 
    {
        array_push($this->games, $game);
    }

    public function verifyScore(int $score) 
    {
        ($score > $this->maxScore) ? $this.updateMaxScore($score) : ($score > $this->minScore) ? $this.updateMinScore($score) : '';
    }

    private function updateMaxScore(int $score) 
    {
        $this->maxScore = $score;
        $this->maxScoreCounter++;
    }

    private function updateMinScore(int $score) 
    {
        $this->minScore = $score;
        $this->minScoreCounter++;
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
        return $this->maxScore;
    }

    public function getMinScoreCounter()
    {
        return $this->minScoreCounter;
    }
}