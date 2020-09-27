<?php
namespace Main\Models\Game;

class Game 
{
    private $score;

    public function __construct(int $score) 
    {
        $this->score = $score;
    }

    public function getScore()
    {
        return $this->score;
    }
}