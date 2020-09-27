<?php
namespace Main\DaoInterfaces;
use Main\Models\Season;

Interface SeasonDaoInterface 
{
    public function store(Season $season);
    public function doesExists(String $name);
    public function find(int $id);
    public function fetchAll();
    public function update(Season $season);
    public function delete(int $id);
}