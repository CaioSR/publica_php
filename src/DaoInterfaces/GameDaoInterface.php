<?php
namespace Main\DaoInterfaces;
use Main\Models\Game;

Interface GameDaoInterface 
{
    public function store(Game $game);
    public function find(int $id);
    public function fetchAll();
    public function update(Game $game);
    public function delete(int $id);
}