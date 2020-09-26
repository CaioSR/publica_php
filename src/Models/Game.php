<?php

class Game 
{
    private int $score;

    public function __construct(int $score) 
    {
        $this->score = $score;
    }

    public function getScore()
    {
        return $this->score;
    }
}