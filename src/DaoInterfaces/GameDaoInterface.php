<?php
require_once('../Models/Game.php');

Interface GameDaoInterface 
{
    public function store(Game $game);
    public function find(int $id);
    public function findAll();
    public function update(Game $game);
    public function delete(int $id);
}