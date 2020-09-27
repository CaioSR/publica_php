<?php
namespace Main\DaoInterfaces;
use Main\Models\Game;

Interface GameDaoInterface 
{
    public function store(Game $game);
    public function find(int $id);
    public function fetchAll(int $season_id);
}