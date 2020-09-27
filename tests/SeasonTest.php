<?php

use PHPUnit\Framework\TestCase;
use Main\Models\Season;
use Main\Models\Game;

class SeasonTest extends TestCase {

    public function testScoreUpdate()
    {
        $season = new Season('Verão 2020', 0, 0, 0, 0, 1);
        $game1 = new Game(1, 20);
        $game2 = new Game(1, 10);
        $game3 = new Game(1, 5);
        $game4 = new Game(1, 25);
        
        $season->addGame($game1);
        $this->assertEquals(20, $season->getMaxScore());
        $this->assertEquals(20, $season->getMinScore());

        $season->addGame($game2);
        $this->assertEquals(20, $season->getMaxScore());
        $this->assertEquals(10, $season->getMinScore());

        $season->addGame($game3);
        $this->assertEquals(20, $season->getMaxScore());
        $this->assertEquals(5, $season->getMinScore());

        $season->addGame($game4);
        $this->assertEquals(25, $season->getMaxScore());
        $this->assertEquals(5, $season->getMinScore());
    }

    public function testScoreUpdateCounter()
    {
        $season = new Season('Verão 2020', 0, 0, 0, 0, 1);
        $game1 = new Game(1, 20);
        $game2 = new Game(1, 10);
        $game3 = new Game(1, 5);
        $game4 = new Game(1, 25);
        
        $season->addGame($game1);
        $this->assertEquals(0, $season->getMaxScoreCounter());
        $this->assertEquals(0, $season->getMinScoreCounter());

        $season->addGame($game2);
        $this->assertEquals(0, $season->getMaxScoreCounter());
        $this->assertEquals(1, $season->getMinScoreCounter());

        $season->addGame($game3);
        $this->assertEquals(0, $season->getMaxScoreCounter());
        $this->assertEquals(2, $season->getMinScoreCounter());

        $season->addGame($game4);
        $this->assertEquals(1, $season->getMaxScoreCounter());
        $this->assertEquals(2, $season->getMinScoreCounter());
    }
}